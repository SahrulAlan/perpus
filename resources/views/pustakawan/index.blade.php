@extends('layout.app')

@section('content')
    <div class="container py-4">

        <!-- HEADER + BUTTON -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-semibold mb-0 d-flex align-items-center gap-2">
                <iconify-icon icon="solar:users-group-rounded-bold" width="24"></iconify-icon>
                Data Pustakawan
            </h4>

            <a href="{{ route('pustakawan.create') }}" class="btn btn-primary d-flex align-items-center gap-1">
                <iconify-icon icon="solar:add-circle-bold"></iconify-icon>
                Tambah Pustakawan
            </a>
        </div>

        <!-- LIST PUSTAKAWAN -->
        <div class="row g-4">
            @forelse ($pustakawans as $pustakawan)
                <div class="col-md-4 col-sm-6">
                    <div class="card h-100 shadow-sm border-0 rounded-4 hover-shadow">
                        <div class="card-body text-center p-4">

                            <img src="{{ $pustakawan->foto ? asset('storage/' . $pustakawan->foto) : 'https://ui-avatars.com/api/?name=' . urlencode($pustakawan->nama) }}"
                                class="rounded-circle mb-3" width="100" height="100" style="object-fit: cover;">

                            <h5 class="fw-semibold mb-1">{{ $pustakawan->nama }}</h5>
                            <p class="text-primary mb-2">{{ $pustakawan->jabatan }}</p>
                            <hr>
                            <small class="text-muted d-block mb-3">{{ $pustakawan->deskripsi }}</small>

                            <!-- BUTTON EDIT/HAPUS -->
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('pustakawan.edit', $pustakawan->pustakawan_id) }}"
                                    class="btn btn-sm btn-warning">
                                    Edit
                                </a>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $pustakawan->pustakawan_id }}">
                                    Hapus
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- DELETE MODAL -->
                <div class="modal fade" id="deleteModal{{ $pustakawan->pustakawan_id }}" tabindex="-1"
                    aria-labelledby="deleteModalLabel{{ $pustakawan->pustakawan_id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title" id="deleteModalLabel{{ $pustakawan->pustakawan_id }}">
                                    Konfirmasi Hapus
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus pustakawan <strong>{{ $pustakawan->nama }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('pustakawan.destroy', $pustakawan->pustakawan_id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">
                        <iconify-icon icon="solar:info-bold" width="24"></iconify-icon>
                        Belum ada data pustakawan. Silakan tambahkan pustakawan terlebih dahulu.
                    </div>
                </div>
            @endforelse
        </div>

        <!-- PAGINATION -->
        <div class="mt-4 d-flex justify-content-center">
            {{ $pustakawans->links() }}
        </div>

    </div>

    <style>
        /* Hover efek card */
        .hover-shadow:hover {
            transform: translateY(-4px);
            transition: all 0.2s ease-in-out;
            box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, .15) !important;
        }
    </style>
@endsection
