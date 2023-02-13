<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<a href="/users"><x-adminlte-button label="Voltar a página inicial" theme="warning" /></a><br><br>
<form action="/homequiz" method="POST" enctype="multipart/form-data">
    @csrf
    <x-adminlte-input name="title"  id="title" type="text" label="Título:" placeholder="Insira o título do quiz" required/>

    <x-adminlte-input-file type="file" id="image" name="image" label="imagem para quiz:" placeholder="Insira uma imagem para ilustrar seu quiz" igroup-size="lg" legend="Choose" multiple>
    </x-adminlte-input-file> 

    <x-adminlte-textarea name="description" id="description" label="Descrição:" rows=3  igroup-size="sm" placeholder="Descreva seu quiz required">
    </x-adminlte-textarea>

    <x-adminlte-input name="question"  id="question" type="text" label="Pergunta:" placeholder="Digite sua pergunta" required/>

    <div class="form-group">
        <label for="correctAnswers">Número de respostas corretas</label>
        <select class="form-control" id="correctAnswers">
            <option value="1" {{ old('num_correct_answers', 1) == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ old('num_correct_answers', 1) == 2 ? 'selected' : '' }}>2</option>
        </select>
    </div> 
    <div id="answerInputs">
        <div class="form-group">
            <label for="correctAnswer1">Resposta Correta 1</label>
            <input type="text" class="form-control" id="answer" name="answer" placeholder="Insira a resposta correta" required>
        </div>
    </div> 
    <div class="form-group">
        <label for="incorrectanswer">Resposta Incorreta</label>
        <input type="text" class="form-control" id="incorrectanswer" name="incorrectanswer" placeholder="Insira uma resposta incorreta" required>
    </div> 
    <input type="submit" class="btn btn-primary" value="Criar Quiz">
</form>
<script>
    const correctAnswersSelect = document.querySelector("#correctAnswers");
    const answerInputsContainer = document.querySelector("#answerInputs");

    correctAnswersSelect.addEventListener("change", function() {
    const numberOfCorrectAnswers = this.value;

    // Remover inputs existentes
    while (answerInputsContainer.firstChild) {
    answerInputsContainer.removeChild(answerInputsContainer.firstChild);
    }

    // Adicionar novos inputs
    for (let i = 1; i <= numberOfCorrectAnswers; i++) {
    const newInput = document.createElement("div");
    newInput.classList.add("form-group");
    newInput.innerHTML = `
    <label for="correctAnswer${i}">Resposta Correta ${i}</label>
    <input type="text" class="form-control" id="correctAnswer${i}" placeholder="Insira a resposta correta">
    `;
    answerInputsContainer.appendChild(newInput);
    }
    });
</script>
@stop
