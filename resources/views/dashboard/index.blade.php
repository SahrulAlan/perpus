@extends('layout.app')

@section('content')
    <style>
        /* Custom Styling untuk kesan Modern & Soft */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .stat-card {
            background: #ffffff;
            border-left: 5px solid;
        }

        .text-soft-primary {
            color: #5d87ff;
        }

        .text-soft-success {
            color: #13de19;
        }

        .text-soft-warning {
            color: #ffae1f;
        }

        .btn-action {
            border-radius: 10px;
            padding: 10px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .badge-soft {
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 500;
        }

        .table thead th {
            background-color: #f8f9fa;
            border-bottom: none;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 1px;
        }
    </style>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card stat-card" style="border-left-color: #5d87ff;">
                    <div class="card-body">
                        <p class="text-muted mb-1 fw-medium">Total Berita</p>
                        <h2 class="fw-bold mb-0">{{ $stats['totalBerita'] }}</h2>
                        @if ($stats['beritaHariIni'] > 0)
                            <small class="text-success fw-semibold mt-2 d-block">
                                +{{ $stats['beritaHariIni'] }} berita hari ini
                            </small>
                        @else
                            <small class="text-muted mt-2 d-block">Tidak ada berita baru hari ini</small>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card stat-card" style="border-left-color: #13de19;">
                    <div class="card-body">
                        <p class="text-muted mb-1 fw-medium">Kategori</p>
                        <h2 class="fw-bold mb-0">{{ $stats['totalKategori'] }}</h2>
                        <small class="text-muted mt-2 d-block">Kategori aktif</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card stat-card" style="border-left-color: #ffae1f;">
                    <div class="card-body">
                        <p class="text-muted mb-1 fw-medium">Pustakawan</p>
                        <h2 class="fw-bold mb-0">{{ $stats['totalPustakawan'] }}</h2>
                        <small class="text-muted mt-2 d-block">Terverifikasi</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card bg-dark text-white shadow-lg">
                    <div class="card-body d-flex align-items-center">
                        <div class="ms-2">
                            <p class="mb-0 opacity-75 small">Login sebagai:</p>
                            <h6 class="fw-bold text-white mb-0">Admin Perpus</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Berita Terbaru</h5>
                            <a href="{{ route('berita.index') }}" class="btn btn-light btn-sm text-primary">Lihat Semua</a>
                        </div>

                        @foreach ($beritaTerbaru as $berita)
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold mb-1">{{ Str::limit($berita->judul, 50) }}</h6>
                                        <span
                                            class="badge bg-light text-primary badge-soft">{{ $berita->kategori->nama_kategori }}</span>
                                    </div>
                                    <p class="text-muted small mb-0">Admin • {{ $berita->created_at->format('d M Y') }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Kategori</h5>
                        <div class="d-flex flex-column gap-2">
                            @foreach ($kategoriList as $kategori)
                                <div class="p-3 bg-light rounded-3 d-flex justify-content-between align-items-center">
                                    <span class="fw-medium">{{ $kategori->nama_kategori }}</span>
                                    <span class="badge bg-white text-primary shadow-sm">{{ $kategori->berita_count }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Daftar Pustakawan</h5>

                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th class="ps-0">Foto & Nama</th>
                                        <th>Jabatan</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- ROW 1 -->
                                    @foreach ($pustakawanList as $pustakawan)
                                        <tr>
                                            <td class="ps-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('storage/' . $pustakawan->foto) }}"
                                                        class="rounded-circle me-3" width="50" height="50"
                                                        style="object-fit: cover;">
                                                    <div>
                                                        <span class="fw-semibold d-block">{{ $pustakawan->nama }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-primary">{{ $pustakawan->jabatan }}</span></td>
                                            <td class="text-muted">
                                                {{ $pustakawan->deskripsi }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="card h-100 p-3">
                    <div class="card-body text-center">
                        <img src="https://ui-avatars.com/api/?name=Admin+Perpus&background=5d87ff&color=fff"
                            class="rounded-circle mb-3 shadow-sm" width="90">
                        <h5 class="fw-bold">Admin Perpustakaan</h5>
                        <p class="text-muted small">Kelola data perpustakaan dengan bijak.</p>
                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="{{ route('profile.index') }}" class="btn btn-primary btn-action px-4">Edit Profile</a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="btn btn-outline-danger btn-action px-4" type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">Aksi Cepat</h5>
                        <div class="row g-3">
                            <div class="col-6">
                                <a href="{{ route('berita.create') }}"
                                    class="btn btn-light w-100 py-4 text-primary fw-bold btn-action border-0 shadow-sm">
                                    <i class="bi bi-pencil-square fs-4 mb-2 d-block"></i>
                                    Berita Baru
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('kategori.index') }}"
                                    class="btn btn-light w-100 py-4 text-success fw-bold btn-action border-0 shadow-sm">
                                    <i class="bi bi-grid fs-4 mb-2 d-block"></i>
                                    Kategori
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('pustakawan.create') }}"
                                    class="btn btn-light w-100 py-4 text-warning fw-bold btn-action border-0 shadow-sm">
                                    <i class="bi bi-person-plus fs-4 mb-2 d-block"></i>
                                    Pustakawan
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('profile.index') }}"
                                    class="btn btn-light w-100 py-4 text-dark fw-bold btn-action border-0 shadow-sm">
                                    <i class="bi bi-person-circle fs-4 mb-2 d-block"></i>
                                    Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
