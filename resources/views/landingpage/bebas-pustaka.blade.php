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
                                Menyerahkan skripsi yang telah:
                                <ul>
                                    <li>ditandatangani oleh Dekan</li>
                                    <li>dan dicap resmi oleh fakultas</li>
                                </ul>
                            </li>

                            <li>
                                Jumlah: <strong>2 eksemplar</strong>
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
                                Dicetak menggunakan kertas ukuran <strong>A4</strong>
                            </li>

                            <li>
                                Warna sampul skripsi harus mengikuti ketentuan
                                masing-masing fakultas
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
                            <li>Halaman pengesahan yang sudah ditandatangani</li>
                            <li>Isi skripsi</li>
                            <li>Lampiran</li>
                        </ul>

                        <div class="alert alert-warning border-0 rounded-4 mb-0">
                            <i class="bi bi-exclamation-circle-fill me-2"></i>
                            Halaman pengesahan dapat di-scan terlebih dahulu lalu
                            digabung menjadi satu file PDF bersama skripsi.
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
                                File skripsi harus dalam format
                                <strong>PDF (.pdf)</strong>
                            </li>
                        </ul>

                        <div class="bg-light rounded-4 p-4 border">
                            <small class="text-muted d-block mb-2">
                                Format penamaan file:
                            </small>

                            <code class="text-dark fs-6">
                                Judul Skripsi - Nama Mahasiswa - Program Studi
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
                            Sebelum upload, mahasiswa perlu melakukan konfirmasi
                            kepada admin perpustakaan untuk dibuatkan akun login SIREPO.
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
                                Topik/judul buku sesuai dengan program studi atau penelitian
                                masing-masing
                            </li>

                            <li>
                                Buku merupakan terbitan terbaru
                                (maksimal 5 tahun terakhir)
                            </li>

                            <li>
                                Buku yang disumbangkan tidak boleh melebihi
                                5 eksemplar dari koleksi perpustakaan
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

                            Disarankan menggunakan laptop atau desktop/PC
                            saat mengecek jumlah eksemplar buku.

                            Jika membuka melalui HP/mobile,
                            informasi jumlah eksemplar sering tidak tampil lengkap.
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

                                <p class="text-secondary mb-3">
                                    Proses pengurusan bebas pustaka dapat dilakukan di:
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="bg-light rounded-4 p-3 border mb-3 mb-md-0">
                                            <i class="bi bi-building me-2 text-primary"></i>
                                            Perpustakaan Kampus A
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="bg-light rounded-4 p-3 border">
                                            <i class="bi bi-building me-2 text-primary"></i>
                                            Perpustakaan Kampus C
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
