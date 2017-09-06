<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
        <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{url('../assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="{{url('../assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
        <link href="{{url('../assets/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
        <link href="{{url('../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
        <link href="{{url('../assets/plugins/css-chart/css-chart.css')}}" rel="stylesheet">
        <!--This page css - Morris CSS -->
        <link href="{{url('../assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="{{url('assets/css/colors/green.css')}}" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-85622565-1', 'auto');
            ga('send', 'pageview');
        </script>
    </head>

    <body class="fix-header fix-sidebar card-no-border">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b>
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span>
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->    
                                <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span> 
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto mt-md-0 ">
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                                <div class="u-text">
                                                    <h4>Steave Jobs</h4>
                                                    <p class="text-muted">varun@gmail.com</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="ti-user"></i> Perfil</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#"><i class="fa fa-power-off"></i> Sair</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Home </span></a>
                            </li>
                            <li>
                                <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="app-calendar.html">Calendar</a></li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Inbox</a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="app-email.html">Mailbox</a></li>
                                            <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                                            <li><a href="app-compose.html">Compose Mail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="app-chat.html">Chat app</a></li>
                                    <li><a href="app-ticket.html">Support Ticket</a></li>
                                    <li><a href="app-contact.html">Contact / Employee</a></li>
                                    <li><a href="app-contact2.html">Contact Grid</a></li>
                                    <li><a href="app-contact-detail.html">Contact Detail</a></li>

                                </ul>
                            </li>
                            <li class="nav-devider"></li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-6 col-8 align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0">SUPORTE</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Suporte</li>
                            </ol>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- Row -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-block">
                                    <div class="m-t-30 text-center"> <img src="https://scontent.fbsb1-1.fna.fbcdn.net/v/t1.0-9/17353356_774468952710114_2293395106280098451_n.jpg?oh=79c787de96ab47ba1165bffdd0d2f85f&oe=5A1E8408" alt="user" class="img-circle" width="150" />
                                        <h4 class="card-title m-t-10">Bruno N. Brito</h4>
                                        <h6 class="card-subtitle">Pixelsquare</h6>
                                    </div>
                                </div>
                                <div>
                                    <hr> </div>
                                <div class="card-block"> <small class="text-muted">Email address </small>
                                    <h6>brunobrito12@hotmail.com</h6> <small class="text-muted p-t-30 db">Telefone</small>
                                    <h6>(62) 99194-1787</h6>
                                    <small class="text-muted p-t-30 db">Social Profile</small>
                                    <br/>
                                    <a href="https://www.facebook.com/SolucoesMobile/" target="_blank" class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/PixelsquareMobi" target="_blank" class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></a>
                                    <!--<a class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></a>-->
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs profile-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Alguns Dados para Contato</a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-3 col-xs-6 b-r"> <strong>Nome Completo</strong>
                                                    <br>
                                                    <p class="text-muted">Bruno N. Brito</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 b-r"> <strong>Celular</strong>
                                                    <br>
                                                    <p class="text-muted">(62) 99194-1787</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">brunobrito12@hotmail.com</p>
                                                </div>
                                                <div class="col-md-3 col-xs-6"> <strong>Localização</strong>
                                                    <br>
                                                    <p class="text-muted">Anápolis</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <p class="m-t-30">Esse Dashboard faz parte do seu site, ela é sua aréa de administração do site. Aqui você pode cadastrar, editar e excluir.</p>
                                            <h4 class="font-medium m-t-30">Skills</h4>
                                            <hr>
                                            <h5 class="m-t-30">HTML 5 <span class="pull-right">80%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h5 class="m-t-30">PHP 7 <span class="pull-right">95%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:95%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h5 class="m-t-30">jQuery <span class="pull-right">50%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                            <h5 class="m-t-30">Photoshop <span class="pull-right">90%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:6px;"> <span class="sr-only">50% Complete</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                    <!-- Row -->
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer"> © 2017 Aréa Administrativa Escola Provisão </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{url('../assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{url('../assets/plugins/bootstrap/js/tether.min.js')}}"></script>
        <script src="{{url('../assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{url('../assets/js/jquery.slimscroll.js')}}"></script>
        <!--Wave Effects -->
        <script src="{{url('../assets/js/waves.js')}}"></script>
        <!--Menu sidebar -->
        <script src="{{url('../assets/js/sidebarmenu.js')}}"></script>
        <!--stickey kit -->
        <script src="{{url('../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
        <!--Custom JavaScript -->
        <script src="{{url('../assets/js/custom.min.js')}}"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <script src="{{url('../assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
        <script src="{{url('../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
        <script src="{{url('../assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <!-- Chart JS -->
        <script src="{{url('../assets/plugins/echarts/echarts-all.js')}}"></script>
        <!-- Flot Charts JavaScript -->
        <script src="{{url('../assets/plugins/flot/excanvas.js')}}"></script>
        <script src="{{url('../assets/plugins/flot/jquery.flot.js')}}"></script>
        <script src="{{url('../assets/plugins/flot/jquery.flot.time.js')}}"></script>
        <script src="{{url('../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{url('../assets/js/dashboard3.js')}}"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="{{url('../assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    </body>

</html>
