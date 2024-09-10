@extends('layouts._default.guest')
@section('content')
<style>
    /* Hide the checkbox input */
    input[type="checkbox"] {
            display: none;
        }

        /* Style the label to look clickable */
        label {
            cursor: pointer;
            font-weight: bold;
            margin-top: 20px;
            display: block;
        }
        /* Hide the content by default */
        .dropdown-content {
            display: none;
            margin-left: 20px;
            padding-left: 20px;
            border-left: 2px solid #ccc;
        }

        /* Show the content when the checkbox is checked */
        input[type="checkbox"]:checked + label + .dropdown-content {
            display: block;
        }
</style>
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('{{ asset('icon/landing.jpg') }}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">STRUKTUR ORGANISASI</h1>
                        <p class="lead mb-4 text-white opacity-8"></p>
                        <h6 class="text-white mb-2 mt-5">Find Us</h6>
                        <div class="d-flex justify-content-center">
                            <a href="https://www.instagram.com/himatikom.polsub/" target="_blank"><i
                                    class="fab fa-instagram text-lg text-white me-4"></i></a>
                            <a href="https://www.tiktok.com/@himatikom_polsub" target="_blank"><i
                                    class="fab fa-tiktok text-lg text-white me-4"></i></a>
                            <a href="https://www.youtube.com/@mipolsubofficial7516" target="_blank"><i
                                    class="fab fa-youtube text-lg text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->
    <div class="shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7" id="octagram">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12  ms-auto mt-lg-0 mt-4">
                        <div class="card shadow-xl h-100 px-6 py-6 outline" style="background-color: #F5F7F8"">
                            <div class="card-body text-center">
                                <h4 class="font-weight-bold">
                                    Struktur Organisasi
                                </h4>
                            </div>

                            {{-- ! Table Manajemen Jurusan Periode 2021-2024 --}}
                            <label for="" class="text text-start fs-6 text-bold">A. Manajemen Jurusan Periode
                                2021-2024</label>
                            <table class="styled-table mt-2">
                                <thead>
                                    <tr>
                                        <th class="w-20">No</th>
                                        <th class="w-40">Jabatan</th>
                                        <th class="w-40">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ketua Jurusan</td>
                                        <td>Tri Herdiawan A., S.ST., M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sekretaris Jurusan</td>
                                        <td>Rian Piarna, S.E., M.M.</td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- !  Table Program Studi --}}
                            <label for="" class="text text-start fs-6 text-bold mt-3">B. Program Studi</label>
                            <table class="styled-table mt-2">
                                <thead>
                                    <tr>
                                        <th class="w-20">No</th>
                                        <th class="w-40">Jabatan</th>
                                        <th class="w-40">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ka. Prodi D-III Sistem Informasi</td>
                                        <td>Dwi Vernanda, S.T., M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ka. Prodi D-IV Teknologi Rekayasa Perangkat Lunak</td>
                                        <td>Mohammad Iqbal, S.Kom., M.T.</td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- ! Table Kelompok Bidang Keahlian --}}
                            <label for="" class="text text-start fs-6 text-bold mt-3">C. Kelompok Bidang Keahlian
                                (KBK)</label>
                            <table class="styled-table mt-2">
                                <thead>
                                    <tr>
                                        <th class="w-20">No</th>
                                        <th class="w-40">Jabatan</th>
                                        <th class="w-40">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ka. KBK Sistem Informasi dan Database</td>
                                        <td>Mohammad Iqbal, S.Kom, M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ka. KBK Teknologi Informasi & Rekayasa Perangkat Lunak</td>
                                        <td>Slamet Rahayu, S.Pd., M.Pd</td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- ! Table Laboratorium --}}
                            <label for="" class="text text-start fs-6 text-bold mt-3">D. Laboratorium</label>
                            <table class="styled-table mt-2">
                                <thead>
                                    <tr>
                                        <th class="w-20">No</th>
                                        <th class="w-40">Jabatan</th>
                                        <th class="w-40">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Ka. Lab. Sistem Informasi</td>
                                        <td>Taufan Abdurrachman, S.T., M.Kom.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ka. Lab. Manajemen Data dan Informasi</td>
                                        <td>Haryati, S.Pd., M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ka. Lab. Rekayasa Perangkat Lunak</td>
                                        <td>Sari Azhariyah, S.Pd, M.Pd.T.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ka. Lab. Komputer dan Jaringan</td>
                                        <td>Slamet Rahayu, S.Pd., M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Ka. Lab. User Experience</td>
                                        <td>Chepy Perdana, S.Kom., M.Pd.</td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- ! Table Laboratorium --}}
                            <label for="" class="text text-start fs-6 text-bold mt-3">E. Wali kelas Program Studi
                                D-III Sistem Informasi</label>
                            <table class="styled-table mt-2">
                                <thead>
                                    <tr>
                                        <th class="w-20">No</th>
                                        <th class="w-40">Jabatan</th>
                                        <th class="w-40">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- ! Table Pembina Himpunan --}}
                            <label for="" class="text text-start fs-6 text-bold mt-3">F. Pembina Himpunan</label>
                            <table class="styled-table mt-2">
                                <thead>
                                    <tr>
                                        <th class="w-20">No</th>
                                        <th class="w-40">Jabatan</th>
                                        <th class="w-40">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pembina Himpunan</td>
                                        <td>Haryati, S.Pd., M.Pd.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr style="background-color: #0B2F9F" class="mt-1">
                            <h5 for="" class="text text-start text-bold mt-2">TUGAS POKOK DAN FUNGSI JURUSAN
                                TEKNOLOGI DAN INFORMASI</h5>
                            <p class="mb-3 text-justify">
                                &emsp;&emsp;Tupoksi Organisasi Jurusan adalah menyelenggarakan kegiatan administrasi dan akademik
                                tingkat Jurusan sesuai dengan bidang IPTEK yang fokus untuk dikembangkan.
                                Adapun TUPOKSI elemen-elemen organisasi Jurusan adalah sebagai berikut:
                            </p>

                            {{-- ! Sebagai Ketua Jurusan --}}
                            <input type="checkbox" id="ketua-jurusan">
                            <label for="ketua-jurusan" class="text text-start fs-6 text-dark text-bold mt-3">A. Ketua Jurusan</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                    <li>Menyusun rencana dan program kerja Jurusan.</li>
                                    <li>Membagi tugas kepada Sekretaris Jurusan, Ketua Program Studi, dan Kepala Laboratorium.</li>
                                    <li>Mengkoordinasikan Ketua Program Studi dan Kepala Laboratorium agar terjalin kerja sama yang baik.</li>
                                    <li>Menilai prestasi kerja Dosen, Karyawan, dan Teknisi di bidang akademik sebagai dasar pembinaan karier.</li>
                                    <li>Menyelesaikan masalah-masalah akademik bagi mahasiswa.</li>
                                    <li>Menyusun konsep petunjuk teknis di bidang Akademik, khususnya penyelenggaraan kurikulum sebagai bahan masukan atasan.</li>
                                    <li>Menyusun laporan bagian berdasarkan hasil yang telah dicapai sebagai pertanggungjawaban pelaksanaan tugas.</li>
                                    <li>Melaksanakan tugas lain yang diberikan oleh pimpinan.</li>
                                </ol>
                            </div>
                            
                            {{-- ! Sebagai Sekretaris Jurusan --}}
                            <input type="checkbox" id="sekretaris-jurusan">
                            <label for="sekretaris-jurusan" class="text text-start fs-6 text-dark text-bold mt-3">B. Sekretaris Jurusan</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                <li>Membantu ketua jurusan menyusun rencana dan program kerja.</li>
                                <li>Menyusun instrumen pemantauan pelaksanaan proses belajar-mengajar sesuai dengan ketentuan yang berlaku.</li>
                                <li>Menyusun konsep rencana biaya operasional unit.</li>
                                <li>Menyusun konsep prosedur pengajuan proposal penelitian dan pengabdian kepada masyarakat bagi dosen dan mahasiswa.</li>
                                <li>Memberi layanan administrasi bagi dosen, mahasiswa, dan pihak luar yang akan melakukan penelitian serta kegiatan akademik lainnya.</li>
                                <li>Membantu menyusun penilaian SWMP Dosen.</li>
                                <li>Membantu menyusun konsep laporan pelaksanaan kegiatan berdasarkan data dan informasi sebagai bahan masukan atasan.</li>
                                <li>Melaksanakan tugas lain yang diberikan oleh atasan.</li>
                            </ol>
                            </div>
                            {{-- ! Sebagai Ketua Program Studi --}}
                            <input type="checkbox" id="ketua-program-studi">
                            <label for="ketua-program-studi" class="text text-start fs-6 text-dark text-bold mt-3">C. Ketua Program Studi</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                <li>Menyusun rencana dan program kerja program studi.</li>
                                <li>Menyusun kurikulum, silabus, buku modul ajar, dan buku modul praktik.</li>
                                <li>Membagi tugas pengajaran kepada dosen dan teknisi.</li>
                                <li>Mengevaluasi kegiatan akademik dosen dan mahasiswa.</li>
                                <li>Menyusun rencana pengembangan program studi serta pengembangan laboratorium sesuai dengan bidang keilmuan program studi.</li>
                                <li>Menyelesaikan masalah-masalah akademik bagi dosen dan mahasiswa.</li>
                                <li>Menyusun konsep petunjuk teknis di bidang Akademik, khususnya penyelenggaraan kurikulum sebagai bahan masukan atasan.</li>
                                <li>Menyusun laporan bagian berdasarkan hasil yang telah dicapai sebagai pertanggungjawaban pelaksanaan tugas.</li>
                                <li>Melaksanakan tugas lain yang diberikan oleh pimpinan.</li>
                            </ol>
                            </div>
                            {{-- ! Sebagai Ketua Laboratorium --}}
                            <input type="checkbox" id="ketua-laboratorium">
                            <label for="ketua-laboratorium" class="text text-start fs-6 text-dark text-bold mt-3">D. Ketua Laboratorium</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                <li>Menyusun rencana dan program kerja laboratorium sebagai pedoman pelaksanaan tugas.</li>
                                <li>Menata uraian tugas teknisi dan petugas kebersihan sesuai dengan bidangnya.</li>
                                <li>Mengorganisasikan, mengkoordinasikan, dan mengevaluasi tugas teknisi serta petugas kebersihan untuk kelancaran pelaksanaan tugas.</li>
                                <li>Menyusun dan memuat data kebutuhan alat dan bahan praktikum sebagai pedoman pelaksanaan kegiatan.</li>
                                <li>Menyusun jadwal praktikum laboratorium bersama Ka PS/jurusan sebagai pedoman pelaksanaan kegiatan.</li>
                                <li>Menyusun jadwal teknisi pembantu praktikum sebagai pedoman pelaksanaan kegiatan.</li>
                                <li>Memonitor dan mengevaluasi jalannya pelaksanaan praktikum berdasarkan prosedur untuk mengetahui mutu hasil praktikum.</li>
                                <li>Menata kegiatan administrasi sesuai dengan prosedur untuk kelancaran pelaksanaan tugas.</li>
                                <li>Menyusun prosedur standard operasional (SOP) pelayanan praktikum laboratorium sebagai pedoman pelaksanaan tugas.</li>
                                <li>Mengajukan usulan pemeliharaan peralatan dan fasilitas laboratorium untuk kelancaran pelaksanaan tugas.</li>
                                <li>Membantu program kegiatan penelitian dan pengabdian kepada masyarakat bagi dosen yang sudah disetujui.</li>
                                <li>Membantu kegiatan tugas akhir mahasiswa.</li>
                                <li>Mengatur kegiatan usaha dan jasa produksi untuk kelancaran pelaksanaan tugas.</li>
                                <li>Melakukan pembinaan kepada pegawai di lingkungan laboratorium untuk kelancaran pelaksanaan tugas.</li>
                                <li>Membuat laporan tengah tahunan sesuai dengan hasil yang dicapai sebagai pertanggungjawaban pelaksanaan tugas.</li>
                                <li>Mengatur pelaksanaan kompensasi mahasiswa di Laboratorium.</li>
                                <li>Melaksanakan tugas-tugas kedinasan lain yang diberikan atasan.</li>
                            </ol>
                            </div>
                            {{-- ! Sebagai Dosen --}}
                            <input type="checkbox" id="dosen">
                            <label for="dosen" class="text text-start fs-6 text-dark text-bold mt-3">E. Dosen</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                <li>Melaksanakan pendidikan, penelitian, dan pengabdian kepada masyarakat.</li>
                                <li>Merencanakan, melaksanakan proses pembelajaran, serta menilai dan mengevaluasi hasil pembelajaran.</li>
                                <li>Meningkatkan dan mengembangkan kualifikasi akademik dan kompetensi secara berkelanjutan sesuai perkembangan ilmu pengetahuan, teknologi, dan seni.</li>
                                <li>Bertindak objektif dan tidak diskriminatif atas pertimbangan jenis kelamin, agama, suku, ras, kondisi fisik tertentu, atau latar belakang sosial ekonomi peserta didik dalam pembelajaran.</li>
                                <li>Menjunjung tinggi peraturan perundang-undangan, hukum, dan kode etik serta nilai-nilai agama dan etika.</li>
                                <li>Memelihara dan memupuk persatuan dan kesatuan bangsa.</li>
                            </ol>
                            </div>
                            {{-- ! Sebagai Staf Jurusan --}}
                            <input type="checkbox" id="staf-jurusan">
                            <label for="staf-jurusan" class="text text-start fs-6 text-dark text-bold mt-3">F. Staf Jurusan</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                <li>Menyusun rencana dan program kerja kegiatan administrasi jurusan.</li>
                                <li>Membuat, merencanakan, dan melaporkan kebutuhan ATK dan fasilitas Jurusan.</li>
                                <li>Membuat agenda kegiatan ketua dan sekretaris Jurusan.</li>
                                <li>Menerima dan mendistribusikan surat masuk dan keluar.</li>
                                <li>Membuat dan mengecek rekap hasil yudisium tingkat Jurusan.</li>
                                <li>Mengkoordinasikan program kerja administrasi untuk kegiatan pelatihan/magang Jurusan.</li>
                                <li>Membuat dan mengoordinasikan pembuatan surat pengantar PKL.</li>
                                <li>Mengatur pelaksanaan sidang tugas akhir.</li>
                                <li>Melaksanakan kegiatan pendaftaran ulang mahasiswa lama dan baru.</li>
                                <li>Mengkoordinasikan dan menjaga soal-soal ujian dalam kondisi aman.</li>
                                <li>Membantu pekerjaan administrasi dan dokumentasi yang berhubungan dengan kegiatan akademik Jurusan.</li>
                                <li>Membantu pekerjaan administrasi dan dokumentasi dokumen-dokumen Jurusan.</li>
                                <li>Membantu pengelolaan database Jurusan.</li>
                                <li>Melaksanakan tugas-tugas yang diberikan atasan.</li>
                            </ol>
                            </div>
                            {{-- ! Sebagai Pranata Laboratorium Pendidikan (PLP) --}}
                            <input type="checkbox" id="plp">
                            <label for="plp" class="text text-start fs-6 text-dark text-bold mt-3">G. Pranata Laboratorium Pendidikan (PLP)</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                <li>Membantu pelaksanaan persiapan Laboratorium tiap semester di bawah petunjuk dan pengarahan Ketua Laboratorium.</li>
                                <li>Mempersiapkan alat praktikum di Laboratorium masing-masing sesuai kebutuhan praktikum yang dikoordinasikan dengan Ketua Laboratorium.</li>
                                <li>Membuat berita acara untuk setiap kerusakan/kekurangan/kehilangan alat-alat praktikum dan melaporkan ke Ketua Laboratorium.</li>
                                <li>Menjaga kebersihan Laboratorium.</li>
                                <li>Mendampingi Dosen dan Asisten Dosen praktikum dalam membantu pelaksanaan praktikum.</li>
                                <li>Merawat, menjaga, dan menginventarisasi peralatan Laboratorium.</li>
                                <li>Menyiapkan bahan dan peralatan yang dipakai praktikum.</li>
                                <li>Melaksanakan tugas yang diberikan oleh atasan.</li>
                                <li>Bertanggung jawab kepada atasan langsung.</li>
                            </ol>
                            </div>
                            {{-- ! Sebagai Teknisi --}}
                            <input type="checkbox" id="teknisi">
                            <label for="teknisi" class="text text-start fs-6 text-dark text-bold mt-3">H. Teknisi</label>
                            <div class="dropdown-content">
                                <ol class="text-start" style="padding-left: 25px;">
                                <li>Membantu pelaksanaan persiapan Laboratorium tiap semester di bawah petunjuk dan pengarahan Kepala Laboratorium.</li>
                                <li>Mempersiapkan alat praktikum di Laboratorium masing-masing sesuai kebutuhan praktikum yang dikoordinasikan dengan Kepala Laboratorium.</li>
                                <li>Membuat berita acara untuk setiap kerusakan/kekurangan/kehilangan alat-alat praktikum dan melaporkan ke Kepala Laboratorium.</li>
                                <li>Menjaga kebersihan Laboratorium.</li>
                                <li>Mendampingi Dosen dan Asisten Dosen praktikum dalam membantu pelaksanaan praktikum.</li>
                                <li>Merawat, menjaga, dan menginventarisasi peralatan Laboratorium.</li>
                                <li>Menyiapkan bahan dan peralatan yang dipakai praktikum.</li>
                                <li>Melaksanakan tugas yang diberikan oleh atasan.</li>
                                <li>Bertanggung jawab kepada atasan langsung.</li>
                            </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
