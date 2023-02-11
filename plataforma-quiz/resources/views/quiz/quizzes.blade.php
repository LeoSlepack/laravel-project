<!--ADMINLTE-->
@extends('adminlte::page')

<!--ADMINLTE-->
@section('content_header')

<a href="/createquiz" class="btn btn-primary">Criar um quiz</a>
<a href="/users">
    <x-adminlte-button label="Voltar a página inicial" theme="warning" />
</a> 
<br> <br>
<div class="container">
    <table id="table-quizzes" class="table">
      <thead>
        <tr>
          <th scope="col">Imagem</th>
          <th scope="col">Título do Quiz</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="quiz1-cover.jpg" alt="Quiz 1 Cover" style="width: 50px;"></td>
          <td>Quiz 1</td>
        </tr>
        <tr>
          <td><img src="quiz2-cover.jpg" alt="Quiz 2 Cover" style="width: 50px;"></td>
          <td>Quiz 2</td>
        </tr>
        <tr>
          <td><img src="quiz3-cover.jpg" alt="Quiz 3 Cover" style="width: 50px;"></td>
          <td>Quiz 3</td>
        </tr>
      </tbody>
    </table>
</div>


@stop

<!--CSS ADMINLTE-->
@section('css_adminlte')
    <link rel="stylesheet" href="/css/admin_custom.css">
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
            $('#table-quizzes').DataTable();
        });
    </script>
@endsection