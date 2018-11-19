@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Lista de Artigos">
		<migalhas :lista="{{$listaMigalhas}}"></migalhas>

		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTeste">Large modal</button>

		<modallink tipo="button" nome="modalTeste" titulo="criar" css=""></modallink>

		<tabela-lista 
		:titulos="['#','Título','Descrição']"
		:itens="[['1','PHP OO','Curso de PHP OO'],['2','Vue JS','O curso de Vue JS'],['3','Node JS','Curso de Node JS'],['4','C++','Curso de C++'],['5','UX','Aprendendo UX']]"
		criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="8418746844" ordem="desc" ordemcol="1"
		></tabela-lista>
	</painel>    
</pagina>
<modal nome="modalTeste">
	<painel titulo="Lista de Artigos">
		<formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
			<div class="form-group">
				<label for="titulo">Título</label>
				<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
			</div>
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
			</div>

			<button class="btn btn-info">Adicionar</button>
		</formulario>	
	</painel>
</modal>
@endsection
