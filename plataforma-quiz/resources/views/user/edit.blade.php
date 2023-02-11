<!--ADMINLTE-->
@extends('adminlte::page')

<!--ADMINLTE-->
@section('content_header')

         <h1>Edição de usuário</h1>
         <br>
         <form id="form-edit-user" method="POST" action="{{route('user.update', $user->id)}}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name" aria-describedby="emailHelp" required placeholder="Digite seu nome completo">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" value="{{$user->email}}" class="form-control" name="email" id="email" required placeholder="Digite seu melhor email">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <br> <br>
            <a href="/users">
                <x-adminlte-button label="Voltar a página inicial" theme="warning" />
            </a> 
        </form>
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
            $('#form-edit-user').DataTable();
        });
    </script>
@endsection