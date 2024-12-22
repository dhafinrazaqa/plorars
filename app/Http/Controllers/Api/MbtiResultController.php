<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MbtiResult;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MbtiResultController extends Controller
{
  
    public function storeResult(Request $request)
    {
        $request->validate([
            'mbti_type' => 'required|string|max:4',  
        ]);

        $userId = Auth::id();

        $mbtiResult = MbtiResult::create([
            'user_id' => $userId,
            'mbti_type' => $request->mbti_type,
        ]);

        return response()->json([
            'message' => 'MBTI result saved successfully.',
            'data' => $mbtiResult,
        ]);
    }

    public function getResult()
    {
        $userId = Auth::id();

        $mbtiResult = MbtiResult::where('user_id', $userId)->first();

        if ($mbtiResult) {
            return response()->json([
                'data' => $mbtiResult,
            ]);
        } else {
            return response()->json([
                'message' => 'MBTI result not found.',
            ], 404);
        }
    }
}