@extends('layouts._home')
@section('content')

<!-- Carousel -->
<section class="inicio" id="inicio">
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
                        <a href="#sobre"><i class="fa fa-chevron-down fa-3x text-dark" aria-hidden="true"></i></a>
                    </div>
                </p>
            </div>        
        </div>
    </div>

</section>
<!-- Sobre -->

<section class="sobre" id="sobre">
    <div class="row p-5">    
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h3 class="text-center">Um pouco sobre mim!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis id magna vel elementum. Aenean in risus sed sem sagittis faucibus. Quisque in maximus velit. Integer nunc est, sollicitudin vel suscipit sit amet, egestas sit amet enim. Donec at est cursus, efficitur ex ut, eleifend ligula. Phasellus id varius ligula. Maecenas aliquet ut quam nec tristique. Quisque cursus efficitur velit, consequat gravida quam lacinia in. Donec commodo urna vestibulum nunc vestibulum, sed vehicula augue vulputate. Fusce magna neque, fringilla at erat at, posuere tincidunt massa. Cras quis nisl fermentum, tincidunt metus id, iaculis diam. Pellentesque ullamcorper accumsan tellus, vitae tincidunt purus convallis sit amet. Ut pulvinar nulla sed ipsum ornare lobortis. Nulla vel magna ante. Quisque sollicitudin nibh ut consectetur commodo. Donec ut imperdiet metus.

Integer viverra eget dolor ac fermentum. Vivamus sagittis tristique tellus vitae vehicula. Nulla at fringilla sem. Duis pellentesque blandit sapien, ut tincidunt nulla interdum eu. Donec faucibus cursus justo, vel auctor nulla hendrerit in. Praesent eu bibendum erat. Quisque ac risus arcu. Donec fermentum libero ante, eu gravida leo imperdiet id. Aenean nisl dolor, vehicula ut lacinia nec, consequat vel dolor. Aliquam luctus gravida justo at volutpat. Vivamus neque lorem, viverra sit amet consectetur sit amet, suscipit a arcu. Vivamus nulla metus, scelerisque at augue eget, tincidunt dignissim lacus. Aliquam erat volutpat. Sed mauris sapien, ornare non imperdiet vel, scelerisque at nibh. Vivamus porta nulla ut finibus viverra.</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="d-flex justify-content-center">
                    <img class="rounded-circle" src="{{asset('img/perfil.png')}}" alt="">
                </div>
            </div>
    </div>
</section>

<!-- Contato -->

<section class="contato" id="contato">
    
</section>


@endsection