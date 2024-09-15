@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row">
        <div class="col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tabel Berita</div>
                </div>
                <div class="card-body">

                    <div class="d-flex flex-wrap gap-1 mb-3">
                        <a
                            href="{{ route('proker-agenda.proker.tambah') }}"
                            class="btn btn-sm btn-success"
                        >Buat Artikel</a>
                    </div>

                    <div class="table-responsive">
                        <table
                            class="table v-middle"
                            id="table_proker"
                        >
                            <thead>
                                <tr>
                                    <th style="text-align: center; vertical-align: middle;">Dibuat Oleh</th>
                                    <th style="text-align: center; vertical-align: middle;">Nama</th>
                                    <th style="text-align: center; vertical-align: middle;">Dari</th>
                                    <th style="text-align: center; vertical-align: middle;">Status</th>
                                    <th style="text-align: center; vertical-align: middle;">Tanggal Acara</th>
                                    <th style="text-align: center; vertical-align: middle;">Tanggal Mulai</th>
                                    <th style="text-align: center; vertical-align: middle;">Tanggal Selesai</th>
                                    <th style="text-align: center; vertical-align: middle;">Aksi</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach ($prokers as $key => $proker)
                                <tr>
                                    <td style="text-align: center; vertical-align: middle;">{{ $proker->user->name }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $proker->name }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $proker->biro_department->name }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ ucfirst($proker->status) }}</td>
                                    <td style="text-align: center; vertical-align: middle;">{{ $proker->event_day }}</td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        {{ $proker->event_start ? substr($proker->event_start, 0, 10) : 'Belum dimulai' }}
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
                                        {{ $proker->event_finish ? substr($proker->event_finish, 0, 10) : 'Belum Selesai' }}
                                    </td>
                                    <td style="text-align: center; vertical-align: middle;">
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
                            </tbody> --}}
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
