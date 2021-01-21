@extends('layouts.master')

@section('content')
    <h3 class="text-center">Monitor</h3>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">                    
                <div id="clientes_list"></div>                    
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <table class="table table-hover table-striped tbmonitor">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>  {{-- $cad->enderecos->first()['cid']['nome'] --}}
                <th>Sistema</th>
                <th>Licença</th>
                <th>Data Reg.</th>
                <th>Último Log</th>
                <th>Usuário</th>
                <th>Nome do PC</th>
                <th>IP Local</th>
                <th>IP Remoto</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody id="tbodyclientes">
            @foreach ($cads as $cad)
                <tr class="table-tr" data-href="'{{ url('monitor/admin', [$cad->id]) }}'">
                    <td>{{ $cad->id }}</td>
                    <td>{{ $cad->nome }}</td>
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
    $(document).ready(function () {
      $('#inp-search').on('keyup',function() {
        var query = $(this).val(); 
        $.ajax({         
          url:"{{ route('man.monsearch', 'admin') }}",
          type:"GET",
          data:{'nome':query},
          success:function (data) {
            $('#tbodyclientes').html(data);
          }
        })
      });
      $('table.tbmonitor').on("click", "tr.table-tr", function() {
        window.location = $(this).data("href");
      });
    });
  </script>
@endsection
