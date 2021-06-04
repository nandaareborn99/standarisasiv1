<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function show()
    {
        $data = [
            'katalog' => \App\Models\Katalog::paginate(10)
        ];
        return view('admin.master.katalog.show', $data);
    }
    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/master/katalog/proses'),
            ]
        ];
        return view('admin.master.katalog.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'kode_katalog' => 'required',
            'nama_katalog' => 'required',
            
        ]);

        \App\Models\Katalog::create($request->all());

        return redirect('admin/master/katalog')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Katalog::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/master/katalog/' . $id . '/proses'),
            ]
        ];
        return view('admin.master.katalog.form', $data);
    }
    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'kode_katalog' => 'required',
            'nama_katalog' => 'required',
        ]);

        \App\Models\Katalog::findOrFail($id)->update($request->all());
        return redirect('admin/master/katalog')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Katalog::findOrFail($id)->delete();
        return redirect('admin/master/katalog')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
