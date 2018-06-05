<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}</title>
    <meta name="description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ isset($seo['url']) ? $seo['url'] : config('app.url') }}" />
    <meta property="og:image" content="{{ isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem') }}" />
    <meta property="og:description" content="{{ isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao') }}" />

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ asset('lib/icones/css/materialdesignicons.min.css') }}" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    

    
</head>
<body id="app-layout">
  <header>
    @include('layouts._site._nav')
  </header>
  <main>
    @if(Session::has('mensagem'))
      <div class="container">
        <div class="row">
          <div class="card {{ Session::get('mensagem')['class'] }}">
            <div align="center" class="card-content">
              {{ Session::get('mensagem')['msg'] }}
            </div>
          </div>
        </div>
        
      </div>
    @endif 
    @yield('content')
  </main>  


<footer class="page-footer blue" >
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer</h5>
        <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p>
          <a href="#"><i class="white-text mdi mdi-facebook mdi-24px"></i></a>
          <a href="#"><i class="white-text mdi mdi-twitter mdi-24px"></i></a>
          <a href="#"><i class="white-text mdi mdi-youtube-play mdi-24px"></i></a>
        </p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="{{ route('site.home') }}">Home</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('site.sobre') }}">Sobre</a></li>
          <li><a class="grey-text text-lighten-3" href="{{ route('site.contato') }}">Contato</a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2018 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">Mais Links</a>
    </div>
  </div>
</footer>
            

    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>

    <script src="{{asset('js/init.js')}}"></script>
</body>
</html>
