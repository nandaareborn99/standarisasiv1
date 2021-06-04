<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    public function show()
    {
        $data = [
            'kepegawaian' => \App\Models\Kepegawaian::paginate(10)
        ];
        return view('admin.kepegawaian.show', $data);
    }

    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/kepegawaian/proses'),
            ]
        ];
        return view('admin.kepegawaian.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'kode_bagian' => 'required',
            'jenkel' => 'required',
            'kode_jabatan' => 'required',
            'organization' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'kriteria' => 'required',
            'status_karyawan' => 'required',
            'pensiun' => 'required',

        ]);

        \App\Models\Kepegawaian::create($request->all());

        return redirect('admin/kepegawaian')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Kepegawaian::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/kepegawaian/' . $id . '/proses'),
            ]
        ];
        return view('admin.kepegawaian.form', $data);
    }

    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'kode_bagian' => 'required',
            'nama_bagian' => 'required',
            'jenkel' => 'required',
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required',
            'organization' => 'required',
            'tgl_lahir' => 'required',
            'umur' => 'required',
            'kriteria' => 'required',
            'status_karyawan' => 'required',
            'pensiun' => 'required',
        ]);

        \App\Models\Kepegawaian::findOrFail($id)->update($request->all());
        return redirect('admin/kepegawaian')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Kepegawaian::findOrFail($id)->delete();
        return redirect('admin/kepegawaian')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
