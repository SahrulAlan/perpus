@extends('welcome')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">

                <!-- KONTEN UTAMA -->
                <div class="col-lg-8">

                    <!-- Judul -->
                    <h2 class="fw-bold mb-3">
                        {{ $berita->judul }}
                    </h2>

                    <!-- Meta -->
                    <div class="d-flex align-items-center text-muted mb-4 small">
                        <span class="me-3">
                            <i
                                class="bi bi-calendar3 me-1"></i>{{ \Carbon\Carbon::parse($berita->tanggal_terbit)->translatedFormat('d F Y') }}
                        </span>
                        <span class="me-3">
                            <i class="bi bi-tag me-1"></i>{{ $berita->kategori->nama_kategori }}
                        </span>
                    </div>

                    <!-- Gambar -->
                    <img src="{{ asset('storage/foto_berita/' . $berita->foto) }}" alt="Berita"
                        class="img-fluid rounded-4 shadow-sm mb-4">

                    <!-- Isi -->
                    <div class="news-content text-secondary fs-5" style="line-height: 1.8;">
                        <p>
                            {{ strip_tags($berita->konten) }}
                        </p>
                    </div>

                    <!-- Tombol kembali -->
                    <div class="mt-5">
                        <a href="{{ route('landingpage.berita') }}" class="btn btn-outline-primary rounded-pill">
                            ← Kembali ke Berita
                        </a>
                    </div>

                </div>

                <!-- SIDEBAR -->
                <div class="col-lg-4">

                    <div class="card shadow-sm border-0 rounded-4 p-4">
                        <h5 class="fw-bold mb-4">Rekomendasi Berita</h5>

                        <!-- ITEM 1 -->
                        @forelse ($rekomendasi as $r)
                            <a href="{{ route('landingpage.berita.show', $r->slug) }}" class="text-decoration-none">
                                <div class="d-flex mb-3">
                                    <img src="{{ asset('storage/foto_berita/' . $r->foto) }}" alt="Berita"
                                        class="rounded-3 me-3" width="80" height="80" style="object-fit: cover;">
                                    <div>
                                        <h6 class="mb-1 fw-semibold">
                                            {{ Str::limit($r->judul, 50) }}
                                        </h6>
                                        <small class="text-muted">
                                            {{ \Carbon\Carbon::parse($r->tanggal_terbit)->translatedFormat('d F Y') }}
                                        </small>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-muted">Tidak ada rekomendasi berita saat ini.</p>
                        @endforelse
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
