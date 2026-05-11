@extends('welcome')
@section('content')
    <!-- Hero Section dengan Animasi -->
    <section class="hero-section text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        {{-- <div class="hero-badge mb-4">
                            <span class="badge bg-light text-primary rounded-pill px-3 py-2">
                                <i class="bi bi-star-fill me-1"></i> #1 Perpustakaan Digital Terbaik
                            </span>
                        </div> --}}
                        <h1 class="display-4 fw-bold mb-4 animate-title">
                            Selamat Datang di Portal<br />Perpustakaan Digital <span class="text-gradient">UNUHA</span>
                        </h1>
                        <p class="lead mb-5 opacity-75 animate-text">
                            Gerbang Pengetahuan Menuju Masa Depan. Akses seluruh layanan sistem informasi
                            perpustakaan Universitas Nurul Huda dalam satu pintu yang mudah dan cepat.
                        </p>
                        <div class="hero-buttons mb-4">
                            <a href="/#systems"
                                class="btn btn-light btn-lg rounded-pill px-5 fw-bold text-primary shadow me-3">
                                Jelajahi Sistem Kami <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="/#contact" class="btn btn-outline-light btn-lg rounded-pill px-5">
                                <i class="bi bi-headset me-2"></i>Hubungi Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f4f7f6" fill-opacity="1"
                    d="M0,192L48,197.3C96,203,192,213,288,208C384,203,480,181,576,181.3C672,181,768,203,864,208C960,213,1056,203,1152,186.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <!-- Sistem Section dengan Counter -->
    <section id="systems" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 mb-3">
                    <i class="bi bi-grid-3x3-gap-fill me-1"></i> Layanan Kami
                </span>
                <h2 class="fw-bold text-dark mb-3">Sistem Informasi <span class="text-gradient">Terintegrasi</span></h2>
                <p class="text-muted fs-5">Pilih sistem yang ingin Anda tuju untuk kemudahan akses informasi.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- OPAC Card -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card system-card h-100 shadow-sm p-4 text-center">

                        <div class="icon-wrapper">
                            <i class="bi bi-search fs-1"></i>
                        </div>

                        <h4 class="fw-bold mb-2">OPAC</h4>

                        <div class="badge-system mb-3">
                            Online Public Access Catalog
                        </div>

                        <p class="text-secondary mb-4">
                            Akses katalog online untuk mencari koleksi buku Perpustakaan Universitas Nurul Huda (UNUHA),
                            cek ketersediaan, dan informasi lokasi buku dengan cepat dan mudah.
                        </p>

                        <div class="feature-list mb-4">
                            <small class="text-muted d-block">
                                <i class="bi bi-check-circle-fill text-success me-1"></i>
                                Akses Katalog Buku Online 24/7
                            </small>

                            <small class="text-muted d-block">
                                <i class="bi bi-check-circle-fill text-success me-1"></i>
                                Pencarian Koleksi Real-time
                            </small>
                        </div>

                        <div class="mt-auto">
                            <a href="https://opac.unuha.ac.id" target="_blank" class="btn btn-custom w-100">
                                Akses OPAC <i class="bi bi-box-arrow-up-right ms-2"></i>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- SIREPO Card -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card system-card h-100 shadow-sm p-4 text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-mortarboard fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">SIREPO</h4>
                        <div class="badge-system mb-3">Repository Skripsi Mahasiswa</div>
                        <p class="text-secondary mb-4">Akses kumpulan skripsi alumni untuk referensi, unggah tugas akhir
                            Anda di sistem ini.</p>
                        <div class="feature-list mb-4">
                            <small class="text-muted d-block"><i class="bi bi-check-circle-fill text-success me-1"></i> 500+
                                Skripsi Tersedia</small>
                            <small class="text-muted d-block"><i class="bi bi-check-circle-fill text-success me-1"></i>
                                Upload Online</small>
                        </div>
                        <div class="mt-auto">
                            <a href="https://repository.unuha.ac.id" class="btn btn-custom w-100">
                                Akses SIREPO <i class="bi bi-box-arrow-up-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Digilib Card -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card system-card h-100 shadow-sm p-4 text-center">
                        <div class="icon-wrapper">
                            <i class="bi bi-phone fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Digilib</h4>
                        <div class="badge-system mb-3">Koleksi Buku Digital Online</div>
                        <p class="text-secondary mb-4">Perpustakaan dalam genggaman. Baca dan pinjam ribuan koleksi buku
                            digital online.</p>
                        <div class="feature-list mb-4">
                            <small class="text-muted d-block"><i class="bi bi-check-circle-fill text-success me-1"></i>
                                3.000+ E-Book</small>
                            <small class="text-muted d-block"><i class="bi bi-check-circle-fill text-success me-1"></i> Baca
                                Online/Pinjam</small>
                        </div>
                        <div class="mt-auto">
                            <a href="https://digilib-unuha.perpustakaan.co.id/home.ks" class="btn btn-custom w-100">
                                Akses Digilib <i class="bi bi-box-arrow-up-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi Bebas Perpustakaan -->
    <section id="bebas-perpus" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Gambar -->
                <div class="col-lg-6 text-center" data-aos="fade-right">
                    <img src="{{ asset('assets/images/alur.png') }}" alt="Alur Bebas Perpustakaan"
                        class="img-fluid rounded shadow-sm">
                </div>

                <!-- Konten -->
                <div class="col-lg-6" data-aos="fade-left">
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 mb-3">
                        <i class="bi bi-journal-check me-1"></i> Bebas Perpustakaan
                    </span>

                    <h2 class="fw-bold text-dark mb-3">
                        Informasi <span class="text-gradient">Bebas Perpustakaan</span>
                    </h2>

                    <p class="text-muted fs-5 mb-4">
                        Mahasiswa yang akan menyelesaikan studi diwajibkan memenuhi persyaratan bebas perpustakaan.
                        Silakan lihat alur pengajuan dan persyaratan lengkap melalui halaman berikut.
                    </p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('landingpage.bebasperpus') }}" class="btn btn-custom px-4 py-2">
                            Lihat Persyaratan
                            <i class="bi bi-arrow-right-circle ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Struktur Organisasi (Image Only) -->
    <section id="pustakawan" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-2 mb-3">
                    <i class="bi bi-diagram-3-fill me-1"></i> Struktur Organisasi
                </span>
                <h2 class="fw-bold text-dark mb-3">
                    Struktur <span class="text-gradient">Organisasi</span>
                </h2>
                <p class="text-muted fs-5">
                    Gambaran susunan organisasi perpustakaan kami.
                </p>
            </div>

            <div class="text-center">
                <div class="org-image-wrapper">
                    <img src="{{ asset('assets/images/perpus.png') }}" alt="Struktur Organisasi"
                        class="img-fluid rounded shadow-sm org-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Pustakawan Section dengan Grid -->
    {{-- <section id="pustakawan" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 mb-3">
                    <i class="bi bi-people-fill me-1"></i> Tim Profesional
                </span>
                <h2 class="fw-bold text-dark mb-3">Pustakawan <span class="text-gradient">Kami</span></h2>
                <p class="text-muted fs-5">Tim profesional yang siap sedia membantu kebutuhan literatur dan informasi Anda.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                @forelse ($pustakawan as $p)
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="card team-card h-100 shadow-sm p-4 text-center">
                            <div class="team-img-wrapper">
                                <img src="{{ $p->foto ? asset('storage/' . $p->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($p->nama) . '&background=0b1f38&color=fff' }}"
                                    alt="{{ $p->jabatan }}" class="team-img rounded-circle mx-auto mb-3 shadow" />
                                <div class="team-social">
                                    <a href="#" class="btn btn-sm btn-light rounded-circle"><i
                                            class="bi bi-envelope"></i></a>
                                    <a href="#" class="btn btn-sm btn-light rounded-circle"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                            </div>
                            <h5 class="fw-bold mb-1">{{ $p->nama }}</h5>
                            <p class="text-primary fw-medium mb-2 small">
                                <i class="bi bi-briefcase-fill me-1"></i>{{ $p->jabatan }}
                            </p>
                            <div class="divider mx-auto my-2"></div>
                            <p class="text-secondary small mb-0">{{ Str::limit($p->deskripsi, 80) }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center rounded-pill">
                            <i class="bi bi-info-circle me-2"></i> Belum ada data pustakawan tersedia.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section> --}}

    <!-- Operasional Section dengan Desain Lebih Modern -->
    <section id="operasional" class="py-5" style="background: linear-gradient(135deg, #eef4fa 0%, #e0eaf5 100%);">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="operasional-info">
                        <span class="badge bg-info bg-opacity-10 text-info rounded-pill px-3 py-2 mb-3">
                            <i class="bi bi-clock-fill me-1"></i> Jam Layanan
                        </span>
                        <h2 class="fw-bold text-dark mb-4">Waktu Layanan <span class="text-gradient">Perpustakaan</span>
                        </h2>
                        <p class="text-muted mb-4 fs-5">Kami siap melayani Anda. Perhatikan jam istirahat dan hari libur
                            sebelum merencanakan kunjungan ke perpustakaan fisik.</p>

                        <div class="info-card bg-white p-4 rounded-4 shadow-sm mb-3">
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-info-circle-fill text-primary fs-4"></i>
                                </div>
                                <div>
                                    <p class="mb-0 text-secondary">Sistem online (Digilib & SIREPO) dapat diakses <strong
                                            class="text-primary">24/7 kapan saja</strong> dari mana pun.</p>
                                </div>
                            </div>
                        </div>

                        <div class="info-card bg-white p-4 rounded-4 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="info-icon bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-wifi fs-4 text-success"></i>
                                </div>
                                <div>
                                    <p class="mb-0 text-secondary"><strong>WiFi Gratis</strong> tersedia di area
                                        perpustakaan untuk mendukung aktivitas belajar Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card border-0 shadow-lg p-4 p-md-5 rounded-4 modern-card">
                        <div class="text-center mb-4">
                            <div class="clock-animation mb-3">
                                <i class="bi bi-clock-history display-1 text-white opacity-75"></i>
                            </div>
                            <h3 class="fw-bold text-white mb-2">Jam Operasional</h3>
                            <div class="divider-light mx-auto"></div>
                        </div>

                        <ul class="list-unstyled fs-5 mb-0 text-white">
                            <li class="schedule-item">
                                <div class="d-flex justify-content-between align-items-center py-2">
                                    <span><i class="bi bi-calendar2-week me-3"></i>Senin - Jumat</span>
                                    <span class="fw-bold">08.00 - 16.00 WIB</span>
                                </div>
                                <div class="break-time ms-4 ps-2">
                                    <small><i class="bi bi-cup-hot me-2"></i>Istirahat: 12.00 - 13.00 WIB</small>
                                </div>
                            </li>

                            <li class="schedule-item mt-3">
                                <div class="d-flex justify-content-between align-items-center py-2">
                                    <span><i class="bi bi-calendar2-x me-3"></i>Sabtu - Minggu</span>
                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill">Libur</span>
                                </div>
                            </li>

                            <li class="schedule-item mt-3">
                                <div class="d-flex justify-content-between align-items-center py-2">
                                    <span><i class="bi bi-flag me-3"></i>Tanggal Merah & Besar</span>
                                    <span class="badge bg-danger px-3 py-2 rounded-pill">Libur</span>
                                </div>
                            </li>
                        </ul>

                        <div class="text-center mt-4 pt-3">
                            <small class="text-white-50">
                                <i class="bi bi-envelope me-1"></i> perpus@unuha.ac.id
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section dengan Carousel & Grid -->
    <section id="news" class="py-5 bg-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
                <div>
                    <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-2 mb-2">
                        <i class="bi bi-newspaper me-1"></i> Update Terkini
                    </span>
                    <h3 class="fw-bold text-dark mb-0">Berita <span class="text-gradient">Terbaru</span></h3>
                </div>
                <a href="{{ route('landingpage.berita') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Lihat Semua Berita <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach ($berita as $b)
                    <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="card news-card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <div class="ratio ratio-16x9">
                                    <img src="{{ asset('storage/foto_berita/' . $b->foto) }}" alt="{{ $b->judul }}"
                                        class="w-100 h-100 object-fit-cover news-img">
                                </div>
                                <div class="news-date-badge">
                                    <span
                                        class="day">{{ \Carbon\Carbon::parse($b->tanggal_terbit)->format('d') }}</span>
                                    <span
                                        class="month">{{ \Carbon\Carbon::parse($b->tanggal_terbit)->translatedFormat('M') }}</span>
                                </div>
                                <span class="badge bg-dark bg-opacity-75 position-absolute top-0 end-0 m-3 rounded-pill">
                                    <i class="bi bi-clock me-1"></i> {{ $b->created_at->diffForHumans() }}
                                </span>
                            </div>

                            <div class="card-body d-flex flex-column p-4">
                                <span class="badge bg-primary mb-3 align-self-start rounded-pill px-3 py-2">
                                    {{ $b->kategori->nama_kategori }}
                                </span>
                                <h5 class="fw-bold mb-2 news-title">
                                    {{ Str::limit($b->judul, 55) }}
                                </h5>
                                <p class="text-secondary small mb-4">
                                    {{ Str::limit(strip_tags($b->konten), 100) }}
                                </p>
                                <div class="mt-auto">
                                    <a href="{{ route('landingpage.berita.show', $b->slug) }}"
                                        class="btn btn-primary btn-sm rounded-pill w-100">
                                        Baca Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section dengan Desain Modern -->
    <section id="contact" class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-2 mb-3">
                    <i class="bi bi-headset me-1"></i> 24/7 Support
                </span>
                <h2 class="fw-bold text-dark mb-3">Hubungi <span class="text-gradient">Kami</span></h2>
                <p class="text-muted fs-5">Butuh bantuan? Tim kami siap membantu Anda 24 jam melalui berbagai kanal.</p>
            </div>

            <div class="row g-4">
                <!-- Alamat -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card contact-card h-100 shadow-sm border-0 rounded-4 p-4 text-center">
                        <div class="contact-icon mx-auto">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Kunjungi Kami</h5>
                        <div class="contact-detail">
                            <p class="mb-3">
                                <strong>Kampus A:</strong><br>
                                Sukaraja, Kec. Buay Madang, Kab. OKU Timur, Sumatera Selatan
                            </p>
                            <p class="mb-0">
                                <strong>Kampus C:</strong><br>
                                Jembatan 2, Tanah Merah, Kec. Belitang, Kab. OKU Timur
                            </p>
                        </div>
                        <a href="https://maps.google.com?q=Universitas+Nurul+Huda+Sukaraja" target="_blank"
                            class="btn btn-outline-primary rounded-pill mt-4">
                            <i class="bi bi-map me-2"></i> Lihat Maps
                        </a>
                    </div>
                </div>

                <!-- Jam -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card contact-card h-100 shadow-sm border-0 rounded-4 p-4 text-center">
                        <div class="contact-icon mx-auto">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Jam Operasional</h5>
                        <div class="contact-detail">
                            <p class="mb-2">
                                <strong>Senin - Jumat</strong><br>
                                08.00 – 16.00 WIB<br>
                                <small class="text-muted">Istirahat: 12.00 – 13.00 WIB</small>
                            </p>
                            <p class="mb-0">
                                <strong>Sabtu - Minggu</strong><br>
                                <span class="text-danger">Libur</span><br>
                                <small class="text-muted">Tanggal Merah: Libur</small>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card contact-card h-100 shadow-sm border-0 rounded-4 p-4 text-center">
                        <div class="contact-icon mx-auto">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <h5 class="fw-bold mb-3">Layanan Support</h5>
                        <div class="contact-detail">
                            <p class="mb-2">
                                <strong>Perpus A</strong><br>
                                <a href="tel:+6281339386483" class="text-decoration-none">+62 813-3938-6483</a>
                            </p>
                            <p class="mb-2">
                                <strong>Perpus C</strong><br>
                                <a href="tel:+6282184366013" class="text-decoration-none">+62 821-8436-6013</a>
                            </p>
                            <p class="mb-0">
                                <strong>Email</strong><br>
                                <a href="mailto:perpus@unuha.ac.id" class="text-decoration-none">perpus@unuha.ac.id</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- WhatsApp CTA -->
            <div class="row justify-content-center mt-5" data-aos="zoom-in">
                <div class="col-lg-8">
                    <div class="card whatsapp-card border-0 shadow-lg rounded-4 p-4 text-center overflow-hidden">
                        <div class="whatsapp-bg"></div>
                        <div class="position-relative">
                            <div class="whatsapp-icon mx-auto mb-3">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <h4 class="fw-bold text-white mb-3">Butuh Bantuan Cepat?</h4>
                            <p class="text-white-50 mb-4">Hubungi tim kami melalui WhatsApp untuk bantuan terkait
                                penggunaan sistem, upload skripsi, atau kendala teknis lainnya.</p>
                            <a href="https://wa.me/6285609342431?text=Assalamu%E2%80%99alaikum%2C%20Pak%2FBu%20%F0%9F%99%8F"
                                target="_blank" class="btn btn-light text-success fw-bold rounded-pill px-5 py-3">
                                <i class="bi bi-whatsapp me-2"></i> Chat Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media dengan Desain Baru -->
            <div class="text-center mt-5">
                <h5 class="fw-bold mb-4">Ikuti Kami di Social Media</h5>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="https://www.facebook.com/profile.php?id=61552039809471" target="_blank"
                        class="social-btn facebook">
                        <i class="bi bi-facebook me-2"></i> Facebook
                    </a>
                    <a href="https://youtube.com/@perpustakaanunuha-l7u" target="_blank" class="social-btn youtube">
                        <i class="bi bi-youtube me-2"></i> YouTube
                    </a>
                    <a href="https://www.instagram.com/perpustakaan_unuha" target="_blank" class="social-btn instagram">
                        <i class="bi bi-instagram me-2"></i> Instagram
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Animasi Counter
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            const animateCounter = (counter) => {
                const target = parseInt(counter.getAttribute('data-target'));
                let count = 0;
                const increment = target / speed;

                const updateCount = () => {
                    if (count < target) {
                        count += increment;
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCount, 20);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };

                updateCount();
            };

            // Trigger counter when in viewport
            const observerOptions = {
                threshold: 0.5,
                rootMargin: '0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
@endpush
