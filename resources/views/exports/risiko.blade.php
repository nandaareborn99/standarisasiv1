<table border="1">
    <thead>
        <tr>
            <th colspan="9" align="center" style="font-size:16px; font-weight: bold;">FORM PROFIL RISIKO 2021</th>
        </tr>
        <tr>
            <th colspan="9" align="center" style="font-size:16px; font-weight: bold;">PT PERKEBUNAN NUSATARA VI</th>
        </tr>
        <tr>
            <th style="background-color: #95B3D7;">No</th>
            <th style="background-color: #95B3D7;">No_ Register</th>
            <th style="background-color: #95B3D7;">Peristiwa_Risiko_Indikator</th>
            <th style="background-color: #95B3D7;">Mitigasi</th>
            <th style="background-color: #95B3D7;">Likelihood (L)</th>
            <th style="background-color: #95B3D7;">Impact (I)</th>
            <th style="background-color: #95B3D7;">Skor (L x I)</th>
            <th style="background-color: #95B3D7;">Level</th>
            <th style="background-color: #95B3D7;">Lokasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($risiko as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nomor_register }}</td>
                <td>{{ $item->risiko }}</td>
                <td>{{ $item->usulan_mitigasi }}</td>
                <td>{{ $item->likelihood }}</td>
                <td>{{ $item->impact }}</td>
                <td>{{ $item->score }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->bagian->nama_bagian }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="9"></td>
        </tr>
        <tr>
            <td colspan="7"></td>
            <td style="background-color: #2c3e50; color: #ffffff">Total</td>
            <td style="background-color: #2c3e50; color: #ffffff">{{ $risiko->count() }}</td>
        </tr>
    </tbody>
</table>
