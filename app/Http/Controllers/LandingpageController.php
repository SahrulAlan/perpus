<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Pustakawan;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $pustakawan = Pustakawan::latest()->paginate(10);
        $berita = Berita::with('kategori')->latest()->paginate(3);

        return view('landingpage.index', compact('pustakawan', 'berita'));
    }

    public function berita(Request $request)
    {
        // Arsip tahun
        $arsipTahun = Berita::selectRaw('YEAR(created_at) as tahun, COUNT(*) as total')
            ->groupBy('tahun')
            ->orderBy('tahun', 'desc')
            ->get();

        // List kategori
        $kategori = Kategori::orderBy('nama_kategori')->get();

        // Query berita
        $berita = Berita::with('kategori')
            ->when($request->search, function ($query) use ($request) {
                $query->where('judul', 'like', '%' . $request->search . '%');
            })
            ->when($request->kategori && $request->kategori != 'all', function ($query) use ($request) {
                $query->whereHas('kategori', function ($q) use ($request) {
                    $q->where('nama_kategori', $request->kategori);
                });
            })
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view('landingpage.berita', compact(
            'berita',
            'arsipTahun',
            'kategori'
        ));
    }

    public function show(Berita $berita)
    {
        $rekomendasi = Berita::where('kategori_id', $berita->kategori_id)
            ->where('berita_id', '!=', $berita->berita_id)
            ->latest()
            ->take(5)
            ->get();

        return view('landingpage.bacaberita', compact('berita', 'rekomendasi'));
    }
}
