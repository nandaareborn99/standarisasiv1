@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">{{ $title }} Data Bagian</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Master</li>
                    <li class="breadcrumb-item active">Data Bagian</li>
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
                        <a href="{{ url('admin/master/bagian') }}" class="btn btn-success btn-sm">Kembali&ensp;
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
                                        <td width="20%">Kode Bagian</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="kode_bagian"
                                                value="{{ empty($form['data']) ? '' : $form['data']->kode_bagian }}"
                                                aria-describedby="helpId" placeholder="Masukkan Kode Bagian" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Nama bagian</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="nama_bagian"
                                                value="{{ empty($form['data']) ? '' : $form['data']->nama_bagian }}"
                                                aria-describedby="helpId" placeholder="Masukkan Nama Bagian" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Pref Bagian</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="pref_bagian"
                                                value="{{ empty($form['data']) ? '' : $form['data']->pref_bagian }}"
                                                aria-describedby="helpId" placeholder="Masukkan Pref Bagian" required>
                                        </td>
                                    </tr>
                                <tr>
                                    <td width="20%">Level</td>
                                        <td width="100%">
                                            <select class="form-control" name="level" id="level">
                                                            <option>- Pilih Level -</option>
                                                            @php
                                                                $level = ['Korporat' => 'Korporat', 'Operasional' => 'Operasional' ];
                                                            @endphp
                                                            @foreach ($level as $index => $item)
                                                                <option value="{{ $index }}">{{ $item }}
                                                                </option>
                                                            @endforeach
                                                        </select>
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