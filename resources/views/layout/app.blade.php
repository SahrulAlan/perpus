<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Universitas Nurul Huda </title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    {{-- datatable  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        @include('partials.sidebar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            @include('partials.navbar')

            <div class="body-wrapper-inner">
                <div class="container-fluid">
                    @yield('content')
                    @include('partials.footer')
                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    {{-- sweet allert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- datatable  --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
    <script>
        $(function() {
            $('#tabelBerita').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('berita.datatables') }}",
                pageLength: 10,
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'judul'
                    },
                    {
                        data: 'penulis'
                    },
                    {
                        data: 'kategori'
                    },
                    {
                        data: 'tanggal_terbit'
                    },
                    {
                        data: 'aksi',
                        orderable: false,
                        searchable: false
                    }
                ],
                layout: {
                    topStart: 'search',
                    bottomEnd: 'paging'
                }
            });
        });
    </script>
    {{-- button delete berita --}}
    <script>
        $(document).on('click', '.btn-delete', function() {
            let id = $(this).data('id');
            let judul = $(this).data('judul');

            $('#judulDelete').text(judul);
            $('#formDelete').attr('action', '/berita/' + id);
            $('#modalDelete').modal('show');
        });
    </script>
    {{-- end button delete berita --}}
    <script>
        new DataTable('#tabelUser', {
            layout: {
                topStart: 'search',
                bottomEnd: 'paging'
            },
            pageLength: 10
        });
    </script>

    {{-- CKEDITOR --}}
    <script>
        ClassicEditor
            .create(document.querySelector('#konten'), {

            })
            .then(editor => {
                editor.ui.view.editable.element.style.height = '250px';
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    {{-- sweet alert2 --}}
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
            });
        @endif

        @if ($errors->any())
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                html: `{!! implode('<br>', $errors->all()) !!}`,
            });
        @endif
    </script>
    @stack('scripts')
</body>

</html>
