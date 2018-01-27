@extends('layouts._home')
@section('content')


<!-- Mensagem -->
@if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
@endif

<!-- Carousel -->
<section class="inicio" id="inicio">
    <!-- <div class="container bg-light"> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/carousel-code.png')}}" alt="Primeiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Desenvolvimento</h2>
                        <p>Desenvolvimento de sistemas e websites</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/carousel-rede.png')}}" alt="Segundo slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Redes de computadores</h2>
                        <p>Redes, servidores e segurança </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/carousel-manutencao.png')}}" alt="Terceiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Computadores e Notebooks</h2>
                        <p>Montagem e manutenção de computadores</p>
                    </div>
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
    <!-- </div> -->

<!-- Jumbotron -->

    <div class="jumbotron p-5">
        <h1 class="display-4">Olá!</h1>
        <p class="lead">Me chamo Rafael de Sá, estou cursando a graduação em Engenharia de Computação e sou formado como Técnico em Eletrônica. Sou apaixonado por tecnologia, tenho experiências na área de TI com desenvolvimento de sistemas e websites, administração de redes e montagem e manutenção de computadores.</p>
        <hr class="my-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center ">    
                    <p>Convido você para saber mais sobre mim e meus trabalhos.</p>
                </div>
                <p class="lead">
                    <div class="d-flex justify-content-center">
                        <a id="seta" href="#sobre"><i class="fa fa-chevron-down fa-3x text-dark" aria-hidden="true"></i></a>
                    </div>
                </p>
            </div>        
        </div>
    </div>

</section>
<!-- Sobre -->

<section class="sobre p-5" id="sobre">
    <div class="row">    
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 text-white">
                <h3 class="text-center">Um pouco sobre mim!</h3>
                <h4>Rafael de Sá</h4>
                <h5>Desenvolvedor | Administrador de redes | Técnico em Eletrônica e Informática | Futuro Engenheiro de Computação</h5>
                <p>Apaixonado por tecnologia. Após concluir meu curso técnico em eletrônica tive uma ótima experiência profissional trabalhando em uma empresa que presta assistência técnica de equipamentos de automação comercial e informática. Conforme meu perfil de trabalho, tive a oportunidade de conhecer melhor a área de informática e fui responsável pela infraestrutura de TI da empresa, onde fazia toda a parte de administração de redes, servidores e suporte aos colaboradores.</p>
                <p>Buscando mais conhecimentos na área de TI, iniciei uma graduação em Engenharia de Computação e fiquei completamente apaixonado com a área de programação e desenvolvimento de software. Ainda nesta empresa tive a oportunidade de trabalhar no setor de desenvolvimento, realizando manutenção e implementação de recursos nos sistemas integrados de automação comercial utilizando a linguagem VB6, administrando sites e sistemas em WordPress e administrando bancos de dados SQL Server, Firebird e MySQL. </p>
                <p>Além disso, atuo como freelancer, realizando o desenvolvimento de sites e sistemas, serviços de montagem e manutenção de computadores gamer e desktops convencionais, servidores e configurações de redes residenciais e corporativas.</p>    
                <p>Nas minhas horas vagas, procuro sempre estudar novas tendências e tecnologias.</p>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="d-flex justify-content-center">
                    <img class="rounded-circle mt-4" src="{{asset('img/perfil.png')}}" alt="">
                </div>
            </div>
    </div>
</section>

<!-- Serviços -->


<section class="servicos p-5" id="servicos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Serviços</h3>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card m-2 mb-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/card-code.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Websites e sistemas</h5>
                        <p class="card-text">Desenvolvimento de websites e sistemas.</p>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">HTML5 | CSS3</li>                                           
                            <li class="list-group-item">PHP | JAVASCRIPT</li>                       
                            <li class="list-group-item">JQUERY | BOOTSTRAP</li>                       
                            <li class="list-group-item">WORDPRESS | MYSQL</li>
                            <li class="list-group-item">OUTROS...</li>                        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card m-2 mb-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/card-joystick.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Computador gamer</h5>
                        <p class="card-text">Montagem e manutenção de computadores preparados para jogos.</p>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">INTEL</li>                                           
                            <li class="list-group-item">AMD</li>                       
                            <li class="list-group-item">NVIDIA</li>
                            <li class="list-group-item">OUTROS...</li>                                               
                        </ul>
                    </div>
                </div>
            </div>    
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card m-2 mb-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/card-computador-trabalho.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Computador para trabalho</h5>
                        <p class="card-text">Montagem e manutenção de computadores preparados para programação, edição de fotos, vídeos e atividades pesadas.</p>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">INTEL</li>                                           
                            <li class="list-group-item">AMD</li>                       
                            <li class="list-group-item">NVIDIA</li>
                            <li class="list-group-item">OUTROS...</li>                                               
                        </ul>
                    </div>
                </div>
            </div>    
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card m-2 mb-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/card-rede.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Redes</h5>
                        <p class="card-text">Configuração de redes corporativas e residenciais.</p>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">WI-FI</li>                                           
                            <li class="list-group-item">DHCP</li>                       
                            <li class="list-group-item">FIREWALL</li>                                              
                            <li class="list-group-item">PORTAS</li>
                            <li class="list-group-item">OUTROS...</li>                                               
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card m-2 mb-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/card-windows.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Servidores e desktops Windows</h5>
                        <p class="card-text">Configurações gerais de servidores e desktops Windows.</p>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">WINDOWS DESKTOP</li>
                            <li class="list-group-item">WINDOWS SERVER</li> 
                            <li class="list-group-item">ACTIVE DIRECTORY</li> 
                            <li class="list-group-item">OUTROS...</li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card m-2 mb-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('img/card-linux.png')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Servidores e desktops Linux</h5>
                        <p class="card-text">Configurações gerais de servidores e desktops Linux.</p>
                        <ul class="list-group list-group-flush text-center">
                            <li class="list-group-item">CENTOS</li>                                           
                            <li class="list-group-item">UBUNTU</li>                       
                            <li class="list-group-item">DEBIAN</li>                                              
                            <li class="list-group-item">FEDORA</li>                                              
                            <li class="list-group-item">OUTROS...</li>                                              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</section>



<!-- Contato -->

<section class="contato p-5 bg-info text-light" id="contato">
   <div class="container"> 
        <div class="row">       
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <h4>Contato</h4>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Rio de Janeiro - RJ</p>
                        <p><i class="fa fa-whatsapp" aria-hidden="true"></i></i> (21) 97535-4144</p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> rafael_jdsb@hotmail.com</p>                   
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h4>Envie sua mensagem!</h4>
                
                @include('layouts._form')

            </div>
        
        </div>
    </div>
</section>
@endsection