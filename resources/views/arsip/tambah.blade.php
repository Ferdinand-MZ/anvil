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
                        <div class="card-title">Form Tambah Arsip Data</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('archive.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Row start -->
                            <div class="row">
                                <!--Upload File-->
                                <div class="col-xl-12    col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="filepath" class="form-label">File Upload <small
                                                class="text-danger">*</small></label>
                                        <input type="file" class="form-control" id="filepath" name="filepath"
                                            placeholder="Masukkan nama lengkap">
                                        @error('filepath')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!--Kategori Surat-->
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="archive_category_id" class="form-label">Kategori<small
                                                class="text-danger">*</small></label>
                                        <select class="form-select" id="archive_category_id" name="archive_category_id">
                                            <option value="pilih">--Pilih--</option>
                                            @foreach ($categories as $key => $category)
                                                <option value="{{ $category->id }}"
                                                    data-show-letter-type="{{ $category->id == 3 ? 'true' : 'false' }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('archive_category_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!--Jenis Surat-->
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="letter_type_id" class="form-label">Jenis<small
                                                class="text-danger">*</small></label>
                                        <select class="form-select" id="letter_type_id" name="letter_type_id">
                                            <option value="pilih">--Pilih--</option>
                                            @foreach ($lettertypes as $key => $lettertype)
                                                <option value="{{ $lettertype->id }}">{{ $lettertype->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('letter_type_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!--Tanggal Surat-->
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="date_at" class="form-label">Tanggal Surat</label>
                                        <input type="date" class="form-control" id="date_at" name="date_at"
                                            placeholder="">
                                        @error('date_at')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!--Asal Surat-->
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="letter_from" class="form-label">Asal Surat <small
                                                class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="letter_from" name="letter_from"
                                            placeholder="Masukkan asal surat" value="{{ old('letter_from') }}">
                                        @error('letter_from')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!--Keterangan Surat-->
                                <div class="col-xl-6 col-sm-12 col-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Keterangan<small
                                                class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            placeholder="Masukkan keterangan dokumen" value="{{ old('description') }}">
                                        @error('description')
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
    </script>
@endsection
