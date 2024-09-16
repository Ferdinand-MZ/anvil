@extends('layouts._default.guest')
@section('content')

<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">

        {{-- <div class="header-berita text-center">
                <h2 class="fw-bold bg-white">Berita Terkini Di HIMATIKOM</h2>
        </div> --}}

        <div class="d-flex mb-3">
           <a href="/">Home</a> / <a href="/berita">Berita</a> / {{$berita->judul}}
        </div>

        <img src="{{ asset('storage/artikel/' . $berita->foto)}}" class="img-fluid mb-3" alt="">
        <div class="konten-berita">
            {{-- @foreach($beritas as $berita) --}}
            <p class="mb-3 text-secondary">{{ $berita->created_at}}</p>
            <h4 class="fw-bold mb-3">{{$berita->judul}}</h4>
            <p class="text-secondary">{!!$berita->isi!!}</p>


        <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>

@endsection