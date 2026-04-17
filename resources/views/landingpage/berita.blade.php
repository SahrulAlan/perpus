@extends('welcome')

@section('content')
    <section class="py-5 bg-light page-header-offset">
        <div class="container">

            <!-- HEADER -->
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Berita & Kegiatan</h2>
                <p class="text-muted">
                    Ikuti informasi terbaru seputar perpustakaan dan kegiatan kampus.
                </p>
            </div>

            <!-- SEARCH & FILTER -->
            <div class="container mb-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <form method="GET">
                            <div class="card border-0 shadow-sm rounded-4 p-3">

                                <div class="row g-2 align-items-center">

                                    <!-- Search -->
                                    <div class="col-12 col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text bg-white border-end-0 rounded-start-pill">
                                                <i class="bi bi-search"></i>
                                            </span>
                                            <input type="text" name="search" value="{{ request('search') }}"
                                                class="form-control border-start-0 rounded-end-pill"
                                                placeholder="Cari berita...">
                                        </div>
                                    </div>

                                    <!-- Kategori -->
                                    <div class="col-7 col-md-4">
                                        <select name="kategori" class="form-select rounded-pill"
                                            onchange="this.form.submit()">

                                            <option value="">Semua Kategori</option>

                                            @foreach ($kategori as $k)
                                                <option value="{{ $k->nama_kategori }}"
                                                    {{ request('kategori') == $k->nama_kategori ? 'selected' : '' }}>
                                                    {{ $k->nama_kategori }}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-5 col-md-2 d-grid">
                                        <button class="btn btn-primary rounded-pill">
                                            Cari
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <!-- LIST CARD -->
            <div class="row g-4">
                @forelse ($berita as $b)
                    <!-- CARD -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card news-card h-100 shadow-sm">
                            <img src="{{ asset('storage/foto_berita/' . $b->foto) }}" class="card-img-top" alt="Berita 1" />
                            <div class="card-body p-4">
                                <span class="badge bg-primary mb-2">{{ $b->kategori->nama_kategori }}</span>
                                <h5 class="fw-bold">
                                    {{ Str::limit($b->judul, 60) }}
                                </h5>
                                <p class="text-muted small mb-2">
                                    <i
                                        class="bi bi-calendar3 me-2"></i>{{ \Carbon\Carbon::parse($b->tanggal_terbit)->translatedFormat('d F Y') }}
                                </p>
                                <p class="text-secondary small">
                                <p class="text-secondary small mb-4">
                                    {{ Str::limit(strip_tags($b->konten), 100) }}
                                </p>
                                </p>
                                <a href="{{ route('landingpage.berita.show', $b->slug) }}"
                                    class="btn btn-outline-primary btn-sm rounded-pill mt-2">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center text-muted">Tidak ada berita yang ditemukan.</p>
                    </div>
                @endforelse

            </div>

            <!-- PAGINATION (DUMMY) -->
            {{ $berita->links('vendor.pagination.bootstrap-5') }}

        </div>
    </section>
@endsection
