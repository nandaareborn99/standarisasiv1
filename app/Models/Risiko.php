<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risiko extends Model
{
    use HasFactory;
    protected $table = 'risiko';

    protected $guarded = [];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class,'nomor_bidang','nomor_bidang');
    }

    public function bagian()
    {
        return $this->belongsTo(Bagian::class,'kode_bagian','kode_bagian');

    }
}
