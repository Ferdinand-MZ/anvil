@extends('layouts._default.pdf')
@section('content')
<div style="overflow-x: auto;">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor Surat</th>
                <th>Jenis Surat</th>
                <th>Tanggal</th>
                <th>Asal Surat</th>
                <th>Perihal</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ($archives as $key => $archive)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $archive->filename }}</td>
                    <td>{{ $archive->letterType->name }}</td>
                    <td>{{ $archive->date_at }}</td>
                    <td>{{ $archive->letter_from }}</td>
                    <td>{{ $archive->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
