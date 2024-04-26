@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">
    <div class="row">
        <div class="col-12 col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Selamat datang, {{ auth()->user()->name }}</h4>
                </div>
                <div class="card-body"></div>
            </div>
        </div>
    </div>
</div>
<!-- Content wrapper end -->

<script>
    new DataTable('#table_user');
</script>

@endsection
