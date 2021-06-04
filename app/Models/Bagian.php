<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    use HasFactory;
    protected $table = 'bagian';

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'kode_divisi', 'kode_divisi');
    }
}
