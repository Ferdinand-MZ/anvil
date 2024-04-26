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
                    <div class="card-title">Import Data</div>
                </div>
                <div class="card-body">
                    <form
                        action="{{ route('user.import.store') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <!-- Row start -->
                        <div class="row">
                            <div class="col-xl-6 col-sm-12 col-12">
                                <div class="mb-3">
                                    <label
                                        for="name"
                                        class="form-label"
                                    >Upload File</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        id="import_file"
                                        name="import_file"
                                    >
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
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
