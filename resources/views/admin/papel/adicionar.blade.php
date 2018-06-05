@extends('layouts.app')

@section('content')
<div class="container">
	<h2 class="center">Adicionar Papel</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
			        <a href="{{route('admin.papel')}}" class="breadcrumb">Lista de Papéis</a>
			        <a class="breadcrumb">Adicionar Papel</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="{{ route('admin.papel.salvar') }}" method="post">

		{{csrf_field()}}
		@include('admin.papel._form')

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

@endsection