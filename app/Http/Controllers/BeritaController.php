<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas =  Berita::with('kategori')->get();
        return view('berita.tampil', compact('beritas'));
    }

    public function create()
    {
        $kategoris =  Kategori::select('kategori_id', 'nama_kategori')->get();
        return view('berita.tambah', compact('kategoris'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string',
            'kategori_id' => 'required|integer',
            'konten' => 'required|string',
            'foto' => 'nullable|image|max:3072',
            'tanggal_terbit' => 'required|date',
        ]);

        try {
            $namaFoto = null;

            if ($request->hasFile('foto')) {
                $foto = $request->file('foto');
                $namaFoto = $foto->hashName();
                $foto->storeAs('foto_berita', $namaFoto);
            }

            Berita::create([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'kategori_id' => $request->kategori_id,
                'konten' => $request->konten,
                'foto' => $namaFoto,
                'tanggal_terbit' => $request->tanggal_terbit,
                'slug' => $this->generateUniqueSlug($request->judul),
            ]);

            return redirect()
                ->route('berita.index')
                ->with('success', 'Berhasil Upload Berita');
        } catch (\Exception $e) {

            // Opsional: log error untuk debugging
            Log::error("Gagal upload berita: " . $e->getMessage());

            return redirect()
                ->route('berita.index')
                ->with('error', 'Gagal Upload Berita');
        }
    }


    // generate slug uniq
    private function generateUniqueSlug($judul)
    {
        $slug = Str::slug($judul);
        $originalSlug = $slug;

        $count = 1;
        while (Berita::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        $kategoris = Kategori::select('kategori_id', 'nama_kategori')->get();
        return view('berita.edit', compact('berita', 'kategoris'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $berita = Berita::findOrFail($id);

            $request->validate([
                'judul' => 'required|string|max:255',
                'penulis' => 'required|string|max:100',
                'kategori_id' => 'required|integer',
                'konten' => 'required|string',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3072',
                'tanggal_terbit' => 'required|date',
            ]);

            $data = $request->except('foto');

            // Jika upload foto baru
            if ($request->hasFile('foto')) {

                // Hapus foto lama jika ada
                if ($berita->foto && Storage::exists('foto_berita/' . $berita->foto)) {
                    Storage::delete('foto_berita/' . $berita->foto);
                }

                // Upload foto baru
                $foto = $request->file('foto');
                $namaFoto = $foto->hashName();
                $foto->storeAs('foto_berita', $namaFoto);

                $data['foto'] = $namaFoto;
            }

            // Jika judul berubah → update slug
            if ($berita->judul !== $request->judul) {
                $data['slug'] = $this->generateUniqueSlug($request->judul);
            }

            $berita->update($data);

            return redirect()
                ->route('berita.index')
                ->with('success', 'Berita berhasil diperbarui!');
        } catch (\Exception $e) {
            Log::error('Gagal update berita: ' . $e->getMessage());

            return redirect()
                ->route('berita.index')
                ->with('error', 'Gagal memperbarui berita!');
        }
    }


    public function destroy(string $id)
    {
        $berita = Berita::findOrFail($id);

        // Hapus foto jika ada
        if ($berita->foto && Storage::exists('foto_berita/' . $berita->foto)) {
            Storage::delete('foto_berita/' . $berita->foto);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
    }

    public function datatables()
    {
        $query = Berita::with('kategori');

        return DataTables::of($query)
            ->addIndexColumn()

            ->editColumn('judul', function ($row) {
                return '<h6 class="mb-0 text-sm" style="max-width:400px;white-space:normal;">'
                    . e($row->judul) .
                    '</h6>';
            })

            ->editColumn('penulis', function ($row) {
                return '<h6 class="mb-0 text-sm">' . e($row->penulis) . '</h6>';
            })

            ->editColumn('kategori', function ($row) {
                return '<h6 class="mb-0 text-sm">' . e($row->kategori->nama_kategori ?? '-') . '</h6>';
            })

            ->editColumn('tanggal_terbit', function ($row) {
                return '<h6 class="mb-0 text-sm">' .
                    \Carbon\Carbon::parse($row->tanggal_terbit)->translatedFormat('d M Y') .
                    '</h6>';
            })

            // SEARCH
            ->filterColumn('judul', function ($query, $keyword) {
                $query->where('judul', 'like', "%{$keyword}%");
            })
            ->filterColumn('penulis', function ($query, $keyword) {
                $query->where('penulis', 'like', "%{$keyword}%");
            })
            ->filterColumn('kategori', function ($query, $keyword) {
                $query->whereHas('kategori', function ($q) use ($keyword) {
                    $q->where('nama_kategori', 'like', "%{$keyword}%");
                });
            })

            ->addColumn('aksi', function ($row) {
                return '
            <div class="btn-group">
                <a href="' . route('berita.edit', $row->berita_id) . '"
                   class="btn btn-sm btn-outline-primary me-1">
                    <i class="bi bi-pencil"></i>
                </a>
                <button class="btn btn-sm btn-outline-danger btn-delete"
                    data-id="' . $row->berita_id . '"
                    data-judul="' . e($row->judul) . '">
                    <i class="bi bi-trash"></i>
                </button>
            </div>';
            })

            ->rawColumns(['judul', 'penulis', 'kategori', 'tanggal_terbit', 'aksi'])
            ->make(true);
    }
}
