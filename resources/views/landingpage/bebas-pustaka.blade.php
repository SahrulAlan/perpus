@extends('welcome')

@section('title', 'Persyaratan Bebas Pustaka - Perpustakaan UNUHA')

@section('content')

    {{-- HERO SECTION --}}
    <section class="hero-section text-center">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-8">
                    <div class="hero-content">

                        <span class="badge bg-light text-primary rounded-pill px-3 py-2 mb-4">
                            <i class="bi bi-journal-check me-2"></i>
                            Informasi Akademik
                        </span>

                        <h1 class="display-4 fw-bold mb-4">
                            Persyaratan <span class="text-gradient">Bebas Pustaka</span>
                        </h1>

                        <p class="lead opacity-75 mb-5">
                            Panduan lengkap proses pengurusan bebas pustaka mahasiswa
                            Universitas Nurul Huda sebelum wisuda dan pengambilan ijazah.
                        </p>

                        <a href="#persyaratan" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-primary shadow">
                            Lihat Persyaratan
                            <i class="bi bi-arrow-down ms-2"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>

        {{-- WAVE --}}
        <div class="hero-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f8fafc" fill-opacity="1"
                    d="M0,224L60,224C120,224,240,224,360,218.7C480,213,600,203,720,197.3C840,192,960,192,1080,202.7C1200,213,1320,235,1380,245.3L1440,256L1440,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    {{-- CONTENT --}}
    <section id="persyaratan" class="py-5" style="background:#f8fafc;">
        <div class="container">

            <div class="text-center mb-5">
                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 mb-3">
                    <i class="bi bi-info-circle-fill me-1"></i>
                    Informasi Penting
                </span>

                <h2 class="fw-bold mb-3">
                    Persyaratan Bebas Pustaka
                </h2>

                <p class="text-muted fs-5">
                    Pastikan seluruh dokumen dan ketentuan berikut telah dipenuhi
                    sebelum melakukan pengajuan bebas pustaka.
                </p>
            </div>

            <div class="row g-4">

                {{-- 1 --}}
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-file-earmark-text fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            1. Penyerahan Hard Copy Skripsi
                        </h4>

                        <ul class="text-secondary mb-0">
                            <li>
                                Menyerahkan hard copy tugas akhir/skripsi yang telah:
                                <ul>
                                    <li>ditandatangani oleh Dekan</li>
                                    <li>dan dicap resmi oleh Fakultas</li>
                                </ul>
                            </li>

                            <li>
                                Jumlah: <strong>1 eksemplar/jilid</strong>
                            </li>
                        </ul>

                    </div>
                </div>

                {{-- 2 --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-printer fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            2. Ketentuan Cetak Skripsi
                        </h4>

                        <ul class="text-secondary mb-0">
                            <li>
                                Hard copy tugas akhir/skripsi dicetak menggunakan
                                kertas ukuran <strong>A4</strong>.
                            </li>

                            <li>
                                Warna sampul harus mengikuti pedoman tugas akhir/skripsi
                                masing-masing fakultas.
                            </li>
                        </ul>

                    </div>
                </div>

                {{-- 3 --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-disc fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            3. Penyerahan VCD Skripsi
                        </h4>

                        <p class="text-secondary">
                            Isi file dalam VCD harus lengkap, meliputi:
                        </p>

                        <ul class="text-secondary">
                            <li>Cover</li>
                            <li>Halaman pengesahan yang telah ditandatangani</li>
                            <li>Cap dan tanda tangan dekan</li>
                            <li>Isi skripsi</li>
                            <li>Lampiran</li>
                        </ul>

                        <div class="alert alert-warning border-0 rounded-4 mb-0">
                            <i class="bi bi-exclamation-circle-fill me-2"></i>
                            Halaman pengesahan yang telah ditandatangani dapat dipindai
                            (scan) terlebih dahulu, kemudian digabungkan menjadi satu
                            file PDF bersama dokumen skripsi.
                        </div>

                    </div>
                </div>
                {{-- 4 --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-filetype-pdf fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            4. Format dan Penamaan File Skripsi
                        </h4>

                        <ul class="text-secondary">
                            <li>
                                File tugas akhir/skripsi harus dalam format
                                <strong>PDF (.pdf)</strong>.
                            </li>
                        </ul>

                        <div class="bg-light rounded-4 p-4 border">
                            <small class="text-muted d-block mb-2">
                                Format penamaan file:
                            </small>

                            <code class="text-dark fs-6">
                                Nama Mahasiswa - Prodi - Tahun Lulus
                            </code>
                        </div>

                    </div>
                </div>

                {{-- 5 --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-cloud-upload fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            5. Upload Skripsi ke Repository
                        </h4>

                        <p class="text-secondary">
                            Mahasiswa wajib mengunggah file skripsi ke Repository
                            Perpustakaan:
                        </p>

                        <div class="bg-light rounded-4 border p-3 mb-3">
                            <a href="https://repository.unuha.ac.id" target="_blank"
                                class="text-decoration-none fw-semibold">
                                https://repository.unuha.ac.id
                            </a>
                        </div>

                        <div class="alert alert-info border-0 rounded-4 mb-0">
                            <i class="bi bi-person-check-fill me-2"></i>

                            Sebelum melakukan upload, mahasiswa wajib melakukan
                            konfirmasi kepada admin perpustakaan untuk dibuatkan
                            akun login <strong>SIREPO</strong>.
                        </div>

                    </div>
                </div>

                {{-- 6 --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-book fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            6. Sumbangan Buku
                        </h4>

                        <ul class="text-secondary">
                            <li>
                                Judul atau isi buku harus sesuai dengan Program Studi
                                atau penelitian.
                            </li>

                            <li>
                                Buku merupakan <strong>terbitan terbaru</strong>,
                                maksimal <strong>3 tahun terakhir</strong>.
                            </li>

                            <li>
                                Buku yang disumbangkan belum melebihi jumlah
                                eksemplar yang dimiliki perpustakaan.
                            </li>

                            <li>
                                Maksimal <strong>1 judul memiliki 5 eksemplar</strong>
                                di perpustakaan.
                            </li>
                        </ul>

                        <p class="text-secondary mt-4 mb-2">
                            Cek ketersediaan buku melalui:
                        </p>

                        <div class="bg-light rounded-4 border p-3 mb-3">
                            <a href="https://opac.unuha.ac.id" target="_blank" class="text-decoration-none fw-semibold">
                                https://opac.unuha.ac.id
                            </a>
                        </div>

                        <div class="alert alert-danger border-0 rounded-4 mb-0">
                            <i class="bi bi-laptop-fill me-2"></i>

                            <strong>Penting:</strong><br>

                            Disarankan menggunakan <strong>laptop atau desktop/PC</strong>
                            saat mengecek jumlah eksemplar buku.

                            Jika membuka melalui <strong>HP/mobile</strong>,
                            informasi jumlah eksemplar sering tidak tampil secara lengkap.
                        </div>

                    </div>
                </div>
                {{-- 7 --}}
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="card border-0 shadow-sm rounded-4 p-4 requirement-card">

                        <div class="row align-items-center">

                            <div class="col-md-2 text-center mb-4 mb-md-0">
                                <div class="icon-wrapper mx-auto">
                                    <i class="bi bi-geo-alt fs-2"></i>
                                </div>
                            </div>

                            <div class="col-md-10">

                                <h4 class="fw-bold mb-3">
                                    7. Lokasi Pengurusan Bebas Pustaka
                                </h4>

                                <p class="text-secondary mb-4">
                                    Pengurusan bebas pustaka dilakukan sesuai dengan fakultas
                                    masing-masing mahasiswa sebagai berikut:
                                </p>

                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <div class="bg-light rounded-4 p-4 border h-100">

                                            <div class="d-flex align-items-center mb-3">
                                                <i class="bi bi-building text-primary fs-3 me-3"></i>

                                                <div>
                                                    <h6 class="fw-bold mb-1">
                                                        Fakultas Agama Islam (FAI)
                                                    </h6>
                                                    <small class="text-muted">
                                                        Perpustakaan Kampus A
                                                    </small>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-building text-primary fs-3 me-3"></i>

                                                <div>
                                                    <h6 class="fw-bold mb-1">
                                                        Fakultas Sains & Teknologi (FST)
                                                    </h6>
                                                    <small class="text-muted">
                                                        Perpustakaan Kampus A
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="bg-light rounded-4 p-4 border h-100">

                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-building text-primary fs-3 me-3"></i>

                                                <div>
                                                    <h6 class="fw-bold mb-1">
                                                        Fakultas Ilmu Pendidikan (FIP)
                                                    </h6>
                                                    <small class="text-muted">
                                                        Perpustakaan Kampus C
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="alert alert-primary border-0 rounded-4 mt-4 mb-0">
                                    <i class="bi bi-info-circle-fill me-2"></i>

                                    Pastikan seluruh persyaratan telah dipenuhi sebelum
                                    mengajukan bebas pustaka agar proses verifikasi dapat
                                    dilakukan dengan lebih cepat.
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
