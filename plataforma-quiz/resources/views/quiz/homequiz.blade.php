<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<a href="/index" class="btn btn-primary">Criar Quiz</a><br><br>
<a href="/users"><x-adminlte-button label="Voltar a página inicial" theme="warning" /></a><br><br>
<div class="container">
    <table id="table-quizzes" class="table">
        <thead>
            <tr>
            <th scope="col">imagem</th>
            <th scope="col">Título</th>
            <th scope="col">descrição</th>
            <th scope="col">Botão para jogar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
                <tr>
                    <th scope="row"><img src="/imagens/quiz/{{ $quiz->image }}" alt="{{ $quiz->title }}"></th>
                    <td>{{ $quiz->title }}</td>
                    <td>{{ $quiz->description }}</td>
                    <td><a href="/homequiz/{{ $quiz->id }}" class="btn btn-primary">Jogar</a></td>
                </tr>
            @endforeach
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
