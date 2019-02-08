@extends('layouts.master')
@section('title')
    Pixel Kairos - Cursos de Programação e Desenvolvimento
@stop

@section('panel-content')
    <h1 class="display-3">Tecnologia a seu favor</h1>
    <p class="lead">A Uniriotec Consultoria provê soluções e consultoria em TI com qualidade e a preço acessível</p>
    <hr class="my-4">
    <p>Conheça os projetos que já foram desenvolvidos pela empresa</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{ url('/portfolio') }}" role="button">Portfolio</a>
    </p>
@stop

@section('content')
    <div class="container">
        <section>
            <div class="card-deck">
                <div class="card">
                    <div class="card-block">
                        <i class="fa fa-desktop fa-3x" aria-hidden="true"></i>
                        <h4 class="card-title">Desenvolvimento</h4>
                        <p class="card-text">Desenvovemos websites e sistemas web que tornam seu negócio mais produtivo e organizado.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-block">
                        <i class="fa fa-handshake-o fa-3x" aria-hidden="true"></i>
                        <h4 class="card-title">Qualidade</h4>
                        <p class="card-text">Trabalhamos com as tecnologias mais recentes do mercado para garantir o máximo de recursos.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-block">
                        <i class="fa fa-bar-chart fa-3x" aria-hidden="true"></i>
                        <h4 class="card-title">Crescimento</h4>
                        <p class="card-text">Aumente a produtividade do seu negócio com a web,
                            descubra soluções para sistemas gerenciamento e sites.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="card card-inverse card-primary mb-3 text-center">
                <div class="card-block">
                    <blockquote class="card-blockquote">
                        <p class="missao-title">Nossa Missão</p>
                        <p class="missao">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            Fornecer produtos e serviços de TI com excelência, visando à satisfação dos clientes,
                            dos parceiros de negócio e da universidade.
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </p>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="bottom-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 mej">
                        <p>A Uniriotec faz parte do movimento empresa júnior</p>
                    </div>

                    <div class="col-sm-6 mej-content">
                        <p><strong>O MEJ</strong></p>
                        <p>O Movimento Empresa Júnior começou na França em 1967, chegando ao Brasil no final da década de 80.
                            Se trata do conjuto de empresas juniores que compartilham os ideais e o conceito do MEJ, buscando iniciar os jovens na dinâmica do mercado ao mesmo tempo que aprimoa seus conhecimentos. A Uniriotec Consultoria faz parte desse mmovimento.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row dev">
                <div class="col-sm-12">

                    <h3>Nossos Serviços</h3>

                    <div class="dev-icons">
                        <i class="fa fa-cloud-download fa-5x" aria-hidden="true"></i>
                        <i class="fa fa-terminal fa-5x" aria-hidden="true"></i>
                        <i class="fa fa-laptop fa-5x" aria-hidden="true"></i>
                    </div>

                    <div class="row">
                        <div class=" col-sm-6">
                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Web Sites
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-block">
                                            Vivemos em um mundo conectado, para que seu negócio ganhe visibilidade e ultrapasse fontreiras ter
                                            um site é um passo importante. Sites facilitam na comunicação com seu público, além de transparecer
                                            a identidade do seu negócio. A Uniriotec trabalha com que você possa ter a melhor experiência na web,
                                            entre em contato conosco e conheça alguns de nossos planos.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Sistemas Web
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-block">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Consultoria em TI
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="card-block">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 service-img"></div>

                    </div>
                </div>
            </div>
        </section>

    </div>
@stop