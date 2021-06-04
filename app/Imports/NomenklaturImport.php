<?php

namespace App\Imports;

use App\Nomenklatur;
use Maatwebsite\Excel\Concerns\ToModel;

class NomenklaturImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
        dd($row);
        return new NomenklaturImport([
            //
        ]);
    }
}
