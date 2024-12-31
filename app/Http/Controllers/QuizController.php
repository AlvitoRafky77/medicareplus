<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function dashboardQuiz()
    {
        return view('quiz.dashboard');
    }

    public function quizForm ()
    {
        return view('quiz.quiz');
    }

    public function showPoin()
    {
        return view('quiz.poin');
    }

    public function index()
    {
        $questions = Quiz::all();
        return view('quiz.index', compact('questions'));
    }

    public function result(Request $request)
    {
        $answers = $request->input('answers');
        $questions = Quiz::all();
        $correct = 0;

        foreach ($questions as $question) {
            if (isset($answers[$question->id]) && $answers[$question->id] == $question->correct_option) {
                $correct++;
            }
        }

        $total = $questions->count();
        $wrong = $total - $correct;

        $medal = $correct == $total ? 'Gold' : ($correct > $total / 2 ? 'Silver' : 'Bronze');

        return view('quiz.result', compact('correct', 'wrong', 'medal', 'total'));
    }
}
