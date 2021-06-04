@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">{{ $title }} Data Unit Usaha</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Master</li>
                    <li class="breadcrumb-item active">Data Unit Usaha</li>
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
                        <a href="{{ url('admin/master/unitusaha') }}" class="btn btn-success btn-sm">Kembali&ensp;
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
                                        <td width="20%">Kode Unit</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="kode_unit"
                                                value="{{ empty($form['data']) ? '' : $form['data']->kode_unit }}"
                                                aria-describedby="helpId" placeholder="Masukkan Kode Unit" required>
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
                                        <td width="20%">Nama Unit</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="nama_unit"
                                                value="{{ empty($form['data']) ? '' : $form['data']->nama_unit }}"
                                                aria-describedby="helpId" placeholder="Masukkan Nama Unit" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">Keterangan</td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="keterangan"
                                                value="{{ empty($form['data']) ? '' : $form['data']->keterangan }}"
                                                aria-describedby="helpId" placeholder="Masukkan Keterangan disini" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="20%">norma jumlah </td>
                                        <td width="100%">
                                            <input type="text" class="form-control" name="norma_jmlh"
                                                value="{{ empty($form['data']) ? '' : $form['data']->norma_jmlh }}"
                                                aria-describedby="helpId" placeholder="Masukkan Norma Jumlah disini disini" required>
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