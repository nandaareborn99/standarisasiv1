@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">{{ $title }} Data Bidang</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Master</li>
                    <li class="breadcrumb-item active">Data Bidang</li>
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
                        <a href="{{ url('admin/master/bidang') }}" class="btn btn-success btn-sm">Kembali&ensp;
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
                                        <td width="20%">Kode Katalog</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="kode_katalog"
                                                value="{{ empty($form['data']) ? '' : $form['data']->kode_katalog }}"
                                                aria-describedby="helpId" placeholder="Masukkan Kode Katalog" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Nomor Bidang</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="nomor_bidang"
                                                value="{{ empty($form['data']) ? '' : $form['data']->nomor_bidang }}"
                                                aria-describedby="helpId" placeholder="Masukkan Nomor bidang" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Nama Bidang</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="nama_bidang"
                                                value="{{ empty($form['data']) ? '' : $form['data']->nama_bidang }}"
                                                aria-describedby="helpId" placeholder="Masukkan nama bidang" required>
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