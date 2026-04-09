<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PustakawanController extends Controller
{
    public function index()
    {
        $pustakawans = Pustakawan::orderBy('nama', 'asc')->paginate(10);
        return view('pustakawan.index', compact('pustakawans'));
    }

    public function create()
    {
        return view('pustakawan.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan data pustakawan ke database
        $pustakawan = new Pustakawan();
        $pustakawan->nama = $validatedData['nama'];
        $pustakawan->jabatan = $validatedData['jabatan'];
        $pustakawan->deskripsi = $validatedData['deskripsi'] ?? null;

        // Handle upload foto jika ada
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            // Simpan ke storage/app/public/pustakawan
            $path = $file->store('pustakawan', 'public');
            $pustakawan->foto = $path; // simpan path di database
        }

        $pustakawan->save();
        Alert::success('Sukses', 'Pustakawan berhasil ditambahkan!');
        return redirect()->route('pustakawan.index');
    }

    public function edit($id)
    {
        $pustakawan = Pustakawan::findOrFail($id);
        return view('pustakawan.edit', compact('pustakawan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Temukan pustakawan
        $pustakawan = Pustakawan::findOrFail($id);
        $pustakawan->nama = $validatedData['nama'];
        $pustakawan->jabatan = $validatedData['jabatan'];
        $pustakawan->deskripsi = $validatedData['deskripsi'] ?? null;

        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($pustakawan->foto && Storage::disk('public')->exists($pustakawan->foto)) {
                Storage::disk('public')->delete($pustakawan->foto);
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('pustakawan', 'public');
            $pustakawan->foto = $path;
        }

        $pustakawan->save();
        Alert::success('Sukses', 'Pustakawan berhasil diperbarui!');
        return redirect()->route('pustakawan.index');
    }

    public function destroy($id)
    {
        $pustakawan = Pustakawan::findOrFail($id);

        // Hapus foto jika ada
        if ($pustakawan->foto && Storage::disk('public')->exists($pustakawan->foto)) {
            Storage::disk('public')->delete($pustakawan->foto);
        }

        $pustakawan->delete();
        Alert::success('Sukses', 'Pustakawan berhasil dihapus!');
        return redirect()->route('pustakawan.index');
    }
}
