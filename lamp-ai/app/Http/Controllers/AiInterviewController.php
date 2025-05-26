<?php

// app/Http/Controllers/AiInterviewController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiInterviewController extends Controller
{
    public function index()
    {
        return view('interview.index');
    }

    public function chat()
    {
        $questions = config('ai_questions'); // さっき作った質問テンプレ
        return view('interview.chat', compact('questions'));
    }
}
