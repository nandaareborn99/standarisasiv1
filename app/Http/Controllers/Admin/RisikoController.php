<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RisikoController extends Controller
{
    public function show()
    {
        $data = [
            'risiko' => \App\Models\Risiko::paginate(10)
        ];
        return view('admin.risiko.show', $data);
    }

    public function formTambah()
    {
        $data = [
            'title' => 'Tambah',
            'form' => [
                'data' => null,
                'method' => 'POST',
                'action' => url('admin/risiko/proses'),
            ]
        ];
        return view('admin.risiko.form', $data);
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nomor_bidang' => 'required',
            'nomor_register' => 'required',
            'risiko' => 'required',
            'usulan_mitigasi' => 'required',
            'likelihood' => 'required',
            'impact' => 'required',
            'status' => 'required',
            'triwulan' => 'required',
            'tahun' => 'required',
            'kode_bagian' => 'required',
            'pemilik' => 'required',
        ]);

        \App\Models\Risiko::create($request->all());

        return redirect('admin/risiko')->with(['type' => 'success', 'message' => 'berhasil menambahkan data']);
    }

    public function export()
    {
        return Excel::download(new \App\Exports\RisikoExport(null), 'export_risiko.xlsx');
        return back()->with(['type' => 'success', 'message' => 'berhasil export data']);
    }
}
