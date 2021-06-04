<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function show()
    {
        $data = [
            'bidang' => \App\Models\Bidang::paginate(10)
        ];
        return view('admin.master.bidang.show', $data);
    }
    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/master/bidang/proses'),
            ]
        ];
        return view('admin.master.bidang.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'kode_katalog' => 'required',
            'nomor_bidang' => 'required',
            'nama_bidang' => 'required',
        ]);

        \App\Models\Bidang::create($request->all());

        return redirect('admin/master/bidang')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Bidang::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/master/bidang/' . $id . '/proses'),
            ]
        ];
        return view('admin.master.bidang.form', $data);
    }
    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'kode_katalog' => 'required',
            'nomor_bidang' => 'required',
            'nama_bidang' => 'required',
        ]);

        \App\Models\Bidang::findOrFail($id)->update($request->all());
        return redirect('admin/master/bidang')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Bidang::findOrFail($id)->delete();
        return redirect('admin/master/bidang')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
}
