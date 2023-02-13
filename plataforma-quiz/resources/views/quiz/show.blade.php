<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $quiz->title }}</h3>
        </div>
        <form >
            <div class="card-body">
                <div class="form-group">
                    <img src="/imagens/quiz/{{ $quiz->image }}" class="img-fluid" alt="Imagem ilustração do quiz"> 
                </div>
                <x-adminlte-textarea id="description" name="description" label="Descrição:" placeholder="{{ $quiz->description }}" readonly/>
                <x-adminlte-input id="question" name="question" label="Pergunta:" value="{{ $quiz->question }}" readonly/>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="correctAnswer" id="answerTrue" value="true">
                    <label class="form-check-label" for="answerTrue">{{ $quiz->answer }}</label>
                </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="correctAnswer" id="answerFalse" value="false">
                <label class="form-check-label" for="answerFalse">{{ $quiz->incorrectanswer }}</label>
            </div>
            </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <a href="/users"><x-adminlte-button label="Voltar a página inicial" theme="warning" /></a>
</div>
@stop

