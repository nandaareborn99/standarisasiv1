<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomenklatur extends Model
{
    use HasFactory;
    protected $table = 'nomenklatur';
    protected $fillable = ['kode_bagian','kode_jabatan','level_bod','standar_formasi','keterangan','norma_jmlh','standar_status'];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class,'kode_bagian','kode_bagian');

    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class,'kode_jabatan','kode_jabatan');

    }
    public function unitusaha()
    {
        return $this->belongsTo(Unitusaha::class,'keterangan','keterangan');
        return $this->belongsTo(Unitusaha::class,'norma_jmlh','norma_jmlh');

    }
    

}
