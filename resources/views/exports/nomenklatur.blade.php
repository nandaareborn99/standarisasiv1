<table border="1">
    <thead>
        <tr>
            <th colspan="9" align="center" style="font-size:16px; font-weight: bold;">FORM Nomenklatur</th>
        </tr>
        <tr>
            <th colspan="9" align="center" style="font-size:16px; font-weight: bold;">PT PERKEBUNAN NUSANTARA VI</th>
        </tr>
        <tr>
            <th style="background-color: #95B3D7;">No</th>
            <th style="background-color: #95B3D7;">Nama Bagian</th>
            <th style="background-color: #95B3D7;">Nama Jabatan</th>
            <th style="background-color: #95B3D7;">level BOD</th>
            <th style="background-color: #95B3D7;">Standar Formasi(L)</th>
            <th style="background-color: #95B3D7;">Keterangan</th>
            <th style="background-color: #95B3D7;">Norma Jumlah</th>
            <th style="background-color: #95B3D7;">Standar Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach (\App\Models\Nomenklatur::all() as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->bagian->nama_bagian  }}</td>
                <td>{{ $item->jabatan->nama_jabatan }}</td>
                <td>{{ $item->level_bod }}</td>
                <td>{{ $item->standar_formasi }}</td>
                <td>{{ $item->unitusaha->keterangan }}</td>
                <td>{{ $item->unitusaha->norma_jmlh }}</td>
                <td>{{ $item->standar_status }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="9"></td>
        </tr>
        <tr>
            <td colspan="7"></td>
            <td style="background-color: #2c3e50; color: #ffffff">Total</td>
            <td style="background-color: #2c3e50; color: #ffffff">{{ \App\Models\Nomenklatur::all()->count() }}</td>
        </tr>
    </tbody>
</table>
