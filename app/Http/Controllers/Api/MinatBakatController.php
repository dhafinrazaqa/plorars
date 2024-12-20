<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\minatBakat;
use Illuminate\Http\Request;

class MinatBakatController extends Controller
{
    public function index()
    {
        $minatBakat = minatBakat::all();
        return response()->json($minatBakat);
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'opsi' => 'required|json',
        ]);

        $minatBakat = minatBakat::create([
            'question' => $request->question,
            'opsi' => $request->opsi,
        ]);

        return response()->json($minatBakat, 201);
    }

    public function show($id)
    {
        $minatBakat = minatBakat::find($id);
        if ($minatBakat) {
            return response()->json($minatBakat);
        }

        return response()->json(['message' => 'Data not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string',
            'opsi' => 'required|json',
        ]);

        $minatBakat = minatBakat::find($id);
        if ($minatBakat) {
            $minatBakat->update([
                'question' => $request->question,
                'opsi' => $request->opsi,
            ]);
            return response()->json($minatBakat);
        }

        return response()->json(['message' => 'Data not found'], 404);
    }

    public function destroy($id)
    {
        $minatBakat = minatBakat::find($id);
        if ($minatBakat) {
            $minatBakat->delete();
            return response()->json(['message' => 'Data deleted successfully']);
        }

        return response()->json(['message' => 'Data not found'], 404);
    }
}
