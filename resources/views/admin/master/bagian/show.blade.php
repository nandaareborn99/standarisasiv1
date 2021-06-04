@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">Data Bagian</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Master</li>
                    <li class="breadcrumb-item">Data Bagian</li>
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
                        <a href="{{ url('admin/master/bagian/tambah') }}" class="btn btn-success btn-sm">Tambah
                            Data&ensp; <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
                    </div>
                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table " id="table2" >
                                <thead>
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">No</th>
                                        <th>Kode Bagian</th>
                                        <th>Kode Divisi</th>
                                        <th>Nama Bagian</th>
                                        <th>Pref Bagian</th>
                                        <th>Level Bagian</th>
                                        <th>Perusahaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bagian as $item)
                                    <tr>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/master/bagian/'. $item->id .'/hapus') }}"
                                                    type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ url('admin/master/bagian/'. $item->id .'/ubah') }}"
                                                    type="button" class="btn btn-default btn-xs">
                                                    <i class="fas fa-pencil-alt    "></i>
                                                </a>
                                                <a type="button" class="btn btn-default btn-xs">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_bagian }}</td>
                                        <td>{{ $item->divisi->nama_divisi }}</td>
                                        <td>{{ $item->nama_bagian }}</td>
                                        <td>{{ $item->pref_bagian }}</td>
                                        <td>
                                            @if( strtolower($item->level_bagian) == 'korporat')
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->level_bagian }}</span>
                                            @else
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->level_bagian }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->divisi->perusahaan }}</td>
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
                            @foreach ($bagian->toArray()['links'] as $item)
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