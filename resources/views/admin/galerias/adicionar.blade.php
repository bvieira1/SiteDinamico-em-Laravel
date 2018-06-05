@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Imagem</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
			        <a href="{{route('admin.imoveis')}}" class="breadcrumb">Lista de Imóveis</a>
			        <a href="{{route('admin.galerias',$imovel->id)}}" class="breadcrumb">Galeria de imagens</a>
			        <a class="breadcrumb">Adicionar Imagem</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="{{ route('admin.galerias.salvar',$imovel->id) }}" method="post" enctype="multipart/form-data">

		{{csrf_field()}}
		@include('admin.galerias._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection