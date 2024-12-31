<?php

namespace App\Http\Controllers;

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
}
