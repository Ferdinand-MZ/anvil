@extends('layouts._default.app')
@section('content')
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tabel Arsip Data</div>
                    </div>
                    <div class="card-body">

                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <a href="{{ route('archive.create') }}" class="btn btn-sm btn-success">Tambah Data</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table v-middle" id="table_arsip">
                                <thead>
                                    <tr>
                                        <th>Dibuat Oleh</th>
                                        <th>Nama File</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archives as $key => $archive)
                                        <tr>
                                            <td>{{ $archive->user->name }}</td>
                                            <td><a href="{{ asset($archive->filepath) }}"
                                                    download>{{ $archive->filename }}</a></td>
                                            <td>{{ $archive->archive_category->name }}</td>
                                            <td>
                                                <a href="/admin/archive/{{ $archive->uuid }}/edit"
                                                    class="badge badge-sm btn-primary">Edit</a>
                                                {{-- <form action="{{ route('archive.destroy', $archive->uuid) }}" method="POST"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="badge btn-danger badge-sm"
                                                        onclick="confirmDelete()">Delete</button>
                                                </form> --}}
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
        new DataTable('#table_arsip');

        function confirmDelete(uuid) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + uuid).submit();
                }
            })
        }
    </script>
@endsection
