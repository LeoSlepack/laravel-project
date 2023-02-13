<!--ADMINLTE-->
@extends('adminlte::page')
<!--ADMINLTE-->
@section('content_header')
<h1>Edição de usuário</h1><br>
    <form id="form-edit-user" method="POST" action="{{route('user.update', $user->id)}}">
        @csrf
        @method('put')
        <x-adminlte-input id="name" name="name" label="Nome:" value="{{$user->name}}" required/>
        <x-adminlte-input id="email" name="email" type="email" label="E-mail:" value="{{$user->email}}" required/>
        <button type="submit" class="btn btn-primary">Atualizar</button><br><br>
        <a href="/users"><x-adminlte-button label="Voltar a página inicial" theme="warning" /></a> 
    </form>
</div>    
@stop

