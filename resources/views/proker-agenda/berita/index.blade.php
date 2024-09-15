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

                    <div class="d-flex flex-wrap gap-1 mb-3">
                        <a
                            href="{{ route('proker-agenda.proker.tambah') }}"
                            class="btn btn-sm btn-success"
                        >Tambah Data</a>
                    </div>

                    <div class="table-responsive">
                        <table
                            class="table v-middle"
                            id="table_proker"
                        >
                            <thead>
                                <tr>
                                    <th>Dibuat Oleh</th>
                                    <th>Nama</th>
                                    <th>Dari</th>
                                    <th>Status</th>
                                    <th>Tanggal Acara</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prokers as $key => $proker)
                                <tr>
                                    <td>{{ $proker->user->name }}</td>
                                    <td>{{ $proker->name }}</td>
                                    <td>{{ $proker->biro_department->name }}</td>
                                    <td>{{ ucfirst($proker->status) }}</td>
                                    <td>{{ $proker->event_day }}</td>
                                    <td>
                                        {{ $proker->event_start ? substr($proker->event_start, 0, 10) : 'Belum dimulai' }}
                                    </td>
                                    <td>
                                        {{ $proker->event_finish ? substr($proker->event_finish, 0, 10) : 'Belum Selesai' }}
                                    </td>
                                    <td>
                                        <a
                                            href="#"
                                            class="badge badge-sm btn-warning"
                                        >Edit</a>
                                        <a
                                            href="{{ route('proker-agenda.proker.detail', ['uuid' => $proker->uuid]) }}"
                                            class="badge badge-sm btn-primary"
                                        >Detail</a>
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
    new DataTable('#table_proker');
</script>

@endsection
