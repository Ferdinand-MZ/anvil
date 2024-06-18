@extends('layouts._default.app')
@section('content')
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Data Surat Masuk</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <a href="#" class="btn btn-sm btn-success">Print Data</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table v-middle" id="table_arsip_inbox">
                                <thead>
                                    <tr>
                                        <th>Nomor Surat</th>
                                        <th>Jenis Surat</th>
                                        <th>Tanggal</th>
                                        <th>Asal Surat</th>
                                        <th>Perihal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archives as $key => $archive)
                                        <tr>
                                            <td><a href="{{ asset($archive->filepath) }}" download
                                                    style="color: black; text-decoration: none;"
                                                    onmouseover="this.style.color='blue';"
                                                    onmouseout="this.style.color='black';">
                                                    {{ $archive->filename }}
                                                </a></td>
                                            <td>{{ $archive->letterType->name }}</td>
                                            <td>{{ $archive->date_at }}</td>
                                            <td>{{ $archive->letter_from }}</td>
                                            <td>{{ $archive->description }}</td>
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
