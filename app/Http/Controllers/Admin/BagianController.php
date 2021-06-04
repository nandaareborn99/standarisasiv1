<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BagianController extends Controller
{
    public function show()
    {
        $data = [
            'bagian' => \App\Models\Bagian::paginate(10)
        ];
        return view('admin.master.bagian.show', $data);
    }
    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/master/bagian/proses'),
            ]
        ];
        return view('admin.master.bagian.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'kode_divisi' => 'required',
            'kode_bagian' => 'required',
            'nama_bagian' => 'required',
            'pref_bagian' => 'required',
            'level_bagian' => 'required',
            
        ]);

        \App\Models\Bagian::create($request->all());

        return redirect('admin/master/bagian')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Bagian::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/master/bagian/' . $id . '/proses'),
            ]
        ];
        return view('admin.master.bagian.form', $data);
    }
    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'kode_divisi' => 'required',
            'kode_bagian' => 'required',
            'nama_bagian' => 'required',
            'pref_bagian' => 'required',
            'level_bagian' => 'required',
        ]);

        \App\Models\Bagian::findOrFail($id)->update($request->all());
        return redirect('admin/master/bagian')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Bagian::findOrFail($id)->delete();
        return redirect('admin/master/bagian')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
