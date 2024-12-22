<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('search.index', compact('kegiatans'));
    }

    public function search(Request $request)
    {
        // Retrieve search input values
        $query = $request->input('query');
        $category = $request->input('category');
        $fakultas = $request->input('fakultas');

        // Start building the query
        $kegiatans = Kegiatan::query();

        // Filter by title if query is provided
        if (!empty($query)) {
            $kegiatans->where('judul', 'like', '%' . $query . '%');
        }

        // Filter by category if selected
        if (!empty($category) && $category !== 'Kategori') {
            $kegiatans->where('kategori', $category);
        }

        // Filter by fakultas if selected
        if (!empty($fakultas) && $fakultas !== 'Fakultas') {
            $kegiatans->where('fakultas', $fakultas);
        }

        // Fetch results
        $kegiatans = $kegiatans->get();

        // Return the filtered results to a view
        return view('search.index', compact('kegiatans'));
    }
}
