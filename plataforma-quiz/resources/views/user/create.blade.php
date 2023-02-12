<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<h1>Criação de usuário</h1><br>
    <form id="form-edit-user" method="POST" action="{{route('user.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required placeholder="Digite seu nome completo">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required placeholder="Digite seu melhor email">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button><br><br>
    </form>
@stop
