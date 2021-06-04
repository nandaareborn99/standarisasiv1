<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepegawaian extends Model
{
    use HasFactory;
     protected $table = 'kepegawaian';

    public function bagian()
    {
        return $this->belongsTo(Bagian::class,'kode_bagian','kode_bagian');

    }
    protected $fillable = ['nik','nama','kode_bagian','nama_bagian','jenkel','kode_jabatan','nama_jabatan','organization','tgl_lahir','umur','kriteria','status_karyawan','pensiun'];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class,'kode_jabatan','kode_jabatan');

    }
}
