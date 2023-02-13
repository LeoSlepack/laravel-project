<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<div class="container">
    <form action="/quiz/update/{{ $quiz->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-adminlte-input id="title" name="title" label="Título do quiz:" value="{{ $quiz->title }}" required/>
        <x-adminlte-textarea id="description" name="description" label="Descrição:" placeholder="{{ $quiz->description }}" required/>
        <div class="form-group">
            <x-adminlte-input-file type="file" id="image" name="image" label="Imagem:"/>
            <img src="/imagens/quiz/{{ $quiz->image }}" class="img-fluid" alt="Imagem Quiz">
        </div>
        <x-adminlte-input id="question" name="question" label="Pergunta:" value="{{ $quiz->question }}" required/>
        <x-adminlte-input id="answer" name="answer" label="Resposta correta:" value="{{ $quiz->answer }}" required/>
        <x-adminlte-input id="incorrectanswer" name="incorrectanswer" label="Resposta incorreta:" value="{{ $quiz->incorrectanswer }}" required/>
        <x-adminlte-button class="btn-flat" type="submit" label="Atualizar" theme="success" icon="fas fa-lg fa-save"/>
    </form>
</div>
@stop


