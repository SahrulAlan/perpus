<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Portal Perpustakaan UNUHA | Universitas Nurul Huda</title>

    <!-- SEO Meta -->
    <meta name="description"
        content="Portal resmi Perpustakaan Universitas Nurul Huda (UNUHA). Akses katalog buku, repository, jurnal ilmiah, dan layanan perpustakaan digital secara online." />

    <meta name="keywords"
        content="perpustakaan UNUHA, Universitas Nurul Huda, katalog buku online, repository UNUHA, jurnal ilmiah UNUHA, perpustakaan digital kampus" />

    <meta name="author" content="Perpustakaan Universitas Nurul Huda" />

    <meta name="robots" content="index, follow" />

    <!-- Open Graph (biar bagus di share WA/Facebook) -->
    <meta property="og:title" content="Portal Perpustakaan UNUHA" />
    <meta property="og:description"
        content="Akses katalog buku, repository, dan layanan perpustakaan digital UNUHA secara online." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://perpus.unuha.ac.id/" />
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Apple Touch Icon (iPhone / iPad) -->
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />


    @include('asset.style')
</head>

<body>
    @include('asset.navbar')

    @yield('content')

    @include('asset.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
