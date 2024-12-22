<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    // Show the detail of a specific kegiatan by ID
    public function show($id)
    {
        // Retrieve the kegiatan by ID from the database
        $kegiatan = Kegiatan::findOrFail($id); // Use findOrFail to handle invalid IDs

        // Return the view and pass the kegiatan data
        return view('kegiatan.show', compact('kegiatan'));
    }
}
