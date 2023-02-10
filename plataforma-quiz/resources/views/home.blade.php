<!--ADMINLTE-->
@extends('adminlte::page')

<!--ADMINLTE-->
@section('title', 'Dashboard')

<!--ADMINLTE-->
@section('content_header')
    
     <div class="container">
        <h1>Jogue ou crie seu Quiz</h1>
        <br>
        <a href="#" class="btn btn-primary">Jogar</a>
        <a href="#" class="btn btn-primary">Criar um quiz</a>
     </div>
    <br>
     <div class="container">
         <h1>Administração de usuários</h1>
         <br>
         <a href="#" class="btn btn-primary">Criar um usuário</a>
         <br>
             <br>
         <div class="container">
            <table id="table-users" class="table">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nickname</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>Leticia Maia</td>
                    <td>Leticiamaia@email.com</td>
                    <td>lemaia</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                    </tr>
                    <tr>
                    <td>Eduardo Slepack</td>
                    <td>Edu@email.com</td>
                    <td>boi</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                    </tr>
                    <tr>
                    <td>Andre Magalhães</td>
                    <td>Andre@email.com</td>
                    <td>Andrezão</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                    </tr>
                    <tr>
                    <td>Millena Maia</td>
                    <td>Millena@email.com</td>
                    <td>Mi</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                    </tr>
                    <tr>
                    <td>Bruna Nunes</td>
                    <td>brununes@email.com</td>
                    <td>brununes</td>
                    <td>
                        <button class="btn btn-primary btn-sm">Editar</button>
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </td>
                    </tr>
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