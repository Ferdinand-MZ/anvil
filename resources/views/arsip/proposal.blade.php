@extends('layouts._default.app')
@section('content')
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Data Proposal</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <a href="{{ route('archive.proposal.print') }}" class="btn btn-sm btn-success">Print Data</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table v-middle" id="table_arsip_inbox">
                                <thead>
                                    <tr>
                                        <th>Nomor Dokumen</th>
                                        <th>Jenis Dokumen</th>
                                        <th>Tanggal</th>
                                        <th>Asal Dokumen</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proposals as $key => $proposal)
                                        <tr>
                                            <td><a href="{{ asset($proposal->filepath) }}" download
                                                    style="color: black; text-decoration: none;"
                                                    onmouseover="this.style.color='blue';"
                                                    onmouseout="this.style.color='black';">
                                                    {{ $proposal->filename }}
                                                </a></td>
                                            <td>{{ $proposal->archiveCategory->name }}</td>
                                            <td>{{ $proposal->date_at }}</td>
                                            <td>{{ $proposal->letter_from }}</td>
                                            <td>{{ $proposal->description }}</td>
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
        new DataTable('#table_arsip_inbox');
    </script>
@endsection
