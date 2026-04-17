<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use App\Models\Pustakawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'totalBerita'     => Berita::count(),
            'totalKategori'   => Kategori::count(),
            'totalPustakawan' => Pustakawan::count(),
            'beritaHariIni'   => Berita::whereDate('created_at', Carbon::today())->count(),
        ];
        $beritaTerbaru = Berita::with('kategori')->latest()->take(4)->get();
        $kategoriList = Kategori::withCount('berita')->orderBy('nama_kategori')->get();
        $pustakawanList = Pustakawan::latest()->get();

        return view('dashboard.index', compact(
            'stats',
            'beritaTerbaru',
            'kategoriList',
            'pustakawanList',
        ));
    }
}
