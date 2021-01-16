@extends('layouts.master')

@section('content')
    <div class="alert alert-info">Monitor</div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Sistema</th>
                <th>Licença</th>
                <th>Data Exp.</th>
                <th>Último Log</th>
                <th>Usuário</th>
                <th>Nome do PC</th>
                <th>IP Local</th>
                <th>IP Remoto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cads as $cad)
                <tr>                     
                    <td><a href={{ url('monitor/admin', [$cad->id]) }}>{{ $cad->id }}</a></td>
                    <td>{{ $cad->nome }}</td>
                    <td>{{ $cad->sistema }}</td>
                    <td>{{ $cad->licenca }}</td>
                    <td>{{ $cad->dataexp }}</td>
                    <td>{{ $cad->logs->last()['data'] }}</td>
                    <td>{{ $cad->logs->last()['pcuser'] }}</td>
                    <td>{{ $cad->logs->last()['pcname'] }}</td>
                    <td>{{ $cad->logs->last()['pclocalip'] }}</td>
                    <td>{{ $cad->logs->last()['pcremip'] }}</td>
                    <td><span class="fi-brush"></span></td>                    
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th></th>
            </tr>
        </tfoot>
    </table>
@endsection
