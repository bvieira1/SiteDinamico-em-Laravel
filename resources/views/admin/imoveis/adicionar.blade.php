@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Imóvel</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
			        <a href="{{route('admin.imoveis')}}" class="breadcrumb">Lista de Imóveis</a>
			        <a class="breadcrumb">Adicionar Imóvel</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="{{ route('admin.imoveis.salvar') }}" method="post" enctype="multipart/form-data">

		{{csrf_field()}}
		@include('admin.imoveis._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection