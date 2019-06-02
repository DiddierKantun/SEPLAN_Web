<?php
include_once("layout/layout.php");
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

    <section id="section-page-header" class="grid-block" style="background-image: url('assets/img/seplan/writing-1149962.jpg'); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Heading-->
                    <h1 style="color: white;">EVALUACIÓN</h1>
                </div>
                <!--Breadcrumb-->
                <div class="col-md-4">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">INICIO</a></li>
                            <li><a href="#">EVALUACIÓN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
    </section>


    <!-- Shadow Element -->
    <section id="box-shadow-bottom"> </section>

    <!-- Our Skills -->
    <section class="page-section-top-alt-np has-border mt-25 pb-125 pb-md-85 pb-sm-65" id="our-skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="tab-content" class="tab-content">
                        <img src="assets/img/seplan/armonizacion.png" alt="" class="tab-img-center">
                    </div>
                </div>
                <!-- Toggle Accordion -->
                <div class="col-lg-6 mt-md-10">
                    <H3 id="heading">EVALUACIÓN</br></H3>
                    <small id="heading">DOCUMENTOS</small>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <h5><span class="xc icon-minus"></span>
                                        Lineamientos generales del Sistema de Seguimiento y Evaluación del Desempeño</h5>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <h5><span class="xc icon-plus"></span>
                                        Mecanismo para el Seguimiento de los Aspectos Susceptibles de Mejora</h5>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <h5><span class="xc icon-plus"></span>
                                        Convocatoria para la Integración del Programa Anual de Evaluación 2019</h5>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <h5><span class="xc icon-plus"></span>
                                        Formulario para la identificación de intervenciones públicas evaluables</h5>
                                </a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    <h5><span class="xc icon-plus"></span>
                                        Metodología para la selección de intervenciones públicas a evaluar</h5>
                                </a>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br>
        <h3>
            <center id="heading">SEGUIMIENTO Y EVALUACIÓN</center>
            <p class="text-center">------</p>
        </h3>
    </section>
    <!--                           -->
    <section >

        <div class="row">
            <div class="col-lg-12">
                <iframe src="http://transparencia.yucatan.gob.mx/informes.php?id=evaluacion_desempeno" width="1520px" height="710px" frameborder="0"></iframe>
            </div>
        </div>


    </section>
    <!--Progress Bar End--->

    <?php
    echo $tmp->generateFooter();
    ?>

</body>

</html>