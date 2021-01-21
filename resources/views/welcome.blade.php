<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />

        <title>TGC Manager - Sistema de Gerenciamento Comercial</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Novo -->
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mb-comingsoon.css">
        <link rel="stylesheet" href="css/custom.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.mb-comingsoon.js"></script>
        <script type="text/javascript" src="js/common-scripts.js"></script>
        <script type="text/javascript" src="js/jquery-imageMap.js"></script>

        <!--Include js for Lightbox-->
        <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
        <link rel="stylesheet" href="css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.6"></script>

        <link rel="stylesheet" href="css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.7"></script>

        <!--Include timecircle-->
        <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css" media="screen" />
        <style type="text/css">
        body,td,th {
	font-family: "Open Sans", sans-serif;
}
        </style>
        <script type="text/javascript" src="js/jquery.countdown.js"></script>


        <script type="text/javascript">
            $(document).ready(function(){
                $('.fancybox-media').fancybox({
                    openEffect  : 'none',
                    width:"640",
                    height:"360",
                    closeEffect : 'elastic',
                    helpers : {
                        media : {}
                    }
                });


           $('img[usemap]').rwdImageMaps();
            });
            window.jQuery(function ($) {
                "use strict";
                $('#DateCountdown').countDown({
                    with_separators: false
                });

                $('#timer-footer').countDown({
                    with_separators: false
                });

            });    
        </script>modified:   public/css/app.css
        modified:   public/js/app.js

        <!-- Novo -->
    </head>
    <body>
    	<div class="top">
            <!--<div class="container">
                <a href="" class="text-center"><img src="https://paceto.com.br/img/layout/logo/logo.jpg" alt="" class="img-responsive"></a>
            </div>-->
        </div><!--End Top-->

        <div class="top-2">
            <div class="inner">
                <div class="container" style="position:relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-center">
                                Controle seu comércio com o <br><span class="has_bg">Mais Poderoso</span> <span>Sistema de Controle...</span>
                            </h1>
                            <h3 class="text-center">Apresentamos o <span>TGC Manager</span></h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                              <img class="img-responsive" src="img/telas/TelaLocacaoVenda.jpg" style="width:100%"/>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <p><img src="https://paceto.com.br/painel/img/layout/logo/logo.jpg" alt="" class="img-responsive"/></p>
                            <ul class="info-top-2">
                                <li><span class="underline">O Melhor</span> Sistema de Gerenciamento para seu negócio</li>
                                <li><span class="color">Controle seu negócio</span> com facilidade!</li>
                                <li><span class="color">Trabalhe com Agilidade!</span> Aumente suas Vendas & Lucros!</li>
                                <li><span class="color">Relatórios </span> Elaborados!</li>
                                <li>Custo apropriado para a sua empresa. Sem propagandas!</li>
                            </ul>    
                        </div>
                    </div>

            <div class="title text-center">
                <div class="container">
                    <div class="text-center block" style="padding-top:10px">
                        <a class="btn-lg btn-warning" href="https://pacetosoftware.com.br/ManagerSetup.exe?fv={{ rand(0, 10) }}">Baixe Agora Mesmo!</a>
                    </div>
                </div>
            </div>  
                </div>
            </div>
        </div><!--End Top 2-->

        <div class="profit">
            <div class="title text-center">
                <div class="container">
                    <span>Por que Baixar</span> o TGC Manager:
                </div>
            </div> 
            <div class="inner">
                <div class="container">
                    <div class="content">
                        <h2 class="text-center">O sistema lhe <strong>oferece muitos recursos </strong> que lhe permitirá
                            <br>fazer o melhor pelo seu negócio...</h2>

                        <div class="row">
                            <div class="col-md-11 col-lg-11 col-md-offset-1">
                                <ul class="list">
						            <li>Cadastrar <strong>Clientes</strong></li>
                                    <li>Fazer <strong>Vendas e Ordens de Serviço</strong></li>
                                    <li>Efetuar e controlar <strong>pagamentos e recebimento</strong> de Parcelas, Receitas e Despesas</li>
                                    <li>Controlar seu <strong>Caixa</strong></li>
                                    <li>Gerar <strong>Relatórios Gerenciais</strong></li>
                         <!--           <li>Receber <strong>notificações do sistema </strong> onde estiver</li> -->
                                    <li>Controlar <strong>Comissão dos Vendedores</li>
									<li>Consultas das <strong>Vendas e Serviços por situação</strong></li>
									<li>Enviar e receber mensagens internas por meio do Chat</li>
									<li>Efetuar Backup e Restauração dos seus dados</li>
									<li>E Muito Mais Recursos!</li>
                                </ul>    
                            </div>
                        </div>                        
                    </div>
                </div>
            </div> 
            
        </div><!--End Profit-->

        <div class="product">
            <div class="title text-center">
                <div class="container">
                    <div class="text-center block" style="padding-top:10px">
                        <a class="btn-lg btn-warning" href="https://pacetosoftware.com.br/ManagerSetup.exe?fv={{ rand(0, 10) }}">Baixe Agora Mesmo!</a>
                    </div>
                </div>
            </div>  
            <div class="inner">
                <div class="container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="img/telas/TelaLocacaoVenda.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="row list-2">
                            <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                                <img src="https://vmfxa.s3.amazonaws.com/icon5.png" alt=""/>
                                <p>Agilidade <br> Facilidade</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                                <img src="https://vmfxa.s3.amazonaws.com/icon6.png" alt=""/>
                                <p>Faça vendas e ordens de serviço!</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                                <img src="https://vmfxa.s3.amazonaws.com/icon7.png" alt=""/>
                                <p>Multiusuário<br>Terminais Ilimitados</p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-3 text-center">
                                <img src="https://vmfxa.s3.amazonaws.com/icon8.png" alt=""/>
                                <p>Controle suas <br>receitas e despesas!</p>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div><!--End Product-->


        <div class="nothing">
            <div class="title text-center">
                <div class="container">
                    <span>Não se preocupe</span> com surpresas...
                </div>
            </div> 
            <div class="inner">
                <div class="container">
                    <div class="content">
                        
                        <div class="row">
                            <div class="col-md-11 col-lg-11 col-md-offset-1">
                                <ul class="list">
                                    <li>Sem licenças adicionais</li>
                                    <li>Sem propagandas</li>
                                    <li>Sem necessidade de pagamentos futuros!</li>
                                </ul>    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> 
            <div class="title text-center">
                <div class="container">
                    <div class="text-center block" style="padding-top:10px">
                        <a class="btn-lg btn-warning" href="https://pacetosoftware.com.br/ManagerSetup.exe?fv={{ rand(0, 10) }}">Baixe Agora Mesmo!</a>
                    </div>
                </div>
            </div>  
            
        </div><!--End Nothing

        <div class="why-should">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h1 class="text-center">Por que baixar o software de controle <span>TGC Manager?</span></h1>
                        <h3 class="text-center">Nossos clientes conhecem a <strong>praticidade</strong> de um <strong>ótimo software</strong>. Eis algumas razões...</h3>    
                    </div>
                </div>
                
                <div class="info-1">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 text-center">
                            <img class="img-responsive" src="https://vmfxa.s3.amazonaws.com/icon1.png" alt=""/>
                            <h4>Fácil de Usar</h4> 
                            <p>Facilidade nos cadastros, consultas e impressões!</p>   
                        </div>
                        <div class="col-md-3 col-lg-3 text-center">
                            <img class="img-responsive" src="https://vmfxa.s3.amazonaws.com/icon2.png" alt=""/>
                            <h4>Aparência Agradável</h4>
                            <p>Telas preparadas para lhe oferecer um visual otimizado das informações!</p>    
                        </div>
                        <div class="col-md-3 col-lg-3 text-center">
                            <img class="img-responsive" src="https://vmfxa.s3.amazonaws.com/icon3.png" alt=""/>      
                            <h4>Sem Limitações</h4> 
                            <p>Todos os módulos oferecem funcionalidade total! Sem propagandas!</p> 
                        </div>
                        <div class="col-md-3 col-lg-3 text-center">
                            <img class="img-responsive" src="https://vmfxa.s3.amazonaws.com/icon4.png" alt=""/>      
                            <h4>Aumente suas vendas</h4> 
                            <p>Com maior controle você poderá vender mais!</p> 
                        </div>
                    </div>
                </div>

                <h2 class="text-center">
                    Você pode fazer de forma rápida e fácil...
                </h2>

                <div class="row info-2">
                    <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                        <div class="has-border">
                            <p><strong>Cadastrar</strong> Clientes</p>
                            <p><strong>Fazer Locações e Vendas de </strong> Roupas</p>
                            <p><strong>Efetuar e controlar pagamentos de </strong> Parcelas</p>
                            <p><strong>Tirar Telatórios</strong> Gerenciais</p>
                            <p>Receber notificações do sistema onde estiver</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 text-left">
                        <p>Controlar Comissão dos Vendedores</p>
                        <p><strong>Consultas dos Agendamentos de Locação de Roupas</strong></p>
                        <p>Enviar e receber mensagens internas por meio do Chat</p>
                        <p>Efetuar Backup e Restauração dos seus dados</p>
                        <p>E Muito Mais Recursos!</p>
                    </div>
                </div>

                <h2 class="text-center">Tudo Ilimitado <strong>Sem Restrições!</strong></h2>

            </div>
            
        </div><!--End Why should


        <div class="ask">
            <div class="container">
                <h1 class="text-center">Perguntas Frequentes</h1>

                <div class="list-ask">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3><span>Q</span> Is VideoMakerFX a monthly recurring payment to use the system?</h3>
                            <p>Absolutely Not! It's a one-time fee to make unlimited videos and you own full rights to them!</p>   
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3><span>Q</span> Is This Software For My Computer Or Is It Based Online?</h3>
                            <p>This is software that runs on your computer. This way you take advantage of your computer's processing power and you get your videos instantly! And with no monthly fees!</p>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3><span>Q</span> What Are My Rights On Created Videos Exactly?</h3>
                            <p>Unlimited and full. Sell and profit however you like. If you use  other non-bundled images, music, graphics or other elements then you must verify yourself what rights you have to use them, as this content may be copyrighted to other authors.</p>   
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3><span>Q</span> What are the Requirements for VideoMakerFX?</h3>
                            <p>A Windows or Mac System made in the last 5 years works best. Although it works on any machine, rendering and previewing of videos may be slower on older computers.</p>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3><span>Q</span> How Many Computers Does My License Allow To Use?</h3>
                            <p>Each purchased license allows you to use VideoMakerFX on up to 2 computers. So it's perfect for your desktop and laptop,  or for you and your virtual assistant!</p>   
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3><span>Q</span> Do You Provide Training On The Use of VideoMakerFX?</h3>
                            <p>Yes! You will find full training and manuals for use in our fully featured member's area. We show you exactly how to install and use this software.</p>   
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="text-center">
                    <div class="box-instan-access text-center">
                        <!-- <div class="inner-access">
                            Get <span class="underline">Instant ACCESS</span> to VideoMakerFX!
                        </div> 
                        <a href="#access"><img src="https://vmfxa.s3.amazonaws.com/access-btn.png" alt="" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div><!--End ask

        <div class="text-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p>
                            ALL TRADEMARKS AND LOGOS ARE THE PROPERTY OF THEIR RESPECTIVE OWNERS. <br>
                            THIS SITE AND THE PRODUCTS AND SERVICES OFFERED ON THIS SITE ARE NOT ASSOCIATED, <br>AFFILIATED, ENDORSED, OR SPONSORED BY ANY BUSINESS LISTED ON THIS PAGE NOR HAVE <br>THEY BEEN REVIEWED TESTED OR CERTIFIED BY ANY OTHER COMPANY LISTED ON THIS PAGE. 
                        </p>
                    </div>
                </div>
            </div>
        </div>-->

        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <p class="copyright">Copyright 2020 - PACETO Informática - Todos os Direitos Reservados</p>    
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="link-footer text-right">
                            <a href="#">termos de uso</a> -
                            <a href="#">aviso legal </a>-
                            <a href="#">política de privacidade </a>-
                            <a href="#">suporte </a>
                            
                        </div>  
                    </div>
                </div>
            </div>
        </div><!--End footer-->
    </body>
</html>
