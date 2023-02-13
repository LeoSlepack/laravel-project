<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<div id="quiz-create-form" class="container">
    <form id="form-quiz-create" action="/homequiz" method="POST" enctype="multipart/form-data">
        @csrf
        <x-adminlte-input id="title" name="title" label="Título do quiz:" placeholder="Digite o título do seu quiz" required/>
        <x-adminlte-textarea id="description" name="description" label="Descrição:" placeholder="Descreva seu quiz" required/>
        <x-adminlte-input-file type="file" id="image" name="image" label="Imagem:" placeholder="Imagem que descreva seu quiz"/>
        <x-adminlte-input id="question" name="question" label="Pergunta:" placeholder="Digite sua pergunta" required/>
        <x-adminlte-input id="answer" name="answer" label="Resposta correta:" placeholder="Digite a resposta correta:" required/>
        <x-adminlte-input id="incorrectanswer" name="incorrectanswer" label="Resposta incorreta:" placeholder="Digite a resposta incorreta:" required/>
        <x-adminlte-button class="btn-flat" type="submit" label="Criar Quiz" theme="success" icon="fas fa-lg fa-save"/>
    </form>
</div>
@stop
