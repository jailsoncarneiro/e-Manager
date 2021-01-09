@extends('layouts.master')

@section('styles')
    <link href="/opensearch.xml" rel="search" title="Paceto Loja Online" type="application/opensearchdescription+xml">
    <link rel="canonical" href="https://local.tgcsistemas.com/laravel/emanager/public" />

    <meta property="og:title" content="Paceto Loja Online. Produtos de Informática em Paciência - Rio de Janeiro " />
    <meta property="og:description"
        content="as melhores ofertas e promoções na Paceto, compromisso com a qualidade e a satisfação do cliente!" />
    <meta property="og:type" content="website" />
    <meta property="og:image"
        content="https://res.cloudinary.com/boxcompras/image/upload/v1594012958/files/paceto/logotransparente_20200706022238.png" />
    <meta property="og:image:alt" content="Todo site em promoção na Paceto Loja Online" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="Paceto Loja Online" />

    <meta name="theme-color" content="#FFFFFF">
    <meta name="msapplication-navbutton-color" content="#FFFFFF">
    <meta name="apple-mobile-web-app-status-bar-style" content="#FFFFFF">

    <!-- Styles -->
    <link href="https://static.avanteplus.com.br/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" async>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slidebars/2.0.2/slidebars.min.css">
    <link rel="stylesheet" href="https://static.avanteplus.com.br/css/lobibox/lobibox.min.css" async />
    <link rel="stylesheet" type="text/css" href="/css/font/flaticon.css" async>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Hind+Madurai|Maven+Pro|Titillium+Web|Roboto&display=swap">
    <!--<link rel="stylesheet" href="https://unpkg.com/driver.js/dist/driver.min.css"> -->
    <link rel="shortcut icon" type="image/x-icon"
        href="https://res.cloudinary.com/boxcompras/image/upload/v1594094087/files/paceto/logo-azul_20200707125447.png" />

@endsection

@section('content')
    <!-- loading -->
    <div id="loading" class="fa-3x color_icon"><i class="fas fa-circle-notch fa-spin"></i></div>

    <!-- Slidebar Menu Mobile -->
    <div id="slidebar-menu-mobile" off-canvas="slidebar-menu-mobile left overlay">
        <ul class="sidebar-nav">
            <li class="sidebar-brand color_icon">
                <a href="javascript:void(0)" class="color_icon closebtn"></a>
                Menu
                <a href="javascript:void(0)" class="color_icon closebtn pull-right"><i class="fas fa-times"></i></a>
            </li>
            <li>
                <ul id="menu-mobile-categories" class="">
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/acessorios/c" class=""><i class=""></i>ACESSORIOS</a>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/pe-de-vela/c" class=""><i class=""></i>PE DE VELA</a>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/cambio-de-marcha/c" class=""><i class=""></i>CAMBIO DE MARCHA</a>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/cassete-e-roda-livre/c" class=""><i class=""></i>CASSETE E RODA LIVRE</a>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/armazenamentos/c">
                            <i class=""></i>
                            ARMAZENAMENTOS
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/armazenamentos-midias-cd/c">MIDIAS CD</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/armazenamentos-midias-dvd/c">MIDIAS DVD</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/armazenamentos-pendrives/c">PENDRIVES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/armazenamentos-cartoes-de-memoria/c">CARTÕES DE MEMÓRIA</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/beleza/c" class=""><i class=""></i>BELEZA</a>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/embalagens/c">
                            <i class=""></i>
                            EMBALAGENS
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/embalagens-envelopes/c">ENVELOPES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/embalagens-box-cd/c">BOX CD</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/embalagens-box-dvd/c">BOX DVD</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/embalagens-lacres/c">LACRES</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/gamer/c">
                            <i class=""></i>
                            GAMER
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/gamer-mouse-pad/c">MOUSE PAD</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/gamer-acessorios-games/c">ACESSÓRIOS GAMES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/gamer-fones/c">FONES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/gamer-teclados/c">TECLADOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/gamer-mouses/c">MOUSES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/gamer-coolers/c">COOLERS</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/suprimentos-de-informatica/c">
                            <i class=""></i>
                            SUPRIMENTOS DE INFORMÁTICA
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-impressoras/c">IMPRESSORAS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-mouse-pad/c">MOUSE PAD</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-carregadores/c">CARREGADORES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-hub-usb/c">HUB USB</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-caixas-de-som/c">CAIXAS DE
                                    SOM</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-cabos/c">CABOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-energia/c">ENERGIA</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-fontes/c">FONTES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-fones/c">FONES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-mouses/c">MOUSES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-rede/c">REDE</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-teclados/c">TECLADOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/suprimentos-de-informatica-outros/c">OUTROS</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/impressoes/c">
                            <i class=""></i>
                            IMPRESSÕES
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/impressoes-papeis-fotograficos/c">PAPÉIS FOTOGRÁFICOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/impressoes-papeis-a4/c">PAPEIS A4</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/impressoes-papeis-matte/c">PAPEIS MATTE</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/sublimacao/c">
                            <i class=""></i>
                            SUBLIMAÇÃO
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-mdf-sublimatico/c">MDF SUBLIMATICO</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-copos/c">COPOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-canecas-transfer/c">CANECAS TRANSFER</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-canecas-polimero/c">CANECAS POLÍMERO</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-azulejos/c">AZULEJOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-fitas-termica/c">FITAS TÉRMICA</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-canecas-porcelana/c">CANECAS PORCELANA</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-papeis/c">PAPEIS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-camisetas/c">CAMISETAS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-squezzes/c">SQUEZZES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-bones/c">BONES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-prensas/c">PRENSAS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-chaveiros/c">CHAVEIROS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-outros/c">OUTROS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/sublimacao-canecas-vidro/c">CANECAS VIDRO</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/utilidades/c">
                            <i class=""></i>
                            UTILIDADES
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/utilidades-utilidades/c">UTILIDADES</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/automotivos/c">
                            <i class=""></i>
                            AUTOMOTIVOS
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/automotivos-automotivos/c">AUTOMOTIVOS</a>
                            </li>

                        </ul>
                    </li>
                    <li style="text-indent: 6px;width: 100%; text-align: left;border-bottom: 1px solid #f7f7f7;">
                        <a href="/ciclismo/c">
                            <i class=""></i>
                            CICLISMO
                        </a>
                        <ul>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-manetes-e-alavanca/c">MANETES E ALAVANCA</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-cubos/c">CUBOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-freios/c">FREIOS</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-capacetes/c">CAPACETES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-selim/c">SELIM</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-descanso-e-suportes/c">DESCANSO E SUPORTES</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-central-e-pedevela/c">CENTRAL E PEDEVELA</a>
                            </li>
                            <li>
                                <a class="item-drop-menu" href="/ciclismo-componentes/c">COMPONENTES</a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>
        </ul>
    </div>


    <!-- Slidebar Quickview -->
    <div id="slidebar-quickview" off-canvas="slidebar-quickview right overlay">
        <ul class="sidebar-nav">
            <li class="sidebar-brand color_icon">
                <a href="javascript:void(0)" class="color_icon closebtn"><i class="color_icon fas fa-search"></i></a>
                Visualização rápida
                <a href="javascript:void(0)" class="color_icon closebtn pull-right"><i
                        class="color_icon fas fa-times"></i></a>
            </li>
            <li>
                <div class="product-quickview"></div>
            </li>
        </ul>
    </div>

    <!-- Slidebar ziprange -->
    <div id="slidebar-ziprange" off-canvas="slidebar-ziprange left overlay">
        <ul class="sidebar-nav">
            <li class="sidebar-brand color_icon">
                <a href="javascript:void(0)" class="color_icon closebtn"><i class="color_icon fas fa-map-marked"></i></a>
                Regiões de entrega
                <a href="javascript:void(0)" class="color_icon closebtn pull-right"><i
                        class="color_icon fas fa-times"></i></a>
            </li>
            <li>
                <ul class="content-ziprange">

                    <li>Rio de Janeiro - RJ </li>
                    <li>São João de Meriti - RJ </li>
                    <li>Duque De Caxias - RJ </li>
                    <li>Nova Iguaçu - RJ </li>
                    <li>Niteroi - RJ </li>
                    <li>Mesquita - RJ </li>
                    <li>São Gonçalo - RJ </li>
                    <li>Nilópolis - RJ </li>
                    <li>Seropédica - RJ </li>
                    <li>Itaboraí - RJ </li>
                    <li>Nova Iguaçu - RJ </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Slidebar information -->
    <div id="slidebar-information" off-canvas="slidebar-information left overlay">
        <ul class="sidebar-nav">
            <li class="sidebar-brand color_icon">
                <a href="javascript:void(0)" class="color_icon closebtn"><i
                        class="color_icon far fa-question-circle"></i></a>
                Informações
                <a href="javascript:void(0)" class="color_icon closebtn pull-right"><i
                        class="color_icon fas fa-times"></i></a>
            </li>
            <li>

                <ul class="content-ziprange" style="font-size: 11px">
                    <li><b>Regiões de entrega</b></li>

                    <li>Rio de Janeiro - RJ </li>
                    <li>São João de Meriti - RJ </li>
                    <li>Duque De Caxias - RJ </li>
                    <li>Nova Iguaçu - RJ </li>
                    <li>Niteroi - RJ </li>
                    <li>Mesquita - RJ </li>
                    <li>São Gonçalo - RJ </li>
                    <li>Nilópolis - RJ </li>
                    <li>Seropédica - RJ </li>
                    <li>Itaboraí - RJ </li>
                    <li>Nova Iguaçu - RJ </li>
                </ul>

                <hr />

                <ul style="font-size: 11px">
                    <li><b>Funcionamento</b></li>
                    <li>Segunda à Sexta das 9:00 às 16hrs</li>
                </ul>



                <hr />
                <ul style="font-size: 11px">
                    <li><b>Informações</b></li>
                    <li><a href="/sobre-nos/page">Sobre Nós</a></li>

                </ul>


                <hr />

                <ul style="font-size: 11px">
                    <li><b>Empresa</b></li>
                    <li>
                        Paceto - CNPJ 2134342342342
                        <br>
                        Rua Sérgio Macedo, 35 - Paciência Rio de Janeiro RJ CEP 23585-086
                    </li>
                </ul>


            </li>
        </ul>
    </div>


    <!-- Slidebar cart -->
    <div id="slidebar-cart" class="sidebar-premium" off-canvas="slidebar-cart right overlay">
        <ul class="sidebar-nav">
            <li class="sidebar-brand color_icon">
                <i class="fas fa-shopping-cart"></i> Carrinho
                <a href="javascript:void(0)" class="color-close-right-premium closebtn text-right pull-right"><i
                        class="color_icon fas fa-times"></i></a>
            </li>
            <li style="margin-top: 74px;">
                <ul id="cart-quickview"></ul>
            </li>
        </ul>
    </div>
    <!-- slidebars -->


    <div id="div-botao-whatsapp" style="position: fixed;z-index: 8; right: 1%;bottom: 1%;">
        <a href="https://api.whatsapp.com/send?phone=552120275620" target="_blank"><img
                src="https://static.avanteplus.com.br/img/static/whatsapp.png"></a>
    </div>






    <!-- header - default -->
    <header class="header bkg_main header-7">
        <div id="topbar" class="row hidden-xs hidden-sm">
            <div class="container">
                <div class="col-md-4 pull-left">
                    BEM-VINDO, FAÇA SEU <a href="/login">LOGIN</a> OU <a href="/cadastro">CADASTRE-SE</a>
                </div>
                <div class="col-md-4 pull-right text-right">
                    <a href="/orders">MEUS PEDIDOS</a> | <a href="/account">MINHA CONTA</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- hamburguer mobile -->
                <div class="hidden-md hidden-lg col-xs-1 col-sm-1">
                    <div class="imagem">
                        <a id="btn-hamburguer" href=""><i class="fas fa-bars color_icon"
                                style="font-size: 20px;padding-top: 9px;"></i></a>
                    </div>
                </div>

                <!-- logo -->
                <div class="col-md-2 col-xs-7 col-sm-7">
                    <div id="logo" class="cspace">
                        <a href="/">
                            <img src="https://paceto.com.br/assets/uploads/logo.jpg" title="Paceto" alt="Paceto"
                                class="img-responsive" style="margin:0 auto">
                        </a>
                    </div>
                </div>

                <!--account mobile -->
                <div id="bloc-account" class="col-xs-1 col-sm-1 cspace  color_icon hidden-md hidden-lg">
                    <a class="color_icon hidden-md hidden-lg" href="/account">
                        <i class="fa fa-user fa-fw " style="font-size: 22px"></i>
                    </a>
                </div>


                <!-- cart mobile -->
                <div class=" col-md-1 col-sm-2 cspace cart-top text-center hidden-lg hidden-md pull-right">
                    <a class="color_icon" id="cart-top" href="/checkout">
                        <div class="imagem">
                            <span style="margin-top:0px" class="label label-danger rounded pull-right cart-item">0</span>
                            <svg id="icone-carrinho" width="32" height="32" style="float:left"
                                class="icone-carrinho-topo color_icon" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                                xml:space="preserve" style="">
                                <path
                                    d="M214.685,402.828c-24.829,0-45.029,20.2-45.029,45.029c0,24.829,20.2,45.029,45.029,45.029s45.029-20.2,45.029-45.029C259.713,423.028,239.513,402.828,214.685,402.828z M214.685,467.742c-10.966,0-19.887-8.922-19.887-19.887c0-10.966,8.922-19.887,19.887-19.887s19.887,8.922,19.887,19.887C234.572,458.822,225.65,467.742,214.685,467.742z">
                                </path>
                                <path
                                    d="M372.63,402.828c-24.829,0-45.029,20.2-45.029,45.029c0,24.829,20.2,45.029,45.029,45.029s45.029-20.2,45.029-45.029C417.658,423.028,397.458,402.828,372.63,402.828z M372.63,467.742c-10.966,0-19.887-8.922-19.887-19.887c0-10.966,8.922-19.887,19.887-19.887c10.966,0,19.887,8.922,19.887,19.887C392.517,458.822,383.595,467.742,372.63,467.742z">
                                </path>
                                <path
                                    d="M383.716,165.755H203.567c-6.943,0-12.571,5.628-12.571,12.571c0,6.943,5.629,12.571,12.571,12.571h180.149c6.943,0,12.571-5.628,12.571-12.571C396.287,171.382,390.659,165.755,383.716,165.755z">
                                </path>
                                <path
                                    d="M373.911,231.035H213.373c-6.943,0-12.571,5.628-12.571,12.571s5.628,12.571,12.571,12.571h160.537c6.943,0,12.571-5.628,12.571-12.571C386.481,236.664,380.853,231.035,373.911,231.035z">
                                </path>
                                <path
                                    d="M506.341,109.744c-4.794-5.884-11.898-9.258-19.489-9.258H95.278L87.37,62.097c-1.651-8.008-7.113-14.732-14.614-17.989l-55.177-23.95c-6.37-2.767-13.773,0.156-16.536,6.524c-2.766,6.37,0.157,13.774,6.524,16.537L62.745,67.17l60.826,295.261c2.396,11.628,12.752,20.068,24.625,20.068h301.166c6.943,0,12.571-5.628,12.571-12.571c0-6.943-5.628-12.571-12.571-12.571H148.197l-7.399-35.916H451.69c11.872,0,22.229-8.44,24.624-20.068l35.163-170.675C513.008,123.266,511.136,115.627,506.341,109.744z M451.69,296.301H135.619l-35.161-170.674l386.393,0.001L451.69,296.301z">
                                </path>
                            </svg>

                        </div>
                    </a>
                </div>


                <!-- search  -->
                <div class="col-xs-12 col-sm-12 col-md-5 cspace search-top">
                    <div id="opnd-search">
                        <form id="frmSearch" action="/busca" method="GET" class="block-search">
                            <div id="search" style="background: transparent;" class="input-group">
                                <input type="text" id="input-search" name="search"
                                    placeholder="Digite o que deseja encontrar.." autocomplete="off" class="form-control">
                                <ul class="dropdown-menu"></ul>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i
                                            class="fa fa-search color_icon"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- / search -->

                <!-- SAC -->
                <div class="col-md-2 col-xs-12 col-sm-12 hidden-xs hidden-sm">
                    <ul style="padding: 0px;">
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="color_icon dropdown-toggle">
                                <svg id="icone-atendimento" style="float:left;margin-right:10px" width="30" height="30"
                                    class="icone-atendimento-topo" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 611.932 611.932"
                                    xml:space="preserve" style="fill: rgb(234, 83, 69);">
                                    <path
                                        d="M559.017,210.569H422.774V100.102c0-28.708-23.594-52.301-52.301-52.301H52.301C23.594,47.801,0,71.394,0,100.102v191.476c0,28.708,23.594,52.301,52.301,52.301h30.958l39.004,52.301c2.182,3.682,6.614,5.182,11.047,5.182s8.115-2.182,11.047-5.182l39.004-52.301h5.864v110.467c0,28.708,23.594,52.301,52.301,52.301H428.57l39.004,52.301c2.182,3.682,6.614,5.182,11.047,5.182s8.115-2.182,11.047-5.182l39.004-52.301h30.958c28.708,0,52.301-23.594,52.301-52.301V262.87C612,234.094,588.475,210.569,559.017,210.569z M176.065,316.603c-4.432,0-8.115,2.182-11.047,5.182l-32.39,42.687l-32.39-42.687c-2.182-3.682-6.614-5.182-11.047-5.182H50.869c-13.979,0-25.026-11.047-25.026-25.026V100.102c0-13.979,11.047-25.026,25.026-25.026h318.172c13.979,0,25.025,11.047,25.025,25.026v124.446v67.03c0,13.979-11.047,25.026-25.025,25.026H202.523L176.065,316.603L176.065,316.603z M584.792,454.346c0,13.979-11.047,25.026-25.025,25.026h-38.322c-4.432,0-8.115,2.182-11.047,5.182l-32.39,42.687l-32.39-42.687c-2.182-3.682-6.614-5.182-11.047-5.182H241.595c-13.979,0-25.026-11.047-25.026-25.026V343.879h153.904c10.297,0,19.911-2.932,27.958-8.115h103.102c7.364,0,13.229-5.864,13.229-13.229c0-7.365-5.864-13.229-13.229-13.229h-81.009c2.182-5.182,2.932-11.047,2.932-17.661v-53.051h136.242c13.979,0,25.026,11.047,25.026,25.026v190.726H584.792z M514.08,398.363c0,7.364-5.864,13.229-13.229,13.229h-200.34c-7.364,0-13.229-5.864-13.229-13.229s5.864-13.229,13.229-13.229h200.34C508.148,385.066,514.08,390.998,514.08,398.363z M310.057,248.823h-199.59c-7.364,0-13.229-5.864-13.229-13.229s5.864-13.229,13.229-13.229h199.59c7.364,0,13.229,5.864,13.229,13.229C324.036,242.959,317.422,248.823,310.057,248.823zM97.238,159.018c0-7.364,5.864-13.229,13.229-13.229H230.48c7.364,0,13.229,5.864,13.229,13.229c0,7.364-5.864,13.229-13.229,13.229H110.467C103.102,172.246,97.238,166.382,97.238,159.018z">
                                    </path>
                                </svg>
                                Central de
                                <strong>Atendimento</strong>
                                <i class="fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu" style="width: 300px">
                                <li style="padding:20px">
                                    Central de atendimento: <br />
                                    <i class="fas fa-phone-square"></i> (21)3313-5559 <br />
                                    <i class="fab fa-whatsapp"></i> (21)3313-5559
                                    <hr />
                                    paceto@gmail.com

                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- account -->
                <div class=" col-md-2 account-top  color_icon hidden-xs hidden-xs">
                    <a class="color_icon" href="/account">
                        <svg id="icone-user" class="icone-user-topo color_icon" style="float: left;margin-right: 10px"
                            width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 55 55"
                            xml:space="preserve" style="fill: rgb(19, 66, 113);">
                            <path
                                d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.519,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.345-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z M42.459,48.132c-0.35,0.254-0.706,0.5-1.067,0.735c-0.166,0.108-0.331,0.216-0.5,0.321c-0.472,0.292-0.952,0.57-1.442,0.83c-0.108,0.057-0.217,0.111-0.326,0.167c-1.126,0.577-2.291,1.073-3.488,1.476c-0.042,0.014-0.084,0.029-0.127,0.043c-0.627,0.208-1.262,0.393-1.904,0.552c-0.002,0-0.004,0.001-0.006,0.001c-0.648,0.16-1.304,0.293-1.964,0.402c-0.018,0.003-0.036,0.007-0.054,0.01c-0.621,0.101-1.247,0.174-1.875,0.229c-0.111,0.01-0.222,0.017-0.334,0.025C28.751,52.97,28.127,53,27.5,53c-0.634,0-1.266-0.031-1.895-0.078c-0.109-0.008-0.218-0.015-0.326-0.025c-0.634-0.056-1.265-0.131-1.89-0.233c-0.028-0.005-0.056-0.01-0.084-0.015c-1.322-0.221-2.623-0.546-3.89-0.971c-0.039-0.013-0.079-0.027-0.118-0.04c-0.629-0.214-1.251-0.451-1.862-0.713c-0.004-0.002-0.009-0.004-0.013-0.006c-0.578-0.249-1.145-0.525-1.705-0.816c-0.073-0.038-0.147-0.074-0.219-0.113c-0.511-0.273-1.011-0.568-1.504-0.876c-0.146-0.092-0.291-0.185-0.435-0.279c-0.454-0.297-0.902-0.606-1.338-0.933c-0.045-0.034-0.088-0.07-0.133-0.104c0.032-0.018,0.064-0.036,0.096-0.054l7.907-4.313c1.36-0.742,2.205-2.165,2.205-3.714l-0.001-3.602l-0.23-0.278c-0.022-0.025-2.184-2.655-3.001-6.216l-0.091-0.396l-0.341-0.221c-0.481-0.311-0.769-0.831-0.769-1.392v-3.545c0-0.465,0.197-0.898,0.557-1.223l0.33-0.298v-5.57l-0.009-0.131c-0.003-0.024-0.298-2.429,1.396-4.36C21.583,10.837,24.061,10,27.5,10c3.426,0,5.896,0.83,7.346,2.466c1.692,1.911,1.415,4.361,1.413,4.381l-0.009,5.701l0.33,0.298c0.359,0.324,0.557,0.758,0.557,1.223v3.545c0,0.713-0.485,1.36-1.181,1.575l-0.497,0.153l-0.16,0.495c-0.59,1.833-1.43,3.526-2.496,5.032c-0.262,0.37-0.517,0.698-0.736,0.949l-0.248,0.283V39.8c0,1.612,0.896,3.062,2.338,3.782l8.467,4.233c0.054,0.027,0.107,0.055,0.16,0.083C42.677,47.979,42.567,48.054,42.459,48.132z">
                            </path>
                        </svg>

                        Entrar ou
                        <strong>Cadastrar </strong> <i class="fas fa-angle-down"></i>
                    </a>
                </div>


                <!-- cart desktop -->
                <div class=" col-md-1 cspace cart-top text-center hidden-xs hidden-sm">
                    <a class="color_icon" id="cart-top" href="/checkout">
                        <div class="imagem">
                            <span style="margin-top:0px" class="label label-danger rounded pull-right cart-item">0</span>

                            <svg id="icone-carrinho" width="32" height="32" style="float:left"
                                class="icone-carrinho-topo color_icon" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999"
                                xml:space="preserve" style="">
                                <path
                                    d="M214.685,402.828c-24.829,0-45.029,20.2-45.029,45.029c0,24.829,20.2,45.029,45.029,45.029s45.029-20.2,45.029-45.029C259.713,423.028,239.513,402.828,214.685,402.828z M214.685,467.742c-10.966,0-19.887-8.922-19.887-19.887c0-10.966,8.922-19.887,19.887-19.887s19.887,8.922,19.887,19.887C234.572,458.822,225.65,467.742,214.685,467.742z">
                                </path>
                                <path
                                    d="M372.63,402.828c-24.829,0-45.029,20.2-45.029,45.029c0,24.829,20.2,45.029,45.029,45.029s45.029-20.2,45.029-45.029C417.658,423.028,397.458,402.828,372.63,402.828z M372.63,467.742c-10.966,0-19.887-8.922-19.887-19.887c0-10.966,8.922-19.887,19.887-19.887c10.966,0,19.887,8.922,19.887,19.887C392.517,458.822,383.595,467.742,372.63,467.742z">
                                </path>
                                <path
                                    d="M383.716,165.755H203.567c-6.943,0-12.571,5.628-12.571,12.571c0,6.943,5.629,12.571,12.571,12.571h180.149c6.943,0,12.571-5.628,12.571-12.571C396.287,171.382,390.659,165.755,383.716,165.755z">
                                </path>
                                <path
                                    d="M373.911,231.035H213.373c-6.943,0-12.571,5.628-12.571,12.571s5.628,12.571,12.571,12.571h160.537c6.943,0,12.571-5.628,12.571-12.571C386.481,236.664,380.853,231.035,373.911,231.035z">
                                </path>
                                <path
                                    d="M506.341,109.744c-4.794-5.884-11.898-9.258-19.489-9.258H95.278L87.37,62.097c-1.651-8.008-7.113-14.732-14.614-17.989l-55.177-23.95c-6.37-2.767-13.773,0.156-16.536,6.524c-2.766,6.37,0.157,13.774,6.524,16.537L62.745,67.17l60.826,295.261c2.396,11.628,12.752,20.068,24.625,20.068h301.166c6.943,0,12.571-5.628,12.571-12.571c0-6.943-5.628-12.571-12.571-12.571H148.197l-7.399-35.916H451.69c11.872,0,22.229-8.44,24.624-20.068l35.163-170.675C513.008,123.266,511.136,115.627,506.341,109.744z M451.69,296.301H135.619l-35.161-170.674l386.393,0.001L451.69,296.301z">
                                </path>
                            </svg>
                            <strong class=" hidden-xs hidden-sm">Itens</strong>

                        </div>
                    </a>
                </div>

            </div>

        </div>
    </header>

    <!-- menu - default / megamenu -->
    <div id="megamenu" class="sub-nav hidden-xs hidden-sm  bkg_icon  ">
        <div class="container ">
            <div class="row">
                <ul>

                    <li>
                        <a href="javascript:$(&#039;#btn-hamburguer&#039;).trigger(&#039;click&#039;)" class="color_bars">
                            <img class="megamenu-image" alt="MENU" title="MENU"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1602853918/files/anovabrasil/menu_20201016101158.png" />
                            <span class="megamenu-name">MENU</span>
                        </a>
                    </li>





                    <li class="dropdown">
                        <a href="/armazenamentos/c" class="color_bars">
                            <img class="megamenu-image" alt="ARMAZENAMENTOS" title="ARMAZENAMENTOS"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1593994314/files/anovabrasil/pendrive_20200705091154.png" />
                            <span class="megamenu-name">ARMAZENAMENTOS</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/armazenamentos-cartoes-de-memoria/c">CARTÕES DE MEMÓRIA</a>
                            </li>
                            <li>
                                <a href="/armazenamentos-midias-cd/c">MIDIAS CD</a>
                            </li>
                            <li>
                                <a href="/armazenamentos-midias-dvd/c">MIDIAS DVD</a>
                            </li>
                            <li>
                                <a href="/armazenamentos-pendrives/c">PENDRIVES</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/embalagens/c" class="color_bars">
                            <img class="megamenu-image" alt="EMBALAGENS" title="EMBALAGENS"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1593995923/files/anovabrasil/embalagem_20200705093843.png" />
                            <span class="megamenu-name">EMBALAGENS</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/embalagens-box-cd/c">BOX CD</a>
                            </li>
                            <li>
                                <a href="/embalagens-box-dvd/c">BOX DVD</a>
                            </li>
                            <li>
                                <a href="/embalagens-envelopes/c">ENVELOPES</a>
                            </li>
                            <li>
                                <a href="/embalagens-lacres/c">LACRES</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/gamer/c" class="color_bars">
                            <img class="megamenu-image" alt="GAMER" title="GAMER"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1593999991/files/anovabrasil/game_20200705104631.png" />
                            <span class="megamenu-name">GAMER</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/gamer-acessorios-games/c">ACESSÓRIOS GAMES</a>
                            </li>
                            <li>
                                <a href="/gamer-coolers/c">COOLERS</a>
                            </li>
                            <li>
                                <a href="/gamer-fones/c">FONES</a>
                            </li>
                            <li>
                                <a href="/gamer-mouses/c">MOUSES</a>
                            </li>
                            <li>
                                <a href="/gamer-mouse-pad/c">MOUSE PAD</a>
                            </li>
                            <li>
                                <a href="/gamer-teclados/c">TECLADOS</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/suprimentos-de-informatica/c" class="color_bars">
                            <img class="megamenu-image" alt="INFORMÁTICA" title="INFORMÁTICA"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1594001302/files/anovabrasil/s-info_20200705110822.png" />
                            <span class="megamenu-name">INFORMÁTICA</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/suprimentos-de-informatica-cabos/c">CABOS</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-caixas-de-som/c">CAIXAS DE SOM</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-carregadores/c">CARREGADORES</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-energia/c">ENERGIA</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-fones/c">FONES</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-fontes/c">FONTES</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-hub-usb/c">HUB USB</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-impressoras/c">IMPRESSORA</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-mouses/c">MOUSES</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-mouse-pad/c">MOUSE PAD</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-rede/c">REDE</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-teclados/c">TECLADOS</a>
                            </li>
                            <li>
                                <a href="/suprimentos-de-informatica-outros/c">OUTROS</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/impressoes/c" class="color_bars">
                            <img class="megamenu-image" alt="IMPRESSÕES" title="IMPRESSÕES"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1594014857/files/anovabrasil/impressoes_20200706025417.png" />
                            <span class="megamenu-name">IMPRESSÕES</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/impressoes-papeis-fotograficos/c">PAPEL FOTOGRÁFICO</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/sublimacao/c" class="color_bars">
                            <img class="megamenu-image" alt="SUBLIMAÇÃO" title="SUBLIMAÇÃO"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1594015277/files/anovabrasil/sublimation_20200706030117.png" />
                            <span class="megamenu-name">SUBLIMAÇÃO</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/sublimacao-azulejos/c">AZULEJOS</a>
                            </li>
                            <li>
                                <a href="/sublimacao-bones/c">BONES</a>
                            </li>
                            <li>
                                <a href="/sublimacao-canecas-transfer/c">CANECAS TRANSFER</a>
                            </li>
                            <li>
                                <a href="/sublimacao-canecas-porcelana/c">CANECAS PORCELANA</a>
                            </li>
                            <li>
                                <a href="/sublimacao-canecas-polimero/c">CANECAS POLÍMERO</a>
                            </li>
                            <li>
                                <a href="/sublimacao-canecas-vidro/c">CANECAS VIDRO</a>
                            </li>
                            <li>
                                <a href="/sublimacao-copos/c">COPOS</a>
                            </li>
                            <li>
                                <a href="/sublimacao-camisetas/c">CAMISETAS</a>
                            </li>
                            <li>
                                <a href="/sublimacao-chaveiros/c">CHAVEIROS</a>
                            </li>
                            <li>
                                <a href="/sublimacao-fitas-termica/c">FITAS TÉRMICA</a>
                            </li>
                            <li>
                                <a href="/sublimacao-mdf-sublimatico/c">MDF SUBLIMATICO</a>
                            </li>
                            <li>
                                <a href="/sublimacao-papeis/c">PAPEIS</a>
                            </li>
                            <li>
                                <a href="/sublimacao-prensas/c">PRENSAS</a>
                            </li>
                            <li>
                                <a href="/sublimacao-squezzes/c">SQUEZZES</a>
                            </li>
                            <li>
                                <a href="/sublimacao-outros/c">OUTROS</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/utilidades/c" class="color_bars">
                            <img class="megamenu-image" alt="UTILIDADES" title="UTILIDADES"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1594079376/files/anovabrasil/batedeira_20200706084936.png" />
                            <span class="megamenu-name">UTILIDADES</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/utilidades-utilidades/c">UTILIDADES</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/automotivos/c" class="color_bars">
                            <img class="megamenu-image" alt="AUTOMOTIVOS" title="AUTOMOTIVOS"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1602854482/files/anovabrasil/volante_20201016102122.png" />
                            <span class="megamenu-name">AUTOMOTIVOS</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/automotivos-automotivos/c">AUTOMOTIVOS</a>
                            </li>
                        </ul>
                    </li>




                    <li class="dropdown">
                        <a href="/ciclismo/c" class="color_bars">
                            <img class="megamenu-image" alt="CICLISMO" title="CICLISMO"
                                src="https://res.cloudinary.com/boxcompras/image/upload/v1596567660/files/anovabrasil/ciclismo_20200804040059.png" />
                            <span class="megamenu-name">CICLISMO</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu submenu-items">
                            <li>
                                <a href="/ciclismo-capacetes/c">CAPACETES</a>
                            </li>
                            <li>
                                <a href="/ciclismo-central-e-pedevela/c">CENTRAL E PEDEVELA</a>
                            </li>
                            <li>
                                <a href="/ciclismo-componentes/c">COMPONENTES</a>
                            </li>
                            <li>
                                <a href="/ciclismo-cubos/c">CUBOS</a>
                            </li>
                            <li>
                                <a href="/ciclismo-descanso-e-suportes/c">DESCANSO E SUPORTES</a>
                            </li>
                            <li>
                                <a href="/ciclismo-freios/c">FREIOS</a>
                            </li>
                            <li>
                                <a href="/ciclismo-manetes-e-alavanca/c">MANETES E ALAVANCA</a>
                            </li>
                            <li>
                                <a href="/ciclismo-selim/c">SELIM</a>
                            </li>
                        </ul>
                    </li>


                </ul>
                <div class="pull-right"></div>
            </div>
        </div>
    </div>

    <!--<div id="app" canvas="container">   -->
    <div>


        <div id="slideshow" class="page-content-wrapper">



            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="https://paceto.com.br/assets/uploads/slider-2.png" alt="" style="width:100%;">
                    </div>
                    <div class="item ">
                        <a href="https://pedido.anovabrasil.com.br/">
                            <img src="https://paceto.com.br/assets/uploads/slider-1.jpg" alt="" style="width:100%;">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="/suprimentos-de-informatica/c">
                            <img src="https://paceto.com.br/assets/uploads/cta.jpg" alt="" style="width:100%;">
                        </a>
                    </div>
                    <div class="item ">
                        <a href="/sublimacao/c">
                            <img src="https://res.cloudinary.com/boxcompras/image/upload/v1595512681/stores/anovabrasil/banner-anovabrasil_2445689.png"
                                alt="" style="width:100%;">
                        </a>
                    </div>
                </div>

                <!-- Left control -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <i class="fas fa-angle-left glyphicon glyphicon-chevron-right"></i>
                    <span class="sr-only">Anterior</span>
                </a>
                <!-- Right control -->
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <i class="fas fa-angle-right glyphicon glyphicon-chevron-right"></i>
                    <span class="sr-only">Próximo</span>
                </a>

            </div> <!-- .myCarousel -->



        </div> <!-- .page-content-wrapper -->




        <!-- Módulo Produtos Novos-->
        <div class="container-fluid module-latest" id="module-produtos-novos">
            <div class="products">
                <ul class="list-group">
                    <div class="container top">
                        <div class="row">
                            <div class="title-section-product col-md-12 col-sm-12">
                                <h3 class="text-center">PRODUTOS NOVOS</h3>
                            </div>
                        </div>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/caneca-de-vidro-fosca-jaetada-ccx-325ml-deko-cx36-158/p"
                                    data-url="/quickview/184833">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1596554794/products/anovabrasil/184833-caneca-de-4425.jpg"
                                            alt="Promoção de CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO CX36 por apenas R$9,95"
                                            title="CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO CX36" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; CANECAS VIDRO</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/caneca-de-vidro-fosca-jaetada-ccx-325ml-deko-cx36-158/p"
                                            data-url="/quickview/184833">CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO
                                            CX36</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">579</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 9,95</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="184833" class="product_id">
                                                <input type="hidden" value="579" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="184833"
                                            data-product-name="CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO CX36">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/caneca-branca-polimero-325ml-cx100-2722/p"
                                    data-url="/quickview/180593">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873190/products/anovabrasil/180593-caneca-bra4058.jpg"
                                            alt="Promoção de CANECA BRANCA POLIMERO 325ML CX100 por apenas R$3,95"
                                            title="CANECA BRANCA POLIMERO 325ML CX100" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; CANECAS POLÍMERO</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/caneca-branca-polimero-325ml-cx100-2722/p"
                                            data-url="/quickview/180593">CANECA BRANCA POLIMERO 325ML CX100</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">2420</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 3,95</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180593" class="product_id">
                                                <input type="hidden" value="2420" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180593" data-product-name="CANECA BRANCA POLIMERO 325ML CX100">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/caneca-branca-325ml-m1-tipo-aaa-anova-cx36-m1/p"
                                    data-url="/quickview/180729">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873318/products/anovabrasil/180729-caneca-bra6282.jpg"
                                            alt="Promoção de CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36 por apenas R$8,80"
                                            title="CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; CANECAS PORCELANA</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/caneca-branca-325ml-m1-tipo-aaa-anova-cx36-m1/p"
                                            data-url="/quickview/180729">CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">9709</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 8,80</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180729" class="product_id">
                                                <input type="hidden" value="9709" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180729"
                                            data-product-name="CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/papel-foto-180g-a4-20fls-cx60-jojo-bc2006/p"
                                    data-url="/quickview/180672">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873266/products/anovabrasil/180672-papel-foto2829.jpg"
                                            alt="Promoção de PAPEL FOTO 180G A4 20FLS CX/60 JOJO por apenas R$5,15"
                                            title="PAPEL FOTO 180G A4 20FLS CX/60 JOJO" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>IMPRESSÕES &gt; PAPÉIS FOTOGRÁFICOS</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/papel-foto-180g-a4-20fls-cx60-jojo-bc2006/p"
                                            data-url="/quickview/180672">PAPEL FOTO 180G A4 20FLS CX/60 JOJO</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">1561</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 5,15</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180672" class="product_id">
                                                <input type="hidden" value="1561" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180672"
                                            data-product-name="PAPEL FOTO 180G A4 20FLS CX/60 JOJO">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/azulejo-branco-20x20-eliane-ssuporte-cx10-096753/p"
                                    data-url="/quickview/191941">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1597324132/products/anovabrasil/191941-azulejo-br7164.jpg"
                                            alt="Promoção de AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10 por apenas R$4,50"
                                            title="AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; AZULEJOS</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/azulejo-branco-20x20-eliane-ssuporte-cx10-096753/p"
                                            data-url="/quickview/191941">AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">605</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 4,50</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="191941" class="product_id">
                                                <input type="hidden" value="605" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="191941"
                                            data-product-name="AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/papel-foto-auto-adesi-135g-a4-20-fls-cx50-jojo-bc2005/p"
                                    data-url="/quickview/180671">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873264/products/anovabrasil/180671-papel-foto3302.jpg"
                                            alt="Promoção de PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO por apenas R$7,60"
                                            title="PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>IMPRESSÕES &gt; PAPÉIS FOTOGRÁFICOS</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/papel-foto-auto-adesi-135g-a4-20-fls-cx50-jojo-bc2005/p"
                                            data-url="/quickview/180671">PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">696</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 7,60</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180671" class="product_id">
                                                <input type="hidden" value="696" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180671"
                                            data-product-name="PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/pendrive-8gb-memoria-flash-bulk-preto-utech-mfbp8gb/p"
                                    data-url="/quickview/194617">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1598039230/products/anovabrasil/194617-pendrive-87090.jpg"
                                            alt="Promoção de PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH por apenas R$17,30"
                                            title="PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>ARMAZENAMENTOS &gt; PENDRIVES</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/pendrive-8gb-memoria-flash-bulk-preto-utech-mfbp8gb/p"
                                            data-url="/quickview/194617">PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">587</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 17,30</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="194617" class="product_id">
                                                <input type="hidden" value="587" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="194617"
                                            data-product-name="PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/pendrive-16gb-memoria-flash-bulk-preto-utech-mfb16gb/p"
                                    data-url="/quickview/194618">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1598031310/products/anovabrasil/194618-pendrive-18636.jpg"
                                            alt="Promoção de PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH por apenas R$18,40"
                                            title="PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>ARMAZENAMENTOS &gt; PENDRIVES</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/pendrive-16gb-memoria-flash-bulk-preto-utech-mfb16gb/p"
                                            data-url="/quickview/194618">PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">720</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 18,40</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="194618" class="product_id">
                                                <input type="hidden" value="720" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="194618"
                                            data-product-name="PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <!-- Módulo Produtos Novos-->
        <div class="container-fluid module-latest" id="module-produtos-em-destaque">
            <div class="products">
                <ul class="list-group">
                    <div class="container top">
                        <div class="row">
                            <div class="title-section-product col-md-12 col-sm-12">
                                <h3 class="text-center">PRODUTOS EM DESTAQUE</h3>
                            </div>
                        </div>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/caneca-de-vidro-fosca-jaetada-ccx-325ml-deko-cx36-158/p"
                                    data-url="/quickview/184833">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1596554794/products/anovabrasil/184833-caneca-de-4425.jpg"
                                            alt="Promoção de CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO CX36 por apenas R$9,95"
                                            title="CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO CX36" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; CANECAS VIDRO</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/caneca-de-vidro-fosca-jaetada-ccx-325ml-deko-cx36-158/p"
                                            data-url="/quickview/184833">CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO
                                            CX36</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">579</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 9,95</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="184833" class="product_id">
                                                <input type="hidden" value="579" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="184833"
                                            data-product-name="CANECA DE VIDRO FOSCA JAETADA C/CX 325ML DEKO CX36">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/caneca-branca-polimero-325ml-cx100-2722/p"
                                    data-url="/quickview/180593">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873190/products/anovabrasil/180593-caneca-bra4058.jpg"
                                            alt="Promoção de CANECA BRANCA POLIMERO 325ML CX100 por apenas R$3,95"
                                            title="CANECA BRANCA POLIMERO 325ML CX100" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; CANECAS POLÍMERO</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/caneca-branca-polimero-325ml-cx100-2722/p"
                                            data-url="/quickview/180593">CANECA BRANCA POLIMERO 325ML CX100</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">2420</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 3,95</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180593" class="product_id">
                                                <input type="hidden" value="2420" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180593" data-product-name="CANECA BRANCA POLIMERO 325ML CX100">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/caneca-branca-325ml-m1-tipo-aaa-anova-cx36-m1/p"
                                    data-url="/quickview/180729">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873318/products/anovabrasil/180729-caneca-bra6282.jpg"
                                            alt="Promoção de CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36 por apenas R$8,80"
                                            title="CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; CANECAS PORCELANA</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/caneca-branca-325ml-m1-tipo-aaa-anova-cx36-m1/p"
                                            data-url="/quickview/180729">CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">9709</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 8,80</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180729" class="product_id">
                                                <input type="hidden" value="9709" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180729"
                                            data-product-name="CANECA BRANCA 325ML M1 TIPO AAA ANOVA CX/36">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/papel-foto-180g-a4-20fls-cx60-jojo-bc2006/p"
                                    data-url="/quickview/180672">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873266/products/anovabrasil/180672-papel-foto2829.jpg"
                                            alt="Promoção de PAPEL FOTO 180G A4 20FLS CX/60 JOJO por apenas R$5,15"
                                            title="PAPEL FOTO 180G A4 20FLS CX/60 JOJO" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>IMPRESSÕES &gt; PAPÉIS FOTOGRÁFICOS</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/papel-foto-180g-a4-20fls-cx60-jojo-bc2006/p"
                                            data-url="/quickview/180672">PAPEL FOTO 180G A4 20FLS CX/60 JOJO</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">1561</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 5,15</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180672" class="product_id">
                                                <input type="hidden" value="1561" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180672"
                                            data-product-name="PAPEL FOTO 180G A4 20FLS CX/60 JOJO">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/azulejo-branco-20x20-eliane-ssuporte-cx10-096753/p"
                                    data-url="/quickview/191941">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1597324132/products/anovabrasil/191941-azulejo-br7164.jpg"
                                            alt="Promoção de AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10 por apenas R$4,50"
                                            title="AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>SUBLIMAÇÃO &gt; AZULEJOS</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/azulejo-branco-20x20-eliane-ssuporte-cx10-096753/p"
                                            data-url="/quickview/191941">AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">605</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 4,50</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="191941" class="product_id">
                                                <input type="hidden" value="605" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="191941"
                                            data-product-name="AZULEJO BRANCO 20X20 ELIANE S/SUPORTE CX/10">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/papel-foto-auto-adesi-135g-a4-20-fls-cx50-jojo-bc2005/p"
                                    data-url="/quickview/180671">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1593873264/products/anovabrasil/180671-papel-foto3302.jpg"
                                            alt="Promoção de PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO por apenas R$7,60"
                                            title="PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>IMPRESSÕES &gt; PAPÉIS FOTOGRÁFICOS</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/papel-foto-auto-adesi-135g-a4-20-fls-cx50-jojo-bc2005/p"
                                            data-url="/quickview/180671">PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">696</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 7,60</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="180671" class="product_id">
                                                <input type="hidden" value="696" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="180671"
                                            data-product-name="PAPEL FOTO AUTO ADESI 135G A4 20 FLS CX/50 JOJO">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/pendrive-8gb-memoria-flash-bulk-preto-utech-mfbp8gb/p"
                                    data-url="/quickview/194617">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1598039230/products/anovabrasil/194617-pendrive-87090.jpg"
                                            alt="Promoção de PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH por apenas R$17,30"
                                            title="PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>ARMAZENAMENTOS &gt; PENDRIVES</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/pendrive-8gb-memoria-flash-bulk-preto-utech-mfbp8gb/p"
                                            data-url="/quickview/194617">PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">587</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 17,30</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="194617" class="product_id">
                                                <input type="hidden" value="587" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="194617"
                                            data-product-name="PENDRIVE 8GB MEMORIA FLASH BULK PRETO UTECH">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="card-product col-md-3 col-xs-6 col-sm-4">
                            <div class="xs-product ">
                                <div class="badges">

                                </div>
                                <a class="quickview" href="/pendrive-16gb-memoria-flash-bulk-preto-utech-mfb16gb/p"
                                    data-url="/quickview/194618">
                                    <div class="thumb-product-img">
                                        <img class="img-responsive img-product lazy"
                                            data-src="https://res.cloudinary.com/boxcompras/image/upload/v1598031310/products/anovabrasil/194618-pendrive-18636.jpg"
                                            alt="Promoção de PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH por apenas R$18,40"
                                            title="PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH" />
                                    </div>
                                </a>
                                <div class="xs-product-content">
                                    <span class="product-categories">
                                        <span class="product-categories"
                                            style="font-size: 0.95em; margin-bottom: 4px; display: block;">

                                            <small>ARMAZENAMENTOS &gt; PENDRIVES</small>
                                        </span>
                                    </span>
                                    <h4>
                                        <a class="quickview" href="/pendrive-16gb-memoria-flash-bulk-preto-utech-mfb16gb/p"
                                            data-url="/quickview/194618">PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH</a>
                                    </h4>
                                    <span class="card-stock label label-default pull-right">720</span>
                                    <div class="avaliation">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas bg fa-star"></i>
                                    </div>

                                    <span class="price" style="display: table-row;">
                                        <span class="no-padding  col-md-5  tprice">R$ 18,40</span>
                                    </span>



                                    <div class="xs-product-hover-area box-controls clearfix">
                                        <div class="prod-quantity">
                                            <div>
                                                <button type="button" class="btn-minus color_icon">-</button>
                                                <input type="text" name="" value="0" class="form-control quantity qty">
                                                <input type="hidden" value="194618" class="product_id">
                                                <input type="hidden" value="720" class="stock">
                                                <input type="hidden" value="189" class="store_id">
                                                <button type="button" class="btn-plus color_icon">+</button>
                                            </div>
                                        </div>
                                        <button class="prod-action prod-add-cart bkg_icon btn-add-to-cart" type="submit"
                                            data-product-id="194618"
                                            data-product-name="PENDRIVE 16GB MEMORIA FLASH BULK PRETO UTECH">
                                            <span>Comprar</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="module-html" id="module-banner-categoria">

        </div>
        <!-- Módulo Produtos destaques-->
        <div class="module-html" id="module-ultimas-do-blog">

        </div>
        <div class="module-html" id="module-carousel-marcas">
            <div class="container" wfd-id="27">
                <div class="title-section-product col-md-12 col-sm-12" style="margin-top: 4px;" wfd-id="52">
                    <h3 class="text-center">Escolha pela marca</h3>
                </div>
                <div class="row" wfd-id="28">
                    <div class="col-md-12" wfd-id="29">
                        <div id="CarouselBrand" class="carousel slide" style="margin-bottom: 50px;" wfd-id="30">
                            <ul style="list-style:none!important;" wfd-id="48">
                                <li data-target="#CarouselBrand" data-slide-to="0" class="active" wfd-id="51"></li>
                                <li data-target="#CarouselBrand" data-slide-to="1" wfd-id="50"></li>
                                <li data-target="#CarouselBrand" data-slide-to="2" wfd-id="49"></li>
                            </ul>
                            <!-- Carousel items -->
                            <div class="carousel-inner" wfd-id="31">
                                <div class="item active" wfd-id="40">
                                    <div class="row" wfd-id="41">
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="47">
                                            <a href="/c3-tech/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/OmnoKtF.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="46">
                                            <a href="/deko/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/vNZiG4z.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="45">
                                            <a href="/xtrad/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/MFsjp7x.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="44">
                                            <a href="/multilaser/b" style="border-radius: 100px;">
                                                <img src="https://i.postimg.cc/FKLV1J4q/multilaser.png" alt="Image"
                                                    class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="43">
                                            <a href="/knup/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/tOeY3mv.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="42">
                                            <a href="/live/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/bog3GdN.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--.item-->
                                <div class="item" wfd-id="32">
                                    <div class="row" wfd-id="33">
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="39">
                                            <a href="/oxford/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/oXXcYe0.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="38">
                                            <a href="/forceline/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/dJYqaZj.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="37">
                                            <a href="/c3-plus/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/iGxcBCA.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="36">
                                            <a href="/sfct/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/aZ7TypY.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="35">
                                            <a href="/life-data/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/E1W3r0x.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" wfd-id="34">
                                            <a href="/u-tech/b" style="border-radius: 100px;">
                                                <img src="https://i.imgur.com/UrZWTxK.png" alt="Image" class="img-circle"
                                                    style="height: 100px; width: 100px; display: block; margin-left: auto; margin-right: auto;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--.item-->
                            </div>
                            <!--.carousel-inner-->
                            <a data-slide="prev" href="#CarouselBrand" class="hidden-xs left carousel-control color_icon"
                                style="background-image: none;font-size: 58px;opacity: 1;text-align: left;">‹</a>
                            <a data-slide="next" href="#CarouselBrand" class="hidden-xs color_icon right carousel-control"
                                style="background-image: none;font-size: 58px;opacity: 1;text-align: right;">›</a>
                        </div>
                        <!--.Carousel-->
                    </div>
                </div>
            </div>
        </div>





        <footer>
            <div class="container">
                <div class=" default-footer">
                    <div class="row">
                        <div id="coluna-top-um" class="col-md-4">
                            <div class=" no-padding">
                                <a href="/" title="">
                                    <img class="footer-logo-store"
                                        src="https://res.cloudinary.com/boxcompras/image/upload/v1594012958/files/anovabrasil/logotransparente_20200706022238.png"
                                        title="Anova Brasil" alt="Anova Brasil">
                                </a>
                            </div>
                            <ul class="list-unstyled information">
                                <h3>Atendimento</h3>
                                <li>
                                    <a href="" title="Tel Vendas"><img src="/img/static/phone.svg"> Televendas:
                                        (21)2027-5620</a>
                                </li>
                                <li>
                                    <a href="mailto:" title="E-mail Atendimento"><img src="/img/static/email.svg">
                                        anovabr@gmail.com</a>
                                </li>
                            </ul>

                            <ul class="list-unstyled hours">
                                <h3 class="title-hours">Horário de funcionamento:</h3>
                                <li>Segunda à Sexta das 9:00 às 16hrs</li>

                                <h3 class="title-address">Endereço</h3>
                                <li>
                                    <address>
                                        Rua General Argolo, 19
                                        São Cristóvão, Rio de Janeiro / RJ
                                    </address>
                                </li>
                            </ul>
                        </div>
                        <div id="coluna-top-dois" class="col-md-4">
                            <h3>Institucional</h3>
                            <ul class="list-unstyled">
                                <li><a href="/sobre-nos/page">Sobre Nós</a></li>
                            </ul>
                        </div>
                        <div id="coluna-top-tres" class="col-md-4">
                            <h3>Área do Cliente</h3>
                            <ul class="list-unstyled">
                                <li><a href="/account">Minha conta</a></li>
                                <li><a href="/orders">Meus pedidos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div id="coluna-bottom-um" class="col-md-4">
                            <div class="col-md-10 no-padding">
                                <div class="socials flex-container align-middle align-justify">
                                    <span class="infosRodape-social-t1">Siga nas redes sociais:</span>
                                    <a target="_blank" href="https://www.facebook.com/ANovaBrasil" target="_blank">
                                        <img data-src="/img/static/fb-ico.svg" class="lazy"
                                            alt="acesse a fanpage do facebook da Anova Brasil"
                                            title="acesse a fanpage do facebook da Anova Brasil" />
                                    </a>
                                    <a target="_blank" href="https://instagram.com/distribrasil_?igshid=mhcnp6qugbpe"
                                        target="_blank">
                                        <img data-src="/img/static/insta-ico.svg" class="lazy"
                                            alt="acesse o instagram da Anova Brasil"
                                            title="acesse o instagram da Anova Brasil" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="coluna-bottom-dois" class="col-md-4">
                            <div id="selos" class="col-md-12">
                                <h3>Selos de Segurança</h3>
                                <img data-src="/img/static/selo-ssl.png" alt="Selo de segurança" title="Selo de segurança"
                                    class="lazy">
                                <a href="https://www.google.com/transparencyreport/safebrowsing/diagnostic/index.html#url=https://anovabrasil.com.br"
                                    target="_blank">
                                    <img data-src="/img/static/selo-google.png" title="Selo de segurança do google"
                                        alt="Selo de segurança do google" class="lazy">
                                </a>
                            </div>
                        </div>
                        <div id="coluna-bottom-tres" class="col-md-4">
                            <h3>Nossa fanpage</h3>
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F/ANovaBrasil%2F&tabs=timeline&width=340&height=240px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                width="100%" height="200px" style="border:none;overflow:hidden" scrolling="no"
                                frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


                        </div>
                    </div>
                </div>


            </div>

            <section class="">
                <div class="columns  ">
                    <div id="footer-company" class="pull-left">
                        <span class="text-left">Anova Brasil - CNPJ 20275364000191
                            <br>
                            Rua General Argolo, 19 - São Cristóvão Rio de Janeiro RJ CEP 20921-392
                        </span>
                    </div>

                    <section class="plataforma-ecommerce">
                        <div class="pull-right ">

                            <a target="_blank" title="Plataforma Avante+ integrado ao ERP" href="https://avanteplus.com.br">
                                <img alt="Avante+ Loja virtual integrado ao ERP"
                                    src="https://avanteplus.com.br/site/assets/images/x-icon/favicon.png"
                                    style="width: 25px" />
                                Plataforma Omnichannel
                            </a>

                        </div>
                    </section>

                </div>
            </section>
        </footer>

    </div> <!-- #app -->
@endsection
