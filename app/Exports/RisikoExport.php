<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RisikoExport implements FromView, ShouldAutoSize
{
    private $query;
    function __construct($query) {
        $this->query = $query;
    }

    public function view(): View
    {
        if(empty($this->query)){
            $data['risiko'] = \App\Models\Risiko::all();
        } else {
            $data['risiko'] = \App\Models\Risiko::where('triwulan', $this->query['triwulan'])->where('tahun',$this->query['tahun'])->where('kode_bagian', $this->query['kode_bagian'])->get();
        }
        return view('exports.risiko', $data);
    }
}
