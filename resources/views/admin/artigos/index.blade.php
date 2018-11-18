@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
		<migalhas :lista="{{$listaMigalhas}}"></migalhas>
		<tabela-lista 
		:titulos="['#','Título','Descrição']"
		:itens="[['1','PHP OO','Curso de PHP OO'],['2','Vue JS','O curso de Vue JS'],['3','Node JS','Curso de Node JS'],['4','C++','Curso de C++'],['5','UX','Aprendendo UX']]"
		criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="8418746844" ordem="desc" ordemcol="1"
		></tabela-lista>
	</painel>    
</pagina>
@endsection
