@extends('layout.app')

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- HEADER -->
                    <div class="mb-3">
                        <h4 class="card-title mb-0">Edit Berita</h4>
                        <p class="card-subtitle text-muted">
                            Perbarui informasi berita ini
                        </p>
                    </div>

                    <!-- FORM -->
                    <form action="{{ route('berita.update', $berita->berita_id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <!-- Judul -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Judul Berita</label>
                                <input type="text" name="judul"
                                    class="form-control @error('judul') is-invalid @enderror"
                                    value="{{ old('judul', $berita->judul) }}" required>
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Penulis -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Penulis</label>
                                <input type="text" name="penulis"
                                    class="form-control @error('penulis') is-invalid @enderror"
                                    value="{{ old('penulis', $berita->penulis) }}" required>
                                @error('penulis')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Kategori -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Kategori</label>
                                <select name="kategori_id" class="form-select @error('kategori_id') is-invalid @enderror"
                                    required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategoris as $k)
                                        <option value="{{ $k->kategori_id }}"
                                            {{ old('kategori_id', $berita->kategori_id) == $k->kategori_id ? 'selected' : '' }}>
                                            {{ $k->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tanggal -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Tanggal Terbit</label>
                                <input type="date" name="tanggal_terbit"
                                    class="form-control @error('tanggal_terbit') is-invalid @enderror"
                                    value="{{ old('tanggal_terbit', $berita->tanggal_terbit) }}" required>
                                @error('tanggal_terbit')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Foto Lama & Upload Baru -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Foto Saat Ini</label><br>
                                @if ($berita->foto)
                                    <img src="{{ asset('storage/foto_berita/' . $berita->foto) }}" alt="Foto Berita"
                                        class="img-thumbnail mb-2" style="max-width:200px;">
                                @else
                                    <p class="text-muted small">Belum ada foto</p>
                                @endif
                                <label class="form-label mt-2">Ganti Foto (opsional)</label>
                                <input type="file" name="foto"
                                    class="form-control @error('foto') is-invalid @enderror" accept=".jpg,.jpeg,.png">
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Konten -->
                            <div class="col-12 mb-3">
                                <label class="form-label">Konten Berita</label>
                                <textarea name="konten" id="konten" class="form-control @error('konten') is-invalid @enderror" rows="6">{{ old('konten', $berita->konten) }}</textarea>
                                @error('konten')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <a href="{{ route('berita.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
