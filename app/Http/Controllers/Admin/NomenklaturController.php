<?php

namespace App\Http\Controllers\admin;
use App\Exports\NomenklaturExport;
use App\Imports\NomenklaturImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\Nomenklatur;
use Illuminate\Http\Request;


class NomenklaturController extends Controller
{
    public function show()
    {
        $data = [
            'nomenklatur' => \App\Models\Nomenklatur::paginate(10)
        ];
        return view('admin.nomenklatur.show', $data);
    }

    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/nomenklatur/proses'),
            ]
        ];
        return view('admin.nomenklatur.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'kode_bagian' => 'required',
            'kode_jabatan' => 'required',
            'level_bod' =>'required',
            'standar_formasi'=>'required',
            'kode_unit'=>'required',
            'keterangan'=>'required',
            'norma_jmlh'=>'required',
            'standar_status'=>'required'
        ]);

        // dd($request->all());

        \App\Models\Nomenklatur::create($request->all());

        return redirect('admin/nomenklatur')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function formUbah($id)
    {
        $data = [
            'title' => 'Ubah',
            'form' => [
                'data' => \App\Models\Nomenklatur::findOrFail($id),
                'method' => 'PUT',
                'action' => url('admin/nomenklatur/' . $id . '/proses'),
            ]
        ];
        return view('admin.nomenklatur.form', $data);
    }

    public function prosesUbah(Request $request, $id)
    {
        $request->validate([
            'kode_bagian' => 'required',
            'kode_jabatan' => 'required',
            'level_bod' =>'required',
            'standar_formasi'=>'required',
            'kode_unit'=>'required',
            'keterangan'=>'required',
            'norma_jmlh'=>'required',
            'standar_status'=>'required'
        ]);

        \App\Models\Nomenklatur::findOrFail($id)->update($request->all());
        return redirect('admin/nomenklatur')->with(['type' => 'success', 'message' => 'berhasil mengubah data']);
    }

    public function prosesHapus($id)
    {
        \App\Models\Nomenklatur::findOrFail($id)->delete();
        return redirect('admin/nomenklatur')->with(['type' => 'success', 'message' => 'berhasil menghapus data']);
    }
    public function export()
    {
        return Excel::download(new \App\Exports\NomenklaturExport(null), 'data_nomenklatur.xlsx');
        return back()->with(['type' => 'success', 'message' => 'berhasil export data']);
    }
    public function import()
    {
        $row = Excel::import(new NomenklaturImport, 'nomenklatur.xlsx');

        return redirect('admin.nomenklatur.import');
    }
    public function form_import()
    {
        return view('admin.Nomenklatur.import');
    }

    public function import_simpan(Request $request)
    {
        Excel::import(new NomenklaturImport,$request->file);

        return view('admin.Nomenklatur.import');
    }

}
