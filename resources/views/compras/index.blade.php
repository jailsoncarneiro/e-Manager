@extends('layouts.master')

@section('content')

<center>
    <h1>Olá Sr(a). {{ $user }}!
</center>
</h1><br><br>
<p>Aqui é sua área de Fornecimento de Produtos para a Paceto</p>
<p>Abaixo a relação de itens que deverá preencher com as quantidades que irá fornecer. Ao finalizar clique no botão
    Salvar. Para confirmar o envio clique em Enviar blablaba:</p>

@foreach ($produtos->chunk(3) as $produtosChunk)
    <div class="card-deck" style="padding-top: 10px;">
        @foreach ($produtosChunk as $produto)
            <div class="card col-3">
                <img src="{{ count($produto->imagens) > 0 ? 'https://paceto.com.br/painel/img/produtos/' . $produto->imagens[0]->caminho : 'https://via.placeholder.com/150' }}"
                    class="card-img-top" style="max-height: 300px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;">{{ $produto->descricao_res }}</h5>
                    <p class="card-text">{{ Str::limit($produto->detalhes, 100, ' (...)') }}</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <strong class="text-muted my-auto">Estoque: {{ $produto->est }} un.</strong>
                        <h6 class="col text-right my-auto">R$ {{ $produto->precovar }}</h6>
                        <a href="#" class="btn btn-primary">Adicionar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
@endsection