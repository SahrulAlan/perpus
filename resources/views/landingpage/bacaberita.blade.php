@extends('welcome')

@section('conten')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">

                <!-- KONTEN UTAMA -->
                <div class="col-lg-8">

                    <!-- Judul -->
                    <h2 class="fw-bold mb-3">
                        Pelatihan Penulisan Skripsi Batch 3
                    </h2>

                    <!-- Meta -->
                    <div class="d-flex align-items-center text-muted mb-4 small">
                        <span class="me-3">
                            <i class="bi bi-calendar3 me-1"></i>20 Agustus 2025
                        </span>
                        <span class="me-3">
                            <i class="bi bi-tag me-1"></i>Perpustakaan
                        </span>
                        <span>
                            <i class="bi bi-eye me-1"></i>1200 views
                        </span>
                    </div>

                    <!-- Gambar -->
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1470&auto=format&fit=crop"
                        class="img-fluid rounded-4 shadow-sm mb-4" alt="Berita">

                    <!-- Isi -->
                    <div class="news-content text-secondary fs-5" style="line-height: 1.8;">
                        <p>
                            Perpustakaan UNUHA kembali mengadakan pelatihan penulisan skripsi
                            untuk mahasiswa tingkat akhir. Kegiatan ini bertujuan untuk membantu
                            mahasiswa dalam menyusun karya ilmiah yang berkualitas dan sesuai standar akademik.
                        </p>

                        <p>
                            Dalam pelatihan ini, peserta akan mendapatkan materi terkait teknik
                            penulisan, penggunaan referensi, serta pemanfaatan sistem repository kampus.
                            Selain itu, peserta juga akan dibimbing langsung oleh pustakawan dan dosen berpengalaman.
                        </p>

                        <p>
                            Diharapkan dengan adanya kegiatan ini, mahasiswa dapat menyelesaikan
                            skripsi tepat waktu serta meningkatkan kualitas penelitian yang dihasilkan.
                        </p>

                        <blockquote class="border-start border-4 ps-3 my-4 text-dark">
                            “Menulis skripsi bukan hanya kewajiban, tapi bagian dari proses menjadi akademisi yang baik.”
                        </blockquote>

                        <p>
                            Kegiatan ini terbuka untuk seluruh mahasiswa UNUHA dan akan dilaksanakan
                            secara berkala setiap semester.
                        </p>
                    </div>

                    <!-- Tombol kembali -->
                    <div class="mt-5">
                        <a href="/berita" class="btn btn-outline-primary rounded-pill">
                            ← Kembali ke Berita
                        </a>
                    </div>

                </div>

                <!-- SIDEBAR -->
                <div class="col-lg-4">

                    <div class="card shadow-sm border-0 rounded-4 p-4">
                        <h5 class="fw-bold mb-4">Rekomendasi Berita</h5>

                        <!-- ITEM 1 -->
                        <div class="d-flex mb-3">
                            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=300"
                                class="rounded-3 me-3" width="80" height="80" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-1 fw-semibold">
                                    Penambahan Koleksi Buku Digital
                                </h6>
                                <small class="text-muted">
                                    18 Agustus 2025
                                </small>
                            </div>
                        </div>

                        <!-- ITEM 2 -->
                        <div class="d-flex mb-3">
                            <img src="https://images.unsplash.com/photo-1558021211-6d1403321394?q=80&w=300"
                                class="rounded-3 me-3" width="80" height="80" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-1 fw-semibold">
                                    Seminar Digital Literacy
                                </h6>
                                <small class="text-muted">
                                    15 Agustus 2025
                                </small>
                            </div>
                        </div>

                        <!-- ITEM 3 -->
                        <div class="d-flex mb-3">
                            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=300"
                                class="rounded-3 me-3" width="80" height="80" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-1 fw-semibold">
                                    Layanan Perpustakaan Lebih Cepat
                                </h6>
                                <small class="text-muted">
                                    12 Agustus 2025
                                </small>
                            </div>
                        </div>

                        <!-- ITEM 4 -->
                        <div class="d-flex">
                            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=300"
                                class="rounded-3 me-3" width="80" height="80" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-1 fw-semibold">
                                    Workshop Penelitian Mahasiswa
                                </h6>
                                <small class="text-muted">
                                    10 Agustus 2025
                                </small>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
