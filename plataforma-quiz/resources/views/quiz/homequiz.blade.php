<!--ADMINLTE-->
@extends('adminlte::page')

<!--ADMINLTE-->
@section('content_header')

<div class="container">
    <a href="/index" class="btn btn-primary">Criar um quiz</a>
    <a href="/users">
        <x-adminlte-button label="Voltar a página inicial" theme="warning" />
    </a>
    <br><br>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
      </div>
</div>

@foreach ($quizzes as $quiz)

    <p>{{ $quiz->title }}--{{ $quiz->description }}</p>

@endforeach

@stop



