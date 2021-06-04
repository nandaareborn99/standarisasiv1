<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitusaha extends Model
{
    use HasFactory;
    protected $table = 'unitusaha';
    protected $guarded = [];
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class,'kode_jabatan','kode_jabatan');

    }
    
}
