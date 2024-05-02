<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return response()->json($questions);
    }

    public function answer(Request $request, $id)
    {
        $question = Question::find($id);

        if ($question->answer === $request->answer) {
            return response()->json(['correct' => true]);
        }

        return response()->json(['correct' => false]);
    }
}
