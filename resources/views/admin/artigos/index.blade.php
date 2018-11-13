@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
		<tabela-lista 
		:titulos="['#','Título','Descrição']"
		:itens="[['1','PHP OO','Curso de PHP OO'],['2','Vue JS','Curso de Vue JS']]"
		></tabela-lista>
	</painel>    
</pagina>
@endsection
