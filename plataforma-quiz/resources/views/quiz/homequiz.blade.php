<!--ADMINLTE-->
@extends('adminlte::page')

<!--ADMINLTE-->
@section('content_header')

<link rel="stylesheet" href="/css/styles.css">

<div id="serach-container" class="col-md-12">
    <h1>Busque por um Quiz</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form><br>
    <a href="/index" class="btn btn-primary">Criar Quiz</a>
</div> <br>
<div id="quizzes-container" class="col-md-12">
    <h2>Quizzes</h2>
    <p>Jogue e se divirta</p>
    <div id="cards-container" class="row">
        @foreach($quizzes as $quiz)
        <div class="card col-md-3">
            <img src="/imagens/quiz/{{ $quiz->image }}" alt="{{ $quiz->title }}">
            <h5 class="card-title">{{ $quiz->title }}</h5>
            <a href="" class="btn btn-primary">Jogar</a>
        </div>
        @endforeach
    </div>
    <br>
    <a href="/users">
        <x-adminlte-button label="Voltar a página inicial" theme="warning" />
    </a> 
</div>

@stop



