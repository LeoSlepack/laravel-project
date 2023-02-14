<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<div class="container">
    <table id="table-quizzes" class="table">
        <thead>
            <tr>
            <th scope="col">imagem</th>
            <th scope="col">Título</th>
            <th scope="col">descrição</th>
            <th scope="col">Botão para jogar</th>
            <th scope="col">Boão de edição</th>
            <th scope="col">Botão de exclusão</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
                <tr>
                    <th scope="row"><img class="img-fluid" src="/imagens/quiz/{{ $quiz->image }}" alt="{{ $quiz->title }}"></th>
                    <td>{{ $quiz->title }}</td>
                    <td>{{ $quiz->description }}</td>
                    <td><a href="/homequiz/{{ $quiz->id }}" class="btn btn-success">Jogar</a></td>
                    <td><a href="/quiz/edit/{{ $quiz->id }}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="/homequiz/{{ $quiz->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger delete-btn">Excluir Quiz</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container">
    <a href="/users"><x-adminlte-button label="Voltar a página inicial" theme="warning" /></a><br><br>
</div>
<form id="quizForm">
  <div class="form-group">
    <label for="quizTitle">Título do Quiz</label>
    <input type="text" class="form-control" id="quizTitle">
  </div>
  <div class="form-group">
    <label for="quizImage">Imagem</label>
    <input type="file" class="form-control" id="quizImage">
  </div>
  <div class="form-group">
    <label for="quizDescription">Descrição</label>
    <textarea class="form-control" id="quizDescription"></textarea>
  </div>
  <div class="form-group">
    <label for="quizQuestion">Pergunta</label>
    <input type="text" class="form-control" id="quizQuestion">
  </div>
  <div class="form-group">
    <label for="answerType">Tipo de Resposta</label>
    <div>
      <input type="radio" name="answerType" value="multipla" id="answerTypeMultipla"> Multipla Escolha
      <br>
      <input type="radio" name="answerType" value="texto" id="answerTypeTexto"> Texto
    </div>
  </div>
  <div class="form-group" id="correctAnswerContainer">
    <label for="correctAnswer">Resposta Correta</label>
    <input type="text" class="form-control" id="correctAnswer">
  </div>
  <div class="form-group" id="incorrectAnswerContainer">
    <label for="incorrectAnswer">Resposta Incorreta</label>
    <input type="text" class="form-control" id="incorrectAnswer">
  </div>
  <div class="form-group" id="textAnswerContainer">
    <label for="textAnswer">Texto</label>
    <input type="text" class="form-control" id="textAnswer">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



@stop
<!--JS DATATABLES-->
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
           $('#table-quizzes').DataTable();
    });

    $(document).ready(function() {
  // Esconder os campos de resposta correta, resposta incorreta e texto
  $('#correctAnswerContainer, #incorrectAnswerContainer, #textAnswerContainer').hide();

  // Mostrar ou esconder os campos de resposta correta, resposta incorreta e texto
  $('input[name="answerType"]').on('change', function() {
    if (this.value === 'multipla') {
      $('#correctAnswerContainer, #incorrectAnswerContainer').show();
      $('#textAnswerContainer').hide();
    } else if (this.value === 'texto') {
      $('#textAnswerContainer').show();
      $('#correctAnswerContainer, #incorrectAnswerContainer').hide();
    }
  });
});
</script>
@endsection



