@extends('layouts.layout_admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col">
                <h1 class="m-0">Form Profil Risiko</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                    <li class="breadcrumb-item active">Form Profil Risiko</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('admin/laporan/risiko/export') }}" method="POST">
                            @csrf 
                            @method('POST')
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="pr-4">Triwulan</td>
                                        <td width="100%">
                                            <select class="form-control" name="triwulan" id="triwulan" required>
                                                <option>- Pilih Triwulan -</option>
                                                @php
                                                $triwulan = ['1' => 'I / Satu',
                                                '2' => 'II / Dua',
                                                '3' => 'III / Tiga',
                                                '4' => 'IV / Empat',
                                                'semua' => 'Semua'];
                                                @endphp
                                                @foreach($triwulan as $index => $item)
                                                <option value="{{$index}}">{{$item}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <td width="100%">
                                            <select class="form-control" name="tahun" id="tahun" required>
                                                <option>- Pilih Tahun -</option>
                                                @for($i = 2019; $i <= 2030; $i++) <option>{{ $i }}</option>
                                                    @endfor
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bagian</td>
                                        <td>
                                            <select class="form-control" name="kode_bagian">
                                                <option>- Pilih Bagian -</option>
                                                @foreach (\App\Models\Bagian::all() as $item)
                                                    <option value="{{ $item->kode_bagian }}">
                                                        {{ $item->pref_bagian }} |
                                                        {{ $item->nama_bagian }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-2 float-right">
                                <button type="submit" class="btn btn-primary">Cetak</button>
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