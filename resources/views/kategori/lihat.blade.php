@extends('layout.app')

@section('content')
    <div class="row">
        <!-- table -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-md-flex align-items-center mb-3">
                        <div>
                            <h4 class="card-title mb-0">Kategori Berita</h4>
                            <p class="card-subtitle text-muted">
                                Manajemen kategori berita
                            </p>
                        </div>

                        <div class="ms-auto">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambah">

                                <iconify-icon icon="solar:add-circle-bold"></iconify-icon>
                                Tambah Kategori
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle text-nowrap">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>

                                @php
                                    $no = $kategoris->firstItem();
                                @endphp

                                @forelse ($kategoris as $kategori)
                                    <tr>

                                        <td>{{ $no++ }}</td>

                                        <td>
                                            <h6 class="mb-0 fw-semibold">
                                                {{ $kategori->nama_kategori }}
                                            </h6>
                                        </td>

                                        <td class="text-center">

                                            <!-- EDIT -->
                                            <button class="btn btn-sm btn-light" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit{{ $kategori->kategori_id }}">

                                                <iconify-icon icon="solar:pen-bold"></iconify-icon>
                                            </button>

                                            <!-- DELETE -->
                                            <button class="btn btn-sm btn-light text-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalDelete{{ $kategori->kategori_id }}">

                                                <iconify-icon icon="solar:trash-bin-trash-bold"></iconify-icon>
                                            </button>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="3" class="text-center text-muted">
                                            Belum ada kategori
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $kategoris->links() }}
                    </div>

                </div>
            </div>
        </div>

        {{-- modal tambah --}}
        <div class="modal fade" id="modalTambah" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf

                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" name="nama_kategori" class="form-control" required>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

        {{-- modal edit --}}
        @foreach ($kategoris as $kategori)
            <div class="modal fade" id="modalEdit{{ $kategori->kategori_id }}" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">Edit Kategori</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('kategori.update', $kategori->kategori_id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="modal-body">

                                <div class="mb-3">
                                    <label class="form-label">Nama Kategori</label>
                                    <input type="text" name="nama_kategori" class="form-control"
                                        value="{{ $kategori->nama_kategori }}">
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        @endforeach

        {{-- modal delete --}}
        @foreach ($kategoris as $kategori)
            <div class="modal fade" id="modalDelete{{ $kategori->kategori_id }}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-header bg-danger text-white">
                            <h5 class="modal-title">Hapus Kategori</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>

                        <form action="{{ route('kategori.destroy', $kategori->kategori_id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="modal-body text-center">

                                <p>Yakin ingin menghapus kategori:</p>

                                <h6 class="text-danger">
                                    {{ $kategori->nama_kategori }}
                                </h6>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
