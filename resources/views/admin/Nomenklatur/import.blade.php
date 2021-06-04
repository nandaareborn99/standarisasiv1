@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="m-0">Import Data Nomenklatur </h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Data Nomenklatur</li>
                    <li class="breadcrumb-item active">Data Nomenklatur</li>
                    <li class="breadcrumb-item">Import</li>
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
                        <form method="POST" action="">
                            @csrf
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                    <td width="50%">pilih file excel</td>
                                        <td width="100%">
                                            <input type="file" name="excel">
                                        </td>
                                    </tr> 
                                    <tr>
                                    
                                    

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