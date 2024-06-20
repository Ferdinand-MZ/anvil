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
                @foreach ($proposals as $key => $proposal)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $proposal->filename }}</td>
                        <td>{{ $proposal->archiveCategory->name }}</td>
                        <td>{{ $proposal->date_at }}</td>
                        <td>{{ $proposal->letter_from }}</td>
                        <td>{{ $proposal->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
