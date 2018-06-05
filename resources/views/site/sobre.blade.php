@extends('layouts.site')

@section('content')

<div class="container">
    <div class="row section">
    	<h3 align="center">Sobre</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m6">
        @if(isset($pagina->mapa))
            <div class="video-container">
                {!! $pagina->mapa !!}
            </div>

        @else
            <img class="responsive-img" src="{{ asset($pagina->imagem) }}">
        @endif

    		
    	</div>
    	<div class="col s12 m6">
    		<h4>{{ $pagina->titulo }}</h4>
    		<blockquote>
    			{{ $pagina->descricao }}
    		</blockquote>
    		<p>{{ $pagina->texto }}</p>
    	</div>
    </div>
</div>
@endsection