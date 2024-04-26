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
                    <div class="card-title">Form Ubah Profile</div>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('profile.change-profile.store') }}"
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
                                    >Nama Lengkap <small class="text-danger">*</small></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        placeholder="Masukkan nama lengkap"
                                        value="{{ old('name') ? old('name') : auth()->user()->name }}"
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
                                    >Email <small class="text-danger">*</small></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="email"
                                        name="email"
                                        placeholder="Masukkan alamat email"
                                        value="{{ old('email') ? old('email') : auth()->user()->email }}"
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
                                    >Nomor Telepon <small class="text-danger">*</small></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="phone"
                                        name="phone"
                                        placeholder="628123141231"
                                        value="{{ old('phone') ? old('phone') : auth()->user()->phone }}"
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
                                    >Angkatan <small class="text-danger">*</small></label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="generation"
                                        name="generation"
                                        placeholder="628123141231"
                                        value="{{ old('generation') ? old('generation') : auth()->user()->generation }}"
                                    >
                                    @error('generation')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="study_program_id"
                                        class="form-label"
                                    >Program Studi <small class="text-danger">*</small></label>
                                    <select
                                        name="study_program_id"
                                        id="study_program_id"
                                        class="form-select"
                                    >
                                        <option
                                            value="pilih"
                                            {{ auth()->user()->study_program_id ? '' : 'selected' }}
                                        >-- Pilih --</option>
                                        @foreach ($study_programs as $key => $study_program)
                                        <option
                                            value="{{ $study_program->id }}"
                                            {{ auth()->user()->study_program_id == $study_program->id ? 'selected' : '' }}
                                        >{{ $study_program->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('sudy_program_id')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="group_id"
                                        class="form-label"
                                    >Kelas <small class="text-danger">*</small></label>
                                    <select
                                        name="group_id"
                                        id="group_id"
                                        class="form-select"
                                    >
                                        <option
                                            value="pilih"
                                            {{ auth()->user()->group_id ? '' : 'selected' }}
                                        >-- Pilih --</option>
                                        @foreach ($kelas as $key => $kelas)
                                        <option
                                            value="{{ $kelas->id }}"
                                            {{ auth()->user()->group_id == $kelas->id ? 'selected' : '' }}
                                        >{{ $kelas->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('group_id')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="form-actions-footer">
                                    <a
                                        href="{{ route('profile') }}"
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
