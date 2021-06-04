<?php

namespace App\Exports;

use App\Models\Nomenklatur;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
 
class NomenklaturExport implements FromView, ShouldAutoSize
{
    private $query;
    function __construct($query) {
        $this->query = $query;
    }

    public function view(): View
    {
        if(empty($this->query)){
            $data['nomenklatur'] = \App\Models\Nomenklatur::all();
        } else {
            $data['nomenklatur'] = \App\Models\Nomenklatur::where('kode_jabatan', $this->query['kode_jabatan'])->where('kode_bagian', $this->query['kode_bagian'])->get();
        }
        return view('exports.nomenklatur', $data);
    }


}
