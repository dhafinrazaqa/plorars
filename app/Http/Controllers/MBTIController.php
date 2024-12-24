<?php

// app/Http/Controllers/MBTIController.php
namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\MbtiAnswer;
use App\Models\MbtiResult;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MBTIController extends Controller
{

    public function index()
    {
        // Ambil semua soal dari database (urutan sesuai dengan yang ada di DB)
        $questions = Question::all(); // Ambil semua soal
        return view('mbti.index', compact('questions'));
    }

    public function getQuestions()
    {
        $questions = DB::table('questions')->select('id', 'question', 'options')->get();

        $questions->transform(function ($question) {
            $question->options = json_decode($question->options);
            return $question;
        });

        return response()->json($questions);
    }

    public function storeResults(Request $request)
    {
        $mbtiResults = $request->input('mbtiResults');
        $userId = $request->input('userId');

        DB::table('mbti_results')->insert([
            'user_id' => $userId,
            'mbti_type' => $mbtiResults,
            'created_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Results saved successfully.', 'data' => $mbtiResults]);
    }
}
