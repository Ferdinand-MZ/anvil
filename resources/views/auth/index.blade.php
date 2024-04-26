@extends('layouts._default.auth')
@section('content')
<!-- Login box start -->
<form
    action="{{ route('credentials') }}"
    method="POST"
>
    @csrf
    <div class="login-box">
        <div class="login-form">
            <a
                href="#"
                class="login-logo"
            >
                <img
                    src="{{ asset('icon/logo-himpunan.png') }}"
                    alt="HIMATIKOM POLSUB"
                />
            </a>
            <div class="login-welcome">
                Selamat datang!, <br />Harap login untuk memulai sesi
            </div>
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input
                    name="nim"
                    type="text"
                    class="form-control"
                    value="{{ old('nim') }}"
                >
                @error('nim')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <label class="form-label">Password</label>
                    <a
                        href="#"
                        class="btn-link ml-auto"
                    >Forgot password?</a>
                </div>
                <input
                    name="password"
                    type="password"
                    class="form-control"
                >
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="login-form-actions">
                <button
                    type="submit"
                    class="btn"
                > <span class="icon"> <i class="bi bi-arrow-right-circle"></i> </span>
                    Login</button>
            </div>
        </div>
    </div>
</form>
<!-- Login box end -->
@endsection
