<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function show()
    {
        $data = [
            'divisi' => \App\Models\Divisi::paginate(10)
        ];
        return view('admin.master.divisi.show', $data);
    }

    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/master/divisi/proses'),
            ]
        ];
        return view('admin.master.divisi.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'kode_divisi' => 'required',
            'nama_divisi' => 'required',
            'pref_divisi' => 'required',
        ]);

        \App\Models\Divisi::create($request->all());

        return redirect('admin/master/divisi')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Divisi::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/master/divisi/' . $id . '/proses'),
            ]
        ];
        return view('admin.master.divisi.form', $data);
    }

    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'kode_divisi' => 'required',
            'nama_divisi' => 'required',
            'pref_divisi' => 'required',
        ]);

        \App\Models\Divisi::findOrFail($id)->update($request->all());
        return redirect('admin/master/divisi')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Divisi::findOrFail($id)->delete();
        return redirect('admin/master/divisi')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
