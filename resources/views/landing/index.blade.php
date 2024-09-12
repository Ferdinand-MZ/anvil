@extends('layouts._default.guest')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/landing.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto position-relative">
                        <h1 class="text-white position-relative">JURUSAN TEKNOLOGI & INFORMASI
                            <div class="line"></div>
                        </h1>
                        <p class="lead mb-4 text-white opacity-8">Yes we are HIMATIKOM.
                            <br>
                            Always is the best, Always in my souls, Never surrender.
                            <br>
                            Our pride our family.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7" id="octagram">
            <div class="container">
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
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->
        <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
        <section class="pb-5 position-relative bg-gradient-dark mx-n3" id="our_team">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mb-5 mt-5">
                        <h3 class="text-white z-index-1 position-relative">Berita Terbaru</h3>
                        <span class="text-secondary">Update Terkini</span>
                    </div>
                </div>
                <div id="newsCarousel" class=" text-center carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($pengurus_harians->chunk(3) as $key => $chunk)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="row justify-content-center">
                                    @foreach ($chunk as $pengurus_harian)
                                        <div class="col-lg-4 col-md-6 col-12 my-3">
                                            <div class="card border-0 shadow-lg rounded">
                                                <a href="#">
                                                    <img class="card-img-top rounded-top"
                                                        src="{{ asset($pengurus_harian->photo) }}"
                                                        alt="Photo of {{ $pengurus_harian->name }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title mb-2">{{ $pengurus_harian->name }}</h5>
                                                    <p class="card-text text-secondary">{{ $pengurus_harian->description }}
                                                    </p>
                                                    <a href="#" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                                                </div>
                                                <div class="card-footer text-muted text-end">
                                                    {{ $pengurus_harian->date ?? '11 September 2024' }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#newsCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#newsCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </section>




        <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
        <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
        <section class="my-5 pt-5" id="feedback">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="card shadow-none">
                            <div class="card-header">
                                <h4>Berikan Feedback</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="input-group input-group-dynamic">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="input-group mb-4 input-group-static">
                                    <label>Your message</label>
                                    <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn bg-gradient-dark w-100">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <div class="position-relative">
                            <img class="max-width-50 w-100 position-relative z-index-2"
                                src="{{ asset('material-kit') }}/assets/img/macbook.png" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    </div>
@endsection
