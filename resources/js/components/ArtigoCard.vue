<template>
	<div :class="'card col-md-'+ (md||'4')+' col-sm-'+(sm||'6')" style="padding:10px;">
		<img class="card-img-top" src="https://cdn.ahnegao.com.br/2013/08/sailor.jpg" alt="Card image cap">
		<div class="card-body">
			<small>{{autor}}  - {{data | formataData}}</small>
			<h5 class="card-title">{{titulo}}</h5>

			<p class="card-text">{{descricao}}</p>
			<a :href="link" class="btn btn-primary">Leia Mais</a>
		</div>
	</div>	
</template>

<script>
export default{
	props:['titulo','descricao','link','imagem','data','autor','sm','md'],
	filters:{
		formataData:function(valor){
			if(!valor) return '';
			valor = valor.toString();
			valor = valor.split('-');
			return valor[2] + '/' + valor[1] + '/' + valor[0];
		}
	}
};
</script>
