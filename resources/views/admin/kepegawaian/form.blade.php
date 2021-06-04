@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">{{ $title }} Data Kepegawaian</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Kepegawaian</li>
                    <li class="breadcrumb-item active">Data Kepegawaian</li>
                    <li class="breadcrumb-item">{{$title}}</li>
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
                        <a href="{{ url('admin/kepegawaian') }}" class="btn btn-success btn-sm">Kembali&ensp;
                            <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> </a>
                    </div>
                    <div class="card-body">
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
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td width="50%">nik</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="nik"
                                                value="{{ empty($form['data']) ? '' : $form['data']->nik }}"
                                                aria-describedby="helpId" placeholder="Masukkan nik karyawan" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">nama</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="nama"
                                                value="{{ empty($form['data']) ? '' : $form['data']->nama }}"
                                                aria-describedby="helpId" placeholder="Masukkan nama karyawan" required>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td width="50%">Nama Bagian</td>
                                        <td width="100%">
                                            <select class="form-control" name="kode_bagian" id="kode_bagian">
                                            <option>- Pilih kode Bagian -</option>
                                            @foreach(\App\Models\Bagian::all() as $item)
                                            <option value="{{$item->kode_bagian}}">{{ $item->nama_bagian }}</option>
                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                   
                                    
                                     <tr>
                                    <td width="20%">Jenkel</td>
                                        <td width="100%">
                                            <select class="form-control" name="jenkel" id="jenkel">
                                                            <option>- Pilih Jenis Kelamin -</option>
                                                            @php
                                                                $level = ['laki-laki' => 'laki-laki', 'Perempuan' => 'Perempuan' ];
                                                            @endphp
                                                            @foreach ($level as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                    <td width="50%">Nama Jabatan</td>
                                        <td width="100%">
                                            <select class="form-control" name="kode_jabatan" id="kode_bagian">
                                            <option>- Pilih kode Jabatan -</option>
                                            @foreach(\App\Models\Jabatan::all() as $item)
                                            <option value="{{$item->kode_jabatan}}">{{ $item->nama_jabatan }}</option>
                                            @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                     <tr>
                                    <tr>
                                        <td width="20%">organization</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="organization"
                                                value="{{ empty($form['data']) ? '' : $form['data']->organization }}"
                                                aria-describedby="helpId" placeholder="Masukkan organization" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">tanggal lahir</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="tgl_lahir"
                                                value="{{ empty($form['data']) ? '' : $form['data']->tgl_lahir }}"
                                                aria-describedby="helpId" placeholder="Masukkan tanggal lahir" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">umur</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="umur"
                                                value="{{ empty($form['data']) ? '' : $form['data']->umur }}"
                                                aria-describedby="helpId" placeholder="Masukkan umur Karyawan" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">kriteria</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="kriteria"
                                                value="{{ empty($form['data']) ? '' : $form['data']->kriteria }}"
                                                aria-describedby="helpId" placeholder="Masukkan kriteria" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">status karyawan</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="status_karyawan"
                                                value="{{ empty($form['data']) ? '' : $form['data']->status_karyawan }}"
                                                aria-describedby="helpId" placeholder="Masukkan status karyawan" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">pensiun</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="pensiun"
                                                value="{{ empty($form['data']) ? '' : $form['data']->pensiun }}"
                                                aria-describedby="helpId" placeholder="Masukkan tanggal pensiun" required>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="mt-2 float-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection