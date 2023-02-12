<!--ADMINLTE-->
@extends('adminlte::page')

<!--ADMINLTE-->
@section('content_header')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
               <img src="/imagens/quiz/{{ $quiz->image }}" class="img-fluid" alt="Imagem ilustração do quiz"> 
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $quiz->title }}</h1>
                <p class="description">{{ $quiz->description }}</p>
                <p class="question">{{ $quiz->question }}</p>
                <input type="checkbox" name="answerquiz" id="answerquiz">
                <label for="answerquiz">{{ $quiz->answer }}</label> <br>
                <a href="#" class="btn btn-primary">Enviar resposta</a>
            </div>
        </div>
       
    </div>

@stop