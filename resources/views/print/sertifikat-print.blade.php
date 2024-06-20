@extends('layouts._default.pdf')
@section('content')
    <div style="overflow-x: auto;">
        <table id="table_arsip_inbox">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Dokumen</th>
                    <th>Nama Dokumen</th>
                    <th>Tanggal</th>
                    <th>Asal Dokumen</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($certificates as $key => $certificate)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $certificate->filename }}</td>
                        <td>{{ $certificate->archiveCategory->name }}</td>
                        <td>{{ $certificate->date_at }}</td>
                        <td>{{ $certificate->letter_from }}</td>
                        <td>{{ $certificate->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
