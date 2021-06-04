@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">Data Kepegawaian</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Pegawai</li>
                    <li class="breadcrumb-item">data pegawai</li>
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
                        <a href="{{ url('admin/kepegawaian/tambah') }}" class="btn btn-success btn-sm">Tambah
                            Data&ensp; <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">No</th>
                                        <th>nik</th>
                                        <th>nama</th>
                                        <th>nama bagian</th>
                                        <th>jenis kelamin</th>
                                        <th>nama jabatan</th>
                                        <th>organization</th>
                                        <th>tanggal lahir</th>
                                        <th>umur</th>
                                        <th>kriteria</th>
                                        <th>status karyawan</th>
                                        <th>pensiun</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kepegawaian as $item)
                                    <tr>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/kepegawaian/'. $item->id .'/hapus') }}"
                                                    type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ url('admin/kepegawaian/'. $item->id .'/ubah') }}"
                                                    type="button" class="btn btn-default btn-xs">
                                                    <i class="fas fa-pencil-alt    "></i>
                                                </a>
                                                <a type="button" class="btn btn-default btn-xs">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->bagian->nama_bagian }}</td>
                                        <td>
                                            @if( strtolower($item->jenkel) == 'Laki-Laki')
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->jenkel }}</span>
                                            @else
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->jenkel }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->jabatan->nama_jabatan }}</td>
                                         <td>{{ $item-> organization}}</td>
                                         <td>{{ $item-> tgl_lahir}}</td>
                                         <td>{{ $item-> umur}}</td>
                                         <td>{{ $item-> kriteria}}</td>
                                         <td>{{ $item-> status_karyawan}}</td>
                                         <td>{{ $item-> pensiun}}</td>
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
                            @foreach ($kepegawaian->toArray()['links'] as $item)
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