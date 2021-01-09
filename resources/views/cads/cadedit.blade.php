@extends('layouts.master')

@section('content')
    <form action="{{ route('cads.upd', ['cad' => $cad->id ]) }}" method="post">    
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Usuário</label>
            <input type="email" class="form-control" name="usuario" id="inputEmail4" placeholder="Usuário" value="{{ $cad->usuario }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" class="form-control" name="senha" id="inputPassword4" placeholder="Senha">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-6">
                <label for="inputAddress">Endereço</label>
                <input type="text" class="form-control" name="endcobend" id="inputAddress" placeholder="Rua, Av., Logradouro etc" value="{{ $cad->enderecos[0]->endereco }}">
            </div>
            <div class="form-group col-2">
                <label for="inputAddress">Número</label>
                <input type="text" class="form-control" name="endcobnum" id="inputNumero" placeholder="Número" value="{{ $cad->enderecos[0]->numero }}">
            </div>
            <div class="form-group col">
                <label for="inputAddress2">Complemento</label>
                <input type="text" class="form-control" name="endcobcompl" id="inputAddress2" placeholder="Complemento" value="{{ $cad->enderecos[0]->complemento }}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputBairro">Bairro</label>
            <input type="text" class="form-control" id="inputBairro" name="endcobbairro" placeholder="Bairro" value="{{ $cad->enderecos[0]->bairro }}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" name="endcobidcid" value="{{ $cad->enderecos[0]->idcid }}">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" class="form-control" name="endcobuf" >
                    <option value="">Escolha...</option>
                    <option value="{{ $cad->enderecos[0]->idcid }}">{{ $cad->enderecos[0]->idcid }}</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Cep</label>
                <input type="text" class="form-control" name="endcobcep" id="inputZip" value="{{ $cad->enderecos[0]->cep }}">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Me Marque
                </label>
            </div>
        </div>
        <input type="submit" value="Salvar" />
    </form>
@endsection
