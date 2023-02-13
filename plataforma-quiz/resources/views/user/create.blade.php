<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<h1>Criação de usuário</h1><br>
    <form id="form-edit-user" method="POST" action="{{route('user.store')}}">
        @csrf
        <x-adminlte-input id="name" name="name" label="Nome:" placeholder="Digite seu nome completo" required/>
        <x-adminlte-input id="email" name="email" type="email" label="E-mail:" placeholder="mail@example.com" required/>
        <button type="submit" class="btn btn-primary">Atualizar</button><br><br>
    </form>
@stop


