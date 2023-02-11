<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
   
    public function index() {

        $quizzes = Quiz::all(); 
        
        return view('quiz.homequiz',['quizzes'=>$quizzes]);


    }

    public function create() {
        
        return view('quiz.homequiz');

    }

    public function store(Request $request) {

        $request->validate([
            'correct_answer' => 'required'
        ]);
    
        $quiz = new Quiz;
    
        $quiz->title = $request->title;
        $quiz->image = $request->imgQuiz;
        $quiz->description = $request->descriptionQuiz;
        $quiz->question = $request->questionQuiz;
        $quiz->num_correct_answers = $request->correctAnswers;
        $quiz->correct_answer = $request->correctAnswer1;
    
        if ($request->has('correctAnswer2')) {
            $quiz->correct_answer_2 = $request->correctAnswer2;
        }
    
        $quiz->incorrect_answer = $request->incorrectAnswer;
    
        $quiz->save();
    
        return view('quiz.homequiz');
    
    }
    
    

  
    public function show($id) {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    
    public function destroy($id) {
        //
    }
}
