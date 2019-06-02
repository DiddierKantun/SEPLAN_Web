<?php

class layout{

    private static $instancia;
    private function __construct(){ 

    }

    public static function getlayout()
    {
        if (!(self::$instancia instanceof self)) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public function _Clone()
    {
        trigger_error('La clonacion de este objeto no esta permitida', E_USER_ERROR);
    }

    public function generateCSS(){

        $css = '<base href="public/">
        <link href="assets/css/jquery.fancybox.css?v=2.1.5" rel="stylesheet">
        <link href="assets/css/helpers/jquery.fancybox-buttons.css?v=1.0.5" rel="stylesheet">
        <link href="assets/css/helpers/jquery.fancybox-thumbs.css?v=1.0.7" rel="stylesheet">
        <link href="assets/css/flexslider.css" rel="stylesheet">
        <link href="assets/css/animations.min.css" rel="stylesheet">
        <link href="assets/css/carousel.css" rel="stylesheet">
        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="rs-plugin/css/settings.css" rel="stylesheet" media="screen" />
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link href="assets/css/vertical-xc.min.css" rel="stylesheet">';

        return $css;
    }

    private function generateJS(){

        $js = '<script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/scrolling-nav.js"></script>
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/cbpAnimatedHeader.min.js"></script>
        <script src="assets/js/appear.min.js" type="text/javascript"></script>
        <script src="assets/js/animations.min.js" type="text/javascript"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script src="assets/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script src="assets/js/jquery.fancybox-media.js?v=1.0.6"></script>
        <script src="assets/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script src="assets/js/jquery.flexslider.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/jquery.form.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="assets/js/map.grey.js"></script>
        <script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.parallax-1.1.3.js"></script>
        <script src="assets/js/jquery.countTo.js" type="text/javascript"></script>
        <script src="assets/js/SmoothScroll.js"></script>
        <script src="assets/js/lazy-bootstrap-carousel-v3.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="assets/js/main.js" type="text/javascript"></script>';

        return $js;
    }

    public function generateHeader(){

        $font = "<link href=' http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>";
        $header = '<!DOCTYPE html>
        <html lang="en" class="no-js">

        <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no" />
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SEPLAN</title>
        <!-- Google Fonts -->
        '.$font.'
        '.$this->generateCSS().'
        </head>';

        return $header;
    }

    public function generateNavbar(){

        $navbar = '  <!-- Navigation -->
        <nav class="navbar mega-menu navbar-fixed-top nav-height" role="navigation">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <!-- Dropdown Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INICIO</a>
                    <ul class="dropdown-menu">
                    <li><a href="../index.php"><i class="fa fa-plus-circle"></i> Página principal</a></li>
                    </ul>
                </li> <!-- /.dropdown -->
                <!-- Dropdown Menu End -->

                <!-- Dropdown Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONSEJOS</a>
                    <ul class="dropdown-menu">
                    <li><a href="../consejos.php"><i class="fa fa-plus-circle"></i> Consejos</a></li>
                    </ul>
                </li> <!-- /.dropdown -->
                <!-- Dropdown Menu End -->

                <!-- Dropdown Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">EVALUACIÓN</a>
                    <ul class="dropdown-menu">
                    <li><a href="../evaluacion.php"><i class="fa fa-plus-circle"></i> Evaluación</a></li>
                    </ul>
                </li> <!-- /.dropdown -->
                <!-- Dropdown Menu End -->

                <!-- Dropdown Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">NUESTROS SISTEMAS</a>
                    <ul class="dropdown-menu">
                    <li><a href="../nuestros_sistemas.php"><i class="fa fa-plus-circle"></i> Nuestros sistemas</a></li>
                    </ul>
                </li> <!-- /.dropdown -->
                <!-- Dropdown Menu End -->

                <!-- Dropdown Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">TRANSPARENCIA</a>
                    <ul class="dropdown-menu">
                    <li><a href="../transparencia.php"><i class="fa fa-plus-circle"></i> Transparencia</a></li>
                    </ul>
                </li> <!-- /.dropdown -->
                <!-- Dropdown Menu End -->

                <!-- Dropdown Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">NOTICIAS</a>
                    <ul class="dropdown-menu">
                    <li><a href="../noticias.php"><i class="fa fa-plus-circle"></i> Noticias</a></li>
                    </ul>
                </li> <!-- /.dropdown -->
                <!-- Dropdown Menu End -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- navbar-end -->';

        return $navbar;
    }

    public function generateFooter(){

        $footer = '<!--Footer Begins-->
        <footer>       
            <!--Footer Bottom-->
            <section id="footer">
            <div class="container">
                <div class="row">
                <!-- CopyRight Text -->
                <div class="col-md-6 col-sm-6">
                    <div class="copy-footer">
                    <img src="assets/img/seplan/logo_seplan_blanco.png" alt="">
                    <p align="left">Calle 20-A número 284 entre 3-C y 49 diagonal, Colonia Xcumpich<br>
                    C.P. 97204, Mérida, Yucatán, México.<br>
                    Tel. (999) 611 80 10 Ext. 47004</p>
                    </div>
                </div>
                <!-- Social Icons -->
                <div class="col-md-6 col-sm-6">
                    <div class="text-center" style="color: white">
                    <ul>
                        <p>Siguenos en:</p>
                        <h6>/SeplanYucatan</h6>               
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <h6>@Seplan_yucatan</h6>
                        <li><a href="#"><i class="fa fa-twitter">155,903</i></a></li>               
                    </ul>
                    </div>
                </div>

                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
            </section>
        </footer>
        '.$this->generateJS().'';

        return $footer;
    }

    public function getPage(){

        return $this->generateHeader();
    }
}

?>