@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="center">Galeria de imagens</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="{{ route('admin.principal')}}" class="breadcrumb">Início</a>
				        <a href="{{ route('admin.imoveis')}}" class="breadcrumb">Lista de Imóveis</a>
				        <a class="breadcrumb">Galeria de imagens</a>
			      	</div>
			    </div>
		  	</nav>
		</div>

	
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Título</th>					
						<th>Descrição</th>
						<th>Imagem</th>				
						<th>Ordem</th>	
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				@foreach($registros as $registro)
					<tr>
						<td>{{ $registro->id }}</td>
						<td>{{ $registro->titulo }}</td>
						<td>{{ $registro->descricao }}</td>	
						<td><img width="100" src="{{asset($registro->imagem)}}"></td>
						<td>{{ $registro->ordem }}</td>
						<td>
							<a class="btn orange" href="{{ route('admin.galerias.editar',$registro->id) }}">Editar</a>
							<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '{{ route('admin.galerias.deletar',$registro->id) }}' }">Deletar</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="{{route('admin.galerias.adicionar',$imovel->id)}}">Adicionar</a>
		</div>
	</div>

@endsection