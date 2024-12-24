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


    // public function store(Request $request)
    // {
    //     // Ambil jawaban dari form yang dikirimkan
    //     $answer = json_decode($request->input('answer'), true);

    //     // Proses jawaban dan simpan hasilnya ke mbti_answers
    //     $mbtiAnswer = new MbtiAnswer();
    //     $mbtiAnswer->type = $answer['type'];  // Menyimpan tipe MBTI (misalnya 'E', 'I', dll)
    //     $mbtiAnswer->point = $answer['point'];  // Menyimpan poin yang didapat dari jawaban

    //     // If user is authenticated, save user_id
    //     if (auth()->check()) {
    //         $mbtiAnswer->user_id = auth()->id();  // Save the authenticated user's ID
    //     }

    //     $mbtiAnswer->save();

    //     // Get the next question
    //     $nextQuestion = Question::where('id', '>', $request->input('current_question_id'))
    //         ->orderBy('id', 'asc')
    //         ->first();

    //     // If there's a next question, return it as JSON to update the view
    //     if ($nextQuestion) {
    //         return response()->json([
    //             'success' => true,
    //             'question' => $nextQuestion,
    //         ]);
    //     } else {
    //         // If there are no more questions, calculate MBTI results
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'No more questions available.',
    //         ]);
    //     }
    // }

    // private function calculateMBTI($userAnswers)
    // {
    //     // Kalkulasi hasil MBTI berdasarkan jawaban user
    //     $mbtiResults = [
    //         'E' => 0,
    //         'I' => 0,
    //         'N' => 0,
    //         'S' => 0,
    //         'T' => 0,
    //         'F' => 0,
    //         'J' => 0,
    //         'P' => 0,
    //     ];

    //     // Proses jawaban user
    //     foreach ($userAnswers as $answer) {
    //         $option = json_decode($answer, true); // Decode JSON dari jawaban
    //         foreach ($option as $key => $value) {
    //             $mbtiResults[$value['type']] += $value['point'];
    //         }
    //     }

    //     // Tentukan MBTI berdasarkan poin terbesar
    //     $mbtiType = '';
    //     $mbtiType .= $mbtiResults['E'] > $mbtiResults['I'] ? 'E' : 'I';
    //     $mbtiType .= $mbtiResults['N'] > $mbtiResults['S'] ? 'N' : 'S';
    //     $mbtiType .= $mbtiResults['T'] > $mbtiResults['F'] ? 'T' : 'F';
    //     $mbtiType .= $mbtiResults['J'] > $mbtiResults['P'] ? 'J' : 'P';

    //     // Simpan hasil MBTI ke database jika user sudah login
    //     if (auth()->check()) {
    //         $user = auth()->user();
    //         $user->mbti_type = $mbtiType;  // Simpan hasil MBTI ke kolom mbti_type
    //         $user->save();  // Simpan perubahan
    //     }

    //     // Tampilkan hasil ke user
    //     return view('mbti.result', compact('mbtiType'));
    // }

    // test 1
    // Handle the answer submission via Ajax and calculate the result

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
