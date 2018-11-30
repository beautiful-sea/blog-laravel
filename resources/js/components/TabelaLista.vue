<template>
	<div>
		<div class="form-group pull-right">
			<input type="search" class="form-control" placeholder="Buscar" v-model="buscar"/>
		</div>
		<div class="form-inline">
			<a v-if="criar && !modal" :href="criar" class="btn btn-success">Criar</a>
			<modallink v-if="criar && modal" tipo="button" nome="adicionar" titulo="criar" css=""></modallink>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th style="cursor:pointer;" v-for="(titulo,index) in titulos" v-on:click="ordenaColuna(index)">{{titulo}}</th>

					<th v-if="detalhe || editar || deletar">Ação</th>
				</tr>
			</thead>

			<tbody>
				<tr v-for="(item,index) in lista">
					<td v-for="i in item">{{i}}</td>
					
					<td v-if="detalhe || editar || deletar">
						<form :id="index" v-if="deletar && token" :action="deletar" method="post">
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" :value="token">

							<a v-if="detalhe && !modal" :href="detalhe">Detalhe |</a>
							<modallink v-if="detalhe && modal" tipo="button" nome="detalhe" titulo="Detalhe" css="" cssdiv="d-inline" :item="item"></modallink>

							<a v-if="criar && !modal" :href="editar">Editar</a>
							<modallink v-if="criar && modal" tipo="button" nome="editar" titulo="Editar" css="" cssdiv="d-inline" :item="item" ></modallink>
							<a href="#" v-on:click="executaForm(index)">Deletar</a>
						</form>
						<span v-if="!token">
							<a v-if="detalhe && !modal" :href="detalhe">Detalhe |</a>
							<modallink v-if="detalhe && modal" tipo="button" nome="detalhe" titulo="Detalhe" css="" cssdiv="d-inline" :item="item"></modallink>

							<a v-if="criar && !modal" :href="editar">Editar</a>
							<modallink v-if="criar && modal" tipo="button" nome="editar" titulo="Editar" css="" cssdiv="d-inline" :item="item"></modallink>
							<a v-if="deletar" href="#">Deletar</a>
						</span>

						<span v-if="token && !deletar">
							<a v-if="detalhe && !modal" :href="detalhe">Detalhe |</a>
							<modallink v-if="detalhe && modal" tipo="button" nome="detalhe" titulo="Detalhe" css="" cssdiv="d-inline" :item="item"></modallink>

							<a v-if="criar && !modal" :href="editar">Editar</a>
							<modallink v-if="criar && modal" tipo="button" nome="editar" titulo="Editar" css="" cssdiv="d-inline" :item="item"></modallink>
						</span>						

					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
export default {
	props:['titulos','itens','criar','editar','detalhe','deletar','token','ordem','ordemcol','modal'],
	data: function(){
		return {
			buscar:'',
			ordemAux: this.ordem || "asc",
			ordemAuxCol: this.ordemcol || 0
		}
	},
	methods:{
		executaForm: function(index){
			document.getElementById(index).submit();
		},
		ordenaColuna: function(coluna){
			this.ordemAuxCol = coluna;
			if(this.ordemAux.toLowerCase() == "asc"){
				this.ordemAux = "desc";
			}else{
				this.ordemAux = "asc";
			}
		}
	},
	computed:{
		lista: function(){

			let ordem = this.ordemAux;
			let ordemCol = this.ordemAuxCol;
			ordem = ordem.toLowerCase();
			ordemCol = parseInt(ordemCol);

			if(ordem == "asc"){
				this.itens.sort(function(a,b){
					if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]){return 1;}
					if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]){return -1;}
					return 0;
				});
			}else{
				this.itens.sort(function(a,b){
					if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]){return 1;}
					if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]){return -1;}
					return 0;
				});				
			}


			if(this.buscar){
				
				return this.itens.filter(res => {
					res = Object.values(res);//transformando em um array de valores
					for(let k = 0; k<res.length; k++){
						if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
							
							return true;
						}				
					}
					return false;
				})			
			}
			return this.itens;
		}
	}
};
</script>
