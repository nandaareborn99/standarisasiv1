@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">{{ $title }} Data Divisi</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Master</li>
                    <li class="breadcrumb-item active">Data Divisi</li>
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
                        <a href="{{ url('admin/master/divisi') }}" class="btn btn-success btn-sm">Kembali&ensp;
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
                                        <td width="20%">Kode Divisi</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="kode_divisi"
                                                value="{{ empty($form['data']) ? '' : $form['data']->kode_divisi }}"
                                                aria-describedby="helpId" placeholder="Masukkan Kode Divisi" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Nama Divisi</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="nama_divisi"
                                                value="{{ empty($form['data']) ? '' : $form['data']->nama_divisi }}"
                                                aria-describedby="helpId" placeholder="Masukkan Nama Divisi" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Pref Divisi</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="pref_divisi"
                                                value="{{ empty($form['data']) ? '' : $form['data']->pref_divisi }}"
                                                aria-describedby="helpId" placeholder="Masukkan Pref Divisi" required>
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