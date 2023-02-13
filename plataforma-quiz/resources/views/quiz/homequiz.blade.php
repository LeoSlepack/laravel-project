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
