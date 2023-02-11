<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')

        <a href="/users">
                <x-adminlte-button label="Voltar a página inicial" theme="warning" />
        </a> <br> <br>
        <form action="/quizzes" method="POST">
            @csrf
            <x-adminlte-input name="title"  id="title" type="text" label="Título:" placeholder="Insira o título do quiz" required/>

            <x-adminlte-input-file accept="image/*" id="imgQuiz" name="imgQuiz" label="imagem para quiz" placeholder="Insira uma imagem para ilustrar seu quiz" igroup-size="lg" legend="Choose" multiple>
            </x-adminlte-input-file>

            <x-adminlte-textarea name="descriptionQuiz" id="descriptionQuiz" label="Descrição:" rows=3  igroup-size="sm" placeholder="Descreva seu quiz required">
            </x-adminlte-textarea>

            <x-adminlte-input name="questionQuiz"  id="questionQuiz" type="text" label="Pergunta:" placeholder="Digite sua pergunta" required/>

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
                    <input type="text" class="form-control" id="correctAnswer1" name="correctAnswer1" placeholder="Insira a resposta correta" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="incorrectAnswer">Resposta Incorreta</label>
                <input type="text" class="form-control" id="incorrectAnswer" name="incorrectAnswer" placeholder="Insira uma resposta incorreta" required>
            </div>


            <button type="submit" class="btn btn-primary">Criar Quiz</button></a>
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

<!--CSS DATATABLES-->
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">
@endsection

<!--JS DATATABLES-->
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#form-create-quiz').DataTable();
        });
    </script>
@endsection


