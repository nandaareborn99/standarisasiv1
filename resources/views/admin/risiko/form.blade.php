@extends('layouts.layout_admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="m-0">{{ $title }} Data Risiko</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Data Risiko</li>
                        <li class="breadcrumb-item">{{ $title }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header p-2 bg-dark">
                            <a href="{{ url('admin/risiko') }}" class="btn btn-success btn-sm">Kembali&ensp;
                                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </a>
                        </div>
                        <div class="card-body">
                            <ul class="nav mb-4" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item mr-3">
                                    <button class="btn btn-success text-left active" data-toggle="pill" href="#tab1"><span style="font-weight:bold; font-size:18px">Profil Risiko</span><br><span style="font-size:14px">Tgl Posting</span></button>
                                </li>
                                <li class="nav-item mr-3">
                                    <button class="btn btn-success text-left" data-toggle="pill" href="#tab2"><span style="font-weight:bold; font-size:18px">Identifiakasi</span><br><span style="font-size:14px">Identifikasi</span></button>
                                </li>
                                <li class="nav-item mr-3">
                                    <button class="btn btn-success text-left" data-toggle="pill" href="#tab3"><span style="font-weight:bold; font-size:18px">Analisa & Evaluasi</span><br><span style="font-size:14px">Analisa & Evaluasi</span></button>
                                </li>
                                <li class="nav-item mr-3">
                                    <button class="btn btn-success text-left" data-toggle="pill" href="#tab4"><span style="font-weight:bold; font-size:18px">Rencana Perlakuan</span><br><span style="font-size:14px">Target / Sasaran Residual</span></button>
                                </li>
                                <li class="nav-item mr-3">
                                    <button class="btn btn-success text-left" data-toggle="pill" href="#tab5"><span style="font-weight:bold; font-size:18px">Tahap
                                            Akhir</span><br><span style="font-size:14px">Tahap Akhir</span></button>
                                </li>
                            </ul>
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form method="POST" action="{{ $form['action'] }}">
                                @method($form['method'])
                                @csrf
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                        <div class="text-success">Tanggal Posting</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr>
                                                    <td width="20%">Bidang</td>
                                                    <td width="100%">
                                                        <select class="form-control" name="nomor_bidang">
                                                            <option>- Pilih Bidang -</option>
                                                            @foreach (\App\Models\Bidang::all() as $item)
                                                                <option value="{{ $item->nomor_bidang }}">
                                                                    {{ $item->nama_bidang }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Nomor Register</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" name="nomor_register" placeholder="Masukkan Nomor Register">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Tanggal Posting</td>
                                                    <td width="100%">
                                                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Posting">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Risiko</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" name="risiko" placeholder="Masukkan Risiko">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Sasaran</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" placeholder="Masukkan Sasaran">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Bagian / Unitusaha</td>
                                                    <td width="100%">
                                                        <select class="form-control" name="kode_bagian">
                                                            <option>- Pilih Bagian -</option>
                                                            @foreach (\App\Models\Bagian::all() as $item)
                                                                <option value="{{ $item->kode_bagian }}">
                                                                    {{ $item->pref_bagian }} |
                                                                    {{ $item->nama_bagian }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Pemilik Risiko</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" name="pemilik" aria-describedby=" helpId" placeholder="Masukkan Pemilik Risiko">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">NIK/NRK</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan NIK/NRK">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Usulan Mitigasi</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" name="usulan_mitigasi" aria-describedby="helpId" placeholder="Masukkan Usulan Mitigasi">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Triwulan</td>
                                                    <td width="100%">
                                                        <select class="form-control" name="triwulan" id="triwulan">
                                                            <option>- Pilih Triwulan -</option>
                                                            @php
                                                                $triwulan = ['1' => 'I / Satu', '2' => 'II / Dua', '3' => 'III / Tiga', '4' => 'IV / Empat', 'semua' => 'Semua'];
                                                            @endphp
                                                            @foreach ($triwulan as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Tahun</td>
                                                    <td width="100%">
                                                        <select class="form-control" name="tahun" id="tahun">
                                                            <option>- Pilih Tahun -</option>
                                                            @for ($i = 2019; $i <= 2030; $i++)
                                                                <option value={{ $i }}>{{ $i }}
                                                                </option>
                                                            @endfor
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-success">Assessment</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr>
                                                    <td width="20%">Risk Officer</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" placeholder="Masukkan Risk Officer">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Kabag / Manager</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" placeholder="Masukkan Kabag / Manager">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Kabag MR</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" placeholder="Masukkan Kabag MR">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                        <div class="text-success">Identifiakasi</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr valign="top">
                                                    <td width="20%">Peristiwa Risiko & Indikator</td>
                                                    <td width="100%">
                                                        <textarea class="form-control" placeholder="Masukkan Peristiwa Risiko & Indikator" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="20%">Penyebab</td>
                                                    <td width="100%">
                                                        <textarea class="form-control" placeholder="Masukkan Penyebab" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="20%">Dampak</td>
                                                    <td width="100%">
                                                        <textarea class="form-control" placeholder="Masukkan Dampak" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                                        <div class="text-success">Analisa & Evaluasi</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr valign="top">
                                                    <td width="20%">Pengendalian Yang Ada</td>
                                                    <td width="100%">
                                                        <textarea class="form-control" placeholder="Masukkan Pengendalian Yang Ada" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="20%">Efektivitas Pengendalian</td>
                                                    <td width="100%">
                                                        <select class="form-control">
                                                            <option>- Pilih Efektivitas Pengendalian -</option>
                                                            <option value="Selalu Dilakukan">Selalu Dilakukan</option>
                                                            <option value="Sebagian Tidak Konsisten">Sebagian Tidak Konsisten</option>
                                                            <option value="Tidak Efektif">Tidak Efektif</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="20%">Dampak</td>
                                                    <td width="100%">
                                                        <textarea class="form-control" placeholder="Masukkan Dampak" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-success">Resiko Inheren</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr>
                                                    <td width="20%">Likelihood (L)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" name="likelihood" aria-describedby="helpId" placeholder="Masukkan Likelihood">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Impact (I)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" name="impact" aria-describedby="helpId" placeholder="Masukkan Impact">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Score (L x I)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" name="score" aria-describedby="helpId" placeholder="Masukkan Score">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Status</td>
                                                    <td width="100%">
                                                        <select class="form-control" name="status">
                                                            <option>- Pilih Status -</option>
                                                            @php
                                                                $triwulan = ['rendah' => 'Rendah', 'sedang' => 'Sedang', 'extreme' => 'Extreme', 'tinggi' => 'Tinggi'];
                                                            @endphp
                                                            @foreach ($triwulan as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Potensi Kerugian</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Potensi Kerugian">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-success">Evaluasi Resiko</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr>
                                                    <td width="20%">Evaluasi Risiko</td>
                                                    <td width="100%">
                                                        <select class="form-control">
                                                            <option>- Pilih Evaluasi Risiko -</option>
                                                            <option value="Hindari Risiko">Hindari Risiko</option>
                                                            <option value="Mitigasi Risiko">Mitigasi Risiko</option>
                                                            <option value="Pindahkan Risiko">Pindahkan Risiko</option>
                                                            <option value="Terima Risiko">Terima Risiko</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                                        <div class="text-success">Target / Sasaran Residual</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr>
                                                    <td width="20%">Likelihood (L)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Likelihood">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Impact (I)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Impact">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Score (L x I)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Score">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Status</td>
                                                    <td width="100%">
                                                        <select class="form-control">
                                                            <option>- Pilih Status -</option>
                                                            @php
                                                                $triwulan = ['rendah' => 'Rendah', 'sedang' => 'Sedang', 'extreme' => 'Extreme', 'tinggi' => 'Tinggi'];
                                                            @endphp
                                                            @foreach ($triwulan as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-success">Mitigasi</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr valign="top">
                                                    <td width="20%">Mitigasi</td>
                                                    <td width="100%">
                                                        <textarea class="form-control" placeholder="Masukkan Pengendalian Yang Ada" rows="3"></textarea>
                                                    </td>
                                                </tr>
                                                <tr valign="top">
                                                    <td width="20%">Biaya Mitigasi (Rp)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-success">Analisa Biaya dan Manfaat (Jika Ratio CB > 100% = Diterima)</div>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr>
                                                    <td width="20%">Estimasi Baseline Cost</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Likelihood">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Estimasi Residual Cost</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Impact">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Benefit (EBC-ERC)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Impact">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Rencana Biaya (Cost)</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Impact">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">Ratio Cost & Benefit</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Impact">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <table class="w-100 mb-4">
                                            <tbody>
                                                <tr>
                                                    <td width="20%">Jadwal Pelaksanaan</td>
                                                    <td width="100%">
                                                        <input type="text" class="form-control" aria-describedby="helpId" placeholder="Masukkan Impact">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                                        <div class="text-success">Tahap Akhir</div>
                                        <hr>
                                        <p>Silakan tekan tombol simpan untuk menyelesaikan data</p>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
