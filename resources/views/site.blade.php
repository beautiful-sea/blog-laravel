@extends('layouts.app')

@section('content')
<pagina tamanho="12">
	<painel titulo="Artigos">
		<div class="row">
			@foreach($lista as $key => $value)
			<artigocard 
			titulo="{{$value->titulo}}"
			descricao="{{$value->descricao}}"
			link="#"
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







