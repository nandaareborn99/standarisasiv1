<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    public function show()
    {
        $data = [
            'keterangan' => \App\Models\Keterangan::paginate(10)
        ];
        return view('admin.keterangan.show', $data);
    }

    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/keterangan/proses'),
            ]
        ];
        return view('admin.keterangan.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([

            'keterangan'=>'required'

        ]);

        \App\Models\Keterangan::create($request->all());

        return redirect('admin/keterangan')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Keterangan::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/keterangan/' . $id . '/proses'),
            ]
        ];
        return view('admin.keterangan.form', $data);
    }

    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'keterangan'=>'required'
        ]);

        \App\Models\Keterangan::findOrFail($id)->update($request->all());
        return redirect('admin/keterangan')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Keterangan::findOrFail($id)->delete();
        return redirect('admin/keterangan')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
