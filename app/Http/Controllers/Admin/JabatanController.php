<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    
    public function show()
    {
        $data = [
            'jabatan' => \App\Models\Jabatan::paginate(10)
        ];
        return view('admin.master.jabatan.show', $data);
    }

    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/master/jabatan/proses'),
            ]
        ];
        return view('admin.master.jabatan.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
        	'nama_jabatan' => 'required',
            'kode_jabatan' => 'required'
            
        ]);

        \App\Models\Jabatan::create($request->all());

        return redirect('admin/master/jabatan')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Jabatan::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/master/jabatan/' . $id . '/proses'),
            ]
        ];
        return view('admin.master.jabatan.form', $data);
    }

    public function prosesUbah(Request $request, $id)
    {
        $request->validate([

            'nama_jabatan' => 'required',
            'kode_jabatan' => 'required'
            
        ]);

        \App\Models\Jabatan::findOrFail($id)->update($request->all());
        return redirect('admin/master/jabatan')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Jabtan::findOrFail($id)->delete();
        return redirect('admin/master/jabatan')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
