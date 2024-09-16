@extends('layouts._default.guest')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/landing.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto position-relative">
                        <h1 class="text-white position-relative">Berita Terkini
                            <div class="line"></div>
                        </h1>
                        {{-- <p class="lead mb-4 text-white opacity-8">Yes we are HIMATIKOM.
                            <br>
                            Always is the best, Always in my souls, Never surrender.
                            <br>
                            Our pride our family.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
            <section class="py-7" id="octagram">
                {{-- <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <a class="d-block blur-shadow-image">
                                        <img src="{{ asset('icon/octagram-no-bg.png') }}" alt="img-colored-shadow"
                                            class="img-fluid border-radius-lg">
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="font-weight-normal">
                                        <a href="#">Memperkenalkan Kabinet Octagram</a>
                                    </h5>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fugiat laudantium in
                                        eaque recusandae obcaecati!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  ms-auto mt-lg-0 mt-4">
                            <div class="card border-none shadow-none">
                                <div class="card-body text-center">
                                    <h5 class="font-weight-normal">
                                        <a href="#">Penjelasan</a>
                                    </h5>
                                    <p class="mb-0 text-justify">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore numquam, suscipit
                                        porro labore aliquid odit dolore unde illo ipsa molestias corporis tempora sapiente quia
                                        ratione quo mollitia ipsam atque vero! Maiores, consectetur assumenda. Assumenda
                                        provident, quos quae quasi iure vero vitae cumque! Facere dolore necessitatibus vitae,
                                        iusto aspernatur incidunt neque doloremque cupiditate aliquid pariatur ad quas culpa,
                                        nisi rerum, placeat omnis eos provident voluptatibus laudantium similique recusandae?
                                        Placeat, vel, itaque est laborum ullam inventore earum, asperiores sapiente cumque
                                        corporis adipisci pariatur harum hic nemo aperiam recusandae dolorum? Dolorem porro
                                        aperiam perferendis, esse incidunt sequi sint ipsum debitis aliquid dicta vitae!
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi neque reprehenderit
                                        libero quod similique sequi sunt vero ad doloribus praesentium quasi quas atque placeat,
                                        eos a! Repudiandae odio a praesentium, fugit eos fugiat minus illum reprehenderit
                                        laborum vero voluptates, facilis eum distinctio earum dolores sint repellat quas eaque
                                        quasi est totam! Minima, molestias cum esse nulla libero quidem facilis corporis
                                        aspernatur ipsa officia fugiat repudiandae fugit eaque exercitationem dicta autem
                                        aliquam magni deleniti facere. Id assumenda dolores fugiat quibusdam nulla, ex excepturi
                                        itaque dicta ab quod dolorum, suscipit illum perferendis voluptate praesentium sit porro
                                        neque cupiditate enim expedita quo nemo.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}

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
            </section>
        <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    </div>
@endsection
    