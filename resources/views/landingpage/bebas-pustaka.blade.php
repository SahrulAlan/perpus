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
                    Pastikan seluruh persyaratan berikut telah dipenuhi
                    sebelum melakukan pengajuan bebas pustaka.
                </p>
            </div>

            <div class="row g-4">

                {{-- 1. PENYERAHAN VCD --}}
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-disc fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            1. Menyerahkan VCD Tugas Akhir/Skripsi
                        </h4>

                        <p class="text-secondary">
                            Isi file VCD harus lengkap mencakup:
                        </p>

                        <ul class="text-secondary mb-0">
                            <li>Cover</li>
                            <li>Halaman pengesahan yang telah ditandatangani</li>
                            <li>Isi tugas akhir/skripsi</li>
                            <li>Lampiran</li>
                        </ul>

                        <div class="alert alert-warning border-0 rounded-4 mt-3 mb-0">
                            <i class="bi bi-exclamation-circle-fill me-2"></i>
                            <strong>Catatan:</strong>
                            Halaman pengesahan dapat dipindai (scan) terlebih dahulu,
                            kemudian digabungkan menjadi satu file bersama dokumen skripsi.
                        </div>

                    </div>
                </div>

                {{-- 2. FORMAT PDF --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-filetype-pdf fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            2. File Tugas Akhir/Skripsi Berformat .PDF
                        </h4>

                        <ul class="text-secondary mb-3">
                            <li>
                                File tugas akhir/skripsi wajib menggunakan
                                format <strong>PDF (.pdf)</strong>.
                            </li>
                            <li>
                                Penamaan file harus mengikuti format yang telah ditentukan.
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

                {{-- 3. UPLOAD REPOSITORY --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-cloud-upload fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            3. Mengunggah File Tugas Akhir/Skripsi
                        </h4>

                        <p class="text-secondary">
                            Mahasiswa wajib mengunggah file tugas akhir/skripsi
                            ke Repository Perpustakaan melalui:
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

                {{-- 4. SUMBANGAN BUKU --}}
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-4 requirement-card">

                        <div class="icon-wrapper mb-4">
                            <i class="bi bi-book fs-2"></i>
                        </div>

                        <h4 class="fw-bold mb-3">
                            4. Menyerahkan Sumbangan Buku
                        </h4>

                        <ul class="text-secondary">
                            <li>
                                Judul atau isi buku harus sesuai dengan Program Studi
                                atau bidang penelitian.
                            </li>

                            <li>
                                Buku harus merupakan terbitan terbaru,
                                maksimal <strong>5 tahun terakhir</strong>.
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

                        <p class="text-secondary mt-3 mb-2">
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

                {{-- 5. LOKASI PENGURUSAN --}}
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm rounded-4 p-4 requirement-card">

                        <div class="row align-items-center">

                            <div class="col-md-2 text-center mb-4 mb-md-0">
                                <div class="icon-wrapper mx-auto">
                                    <i class="bi bi-geo-alt fs-2"></i>
                                </div>
                            </div>

                            <div class="col-md-10">

                                <h4 class="fw-bold mb-3">
                                    5. Lokasi Pengurusan Bebas Pustaka
                                </h4>

                                <p class="text-secondary mb-4">
                                    Pengurusan bebas pustaka dapat dilakukan secara
                                    langsung di perpustakaan kampus mana saja yang
                                    tersedia di lingkungan Universitas Nurul Huda.
                                </p>

                                <div class="row g-3">

                                    {{-- KAMPUS A --}}
                                    <div class="col-md-6">
                                        <div class="bg-light rounded-4 p-4 border h-100">

                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-building text-primary fs-3 me-3"></i>

                                                <div>
                                                    <h5 class="fw-bold mb-1">
                                                        Perpustakaan Kampus A
                                                    </h5>
                                                    <small class="text-muted">
                                                        Kampus A - Universitas Nurul Huda
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- KAMPUS B --}}
                                    <div class="col-md-6">
                                        <div class="bg-light rounded-4 p-4 border h-100">

                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-building text-primary fs-3 me-3"></i>

                                                <div>
                                                    <h5 class="fw-bold mb-1">
                                                        Perpustakaan Kampus B
                                                    </h5>
                                                    <small class="text-muted">
                                                        Kampus B - Universitas Nurul Huda
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="alert alert-primary border-0 rounded-4 mt-4 mb-0">
                                    <i class="bi bi-info-circle-fill me-2"></i>

                                    <strong>Informasi:</strong>
                                    Mahasiswa bebas memilih lokasi pengurusan bebas
                                    pustaka, baik di <strong>Kampus A maupun Kampus B</strong>,
                                    tanpa harus menyesuaikan dengan fakultas atau
                                    program studi masing-masing.
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
