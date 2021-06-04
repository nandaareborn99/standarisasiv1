@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">Data Nomenklatur</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Nomenklatur</li>
                    <li class="breadcrumb-item">data Nomenklatur</li>
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

                        <a href="{{ url('admin/nomenklatur/export') }}" class="btn btn-primary btn-sm">Cetak Excel &ensp;<i class="fa fa-cloud-download" aria-hidden="true"></i></a>

                        <a href=" {{ url('admin/nomenklatur/import') }} " class="btn btn-primary btn-sm">Import Data &ensp; <i class="fa fa-cloud-download" aria-hidden="true"></i> </a>

                        <a href="{{ url('admin/nomenklatur/tambah') }}" class="btn btn-success btn-sm">Tambah
                            Data&ensp; <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
                          
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " id="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">No</th>
                                        <th>unit usaha </th>
                                        <th>nama bagian</th>
                                        <th>nama jabatan</th>
                                        <th>level Bod</th>
                                        <th>standar Formasi</th> 
                                        <th>ketterangan</th>
                                        <th>norma jumlah karyawan</th>
                                        <th>standar status karyawan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nomenklatur as $item)
                                    <tr>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ url('admin/nomenklatur/'. $item->id .'/hapus') }}"
                                                    type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-alt" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ url('admin/nomenklatur/'. $item->id .'/ubah') }}"
                                                    type="button" class="btn btn-default btn-xs">
                                                    <i class="fas fa-pencil-alt    "></i>
                                                </a>
                                                <a type="button" class="btn btn-default btn-xs">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td> {{$item ->unitusaha->nama_unit}} </td>
                                        <td>{{ $item->bagian->nama_bagian }}</td>
                                        <td>{{ $item->jabatan->nama_jabatan }}</td>
                                        <td>
                                            @if( strtolower($item->level_bod) == 'bod-1')
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->level_bod }}</span>
                                            @else
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->level_bod }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if( strtolower($item->standar_formasi) == '1')
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->standar_formasi}}</span>
                                            @else
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->standar_formasi }}</span>
                                            @endif
                                        </td>
                                        
                                        <td>{{ $item->unitusaha->keterangan }}</td>
                                        <td>{{ $item->unitusaha->norma_jmlh}}</td>
                                        <td>
                                            @if( strtolower($item->standar_status) == 'Karyawan Sendiri')
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->standar_status }}</span>
                                            @else
                                            <span
                                                class="badge badge-pill badge-primary">{{ $item->standar_status }}</span>
                                            @endif
                                        </td>

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
                            @foreach ($nomenklatur->toArray()['links'] as $item)
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