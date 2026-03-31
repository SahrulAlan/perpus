@extends('layout.app')

@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <!-- HEADER -->
                    <div class="d-md-flex align-items-center mb-3">
                        <div>
                            <h4 class="card-title mb-0">Berita</h4>
                            <p class="card-subtitle text-muted">
                                Manajemen data berita
                            </p>
                        </div>

                        <div class="ms-auto">
                            <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i>
                                Tambah Berita
                            </a>
                        </div>
                    </div>

                    <!-- TABLE -->
                    <div class="table-responsive">
                        <table id="tabelBerita" class="table align-middle text-nowrap">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Terbit</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody></tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- Modal Delete --}}
    @include('berita.modal-delete')
@endsection
