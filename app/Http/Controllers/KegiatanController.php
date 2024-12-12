<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Http\Requests\StoreKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();

        return view('admin.kegiatan.index', [
            'kegiatans' => $kegiatans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKegiatanRequest $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'fakultas' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|file|max:2048',
            'link' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $validatedData['gambar'] = $gambar->store('/gambar-kegiatan');

        Kegiatan::create($validatedData);

        return redirect('admin/kegiatan')->with('success', 'Kegiatan berhasil ditambahkan!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.update', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKegiatanRequest $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'fakultas' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:2048',
            'link' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            if ($request->old_image) {
                Storage::delete($request->old_image);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('/gambar-kegiatan');
        }

        Kegiatan::where('id', $id)->update($validatedData);

        return redirect('admin/kegiatan')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        if ($kegiatan->gambar) {
            Storage::delete($kegiatan->gambar);
        }

        $kegiatan->delete();

        return redirect('admin/kegiatan')->with('success', 'Kegiatan berhasil dihapus!');
    }
}