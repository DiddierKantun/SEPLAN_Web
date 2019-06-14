<?php
include_once("layout/layout.php");
include_once("contenedor_noticias.php");
$tmp = layout::getlayout();
echo $tmp->getPage();
?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!--Preloader-->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <?php
    echo $tmp->generateNavbar();
    ?>

    <section id="section-page-header" class="grid-block" style="background-image: url('assets/img/seplan/noticias.jpg'); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Heading-->
                    <h1 style="color: white;font-weight: bold;">NOTICIAS</h1>
                </div>
                <!--Breadcrumb-->
                <div class="col-md-4">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="../index.php">INICIO</a></li>
                            <li><a href="../noticias.php">NOTICIAS</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
    </section>

    <!-- Shadow Element -->
    <section id="box-shadow-bottom"> </section>


    <!--Section Blog-news-->
    <section class="page-section-top-alt-np pb-135 pb-md-90 pb-sm-65" id="section-news-alt">
        <div class="container">


            <div class="row">
                <!-- Blog-news 1 -->
                <div class="row-same-height row-full-height">
                    <div class="col-md-9 col-md-height col-full-height">
                        <?php
                        include_once("contenedor_noticias.php");
                        echo contenedor_noticias::GenerateNotices(3);
                        ?>
                        <!--/.panel-->
                    </div>
                    <!--/.col-->

                    <!-- Blog-news 2 -->
                    <div class="row-same-height row-full-height">
                        <div class="col-md-9 col-md-height col-full-height">
                            <div class="panel">
                                <div class="panel-body">
                                    <h5 class="text-left">FACEBOOK</h5>
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3"></script>
                                    <div class="fb-page" data-href="https://www.facebook.com/SeplanYucatan/" data-tabs="timeline" data-width="200" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/SeplanYucatan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/SeplanYucatan/">Secretaría Técnica de Planeación y Evaluación de Yucatán</a></blockquote>
                                    </div>
                                </div>
                                <!--/.panel-body-->
                                <div class="panel-footer post-buttons-area text-left">

                                </div>
                            </div>
                            <!--/.panel-->
                        </div>
                        <!--/.col-->
                    </div>
                    <!-- Blog-news 3 -->
                    <div class="row-same-height row-full-height">
                        <div class="col-md-9 col-md-height col-full-height">
                            <div class="panel">
                                <div class="panel-body">
                                    <h5 class="text-left">TWITTER</h5>
                                    <a class="twitter-timeline" href="https://twitter.com/Seplan_yucatan" data-widget-id="302069386464870402" height="300px"></a>
                                </div>
                                <!--/.panel-body-->
                                <div class="panel-footer post-buttons-area text-left">

                                </div>
                            </div>
                            <!--/.panel-->
                        </div>
                        <!--/.col-->
                    </div>
                </div>
                <ul class="pagination">
                    <li><a>&laquo;</a></li>
                    <li><a href="../noticias.php">1</a></li>
                    <li><a href="../pagina_2.php">2</a></li>
                    <li><a href="../pagina_3.php">3</a></li>
                    <li><a href="../pagina_4.php">4</a></li>
                    <li><a>&raquo;</a></li>
                </ul>
    </section>

    <script>
        ! function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = "//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, "script", "twitter-wjs");
    </script>

    <?php
    echo $tmp->generateFooter();
    ?>

</body>

</html>