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
                    <div class="card-title">Form Tambah Anggota</div>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('user.user-anggota.store') }}"
                        method="post"
                    >
                        @csrf
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="name"
                                        class="form-label"
                                    >Nama Lengkap</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="Masukkan nama lengkap"
                                    >
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="email"
                                        class="form-label"
                                    >Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Masukkan alamat email"
                                    >
                                    @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="phone"
                                        class="form-label"
                                    >Nomor Telp</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        placeholder="628123456768"
                                    >
                                    @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="generation"
                                        class="form-label"
                                    >Angkatan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="generation"
                                        name="generation"
                                        placeholder="Masukkan tahun angkatan"
                                    >
                                    @error('generation')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="nim"
                                        class="form-label"
                                    >NIM</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nim"
                                        name="nim"
                                        placeholder="Masukkan nim mahasiswa"
                                    >
                                    @error('nim')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="study_program_id"
                                        class="form-label"
                                    >Program Studi</label>
                                    <select
                                        class="form-select"
                                        id="study_program_id"
                                        name="study_program_id"
                                    >
                                        <option value="pilih">--Pilih--</option>
                                        @foreach ($study_programs as $key => $study_program)
                                        <option value="{{ $study_program->id }}">{{ $study_program->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('study_program_id')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="group_id"
                                        class="form-label"
                                    >Kelas</label>
                                    <select
                                        class="form-select"
                                        id="group_id"
                                        name="group_id"
                                    >
                                        <option value="pilih">--Pilih--</option>
                                        @foreach ($kelas as $key => $kelas)
                                        <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-actions-footer">
                                    <a
                                        href="{{ route('user.user-anggota') }}"
                                        class="btn btn-light"
                                    >Batankan</a>
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
    new DataTable('#table_user');
</script>

@endsection
