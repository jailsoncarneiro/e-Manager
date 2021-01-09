@extends('layouts.master')

@section('content')
    <h1>Cadastro de Clientes!</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>CEP</th>
                <th>Endereço</th>
                <th>Número</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cads as $cad)
                <tr>
                    <td>{{ $cad->id }}</td>
                    <td>{{ $cad->usuario }}</td>
                    <td>{{ $cad->enderecos->first()['cep'] }}</td>
                    <td>{{ $cad->enderecos->first()['endereco'] }}</td>
                    <td>{{ $cad->enderecos->first()['numero'] }}</td>
                    <td>{{ $cad->enderecos->first()['complemento'] }}</td>
                    <td>{{ $cad->enderecos->first()['bairro'] }}</td>
                    <td>{{ $cad->enderecos->first()['idcid'] }}</td>
                    <td>{{ $cad->enderecos->first()['uf'] }}</td>
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
