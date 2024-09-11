@extends('layouts._default.guest')
@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/landing.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Fasilitas</h1>
        
                        {{-- <h6 class="text-white mb-2 mt-5">Find Us</h6>
                        <div class="d-flex justify-content-center">
                            <a href="https://www.instagram.com/himatikom.polsub/" target="_blank"><i
                                    class="fab fa-instagram text-lg text-white me-4"></i></a>
                            <a href="https://www.tiktok.com/@himatikom_polsub" target="_blank"><i
                                    class="fab fa-tiktok text-lg text-white me-4"></i></a>
                            <a href="https://www.youtube.com/@mipolsubofficial7516" target="_blank"><i
                                    class="fab fa-youtube text-lg text-white"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        @extends('layouts._default.guest')
        @section('content')
            <header class="bg-gradient-dark">
                <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/landing.jpg') }}');">
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center mx-auto my-auto">
                                <h1 class="text-white">Fasilitas</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        
            <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
                <!-- Carousel -->
                <section class="py-7" id="octagram">
                    <div id="fasilitasCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($fasilitas as $index => $item)
                                <div class="carousel-item @if($index == 0) active @endif">
                                    <img src="{{ asset($item->photo) }}" class="d-block w-100 img-fluid" alt="{{ $item->nama }}" style="max-height: 500px; object-fit: cover;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $item->nama }}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#fasilitasCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
                
            </div>
        @endsection
        
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7" id="octagram">
            
        </section>
    </div>
@endsection
