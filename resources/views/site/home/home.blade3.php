@extends('site.template.template')
@section('content')
<!--slider starts-->
<div id="slider"> 
    <div id="layerslider_4" class="ls-wp-container" style="width:100%;height:610px;max-width:1920px;margin:0 auto;margin-bottom: 0px;">
        <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
            <img src="{{url('images/layerslider-gallery/bg3.jpg')}}" class="ls-bg" alt="Slide background" />
            <img class="ls-l" style="top:120px;left:530px;white-space: nowrap;" data-ls="offsetxin:0;delayin:800;easingin:easeOutElastic;skewxin:30;skewyin:30;transformoriginin:50% 0% 50%;offsetxout:0;parallaxlevel:1;" src="{{url('images/layerslider-gallery/bring.png')}}" alt="">
            <img class="ls-l" style="top:420px;left:-430px;z-index:100;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:80;delayin:500;offsetxout:0;offsetyout:-80;" src="{{url('images/layerslider-gallery/grass.png')}}" alt="">
            <img class="ls-l" style="top:185px;left:530px;white-space: nowrap;" data-ls="offsetxin:2;delayin:1000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-1;" src="{{url('images/layerslider-gallery/fun.png')}}" alt="">
            <img class="ls-l" style="top:252px;left:507px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;" src="{{url('images/layerslider-gallery/two.png')}}" alt="">
            <img class="ls-l" style="top:250px;left:571px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:3;" src="{{url('images/layerslider-gallery/fun.png')}}" alt="">
            <img class="ls-l" style="top:355px;left:518px;white-space: nowrap;" data-ls="delayin:2500;parallaxlevel:-2;" src="{{url('images/layerslider-gallery/cup-divider.png')}}" alt="">
            <img class="ls-l" style="top:405px;left:509px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-100;delayin:3000;offsetxout:0;offsetyout:100;parallaxlevel:3;" src="{{url('images/layerslider-gallery/a-trendy-kids.png')}}" alt="">
            <img class="ls-l" style="top:220px;left:370px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2000;easingin:swing;offsetxout:0;offsetyout:-150;parallaxlevel:3;" src="{{url('images/layerslider-gallery/boy1.png')}}" alt="">
            <img class="ls-l" style="top:42px;left:173px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2200;easingin:easeInOutBack;offsetxout:0;offsetyout:-150;parallaxlevel:-4;" src="{{url('images/layerslider-gallery/girl2.png')}}" alt="">
            <img class="ls-l" style="top:70px;left:-59px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2700;easingin:easeInBack;offsetxout:0;offsetyout:-150;parallaxlevel:5;" src="{{url('images/layerslider-gallery/girl1.png')}}" alt="">
            <img class="ls-l" style="top:55px;left:740px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2300;easingin:easeOutQuart;offsetxout:0;offsetyout:-150;parallaxlevel:3;" src="{{url('images/layerslider-gallery/boy2.png')}}" alt="">
            <img class="ls-l" style="top:85px;left:955px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:2500;offsetxout:0;offsetyout:-150;parallaxlevel:4;" src="{{url('images/layerslider-gallery/boy3.png')}}" alt="">
        </div>
        <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
            <img src="{{url('images/layerslider-gallery/black-board.jpg')}}" class="ls-bg" alt="Slide background" />
            <img class="ls-l" style="top:35px;left:678px;white-space: nowrap;" data-ls="offsetxout:180;" src="{{url('images/layerslider-gallery/school-kid.png')}}" alt="">
            <img class="ls-l" style="top:23px;left:998px;white-space: nowrap;" data-ls="delayin:1500;scaleyin:3;transformoriginin:0% 50% 0;parallaxlevel:2;" src="{{url('images/layerslider-gallery/b-cloud.png')}}" alt="">
            <img class="ls-l" style="top:67px;left:679px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:-100;delayin:2000;rotateyin:30;parallaxlevel:5;" src="{{url('images/layerslider-gallery/b-swirl.png')}}" alt="">
            <img class="ls-l" style="top:78px;left:50px;white-space: nowrap;" data-ls="offsetxin:-200;delayin:2000;" src="{{url('images/layerslider-gallery/b-comment.png')}}" alt="">
            <img class="ls-l" style="top:137px;left:98px;white-space: nowrap;" data-ls="delayin:2500;rotateyin:30;" src="{{url('images/layerslider-gallery/welcome-text.png')}}" alt="">
            <img class="ls-l" style="top:222px;left:96px;white-space: nowrap;" data-ls="delayin:3000;rotateyin:30;" src="{{url('images/layerslider-gallery/text-desc.png')}}" alt="">
            <img class="ls-l" style="top:397px;left:105px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:3500;offsetxout:0;offsetyout:150;" src="{{url('images/layerslider-gallery/purchase-theme.png')}}" alt="">
            <img class="ls-l" style="top:395px;left:297px;white-space: nowrap;" data-ls="delayin:3700;" src="{{url('images/layerslider-gallery/b-tick.png')}}" alt="">
            <img class="ls-l" style="top:421px;left:100px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:200;delayin:4000;offsetxout:0;offsetyout:150;" src="{{url('images/layerslider-gallery/chalk-effect.png')}}" alt="">
            <img class="ls-l" style="top:30px;left:2px;white-space: nowrap;" data-ls="delayin:3100;rotateyin:90;parallaxlevel:3;" src="{{url('images/layerslider-gallery/b-game.png')}}" alt="">
            <img class="ls-l" style="top:498px;left:13px;white-space: nowrap;" data-ls="offsetxin:-100;delayin:3500;parallaxlevel:4;" src="{{url('images/layerslider-gallery/b-bulb.png')}}" alt="">
            <img class="ls-l" style="top:524px;left:507px;white-space: nowrap;" data-ls="delayin:2300;rotateyin:180;parallaxlevel:-3;" src="{{url('images/layerslider-gallery/b-glass.png')}}" alt="">
        </div>
        <div class="ls-slide" data-ls="slidedelay:7000; transition2d: all;">
            <img src="{{url('images/layerslider-gallery/bg2.jpg')}}" class="ls-bg" alt="Slide background" />
            <img class="ls-l" style="top:25px;left:763px;white-space: nowrap;" data-ls="offsetxin:0;delayin:500;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:1;" src="{{url('images/layerslider-gallery/boom.png')}}" alt="">
            <img class="ls-l" style="top:247px;left:731px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1000;rotateyin:180;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-2;" src="{{url('images/layerslider-gallery/awesome-gallery.png')}}" alt="">
            <img class="ls-l" style="top:259px;left:888px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1500;rotateyin:90;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:4;" src="{{url('images/layerslider-gallery/parallax-bg.png')}}" alt="">
            <img class="ls-l" style="top:402px;left:758px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2000;rotateyin:100;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:3;" src="{{url('images/layerslider-gallery/creative-design.png')}}" alt="">
            <img class="ls-l" style="top:411px;left:935px;white-space: nowrap;" data-ls="offsetxin:0;delayin:1700;rotateyin:120;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:2;" src="{{url('images/layerslider-gallery/mega-menu.png')}}" alt="">
            <img class="ls-l" style="top:15px;left:1095px;transform:rotate(100deg); -ms-transform:rotate(100deg); /* IE 9 */ -webkit-transform:rotate(100deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:700;parallaxlevel:4;" src="{{url('images/layerslider-gallery/common-swirl.png')}}" alt="">
            <img class="ls-l" style="top:133px;left:686px;transform:rotate(50deg); -ms-transform:rotate(50deg); /* IE 9 */ -webkit-transform:rotate(50deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;rotatexin:30;rotateyin:30;parallaxlevel:3;" src="{{url('images/layerslider-gallery/common-swirl.png')}}" alt="">
            <img class="ls-l" style="top:516px;left:705px;transform:rotate(-50deg); -ms-transform:rotate(-50deg); /* IE 9 */ -webkit-transform:rotate(-50deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:1800;rotatexin:30;rotateyin:30;parallaxlevel:2;" src="{{url('images/layerslider-gallery/common-swirl.png')}}" alt="">
            <img class="ls-l" style="top:229px;left:1069px;transform:rotate(-90deg); -ms-transform:rotate(-90deg); /* IE 9 */ -webkit-transform:rotate(-90deg); /* Opera, Chrome, and Safari */ ;white-space: nowrap;" data-ls="offsetxin:0;delayin:2500;rotatexin:30;rotateyin:30;parallaxlevel:3;" src="{{url('images/layerslider-gallery/common-swirl.png')}}" alt="">
            <img class="ls-l" style="top:123px;left:1123px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:150;delayin:3000;rotateyin:100;offsetxout:0;offsetyout:-100;parallaxlevel:-4;" src="{{url('images/layerslider-gallery/star-2.png')}}" alt="">
            <img class="ls-l" style="top:0px;left:0px;white-space: nowrap;" data-ls="delayin:1200;rotatexin:200;rotateyin:200;parallaxlevel:5;" src="{{url('images/layerslider-gallery/aplus.png')}}" alt="">
            <img class="ls-l" style="top:92px;left:-52px;white-space: nowrap;" data-ls="offsetxin:0;offsetyin:90;delayin:2000;rotatexin:100;rotateyin:100;offsetyout:-90;parallaxlevel:1;" src="{{url('images/layerslider-gallery/swirl-3.png')}}" alt="">
            <img class="ls-l" style="top:197px;left:-9px;white-space: nowrap;" data-ls="delayin:800;rotatexin:200;rotateyin:200;parallaxlevel:3;" src="{{url('images/layerslider-gallery/swirl-2.png')}}" alt="">
            <img class="ls-l" style="top:275px;left:-122px;white-space: nowrap;" data-ls="offsetxin:0;delayin:3000;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:-2;" src="{{url('images/layerslider-gallery/cap.png')}}" alt="">
            <img class="ls-l" style="top:394px;left:-30px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2700;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:1;" src="{{url('images/layerslider-gallery/apple.png')}}" alt="">
            <img class="ls-l" style="top:35px;left:555px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2200;rotatexin:90;rotateyin:90;offsetxout:0;parallaxlevel:2;" src="{{url('images/layerslider-gallery/swirl-4.png')}}" alt="">
            <img class="ls-l" style="top:395px;left:758px;white-space: nowrap;" data-ls="offsetxin:0;delayin:3200;scalexin:4;scaleyin:4;offsetxout:0;parallaxlevel:-2;" src="{{url('images/layerslider-gallery/common-star.png')}}" alt="">
            <img class="ls-l" style="top:366px;left:1067px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2100;scalexin:2;scaleyin:2;offsetxout:0;parallaxlevel:1;" src="{{url('images/layerslider-gallery/common-star.png')}}" alt="">
            <img class="ls-l" style="top:444px;left:1100px;white-space: nowrap;" data-ls="offsetxin:0;delayin:2400;scalexin:3;scaleyin:3;offsetxout:0;parallaxlevel:-1;" src="{{url('images/layerslider-gallery/common-star.png')}}" alt="">
            <img class="ls-l" style="top:561px;left:955px;white-space: nowrap;" data-ls="offsetxin:0;durationin:1500;delayin:3600;scalexin:6;scaleyin:6;offsetxout:0;parallaxlevel:-2;" src="{{url('images/layerslider-gallery/common-star.png')}}" alt="">
        </div>
    </div>
</div>
<!--slider ends-->
<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--container starts-->
    <div class="container">

        <div class="dt-sc-one-fourth column first">
            <div class="dt-sc-ico-content type1">
                <div class="icon">
                    <span class="icon-outer">
                        <img src="{{url('images/ballet.jpg')}}" alt="" title="">
                    </span>
                </div>
                <h4><a href="javascript:void(0)">Ballet</a></h4>
                <p>Nome dado ao estilo de dança onde os princípios básicos são: postura ereta; uso do en dehors (rotação externa dos membros inferiores), verticalidade corporal; disciplina; leveza, harmonia e simetria.</p>
            </div>
        </div>

        <div class="dt-sc-one-fourth column">
            <div class="dt-sc-ico-content type1">
                <div class="icon">
                    <span class="icon-outer">
                        <img src="{{url('images/judo.jpg')}}" alt="" title="">
                    </span>
                </div>
                <h4><a href="javascript:void(0)">Judô</a></h4>
                <p>Decor ostdcaer urabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
            </div>
        </div>

        <div class="dt-sc-one-fourth column">
            <div class="dt-sc-ico-content type1">
                <div class="icon">
                    <span class="icon-outer">
                        <img src="{{url('images/ingles.jpg')}}" alt="" title="">
                    </span>
                </div>
                <h4><a href="javascript:void(0)">Inglês</a></h4>
                <p>Rabitur ultrices posuere mattis. Nam ullamcorper, diam sit  euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl gedretu osterftra ligula</p>
            </div>
        </div>

        <div class="dt-sc-one-fourth column">
            <div class="dt-sc-ico-content type1">
                <div class="icon">
                    <span class="icon-outer">
                        <img src="{{url('images/xadrez.jpg')}}" alt="" title="">
                    </span>
                </div>
                <h4><a href="javascript:void(0)">Xadrez</a></h4>
                <p>Curabitur ultrices posuere mattis. Nam ullamcorper, diam sit amet euismod pelleo ntesque, eros risus rhoncus libero, invest tibulum nisl ligula</p>
            </div>
        </div>

    </div>
    <!--container ends-->
    <div class="dt-sc-hr"></div>
    <!--fullwidth-background starts-->
    <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">
        <!--container starts-->
        <div class="container">
            <!--dt-sc-one-half starts-->
            <div class="dt-sc-one-half column first">
                <h2>Nossas Instalações</h2>
                <!--dt-sc-one-half starts-->
                <div class="dt-sc-one-half column first">

                    <div class="dt-sc-ico-content type2">
                        <div class="icon"> 
                            <span class="fa fa-glass"> </span> 
                        </div>
                        <h4><a href="#" target="_blank"> Brinquedoteca </a></h4>
                        <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                    </div>
                    <div class="dt-sc-hr-very-small"></div>
                    <div class="dt-sc-ico-content type2">
                        <div class="icon"> 
                            <span class="fa fa-pencil"> </span> 
                        </div>
                        <h4><a href="#" target="_blank"> Piscina </a></h4>
                        <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                    </div>
                    <div class="dt-sc-hr-very-small"></div>
                    <div class="dt-sc-ico-content type2">
                        <div class="icon"> 
                            <span class="fa fa-bullseye"> </span> 
                        </div>
                        <h4><a href="#" target="_blank"> Parque infantil </a></h4>
                        <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                    </div>

                </div>
                <!--dt-sc-one-half ends-->

                <!--dt-sc-one-half starts-->
                <div class="dt-sc-one-half column">

                    <div class="dt-sc-ico-content type2">
                        <div class="icon"> 
                            <span class="fa fa-tachometer"> </span> 
                        </div>
                        <h4><a href="#" target="_blank"> Ampla área de lazer </a></h4>
                        <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                    </div>
                    <div class="dt-sc-hr-very-small"></div>
                    <div class="dt-sc-ico-content type2">
                        <div class="icon"> 
                            <span class="fa fa-magic"> </span> 
                        </div>
                        <h4><a href="#" target="_blank"> Sala de vídeo </a></h4>
                        <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                    </div>
                    <div class="dt-sc-hr-very-small"></div>
                    <div class="dt-sc-ico-content type2">
                        <div class="icon"> 
                            <span class="fa fa-music"> </span> 
                        </div>
                        <h4><a href="#" target="_blank"> 10 Salas com Ventiladores </a></h4>
                        <p>Nam ullamcorper, diam sit amet euismod pelleontesque, eros risus rhoncus libero, inst tibulum nisl ligula....</p>
                    </div>

                </div>
                <!--dt-sc-one-half ends-->
            </div>
            <!--dt-sc-one-half ends-->

            <!--dt-sc-one-half starts-->
            <div class="dt-sc-one-half column">
                <h2>Instalações da Escola!</h2>
                <div class="add-slider-wrapper">
                    <ul class="add-slider">
                        <li> <img src="http://escolaprovisao.com.br/arquivos/1419/51081.jpg" alt="" title=""> </li>
                        <li> <img src="http://escolaprovisao.com.br/arquivos/1419/51083.jpg" alt="" title=""> </li>
                        <li> <img src="http://escolaprovisao.com.br/arquivos/1419/51082.jpg" alt="" title=""> </li>
                    </ul>
                </div>
            </div>
            <!--dt-sc-one-half ends-->
        </div>
        <!--container ends-->
    </section>
    <!--fullwidth-background ends-->
    <div class="dt-sc-hr"></div>
    <!--container starts-->
    <div class="container">
        <h2 class="dt-sc-hr-green-title">Galeria de Fotos</h2>

        <!--portfolio-content starts-->
        <div class="front-portfolio-container">
            <div class="portfolio-content portfolio-content1">
                <div class="front-portfolio">
                    <div class="portfolio-outer">
                        <div class="portfolio-thumb">
                            <img src="http://dtkidslife.wpengine.com/wp-content/uploads/2014/12/image7.jpg" alt="" title="">
                            <div class="image-overlay">
                                <h5><a href="portfolio-detail.html">Titulo 1</a></h5>
                                <a href="http://dtkidslife.wpengine.com/wp-content/uploads/2014/12/image7.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-content portfolio-content2">
                <div class="front-portfolio">
                    <div class="portfolio-outer">
                        <div class="portfolio-thumb">
                            <img src="http://dtkidslife.wpengine.com/wp-content/uploads/2014/12/image6.jpg" alt="" title="">	
                            <div class="image-overlay">
                                <h5><a href="portfolio-detail.html">Titulo 2</a></h5>
                                <a href="http://dtkidslife.wpengine.com/wp-content/uploads/2014/12/image6.jpg" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-content portfolio-content3">
                <div class="front-portfolio">
                    <div class="portfolio-outer">
                        <div class="portfolio-thumb">
                            <img src="http://placehold.it/1170x1016" alt="" title="">
                            <div class="image-overlay">
                                <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-content portfolio-content4">
                <div class="front-portfolio">
                    <div class="portfolio-outer">
                        <div class="portfolio-thumb">
                            <img src="http://placehold.it/1170x1016" alt="" title="">
                            <div class="image-overlay">
                                <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-content portfolio-content5">
                <div class="front-portfolio">
                    <div class="portfolio-outer">
                        <div class="portfolio-thumb">
                            <img src="http://placehold.it/1170x1016" alt="" title="">
                            <div class="image-overlay">
                                <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-content portfolio-content6">
                <div class="front-portfolio">
                    <div class="portfolio-outer">
                        <div class="portfolio-thumb">
                            <img src="http://placehold.it/1170x1016" alt="" title="">
                            <div class="image-overlay">
                                <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-content portfolio-content7">
                <div class="front-portfolio">
                    <div class="portfolio-outer">
                        <div class="portfolio-thumb">
                            <img src="http://placehold.it/1170x1016" alt="" title=""> 		
                            <div class="image-overlay">
                                <h5><a href="portfolio-detail.html">Gifts at Large</a></h5>
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="http://placehold.it/1170x1016" data-gal="prettyPhoto[gallery]" class="zoom"><span class="fa fa-search"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dt-sc-hr-small"></div>
            <div class="aligncenter">
                <a href="#" class="dt-sc-button medium mustard"> Ver Toda a Galeria <span class="fa fa-chevron-circle-right"> </span></a>        
            </div>
        </div>

        <!--front-portfolio-container ends-->

    </div>
    <!--container ends-->
    <div class="dt-sc-hr"></div>
</section>
<!--primary ends-->
@endsection