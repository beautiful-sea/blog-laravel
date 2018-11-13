@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Dashboard">
        Teste de conteúdo....

        <div class="row">
            <div class="col-md-4">
                <caixa titulo="Pedidos" qtd="15" url="{{route('artigos.index')}}" cor="green" icone="ion ion-pie-graph"></caixa>                       
            </div>

            <div class="col-md-4">
                <caixa titulo="Usuários" qtd="700" cor="blue" icone="ion ion-person-stalker"></caixa>                        
            </div>                    

            <div class="col-md-4">
                <caixa titulo="Autores" qtd="456" cor="red" icone="ion ion-person"></caixa>                      
            </div>                    
        </div>
    </painel>    
</pagina>
@endsection
