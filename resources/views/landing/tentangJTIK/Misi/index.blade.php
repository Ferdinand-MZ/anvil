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
                    <h1 class="text-white">MISI</h1>
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
<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section
        class="py-7"
        id="octagram"
    >
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-12  ms-auto mt-lg-0 mt-4">
                    <div class="card border-none shadow-none">
                        <div class="card-body text-center">
                            <h5 class="font-weight-normal">
                                <a href="#">Misi Kami</a>
                            </h5>
                            <p class="mb-0 text-start">
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
    <!-- END Section with four info areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->

    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
    <!-- -------- START PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
    
    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->
</div>
@endsection
