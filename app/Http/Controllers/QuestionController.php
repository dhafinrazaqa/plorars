<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\MbtiResult;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    private $category = [
        'E' => 0,
        'I' => 0,
        'S' => 0,
        'N' => 0,
        'T' => 0,
        'F' => 0,
        'J' => 0,
        'P' => 0,
    ];

    public function saveResult(Request $request)
    {
        $validated = $request->validate([
            'jawaban' => 'required|array',
            'jawaban.*' => 'in:A,B',
        ]);

        foreach ($request->jawaban as $nomorQuiz => $jawaban) {
            $this->updateCategory($nomorQuiz, $jawaban);
        }

        $mbtiType = $this->calculateMbti();

        $response = Http::post(route('api.mbti.storeResult'), [
            'mbti_type' => $mbtiType,
        ]);
        
        if ($response->successful()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Hasil MBTI berhasil disimpan.',
                'mbti_type' => $mbtiType,
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal menyimpan hasil MBTI.',
            ], 500);
        }
    }

    private function updateCategory($nomorQuiz, $jawaban)
    {
        switch ($nomorQuiz) {
            case 1: case 2: case 3: case 4: case 5: case 6:
                if ($jawaban === 'A') {
                    $this->category['E']++;
                } else {
                    $this->category['I']++;
                }
                break;

            case 7: case 8: case 9: case 10:
                if ($jawaban === 'A') {
                    $this->category['S']++;
                } else {
                    $this->category['N']++;
                }
                break;

            case 11: case 12:
                if ($jawaban === 'A') {
                    $this->category['N']++;
                } else {
                    $this->category['S']++;
                }
                break;

            case 13: case 14: case 15:
                if ($jawaban === 'A') {
                    $this->category['T']++;
                } else {
                    $this->category['F']++;
                }
                break;

            case 16: case 17: case 18: case 19:
                if ($jawaban === 'A') {
                    $this->category['J']++;
                } else {
                    $this->category['P']++;
                }
                break;

            case 20:
                if ($jawaban === 'A') {
                    $this->category['J']++;
                } else {
                    $this->category['P']++;
                }
                break;

            default:
                break;
        }
    }

    private function calculateMbti()
    {
        $mbtiType = '';
        $mbtiType .= $this->category['E'] >= $this->category['I'] ? 'E' : 'I';
        $mbtiType .= $this->category['S'] >= $this->category['N'] ? 'S' : 'N';
        $mbtiType .= $this->category['T'] >= $this->category['F'] ? 'T' : 'F';
        $mbtiType .= $this->category['J'] >= $this->category['P'] ? 'J' : 'P';

        return $mbtiType;
    }
}