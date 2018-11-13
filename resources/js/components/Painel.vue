<template>
	<div class="card" v-bind:class="defineCor" >
		<div class="card-header" v-bind:class="defineCor">{{titulo}}</div>
		<div class="card-body">
			<slot></slot>
		</div>
	</div>
</template>

<script>
export default {
	props:['titulo','cor'],
	computed:{
		defineCor: function(){
			return (this.cor || "");
		}
	}
};
</script>

<style type="text/css">
.blue {
    border-color: #0d4a96 !important;
}
.blue > .card-header {
	color: #f7f7f7!important;
    background-color: #0d4a96 !important;
    border-color: #0d4a96 !important;
}

.orange {
    border-color: #e85e0d !important;
}
.orange > .card-header {
	color: #f7f7f7!important;
    background-color: #e85e0d !important;
	border-color: #e85e0d !important;
}	
</style>