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
                        action="{{ route('profile.change-password.store') }}"
                        method="post"
                    >
                        @csrf
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="old_password"
                                        class="form-label"
                                    >Password Lama <small class="text-danger">*</small></label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="old_password"
                                        name="old_password"
                                        placeholder="Inputkan password lama"
                                    >
                                    @error('old_password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="new_password"
                                        class="form-label"
                                    >Password Baru <small class="text-danger">*</small></label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="new_password"
                                        name="new_password"
                                        placeholder="Inputkan password baru"
                                    >
                                    @error('new_password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="repeat_password"
                                        class="form-label"
                                    >Password Baru <small class="text-danger">*</small></label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        id="repeat_password"
                                        name="repeat_password"
                                        placeholder="Ulangi password baru"
                                    >
                                    @error('repeat_password')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="
                                        col-xl-6
                                        col-sm-12
                                        col-12">
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
