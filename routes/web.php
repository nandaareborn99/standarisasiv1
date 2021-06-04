<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/export', function(){
   return view('exports.nomenklatur'); 
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/sample', function () {
    return view('exports.risiko');
});

Route::post('/login', [Controllers\Auth\AuthController::class, 'prosesLogin']);
Route::get('/logout', [Controllers\Auth\AuthController::class, 'prosesLogout']);

Route::prefix('admin')->group(function () {
    Route::get('beranda', [Controllers\Admin\BerandaController::class, 'beranda']);
    Route::get('laporan/risiko', [Controllers\Admin\LaporanController::class, 'formProfilRisiko']);
    Route::post('laporan/risiko/export', [Controllers\Admin\LaporanController::class, 'export']);
    Route::get('laporan/nomenklatur', [Controllers\Admin\LaporanController::class, 'formNomenklatur']);
    Route::post('laporan/nomenklatur/export1', [Controllers\Admin\LaporanController::class, 'export1']);
    //
    
    

    Route::get('master/divisi', [Controllers\Admin\DivisiController::class, 'show']);
    Route::get('master/divisi/tambah', [Controllers\Admin\DivisiController::class, 'formTambah']);
    Route::post('master/divisi/proses', [Controllers\Admin\DivisiController::class, 'prosesTambah']);
    Route::get('master/divisi/{id}/ubah', [Controllers\Admin\DivisiController::class, 'formUbah']);
    Route::put('master/divisi/{id}/proses', [Controllers\Admin\DivisiController::class, 'prosesUbah']);
    Route::get('master/divisi/{id}/hapus', [Controllers\Admin\DivisiController::class, 'prosesHapus']);


    Route::get('master/bagian', [Controllers\Admin\BagianController::class, 'show']);
    Route::get('master/bagian/tambah', [Controllers\Admin\BagianController::class, 'formTambah']);
    Route::post('master/bagian/proses', [Controllers\Admin\BagianController::class, 'prosesTambah']);
    Route::get('master/bagian/{id}/ubah', [Controllers\Admin\BagianController::class, 'formUbah']);
    Route::put('master/bagian/{id}/proses', [Controllers\Admin\BagianController::class, 'prosesUbah']);
    Route::get('master/bagian/{id}/hapus', [Controllers\Admin\BagianController::class, 'prosesHapus']);


    Route::get('master/katalog', [Controllers\Admin\KatalogController::class, 'show']);
    Route::get('master/katalog/tambah', [Controllers\Admin\KatalogController::class, 'formTambah']);
    Route::post('master/katalog/proses', [Controllers\Admin\KatalogController::class, 'prosesTambah']);
    Route::get('master/katalog/{id}/ubah', [Controllers\Admin\KatalogController::class, 'formUbah']);
    Route::put('master/katalog/{id}/proses', [Controllers\Admin\KatalogController::class, 'prosesUbah']);
    Route::get('master/katalog/{id}/hapus', [Controllers\Admin\KatalogController::class, 'prosesHapus']);


    Route::get('master/bidang', [Controllers\Admin\BidangController::class, 'show']);
    Route::get('master/bidang/tambah', [Controllers\Admin\BidangController::class, 'formTambah']);
    Route::post('master/bidang/proses', [Controllers\Admin\BidangController::class, 'prosesTambah']);
    Route::get('master/bidang/{id}/ubah', [Controllers\Admin\BidangController::class, 'formUbah']);
    Route::put('master/bidang/{id}/proses', [Controllers\Admin\BidangController::class, 'prosesUbah']);
    Route::get('master/bidang/{id}/hapus', [Controllers\Admin\BidangController::class, 'prosesHapus']);

    Route::get('master/jabatan', [Controllers\Admin\JabatanController::class, 'show']);
    Route::get('master/jabatan/tambah', [Controllers\Admin\JabatanController::class, 'formTambah']);
    Route::post('master/jabatan/proses', [Controllers\Admin\JabatanController::class, 'prosesTambah']);
    Route::get('master/jabatan/{id}/ubah', [Controllers\Admin\JabatanController::class, 'formUbah']);
    Route::put('master/jabatan/{id}/proses', [Controllers\Admin\JabatanController::class, 'prosesUbah']);
    Route::get('master/jabatan/{id}/hapus', [Controllers\Admin\JabatanController::class, 'prosesHapus']);



    Route::get('risiko', [Controllers\Admin\RisikoController::class, 'show']);
    Route::get('risiko/tambah', [Controllers\Admin\RisikoController::class, 'formTambah']);
    Route::post('risiko/proses', [Controllers\Admin\RisikoController::class, 'prosesTambah']);
    Route::get('risiko/export', [Controllers\Admin\RisikoController::class, 'export']);


    Route::get('kepegawaian', [Controllers\Admin\KepegawaianController::class, 'show']);
    Route::get('kepegawaian/tambah', [Controllers\Admin\KepegawaianController::class, 'formTambah']);
    Route::post('kepegawaian/proses', [Controllers\Admin\KepegawaianController::class, 'prosesTambah']);
    Route::get('kepegawaian/{id}/ubah', [Controllers\Admin\KepegawaianController::class, 'formUbah']);
    Route::put('kepegawaian/{id}/proses', [Controllers\Admin\KepegawaianController::class, 'prosesUbah']);
    Route::get('kepegawaian/{id}/hapus', [Controllers\Admin\KepegawaianController::class, 'prosesHapus']);

    Route::get('master/jabatan', [Controllers\Admin\JabatanController::class, 'show']);
    Route::get('master/jabatan/tambah', [Controllers\Admin\JabatanController::class, 'formTambah']);
    Route::post('master/jabatan/proses', [Controllers\Admin\JabatanController::class, 'prosesTambah']);
    Route::get('master/jabatan/{id}/ubah', [Controllers\Admin\JabatanController::class, 'formUbah']);
    Route::put('master/jabatan/{id}/proses', [Controllers\Admin\JabatanController::class, 'prosesUbah']);
    Route::get('master/jabatan/{id}/hapus', [Controllers\Admin\JabatanController::class, 'prosesHapus']);

    Route::get('nomenklatur', [Controllers\Admin\NomenklaturController::class, 'show']);
    Route::get('nomenklatur/tambah', [Controllers\Admin\NomenklaturController::class, 'formTambah']);
    Route::post('nomenklatur/proses', [Controllers\Admin\NomenklaturController::class, 'prosesTambah']);
    Route::get('nomenklatur/{id}/ubah', [Controllers\Admin\NomenklaturController::class, 'formUbah']);
    Route::put('nomenklatur/{id}/proses', [Controllers\Admin\NomenklaturController::class, 'prosesUbah']);
    Route::get('nomenklatur/{id}/hapus', [Controllers\Admin\NomenklaturController::class, 'prosesHapus']);
    Route::get('nomenklatur/export', [Controllers\Admin\NomenklaturController::class, 'export']);
    Route::get('nomenklatur/importt', [Controllers\Admin\NomenklaturController::class, 'import']);
    Route::get('nomenklatur/import', [Controllers\Admin\NomenklaturController::class, 'form_import']);
    Route::post('nomenklatur/import', [Controllers\Admin\NomenklaturController::class, 'form_import']);
    

    Route::get('master/unitusaha', [Controllers\Admin\UnitusahaController::class, 'show']);
    Route::get('master/unitusaha/tambah', [Controllers\Admin\UnitusahaController::class, 'formTambah']);
    Route::post('master/unitusaha/proses', [Controllers\Admin\UnitusahaController::class, 'prosesTambah']);
    Route::get('master/unitusaha/{id}/ubah', [Controllers\Admin\UnitusahaController::class, 'formUbah']);
    Route::put('master/unitusaha/{id}/proses', [Controllers\Admin\UnitusahaController::class, 'prosesUbah']);
    Route::get('master/unitusaha/{id}/hapus', [Controllers\Admin\UnitusahaController::class, 'prosesHapus']);

    


});
