@extends('layouts._home')
@section('content')

<!-- Carousel -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/code.png')}}" alt="Primeiro slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Desenvolvimento</h3>
                    <p>Desenvolvimento de sistemas e websites</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/rede_servidores.jpg')}}" alt="Segundo slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Redes de computadores</h3>
                    <p>Redes, servidores e segurança </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/manutencao.png')}}" alt="Terceiro slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Notebooks e Computadores</h3>
                    <p>Montagem e manutenção de computadores</p>
                </div>
            </div>
            
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>    


<!-- Jumbotron -->

<div class="jumbotron">
    <h1 class="display-4">Olá, mundo!</h1>
    <p class="lead">Me chamo Rafael Sá, sou formado como Técnico em Eletrônica e atualmente estou cursando a graduação em Engenharia de Computação. Sou apaixonado por tecnologia, tenho experiências na área de TI com montagem e manutenção de computadores, administração de redes e desenvolvimento de sistemas e sites.   </p>
    <hr class="my-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-center ">    
                <p>Convido você para saber mais sobre mim e meus trabalhos.</p>
            </div>
            <p class="lead">
                <div class="d-flex justify-content-center">
                    <a href=""><i class="fa fa-chevron-down fa-3x text-dark" aria-hidden="true"></i></a>
                </div>
            </p>
        </div>        
    </div>
</div>

@endsection