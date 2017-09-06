@extends('site.template.template')
@section('content')
<!--main starts-->
<div id="main">
    <!--breadcrumb-section starts-->
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Contato</h1>
            <div class="breadcrumb">
                <a href="{{route('home')}}">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Contato</span>
            </div>
        </div>
    </div>
    <!--breadcrumb-section ends-->
    <!--container starts-->
    <div class="container">
        <!--primary starts-->
        <section id="primary" class="content-full-width">
            <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3829.0835631733576!2d-48.9622373!3d-16.318673999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ea38ac5c5ef73%3A0xb50ab3d8999c809a!2sR.+Mau%C3%A1+-+Nossa+Sra.+Aparecida%2C+An%C3%A1polis+-+GO!5e0!3m2!1spt-BR!2sbr!4v1434657919926" width="100%" height="400" frameborder="0" style="border:1px solid #ddd; background:#fff; padding:5px;"></iframe></div>

            <div class="dt-sc-hr"> </div>

            <!--dt-sc-two-third starts-->
            <div class="column dt-sc-three-fourth first contact_form_outer">
                <form name="frcontact" class="contact-form" method="post" action="php/contactmail.php">
                    <h2>Gostaríamos de ouvir de você!</h2>
                    <p class="column dt-sc-one-third first">
                        <input id="name" name="txtname" type="text" placeholder="Nome" required="">
                    </p>
                    <p class="column dt-sc-one-third">
                        <input id="email" name="txtemail" type="email" placeholder="Email" required="">
                    </p>
                    <p class="column dt-sc-one-third">
                        <input id="subject" name="txtsubject" type="text" placeholder="Assunto" required="">
                    </p>
                    <p>
                        <textarea id="comment" name="txtmessage" placeholder="Mensagem"></textarea>
                    </p>
                    <div id="ajax_contact_msg"> </div>
                    <p>
                        <input name="submit" type="submit" id="submit" class="dt-sc-button medium" value="Enviar Email">
                    </p>
                </form>
            </div>
            <!--dt-sc-two-third ends-->

            <!--dt-sc-one-third starts-->
            <div class="column dt-sc-one-fourth-contact">
                <h2>Enviar uma Mensagem</h2>
                <p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span>Rua Mauá , Nº 974, Setor Central ,<br>Anápolis - GO</p>
                <p class="dt-sc-contact-info"><span class="fa fa fa-phone"></span>(62) 33324-9583</p>
                <p class="dt-sc-contact-info"><span class="fa fa fa-mobile-phone"></span>+91 12345 67890</p>
                <p class="dt-sc-contact-info"><span class="fa fa-envelope"></span>contato@escolaevangelicaprovisao.com.br<br>escolaevangelicaprovisao@gmail.com</p>
                <p class="dt-sc-contact-info"><span class="fa fa-facebook"></span><a href="https://www.facebook.com/escolaevangelicaprovisao/" target="_blank">facebook.com/escolaevangelicaprovisao/</a></p>
                <p class="dt-sc-contact-info"><span class="fa fa-twitter"></span><a href="https://www.instagram.com/escolaevangelicaprovisao/" target="_blank">instagram.com/escolaevangelicaprovisao</a></p>
            </div>
            <!--dt-sc-one-third ends-->

        </section>
        <!--primary ends-->
    </div>
    <!--container ends-->
</div>
<!--main ends-->

@endsection