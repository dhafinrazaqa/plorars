<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Http\Requests\StoreKegiatanRequest;
use App\Http\Requests\UpdateKegiatanRequest;
use App\Notifications\KegiatanNotification;
use Illuminate\Support\Facades\Storage;
use Berkayk\OneSignal\OneSignalFacade as OneSignal;

class KegiatanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
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

        // Handle the file upload
        $gambar = $request->file('gambar');
        $validatedData['gambar'] = $gambar->store('/gambar-kegiatan');

        // Create the kegiatan
        $kegiatan = Kegiatan::create($validatedData);

        // Send OneSignal notification after the creation
        $message = "A new kegiatan has been added: " . $kegiatan->judul;
        $url = url("/kegiatan/{$kegiatan->id}");

        // Send notification with the image URL
        OneSignal::sendNotificationToAll(
            $message,
            $url
        );

        // Redirect with success message
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
        return view('admin.kegiatan.edit', [
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKegiatanRequest $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'fakultas' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|file|max:2048',
            'link' => 'required',
        ]);

        // Check if there's a new image, and delete the old one if it exists
        if ($request->hasFile('gambar')) {
            if ($request->old_image) {
                Storage::delete($request->old_image);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('/gambar-kegiatan');
        } else {
            // Ensure the old image remains if no new image is uploaded
            $validatedData['gambar'] = $request->old_image;
        }

        // Update the kegiatan record
        $kegiatan = Kegiatan::find($id);
        $kegiatan->update($validatedData);

        // Prepare notification details
        $message = "A kegiatan has been updated: " . $kegiatan->judul;
        $url = url("/kegiatan/{$kegiatan->id}");

        // Get the URL of the new or old image

        // Send OneSignal notification with an image
        OneSignal::sendNotificationToAll(
            $message,
            $url,
        );

        // Redirect with success message
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
