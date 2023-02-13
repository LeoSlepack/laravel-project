<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;


class QuizController extends Controller
{
   
    public function index() {

        
        $quizzes = Quiz::all();
        return view('quiz.homequiz',['quizzes' => $quizzes]);

    }

   
    public function create() {

        return view('quiz.homequiz');        
        
    }

   
    public function store(Request $request) {

        $quiz = new Quiz;

        $quiz->title = $request->title;
        $quiz->description = $request->description;
        $quiz->question = $request->question;
        $quiz->answer = $request->answer;
        $quiz->incorrectanswer = $request->incorrectanswer;

        //upload de imagem
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('imagens/quiz'), $imageName);
            $quiz->image = 'imagens/quiz/' . $imageName;

        }

        $quiz->save();

        return redirect('/homequiz');

    }

  
    public function show($id) {

        $quiz = Quiz::findOrfail($id);
        return view('quiz.show', ['quiz' => $quiz]);
        
    }

    
    public function edit($id) {
        //
    }

    
    public function update(Request $request, $id) {
        //
    }

   
    public function destroy($id) {
        //
    }
}
