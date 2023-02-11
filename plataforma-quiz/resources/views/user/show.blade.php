<!--ADMINLTE-->
@extends('adminlte::page')

<!--ADMINLTE-->
@section('content_header')

         <h1>Administração de usuários</h1>
         <br>
         <div class="container">
            <table id="table-users" class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
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