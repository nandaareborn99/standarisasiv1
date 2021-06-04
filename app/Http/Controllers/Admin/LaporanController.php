<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function formProfilRisiko()
    {
        return view('admin.laporan.profil_risiko.form');
    }

    public function export(Request $request){

        $data = [
        'triwulan' => $request->triwulan,
        'tahun' => $request->tahun,
        'kode_bagian' => $request->kode_bagian,  
        ];

        return Excel::download(new \App\Exports\RisikoExport($data), 'export_risiko.xlsx');

    }

    public function formNomenklatur()
    {
        return view('admin.laporan.nomenklaturform.form');
    }

    public function export1(Request $request){

        $data = [
        'kode_jabatan' => $request->kode_jabatan,
        'kode_bagian' => $request->kode_bagian,  
        ];

        return Excel::download(new \App\Exports\NomenklaturExport($data), 'data_nomenklatur.xlsx');

    }

}
