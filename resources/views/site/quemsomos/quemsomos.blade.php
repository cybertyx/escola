@extends('site.template.template')
@section('content')
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Quem Somos</h1>
            <div class="breadcrumb">
                <a href="{{route('home')}}">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Quem Somos</span>
            </div>
        </div>
    </div>
    <!--breadcrumb-section ends-->
    <!--container starts-->
    <div class="container">
        <!--primary starts-->
        <section id="primary" class="content-full-width">

            <div class="column dt-sc-one-half first">
                <div class="about-slider-wrapper">
                    <ul class="about-slider">
                        <!--<li> <img src="http://placehold.it/1170x538" alt="" title=""> </li>-->
                        <li> <img src="{{url('images/imgQuemsomos/about-slider1.jpg')}}" alt="" title=""> </li>
                        <li> <img src="{{url('images/imgQuemsomos/about-slider2.jpg')}}" alt="" title=""> </li>
                        <li> <img src="{{url('images/imgQuemsomos/about-slider3.jpg')}}" alt="" title=""> </li>
                    </ul>
                </div>	
            </div>

            <!--dt-sc-one-half starts-->
            <div class="column dt-sc-one-half">                  
                <h2>Nossa História</h2>

                <p>A Escola Evangélica Provisão foi fundada no ano de 2001, A escola conta com uma equipe de 21 profissionais, todos altamente qualificados e experientes para elaborar e desenvolver os assuntos abordados.</p>
                <p>A Escola Evangélica Provisão visa não só formar alunos, mas também personagens éticos. Cabe a escola formar cidadãos críticos, reflexivos, autônomos, conscientes de seus direitos e deveres, capazes de compreender a realidade em que vivem preparados para participar da vida econômica, social e política do país e aptos a contribuir para a construção de uma sociedade mais justa. A função básica da escola é garantir a aprendizagem de conhecimentos, habilidades e valores necessários à socialização do indivíduo.</p>
<!--                <a href="#" class="dt-sc-button small read-more"> Read More <span class="fa fa-chevron-circle-right"> </span></a>   -->
            </div> 
            <!--dt-sc-one-half ends-->

            <div class="dt-sc-hr"></div>

            <!--dt-sc-one-half starts-->
            <div class="dt-sc-one-half column first">
                <h2>Fundadores da Escola</h2> 
                <div class="author-details">
                    <div class="author-thumb">
                        <img class="item-mask" src="images/author-hexa-bg.png" alt="" title="">
                        <img src="{{url('images/fundadores.jpg')}}" alt="" title="">
                    </div>
                    <div class="author-description">
                        <h5><a href="">Pr. Paulinho / Pra. Marcia</a></h5>
                        <span class="author-role">Gestores</span>
<!--                        <a href="#" class="students-count"><span class="fa fa-user"></span> 25 STUDENTS</a>
                        <div class="rating-review">
                            <span class="author-rating rating-4"></span> <a href="#">2 reviews</a>
                        </div>-->
                        <p>Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. Sed cursus ipsum vitae justo scelerisque, ac viverra tellus eleifend. Etiam interdum justo nunc, ac volutpat erat elementum id. Fusce dapibus mauris ac dictum porta. Sed pretium luctus elementum. In sollicitudin felis semper purus imperdiet lobortis. In odio tellus, rhoncus eget dolor in, </p>
                    </div>
                </div>
            </div> 
            <!--dt-sc-one-half ends--> 
            <!--dt-sc-one-half starts-->
            <div class="dt-sc-one-half column"> 
                <h2>Algumas Palavras dos Pais</h2>
                <div class="dt-sc-testimonial-carousel-wrapper">
                    <ul class='dt-sc-testimonial-carousel'> 
                        <li style="height: 250px;">
                            <div class='dt-sc-testimonial'>
                                <blockquote><q>Sempre quis que meu filho estudasse numa escola em que eu pudesse confiar. Agora que encontrei, estou muito satisfeito!</q></blockquote>
                                <div class='author'>
                                    <img src="http://lorempixel.com/output/people-q-c-70-70-3.jpg" alt="" title="">
                                </div>
                                <div class="author-meta">
                                    <p> Otaviano Bispo </p>
                                    <img src="{{url('images/rating3.png')}}" alt="" title="">
                                    <span>&nbsp;</span>
                                </div>        
                            </div>
                        </li>
                        <li>
                            <div class='dt-sc-testimonial'>
                                <blockquote><q>Minha filha acorda animada para ir a escola, e traz a cada dia uma nova descoberta. Eu e minha esposa, estamos muito contentes com o resultado.</q></blockquote>
                                <div class='author'>
                                    <img src="http://lorempixel.com/output/people-q-c-70-70-5.jpg" alt="" title="">
                                </div>
                                <div class="author-meta">
                                    <p> Cristiano Duarte </p>
                                    <img src="{{url('images/rating4.png')}}" alt="" title="">
                                    <span>&nbsp;</span>
                                </div>        
                            </div>
                        </li>
                        <li>
                            <div class='dt-sc-testimonial'>
                                <blockquote><q>Aqui, na Escola Evangélica Provisão, eu tenho a segurança de que meu filho terá a base que precisa para ter um futuro brilhante.</q></blockquote>
                                <div class='author'>
                                    <img src="http://lorempixel.com/output/people-q-c-70-70-1.jpg" alt="" title="">
                                </div>
                                <div class="author-meta">
                                    <p> Georgia Miranda </p>
                                    <img src="{{url('images/rating5.png')}}" alt="" title="">
                                    <span>&nbsp;</span>
                                </div>        
                            </div>
                        </li>
                    </ul>
                    <div class="carousel-arrows">	
                        <a href="#" class="testimonial-prev"><span class="fa fa-angle-left"></span></a>	
                        <a href="#" class="testimonial-next"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>      
            <!--dt-sc-one-half ends--> 

            <div class="dt-sc-hr"></div>

            <h2 class="dt-sc-hr-green-title">Nossos Professores</h2>
            <div class="column dt-sc-one-fourth first">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="{{url('images/marcia.jpg')}}" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Marcia S. Ferreira </h4>
                        <h6> Gestora </h6>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="http://placehold.it/381x331" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Linda Glendell </h4>
                        <h6> Teaching Professor </h6>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="http://placehold.it/381x331" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Kate Dennings </h4>
                        <h6> Children Diet </h6>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="http://placehold.it/381x331" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Kristof Slinghot </h4>
                        <h6> Management </h6>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth first">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="http://placehold.it/381x331" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Jack Daniels </h4>
                        <h6> Senior Supervisor </h6>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="http://placehold.it/381x331" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Linda Glendell </h4>
                        <h6> Teaching Professor </h6>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="http://placehold.it/381x331" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Kate Dennings </h4>
                        <h6> Children Diet </h6>
                    </div>
                </div>
            </div>
            <div class="column dt-sc-one-fourth">
                <div class="dt-sc-team">	
                    <div class="image">
                        <img class="item-mask" src="images/mask.png" alt="" title="">
                        <img src="http://placehold.it/381x331" alt="" title="">
                    </div>
                    <div class="team-details">
                        <h4> Kristof Slinghot </h4>
                        <h6> Management </h6>
                    </div>
                </div>
            </div>

            <div class="dt-sc-hr"></div>
        </section>
        <!--primary ends-->
    </div>
    <!--container ends-->
</div>
<!--main ends-->
@endsection