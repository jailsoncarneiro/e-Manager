@extends('layouts.master')

@section('content')
    <div class="alert alert-info">Atividades</div>
    <table class="table table-hover table-striped">
        <thead>
          <tr>
			<th>Data/Hora</th>
			<th>Cliente</th>
            <th>Sistema</th>
			<th>Usuário</th>
			<th>Operação</th>
			<th>Nome do PC</th>
			<th>IP Local</th>
            <th>IP Remoto</th>
            <th>Operaçoes</th>
		  </tr>
        </thead>
        <tbody>
            @foreach ($cad->logs as $log)
                <tr>
                    <td>{{ $log->data }}</td>
                    <td>{{ $log->cliente->nome }}</td>
                    <td>{{ $log->sistema }}</td>
                    <td>{{ $log->pcuser }}</td>
                    <td>{{ $log->cmd }}</td>
                    <td>{{ $log->pcname }}</td>
                    <td>{{ $log->pclocalip }}</td>
                    <td>{{ $log->pcremip }}</td>
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
