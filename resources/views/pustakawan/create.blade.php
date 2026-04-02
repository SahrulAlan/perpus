@extends('layout.app')

@section('content')
    <div class="container py-2">

        <!-- HEADER -->
        <div class="mb-4">
            <h4 class="fw-bold mb-1 d-flex align-items-center gap-2">
                <iconify-icon icon="solar:user-plus-bold" width="24"></iconify-icon>
                Tambah Pustakawan
            </h4>
            <small class="text-muted">
                Silakan isi data pustakawan dengan lengkap
            </small>
        </div>

        <div class="row justify-content-center">
            <div class="card border-0 shadow rounded-4">

                <!-- CARD HEADER -->
                <div class="card-header bg-white border-0 fw-semibold">
                    Form Data Pustakawan
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('pustakawan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-4">

                            <!-- FOTO -->
                            <div class="col-md-4 text-center">
                                <div class="mb-3">
                                    <img id="preview" src="https://ui-avatars.com/api/?name=Foto"
                                        class="rounded-circle shadow-sm border" width="130" height="130"
                                        style="object-fit: cover;">
                                </div>

                                <input type="file" name="foto" id="foto"
                                    class="form-control form-control-sm @error('foto') is-invalid @enderror">

                                @error('foto')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- FORM -->
                            <div class="col-md-8">

                                <!-- NAMA -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Nama Lengkap</label>
                                    <input type="text" name="nama" value="{{ old('nama') }}"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="Masukkan nama pustakawan">

                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- JABATAN -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Jabatan</label>
                                    <input type="text" name="jabatan" value="{{ old('jabatan') }}"
                                        class="form-control @error('jabatan') is-invalid @enderror"
                                        placeholder="Contoh: Kepala Perpustakaan">

                                    @error('jabatan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- DESKRIPSI -->
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Deskripsi</label>
                                    <textarea name="deskripsi" rows="4" class="form-control @error('deskripsi') is-invalid @enderror"
                                        placeholder="Tuliskan deskripsi singkat...">{{ old('deskripsi') }}</textarea>

                                    @error('deskripsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- BUTTON -->
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('pustakawan.index') }}" class="btn btn-light border">
                                ← Kembali
                            </a>

                            <button class="btn btn-primary px-4">
                                <iconify-icon icon="solar:diskette-bold" class="me-1"></iconify-icon>
                                Simpan
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- PREVIEW FOTO --}}
    @push('scripts')
        <script>
            document.getElementById('foto').addEventListener('change', function(e) {
                const preview = document.getElementById('preview');
                const file = e.target.files[0];

                if (file) {
                    preview.src = URL.createObjectURL(file);
                }
            });
        </script>
    @endpush
@endsection
