@extends('layouts._default.guest')
@section('content')

<header class="bg-gradient-dark">
    <div class="page-header min-vh-75">
    </div>
</header>

<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">

        {{-- <div class="d-flex mb-3">
           <a href="/">Home</a> / <a href="/berita">Berita</a> / {{$berita->judul}}
        </div> --}}

        <img src="{{ asset('storage/artikel/' . $berita->foto) }}" class="img-fluid mb-3 d-block mx-auto" alt="">

        <div class="konten-berita">
            {{-- @foreach($beritas as $berita) --}}
            <p class="mb-3 text-secondary">{{ $berita->created_at}}</p>
            <h4 class="fw-bold mb-3">{{$berita->judul}}</h4>
            <p class="text-secondary">{!!$berita->isi!!}</p>


    </div>
</section>

@endsection