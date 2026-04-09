@extends('welcome')
@section('conten')
    <section class="hero-section text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">
                        Selamat Datang di Portal<br />Perpustakaan Digital <br>
                        UNUHA
                    </h1>
                    <p class="lead mb-5 opacity-75">
                        Gerbang Pengetahuan Menuju Masa Depan. Akses seluruh
                        layanan sistem informasi perpustakaan Universitas
                        Nurul Huda dalam satu pintu yang mudah dan cepat.
                    </p>
                    <a href="#systems" class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-primary shadow">Jelajahi
                        Sistem
                        Kami</a>
                </div>
            </div>
        </div>
    </section>

    <section id="systems" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">
                    Sistem Informasi Terintegrasi
                </h2>
                <p class="text-muted">
                    Pilih sistem yang ingin Anda tuju untuk kemudahan akses
                    informasi.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card system-card h-100 shadow-sm p-4 text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-bookshelf fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">SLiMS</h4>
                        <h6 class="text-muted mb-3">
                            Manajemen & Pelacakan Buku
                        </h6>
                        <p class="text-secondary mb-4">
                            Cari koleksi buku fisik di perpustakaan, cek
                            ketersediaan, dan temukan lokasinya di rak
                            dengan mudah tanpa harus kebingungan.
                        </p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-custom w-100">Akses SLiMS</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card system-card h-100 shadow-sm p-4 text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-mortarboard fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">SIREPO</h4>
                        <h6 class="text-muted mb-3">
                            Repository Skripsi Mahasiswa
                        </h6>
                        <p class="text-secondary mb-4">
                            Akses kumpulan skripsi alumni untuk referensi,
                            dan bagi mahasiswa tingkat akhir, unggah tugas
                            akhir Anda di sistem ini.
                        </p>
                        <div class="mt-auto">
                            <a href="https://repository.unuha.ac.id" class="btn btn-custom w-100">Akses
                                SIREPO</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card system-card h-100 shadow-sm p-4 text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-phone fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Digilib</h4>
                        <h6 class="text-muted mb-3">
                            Koleksi Buku Digital Online
                        </h6>
                        <p class="text-secondary mb-4">
                            Perpustakaan dalam genggaman. Baca dan pinjam
                            ribuan koleksi buku digital kami secara online
                            dari mana saja dan kapan saja.
                        </p>
                        <div class="mt-auto">
                            <a href="https://digilib-unuha.perpustakaan.co.id/home.ks" class="btn btn-custom w-100">Akses
                                Digilib</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pustakawan" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Pustakawan Kami</h2>
                <p class="text-muted">
                    Tim profesional yang siap sedia membantu kebutuhan
                    literatur dan informasi Anda.
                </p>
            </div>
            @forelse ($pustakawan as $p)
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="card team-card h-100 shadow-sm p-4 text-center">
                            <img src="{{ $p->foto ? asset('storage/' . $p->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($p->nama) }}"
                                alt="{{ $p->jabatan }}" class="team-img rounded-circle mx-auto mb-3 shadow" />
                            <h5 class="fw-bold mb-1">{{ $p->nama }}</h5>
                            <p class="text-primary fw-medium mb-3">
                                {{ $p->jabatan }}
                            </p>
                            <p class="text-secondary small mb-0">
                                {{ $p->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center">
                    <p class="text-muted">Belum ada data pustakawan tersedia.</p>
                </div>
            @endforelse
        </div>
    </section>

    <section id="operasional" class="py-5" style="background-color: #eef4fa">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-dark mb-4">
                        Waktu Layanan Perpustakaan
                    </h2>
                    <p class="text-muted mb-4 fs-5">
                        Kami siap melayani Anda. Pastikan Anda memperhatikan
                        jam istirahat dan hari libur sebelum merencanakan
                        kunjungan ke perpustakaan fisik kami.
                    </p>
                    <div class="d-flex align-items-center bg-white p-3 rounded-4 shadow-sm mb-3">
                        <i class="bi bi-info-circle fs-2 text-primary me-3"></i>
                        <p class="mb-0 text-secondary">
                            Untuk sistem online (Digilib & SIREPO), dapat
                            diakses <strong>24/7 kapan saja.</strong>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg p-4 p-md-5 rounded-4"
                        style="
                                background: linear-gradient(
                                    135deg,
                                    var(--primary-bg),
                                    var(--accent-color)
                                );
                                color: white;
                            ">
                        <h3 class="fw-bold mb-4 text-center border-bottom border-light pb-3 opacity-75">
                            <i class="bi bi-clock-history me-2"></i>Jam
                            Operasional
                        </h3>

                        <ul class="list-unstyled fs-5 mb-0">
                            <li class="d-flex justify-content-between mb-2 align-items-center">
                                <span><i class="bi bi-calendar2-week me-3 text-info"></i>Senin - Jumat</span>
                                <span class="fw-bold">08.00 - 16.00 WIB</span>
                            </li>
                            <li class="d-flex justify-content-between mb-4 align-items-center ms-4 ps-2 text-light opacity-75"
                                style="font-size: 0.9rem">
                                <span><i class="bi bi-cup-hot me-2"></i>Istirahat</span>
                                <span>12.00 - 13.00 WIB</span>
                            </li>

                            <hr class="border-light opacity-25 my-4" />

                            <li class="d-flex justify-content-between mb-3 align-items-center">
                                <span><i class="bi bi-calendar2-x me-3 text-warning"></i>Sabtu - Minggu</span>
                                <span class="badge bg-warning text-dark fs-6 px-3 rounded-pill">Libur</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span><i class="bi bi-flag me-3 text-danger"></i>Tanggal Merah & Besar</span>
                                <span class="badge bg-danger fs-6 px-3 rounded-pill">Libur</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news" class="py-5 bg-white">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold text-dark">Berita Terbaru</h3>
                <a href="{{ route('landingpage.berita') }}" class="text-decoration-none text-primary fw-medium">
                    Lihat Semua Berita <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach ($berita as $b)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">

                            <!-- Gambar + badge waktu -->
                            <div class="position-relative">
                                <div class="ratio ratio-16x9">
                                    <img src="{{ asset('storage/foto_berita/' . $b->foto) }}" alt="{{ $b->judul }}"
                                        class="w-100 h-100 object-fit-cover">
                                </div>

                                <span class="badge bg-dark bg-opacity-75 position-absolute top-0 end-0 m-2 rounded-pill">
                                    {{ $b->created_at->diffForHumans() }}
                                </span>
                            </div>

                            <!-- Konten -->
                            <div class="card-body d-flex flex-column p-4">

                                <!-- Kategori -->
                                <span class="badge bg-primary mb-2 align-self-start rounded-pill">
                                    {{ $b->kategori->nama_kategori }}
                                </span>

                                <!-- Judul -->
                                <h5 class="fw-bold mb-2">
                                    {{ Str::limit($b->judul, 60) }}
                                </h5>

                                <!-- Tanggal -->
                                <p class="text-muted small mb-2">
                                    <i class="bi bi-calendar3 me-1"></i>
                                    {{ \Carbon\Carbon::parse($b->tanggal_terbit)->translatedFormat('d F Y') }}
                                </p>

                                <!-- Deskripsi -->
                                <p class="text-secondary small mb-4">
                                    {{ Str::limit(strip_tags($b->konten), 100) }}
                                </p>

                                <!-- Tombol -->
                                <div class="mt-auto">
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                        Selengkapnya
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
