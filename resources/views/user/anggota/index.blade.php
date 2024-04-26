@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Order History</div>
                </div>
                <div class="card-body">

                    <div class="d-flex flex-wrap gap-1 mb-3">
                        <a
                            href="{{ route('user.user-anggota.tambah') }}"
                            class="btn btn-sm btn-success"
                        >Tambah Data</a>
                        <a
                            href="{{ route('user.import') }}"
                            class="btn btn-sm btn-success"
                        >Import Data</a>
                    </div>

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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggotas as $key => $anggota)
                                <tr>
                                    <td>
                                        <div class="media-box">
                                            <img
                                                src="{{ $anggota->photo ? asset('storage/' . $anggota->photo) : asset('icon/default.png') }}"
                                                class="media-avatar"
                                                alt="Photo Profile"
                                            >
                                            <div class="media-box-body">
                                                <div class="text-truncate">{{ $anggota->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $anggota->nim }}</td>
                                    <td>{{ $anggota->email ?? 'Belum ada' }}</td>
                                    <td>{{ $anggota->group->name ?? 'Belum ada' }}</td>
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
