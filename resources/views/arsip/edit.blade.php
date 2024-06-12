@extends('layouts._default.app')
@section('content')
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row">
            <div class="col-sm-6 col-12">

                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Form Edit Arsip Data</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('archive.update', $archive->uuid) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Row start -->
                            <div class="row">
                                <div class="col-xl-12 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="filename" class="form-label">Nama File <small
                                                class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="filename" name="filename"
                                            placeholder="Masukkan keterangan dokumen" value="{{ $archive->filename }}">
                                        @error('filename')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="archive_category_id" class="form-label">Kategori<small
                                                class="text-danger">*</small></label>
                                        <select class="form-select" id="archive_category_id" name="archive_category_id">
                                            {{-- <option value="pilih">--Pilih--</option> --}}
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $archive->archive_category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('archive_category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <input type="hidden" name="oldFilepath" value="{{ $archive->filepath }}">
                                        <input type="file" class="form-control" id="filepath" name="filepath"
                                            placeholder="Masukkan file">

                                        <div id="file-preview" class="my-3">
                                            <!-- Placeholder for file preview -->
                                        </div>
                                        @error('filepath')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="form-actions-footer">
                                        <a href="{{ route('archive.index') }}" class="btn btn-light">Batalkan</a>
                                        <button class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                        </form>
                    </div>
                </div>
                <!-- Card end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

    <script>
        new DataTable('#table_arsip');

        document.addEventListener('DOMContentLoaded', function() {
        const fileInput = document.getElementById('filepath');
        const filePreview = document.getElementById('file-preview');
        const existingFilePath = "{{ asset($archive->filepath) }}";
        const existingFileName = "{{ basename($archive->filepath) }}";

        // Display existing file preview
        if (existingFilePath) {
            filePreview.innerHTML =
                `<p>Current file: <a href="${existingFilePath}" target="_blank">${existingFileName}</a></p>`;
        }

        // Handle file input change event
        fileInput.addEventListener('change', function() {
            filePreview.innerHTML = ''; // Clear previous preview
            const file = fileInput.files[0];
            if (file) {
                const fileURL = URL.createObjectURL(file);
                filePreview.innerHTML =
                    `<p>Selected file: <a href="${fileURL}" target="_blank">${file.name}</a></p>`;
            }
        });
    });
    </script>
@endsection
