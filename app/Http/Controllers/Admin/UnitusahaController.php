<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnitusahaController extends Controller
{
    public function show()
    {
        $data = [
            'unitusaha' => \App\Models\Unitusaha::paginate(10)
        ];
        return view('admin.master.unitusaha.show', $data);
    }
    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/master/unitusaha/proses'),
            ]
        ];
        return view('admin.master.unitusaha.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'kode_unit' => 'required',
            'kode_jabatan' => 'required',
            'nama_unit' => 'required',
            'keterangan' => 'required',
            'norma_jmlh' => 'required',
            
        ]);

        \App\Models\Unitusaha::create($request->all());

        return redirect('admin/master/unitusaha')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Unitusaha::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/master/unitusaha/' . $id . '/proses'),
            ]
        ];
        return view('admin.master.unitusaha.form', $data);
    }
    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'kode_unit' => 'required',
            'kode_jabatan' => 'required',
            'nama_unit' => 'required',
            'keterangan' => 'required',
            'norma_jmlh' => 'required',
            
        ]);

        \App\Models\Unitusaha::findOrFail($id)->update($request->all());
        return redirect('admin/master/unitusaha')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Unitusaha::findOrFail($id)->delete();
        return redirect('admin/master/unitusaha')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
