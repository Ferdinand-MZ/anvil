<!-- Navbar Transparent -->
<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent ">
    <div class="container">
        <a
            class="navbar-brand  text-white "
            href="#"
            title="Designed and Coded by Creative Tim"
        >
            JTIK POLSUB
        </a>
        <button
            class="navbar-toggler shadow-none ms-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navigation"
            aria-controls="navigation"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div
            class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5"
            id="navigation"
        >
            <ul class="navbar-nav navbar-nav-hover ms-auto">
                <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-3">
                    <a
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        id="dropdownMenuPages8"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Tentang JTIK
                        <img
                            src="{{ asset('material-kit') }}/assets/img/down-arrow-white.svg"
                            alt="down-arrow"
                            class="arrow ms-2 d-lg-block d-none"
                        >
                        <img
                            src="{{ asset('material-kit') }}/assets/img/down-arrow-dark.svg"
                            alt="down-arrow"
                            class="arrow ms-2 d-lg-none d-block"
                        >
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
                        aria-labelledby="dropdownMenuPages8"
                    >
                        <div class="d-none d-lg-block">
                            <a
                                href="{{ request()->route()->getName() == 'visi' ? '#octagram' : route('visi') }}"
                                class="dropdown-item border-radius-md mt-2 mb-2"
                            >
                                <span>Visi</span>
                            </a>
                            <a
                                href="{{ request()->route()->getName() == 'misi' ? '#our_team' : route('misi') }}"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Misi</span>
                            </a>
                            <a
                                href="{{ request()->route()->getName() == 'tujuan' ? '#feedback' : route('tujuan') }}"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Tujuan</span>
                            </a>
                            <a
                                href="{{ request()->route()->getName() == 'riwayat-singkat' ? '#feedback' : route('riwayat-singkat') }}"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Riwayat Singkat</span>
                            </a>
                            <a
                                href="{{ request()->route()->getName() == 'landing' ? '#feedback' : route('landing') }}"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Struktur Organisasi</span>
                            </a>
                            <a
                                href="{{ request()->route()->getName() == 'landing' ? '#feedback' : route('landing') }}"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Fasilitas</span>
                            </a>
                            <a
                                href="{{ request()->route()->getName() == 'landing' ? '#feedback' : route('landing') }}"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Kompetensi Lulusan</span>
                            </a>
                        </div>
                        <div class="d-lg-none">
                            <a
                                href="#visi"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Visi</span>
                            </a>
                            <a
                                href="#our_team"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Misi</span>
                            </a>
                            <a
                                href="#feedback"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Tujuan</span>
                            </a>
                            <a
                                href="#feedback"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Riwayat Singkat</span>
                            </a>
                            <a
                                href="#feedback"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Struktur Organisasi</span>
                            </a>
                            <a
                                href="#feedback"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Fasilitas</span>
                            </a>
                            <a
                                href="#feedback"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>Kompetensi Lulusan</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-3">
                    <a
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        id="dropdownMenuPages8"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                        Program Studi
                        <img
                            src="{{ asset('material-kit') }}/assets/img/down-arrow-white.svg"
                            alt="down-arrow"
                            class="arrow ms-2 d-lg-block d-none"
                        >
                        <img
                            src="{{ asset('material-kit') }}/assets/img/down-arrow-dark.svg"
                            alt="down-arrow"
                            class="arrow ms-2 d-lg-none d-block"
                        >
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
                        aria-labelledby="dropdownMenuPages8"
                    >
                        <div class="d-none d-lg-block">
                            <a
                                href="{{ request()->route()->getName() == 'landing' ? '#octagram' : route('landing') }}"
                                class="dropdown-item border-radius-md mt-2 mb-2"
                            >
                                <span>D-III Sistem Informasi</span>
                            </a>
                            <a
                                href="{{ request()->route()->getName() == 'landing' ? '#our_team' : route('landing') }}"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>D-IV Teknologi Rekayasa Perangkat Lunak</span>
                            </a>
                        </div>
                        <div class="d-lg-none">
                            <a
                                href="#octagram"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>D-III Sistem Informasi</span>
                            </a>
                            <a
                                href="#our_team"
                                class="dropdown-item border-radius-md mb-2"
                            >
                                <span>D-IV Teknologi Rekayasa Perangkat Lunak</span>
                            </a>
                        </div>
                    </div>
                </li>
                @auth
                <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-3">
                    <a
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        id="dropdownMenuPages8"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="material-icons opacity-6 me-2 text-md">person</i>
                        {{ auth()->user()->name }}
                        <img
                            src="{{ asset('material-kit') }}/assets/img/down-arrow-white.svg"
                            alt="down-arrow"
                            class="arrow ms-2 d-lg-block d-none"
                        >
                        <img
                            src="{{ asset('material-kit') }}/assets/img/down-arrow-dark.svg"
                            alt="down-arrow"
                            class="arrow ms-2 d-lg-none d-block"
                        >
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
                        aria-labelledby="dropdownMenuPages8"
                    >
                        <div class="d-none d-lg-block">
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                Kelola Akun
                            </h6>
                            <a
                                href="{{ route('my-profile') }}"
                                class="dropdown-item border-radius-md"
                            >
                                <span>Profile</span>
                            </a>
                            <a
                                href="{{ route('absensi-online') }}"
                                class="dropdown-item border-radius-md"
                            >
                                <span>Absensi</span>
                            </a>
                            <a
                                onclick="handleLogout()"
                                class="dropdown-item border-radius-md"
                            >
                                <span>Logout</span>
                            </a>
                        </div>
                        <div class="d-lg-none">
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                Kelola Akun
                            </h6>
                            <a
                                href="{{ route('my-profile') }}"
                                class="dropdown-item border-radius-md"
                            >
                                <span>Profile</span>
                            </a>
                            <a
                                href="{{ route('absensi-online') }}"
                                class="dropdown-item border-radius-md"
                            >
                                <span>Absensi</span>
                            </a>
                            <a
                                onclick="handleLogout()"
                                class="dropdown-item border-radius-md"
                            >
                                <span>Logout</span>
                            </a>
                        </div>
                    </div>
                </li>
                @endauth
                <li class="nav-item my-auto ms-3 me-lg-0">
                    @guest
                    <a
                        href="{{ route('login') }}"
                        class="btn btn-sm  btn-success  mb-0 me-1 mt-2 mt-md-0"
                    >Login</a>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
