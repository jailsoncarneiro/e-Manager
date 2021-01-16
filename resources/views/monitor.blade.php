@extends('layouts.master')

@section('content')
    <div class="alert alert-info">Monitor</div>
    <table class="table table-hover table-striped tbmonitor">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Sistema</th>
                <th>Licença</th>
                <th>Data Reg.</th>
                <th>Último Log</th>
                <th>Usuário</th>
                <th>Nome do PC</th>
                <th>IP Local</th>
                <th>IP Remoto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cads as $cad)
                <tr class="table-tr" data-href={{ url('monitor/admin', [$cad->id]) }}>                     
                    <td> {{ $cad->id }}</td>
                    <td><table><tr><td>{{ $cad->nome }} </td></tr><tr><td>{{ $cad->enderecos->first()['cid']['nome'] }}</td></tr></table></td>
                    <?php $_log = $cad->logs->first();?>
                    <td>{{ $_log['sistema'] }}</td>
                    <td>{{ $cad->lictgcman }}</td>
                    <td>{{ $cad->lictgcmandatareg }}</td>
                    <td>{{ $_log['data'] }}</td>
                    <td>{{ $_log['pcuser'] }}</td>
                    <td>{{ $_log['pcname'] }}</td>
                    <td>{{ $_log['pclocalip'] }}</td>
                    <td>{{ $_log['pcremip'] }}</td>
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

@section('scripts')
<script>
    $(function() {
        $('table.tbmonitor').on("click", "tr.table-tr", function() {
            window.location = $(this).data("href");
        });
    });
</script>
@endsection
