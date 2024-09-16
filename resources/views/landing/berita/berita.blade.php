@extends('layouts._default.guest')
@section('content')

<section class="pb-5 position-relative bg-gradient-dark mx-n3" id="berita">
    <div class="container py-5">

        <div class="header-berita text-center">
                <h2 class="fw-bold bg-white">Berita Terkini Di HIMATIKOM</h2>
        </div>

        <div class="row py-5" data-aos="flip-up">
            @foreach($beritas as $berita)
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/artikel/' . $berita->foto)}}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="mb-3">{{ $berita->created_at}}</p>
                        <h4 class="fw-bold mb-3">{{ $berita->judul}}</h4>
                        <p class="text-secondary"></p>
                        <a href="/detail/{{$berita->slug}}" class="text-decoration-none text-danger">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
</section>

@endsection