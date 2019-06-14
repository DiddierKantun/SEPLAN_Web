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

    <section id="section-page-header" class="grid-block" style="background-image: url('assets/img/seplan/eval.png'); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--Heading-->
                    <h1 style="color: white;font-weight: bold;">EVALUACIÓN</h1>
                </div>
                <!--Breadcrumb-->
                <div class="col-md-4">
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="../index.php">INICIO</a></li>
                            <li><a href="../evaluacion.php">EVALUACIÓN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
    </section>


    <!-- Shadow Element -->
    <section id="box-shadow-bottom"></section>

    <!-- Our Skills -->
    <section class="page-section-top-alt-np has-border mt-25 pb-10 pb-md-85 pb-sm-65" id="our-skills">
        <div class="container">
            <div class="container">
                <h4 class="text-justify">La presente administración pública estatal implementó la Gestión para Resultados del Desarrollo como modelo de gestión pública. Este modelo tiene como uno de sus principales componentes el Sistema de Evaluación del Desempeño, que contribuye a que se fijan metas claras y medibles para los programas gubernamentales, con el fin de mejorar la eficiencia, eficacia, transparencia y la rendición de cuentas en el sector público.</h4>
                <br><br><br><br>
            </div>
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
                    <ul class="list-item" style="margin-left:-25px">
                        <!-- Primer submenu del menú 1-->
                        <li>
                            <a target="_blank" href="http://www.seplan.yucatan.gob.mx/Archivos/Lineamientos%20SSED.pdf">Lineamientos generales del Sistema de Seguimiento y Evaluación del Desempeño</a>
                        </li>
                        <!-- Segundo submenu del menú 1-->
                        <li>
                            <a target="_blank" href="http://www.seplan.yucatan.gob.mx/Archivos/Mecanismos%20para%20el%20seguimiento%20de%20los%20ASM.pdf"> Mecanismo para el Seguimiento de los Aspectos Susceptibles de Mejora</a>
                        </li>
                        <!-- Tercer submenu del menú 1-->
                        <li>
                            <a target="_blank" href="../docs/190124_Convocatoria.pdf">Convocatoria para la integración del Programa Anual de Evaluación 2019</a>
                        </li>
                        <!-- Cuarto submenu del menú 1-->
                        <li>
                            <a target="_blank" href="http://www.seplan.yucatan.gob.mx/Archivos/190124_Formulario.xlsx"> Formulario para la identificación de intervenciones públicas evaluables</a>
                        </li>
                        <!-- Quinto submenu del menú 1-->
                        <li>
                            <a target="_blank" href="../docs/190124_Metodología selección evaluación.pdf">Metodología para la selección de intervenciones públicas a evaluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
        <h3>
            <center id="heading">SEGUIMIENTO Y EVALUACIÓN</center>
            <p class="text-center">------</p>
        </h3>
    </section>
    <!--                           -->
    <section>
        <iframe src="http://transparencia.yucatan.gob.mx/seguimiento_evaluacion.php" width="1519px" height="450px" frameborder="0" scrolling="no"></iframe>
        <br><br>
    </section>
    <!--Progress Bar End--->

    <?php
    echo $tmp->generateFooter();
    ?>

</body>

</html>