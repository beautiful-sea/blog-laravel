@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Dashboard">
        <migalhas :lista="{{$listaMigalhas}}"></migalhas>

        <div class="row">
            @can('eAdmin')
            <div class="col-md-4">
                <caixa titulo="Autores" :qtd="{{$qtdAutores}}"  url="{{route('autores.index')}}" cor="red" icone="ion ion-person"></caixa>                      
            </div> 
            @endcan
            <div class="col-md-4">
                <caixa titulo="Artigos" :qtd="{{$qtdArtigos}}" url="{{route('artigos.index')}}" cor="green" icone="ion ion-pie-graph"></caixa>                       
            </div>
            @can('eAdmin')
            <div class="col-md-4">
                <caixa titulo="Usuários" :qtd="{{$qtdUsuarios}}" url="{{route('usuarios.index')}}" cor="blue" icone="ion ion-person-stalker"></caixa>                        
            </div> 
            <div class="col-md-4">
                <caixa titulo="Admin" :qtd="{{$qtdAdmin}}"  url="{{route('adm.index')}}" cor="lightgrey" icone="ion ion-person"></caixa>                      
            </div> 
            @endcan                   
        </div>
    </painel>    
</pagina>
@endsection
