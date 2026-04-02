@extends('layout.app')

@section('content')
    <div class="row">

        <!-- PROFILE CARD -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">

                    <!-- Avatar -->
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&background=0d6efd&color=fff&size=128"
                        class="rounded-circle mb-3" width="120">

                    <!-- Nama -->
                    <h5 class="mb-1 fw-semibold">
                        {{ auth()->user()->name }}
                    </h5>
                    <hr>

                    <!-- Email -->
                    <p class="text-muted mb-0">
                        <iconify-icon icon="solar:letter-bold"></iconify-icon>
                        {{ auth()->user()->email }}
                    </p>

                </div>
            </div>
        </div>

        <!-- DETAIL -->
        <div class="col-md-8">

            <!-- Informasi -->
            <div class="card mb-3">
                <div class="card-body">

                    <h5 class="card-title mb-3">
                        <iconify-icon icon="solar:user-id-bold"></iconify-icon>
                        Informasi Akun
                    </h5>

                    <div class="row mb-2">
                        <div class="col-md-4 text-muted">Nama Lengkap</div>
                        <div class="col-md-8 fw-semibold">
                            {{ auth()->user()->name }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 text-muted">Email</div>
                        <div class="col-md-8 fw-semibold">
                            {{ auth()->user()->email }}
                        </div>
                    </div>

                </div>
            </div>

            <!-- Security -->
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <h6 class="mb-1 fw-semibold">Password</h6>
                        <small class="text-muted">
                            Pastikan password Anda aman
                        </small>
                    </div>

                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalPassword">

                        <iconify-icon icon="solar:key-bold"></iconify-icon>
                        Ganti Password
                    </button>

                </div>
            </div>

        </div>

    </div>

    <!-- MODAL PASSWORD -->
    <div class="modal fade" id="modalPassword" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Ganti Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form action="{{ route('profile.passwordupdate') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Password Lama</label>
                            <input type="password" name="current_password"
                                class="form-control @error('current_password') is-invalid @enderror">

                            @error('current_password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password Baru</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">

                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button class="btn btn-primary">
                            Simpan
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    {{-- AUTO OPEN MODAL JIKA ERROR --}}
    @push('scripts')
        @if ($errors->any())
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var modal = new bootstrap.Modal(document.getElementById('modalPassword'));
                    modal.show();
                });
            </script>
        @endif
    @endpush
@endsection
