<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<div class="container">
    <x-adminlte-profile-widget name="Leonardo Slepack" desc="Desenvolvedor dessa aplicação" theme="gray"
        img="\imagens\fotoperfil.png" footer-class="bg-gradient-gray">
    </x-adminlte-profile-widget>
</div>
<div class="container">
    <h1>Jogue ou crie seu Quiz</h1><br>
    <a href="{{route('homequiz.index')}}" class="btn btn-primary">Ver Quizzes</a>
    <x-adminlte-modal id="modalCustom" title="Crie seu Quiz" size="lg" theme="teal" icon="fas fa-bell" v-centered static-backdrop scrollable>
        <div style="height:800px;">
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
        </div>
    </x-adminlte-modal>
    <x-adminlte-button label="Crie seu Quiz" data-toggle="modal" data-target="#modalCustom" class="bg-teal"/>
    <a href="{{route('user.create')}}" class="btn btn-primary">Criar usuário</a><br><br>
</div>
<br>
<div class="container">
    <h1>Administração de usuários</h1><br>
    <div class="container">
        <table id="table-users" class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Botão Visualizar</th>
                    <th scope="col">Botão Editar</th>
                    <th scope="col">Botão Exclusão</th>
                    </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a type="button" href="{{route('user.show', $user->id)}}" class="btn btn-success">Visualizar usuário</a></td>
                        <td><a type="button" href="{{route('user.edit', $user->id)}}" class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{route('user.destroy', $user->id)}}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Excluir usuário</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
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
        $('#table-users').DataTable();
    });
</script>
@endsection