@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">{{ $title }} Data Nomenklatur </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Nomenklatur</li>
                    <li class="breadcrumb-item active">Data Nomenklatur</li>
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
                        <a href="{{ url('admin/nomenklatur') }}" class="btn btn-success btn-sm">Kembali&ensp;
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
                                    <td width="50%">Fungsi</td>
                                        <td width="100%">
                                            <select class="form-control" name="kode_bagian" id="kode_bagian">
                                            <option value="">- Pilih kode Bagian -</option>
                                            @foreach(\App\Models\Bagian::all() as $item)
                                            <option value="{{$item->kode_bagian}}">{{ $item->nama_bagian }}</option>
                                            @endforeach
                                            </select>
                                        </td>
                                    </tr> 
                                    <tr>
                                    <td width="50%">Jabatan</td>
                                        <td width="100%">
                                            <select class="form-control" name="kode_jabatan" id="kode_jabatan">
                                            <option>- Pilih kode Jabatan -</option>
                                            @foreach(\App\Models\Jabatan::all() as $item)
                                            <option value="{{$item->kode_jabatan}}">{{ $item->nama_jabatan }}</option>
                                            @endforeach
                                            </select>
                                        </td>
                                </tr>
                                    <td width="20%">level Bod</td>
                                        <td width="100%">
                                            <select class="form-control" name="level_bod" id="level_bod">
                                                <option>- Pilih level Bod -</option>
                                                            @php
                                                                $level = ['bod-1' => 'bod-1', 'bod-2' => 'bod-2','bod-3' => 'bod-3','bod-4' => 'bod-4','bod-5' => 'bod-5','bod-6' => 'bod-6'];
                                                            @endphp
                                                            @foreach ($level as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%"> Standar Formasi </td>
                                        <td width="100%">
                                            <select class="form-control" name="standar_formasi" id="standar_formasi">
                                                <option>- Pilih Standar Formasi -</option>
                                                            @php
                                                                $level = ['1' => '1', '2' => '2','3' => '3','4' => '4','5' => '5','6' => '6'];
                                                            @endphp
                                                            @foreach ($level as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                    </td>
                                </tr>
                                 <tr>
                                    <td width="50%">Unitusaha</td>
                                        <td width="100%">
                                            <select class="form-control" name="kode_unit" id="kode_unit">
                                            <option>- Pilih kode Unit -</option>
                                            @foreach(\App\Models\Unitusaha::all() as $item)
                                            <option value="{{$item->kode_unit}}">{{ $item->nama_unit }}</option>
                                            @endforeach
                                            </select>
                                        </td>
                                </tr>
                                <tr>
                                    <td width="50%"> Keterangan</td>
                                        <td width="100%">
                                            <select class="form-control" name="keterangan" id="keterangan">
                                            <option>- Pilih Keterangan -</option>
                                            @foreach(\App\Models\Unitusaha::all() as $item)
                                            <option value="{{$item->keterangan}}">{{ $item->keterangan}}</option>
                                            @endforeach
                                            </select>
                                        </td>
                                </tr>
                                <tr>
                                    <td width="50%">Norma jumlah</td>
                                        <td width="100%">
                                            <select class="form-control" name="norma_jmlh" id="norma_jmlh">
                                            <option>- Pilih Norma Jumlah -</option>
                                            @foreach(\App\Models\Unitusaha::all() as $item)
                                            <option value="{{$item->norma_jmlh}}">{{ $item->norma_jmlh }}</option>
                                            @endforeach
                                            </select>
                                        </td>
                                </tr>
                                    <td width="20%">Standar Status Karyawan</td>
                                        <td width="100%">
                                            <select class="form-control" name="standar_status" id="standar_status">
                                                <option>- Pilih Standar Status Karyawan -</option>
                                                            @php
                                                                $level = ['Karyawan Sendiri' => 'Karyawan Sendiri', 'PKWT/KNG' => 'PKWT/KNG','Ahli daya' => 'Ahli daya'];
                                                            @endphp
                                                            @foreach ($level as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                            </select>
                                    </td>
                                    

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