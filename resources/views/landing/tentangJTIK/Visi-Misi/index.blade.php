@extends('layouts._default.guest')
@section('content')
<!-- -------- START HEADER 7 w/ text and video ------- -->
<header class="bg-gradient-dark">
    <div
        class="page-header min-vh-75"
        style="background-image: url('{{ asset('icon/landing.jpg') }}');"
    >
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mx-auto my-auto">
                    <h1 class="text-white">VISI & MISI</h1>
                    <p class="lead mb-4 text-white opacity-8"></p>
                    <h6 class="text-white mb-2 mt-5">Find Us</h6>
                    <div class="d-flex justify-content-center">
                        <a
                            href="https://www.instagram.com/himatikom.polsub/"
                            target="_blank"
                        ><i class="fab fa-instagram text-lg text-white me-4"></i></a>
                        <a
                            href="https://www.tiktok.com/@himatikom_polsub"
                            target="_blank"
                        ><i class="fab fa-tiktok text-lg text-white me-4"></i></a>
                        <a
                            href="https://www.youtube.com/@mipolsubofficial7516"
                            target="_blank"
                        ><i class="fab fa-youtube text-lg text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- -------- END HEADER 7 w/ text and video ------- -->
<div class="shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section
        class="py-7"
        id="octagram"
    >
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  ms-auto mt-lg-0 mt-4">
                    <div class="card shadow-xl h-100 px-6 py-6 outline" style="background-color: #F5F7F8">
                        <div class="card-body text-center">
                            <h4 class="font-weight-bold">
                                Visi Kami
                            </h4>
                            <p class="mb-0 text-center">
                                Pada tahun 2030 menjadi salah satu Program Studi terbaik di Bidang Manajemen Informatika secara nasional untuk mendukung perkembangan industri
                            </p>
                            <img src="{{ asset('assets/Img/Visi.png') }}" alt="" srcset="" class="w-50">
                        </div>
                    </div>
                </div>
                    <div class="col-lg-6  ms-auto mt-lg-0 mt-4">
                        <div class="card shadow-xl h-100 px-6 py-6 outline" style="background-color: #F5F7F8" >
                            <div class="card-body text-center">
                                <h4 class="font-weight-bold">
                                    Misi Kami
                                </h4>
                                <p class="mb-0 text-justify">
                                    1. Menyelenggarakan proses pembelajaran berkualitas dengan peningkatan berkelanjutan yang relevan dengan kebutuhan pemangku kepentingan dalam bidang sistem informasi. <br>
                                    2. Mengembangkan penelitian terapan di bidang sistem informasi. <br>
                                    3. Melaksanakan kegiatan pengabdian kepada masyarakat dibidang sistem informasi untuk meningkatkan sumber daya dan kesejahteraan masyarakat. <br>
                                    4. Mengembangkan kerjasama dengan industri, asosiasi, dan institusi, guna menghasilkan mutu lulusan dan sumber daya manusia yang profesional, berjiwa wirausaha dan berkarakter. <br>
                                </p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
</div>
@endsection
