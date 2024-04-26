@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tabel Pengurus</div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table
                            class="table v-middle"
                            id="table_user"
                        >
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Email</th>
                                    <th>Kelas</th>
                                    <th>Jabatan / Bagian Dari</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengurus as $key => $pengurus)
                                <tr>
                                    <td>
                                        <div class="media-box">
                                            <img
                                                src="{{ $pengurus->photo ? asset('storage/' . $pengurus->photo) : asset('icon/default.png') }}"
                                                class="media-avatar"
                                                alt="Photo Profile"
                                            >
                                            <div class="media-box-body">
                                                <div class="text-truncate">{{ $pengurus->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $pengurus->nim }}</td>
                                    <td>{{ $pengurus->email ?? 'Belum ada' }}</td>
                                    <td>{{ $pengurus->group->name ?? 'Belum ada' }}</td>
                                    <td>{{ $pengurus->organization->name ?? 'Tidak ada' }}</td>
                                    <td>
                                        <a
                                            href="#"
                                            class="badge badge-sm btn-warning"
                                        >Edit</a>
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
    <!-- Row end -->

</div>
<!-- Content wrapper end -->

<script>
    new DataTable('#table_user');
</script>

@endsection
