<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinatBakatController extends Controller
{
    public function index()
    {
        return view('minatBakat.index');
    }

    public function getQuestions()
    {
        $questions = DB::table('minat_bakat_questions')->select('id', 'question', 'options')->get();

        $questions->transform(function ($question) {
            $question->options = json_decode($question->options);
            return $question;
        });

        return response()->json($questions);
    }

    public function storeResults(Request $request)
    {
        $minatBakatResults = $request->input('minatBakatResults');
        $userId = $request->input('userId');

        DB::table('minat_bakat_results')->insert([
            'user_id' => $userId,
            'result1' => $minatBakatResults[0],
            'result2' => $minatBakatResults[1],
            'result3' => $minatBakatResults[2],
            'created_at' => now(),
        ]);

        return response()->json(['success' => true, 'message' => 'Results saved successfully.', 'data' => $minatBakatResults]);
    }
}
