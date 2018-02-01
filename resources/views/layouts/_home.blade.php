<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--SEO Geral-->
    <title>Rafael Sá - Desenvolvedor - Administrador de redes - Técnico - Rio de Janeiro - RJ</title>
    <meta name="description" content="Desenvolvedor, freelancer, desenvolvimento de sites e sistemas, administrador de redes, técnico em informática e eletrônica - Rio de Janeiro - RJ">
    <link rel="canonical" href="http://www.rafaeldesa.com.br">
    <meta name="author" content="Rafael de Sá">
    <meta name="robots" content="index, follow">

    <!-- Google+ / Schema.org -->
    <meta itemprop="name" content="Rafael Sá - Desenvolvedor - Administrador de redes - Técnico - Rio de Janeiro - RJ">
    <meta itemprop="description" content="Desenvolvedor, freelancer, desenvolvimento de sites e sistemas, administrador de redes, técnico em informática e eletrônica - Rio de Janeiro - RJ">
    <meta itemprop="image" content="http://rafaeldesa.com.br/card-code.png">
    <!-- <link href="https://plus.google.com/+SuaPagina" rel="publisher"> -->
    
    <!-- Open Graph Facebook -->
    <meta property="og:title" content="Rafael Sá - Desenvolvedor - Administrador de redes - Técnico - Rio de Janeiro - RJ">
    <meta property="og:description" content="Desenvolvedor, freelancer, desenvolvimento de sites e sistemas, administrador de redes, técnico em informática e eletrônica - Rio de Janeiro - RJ"/>
    <meta property="og:url" content="http://www.rafaeldesa.com.br">
    <meta property="og:site_name" content="Rafael Sá - Desenvolvedor - Administrador de redes - Técnico - Rio de Janeiro - RJ"/>
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://rafaeldesa.com.br/card-code.png">

    <!-- Twitter -->
    <meta name="twitter:title" content="Rafael Sá - Desenvolvedor - Administrador de redes - Técnico - Rio de Janeiro - RJ">
    <meta name="twitter:description" content="Desenvolvedor, freelancer, desenvolvimento de sites e sistemas, administrador de redes, técnico em informática e eletrônica - Rio de Janeiro - RJ">
    <meta name="twitter:url" content="http://www.rafaeldesa.com.br">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="http://rafaeldesa.com.br/card-code.png">
    <!-- <meta name="twitter:creator" content="@estevanmaito"> -->
    <!-- <meta name="twitter:site" content="@empresa"> -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!--Fav Icon-->
    <link rel="icon" href="{{asset('img/favicon.png')}}" />
    
  </head>
  <body data-spy="scroll" data-target="#navbar">
      <header>
        @include('layouts._nav')
      </header>
        @yield('content')

        @include('layouts._footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="{{asset('js/jquery-3.3.1.js')}}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.validate.js')}}" ></script>
    <script src="{{asset('js/main.js')}}" ></script>
  </body>
</html>