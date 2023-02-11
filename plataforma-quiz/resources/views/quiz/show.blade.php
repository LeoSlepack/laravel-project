@extends('adminlte::page')

<!--ADMINLTE-->
@section('content_header')

<a href="/users">
    <x-adminlte-button label="Voltar a página inicial" theme="warning" />
</a> 






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