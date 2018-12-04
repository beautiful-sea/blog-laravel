@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Artigos">
		<p>
			<div class="container form-group offset-sm-3 offset-md-4">
				<form class="form-inline"  action="{{route('site')}}" method="get">
					<input type="search" class="form-control" name="busca" placeholder="Buscar" value="{{isset($busca) ? $busca: ''}}">
					<button class="btn btn-info">Buscar</button>
				</form>
			</div>
		</p>
		<div class="row">
			@foreach($lista as $key => $value)
			<artigocard 
			titulo="{{str_limit($value->titulo,15,'...')}}"
			descricao="{{str_limit($value->descricao,35,'...')}}"
			link="{{route('artigo',[$value->id,str_slug($value->titulo)])}}"
			imagem="https://cdn.ahnegao.com.br/2013/08/sailor.jpg"
			data="{{substr($value->data,0,10)}}"
			autor="{{$value->autor}}"
			sm="6"
			md="4">

		</artigocard>
		@endforeach
	</div>
</painel>
<div align="center">
	{{$lista}}
</div>
</pagina>
@endsection







