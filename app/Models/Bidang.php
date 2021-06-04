<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    protected $guarded = [];

    public function katalog()
    {
        return $this->belongsTo(Katalog::class, 'kode_katalog', 'kode_katalog');
    }
}
