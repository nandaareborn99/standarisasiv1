@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">Data Jabatan</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Master</li>
                    <li class="breadcrumb-item">data jabatan</li>
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
                        <a href="{{ url('admin/master/jabatan/tambah') }}" class="btn btn-success btn-sm">Tambah
                            Data&ensp; <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table " id="table4" >
                                <thead>
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">No</th>
                                        <th>kode jabatan</th>
                                        <th>nama jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jabatan as $item)
                                    <tr>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/master/jabatan/'. $item->id .'/hapus') }}"
                                                    type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ url('admin/master/jabatan/'. $item->id .'/ubah') }}"
                                                    type="button" class="btn btn-default btn-xs">
                                                    <i class="fas fa-pencil-alt    "></i>
                                                </a>
                                                <a type="button" class="btn btn-default btn-xs">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_jabatan }}</td>
                                        <td>{{ $item->nama_jabatan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body p-2 bg-dark rounded">
                        <ul class="pagination pagination-sm m-0 justify-content-center">
                            @foreach ($jabatan->toArray()['links'] as $item)
                            <li class="page-item {{ $item['active'] ? 'active' : '' }}"><a class="page-link"
                                    href="{{ $item['url'] }}">{!!
                                    $item['label']
                                    !!}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection