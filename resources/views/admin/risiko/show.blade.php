@extends('layouts.layout_admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="m-0">Data Risiko</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Data Master</li>
                        <li class="breadcrumb-item">Data Risiko</li>
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
                            <a href="{{ url('admin/risiko/tambah') }}" class="btn btn-success btn-sm">Tambah
                                Data&ensp; <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
                            <a href="{{ url('admin/risiko/export') }}" class="btn btn-success btn-sm">Export Excel&ensp; <i class="fa fa-file" aria-hidden="true"></i> </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Aksi</th>
                                            <th>Tahun</th>
                                            <th class="text-center">No</th>
                                            <th>No. Register</th>
                                            <th>Nama Risiko</th>
                                            <th>Katalog</th>
                                            <th>Bidang</th>
                                            <th>Bagian / Unit Kerja</th>
                                            <th>Pemilik</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($risiko as $item)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/master/risiko/' . $item->id . '/hapus') }}" type="button" class="btn btn-danger btn-xs">
                                                            <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="{{ url('admin/master/risiko/' . $item->id . '/ubah') }}" type="button" class="btn btn-default btn-xs">
                                                            <i class="fas fa-pencil-alt    "></i>
                                                        </a>
                                                        <a type="button" class="btn btn-default btn-xs">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>{{ $item->tahun }}</td>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nomor_register }}</td>
                                                <td>{{ $item->risiko }}</td>
                                                <td>{{ $item->bidang->katalog->nama_katalog }}</td>
                                                <td>{{ $item->bidang->nama_bidang }}</td>
                                                <td>{{ $item->bagian->nama_bagian }}</td>
                                                <td>{{ $item->pemilik }}</td>
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
                                @foreach ($risiko->toArray()['links'] as $item)
                                    <li class="page-item {{ $item['active'] ? 'active' : '' }}"><a class="page-link" href="{{ $item['url'] }}">{!! $item['label'] !!}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
