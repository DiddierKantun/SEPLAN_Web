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

  <!-- Revolution Slider -->
  <section id="revolution-slider">
    <div class="bannercontainer">
      <div class="banner">
        <ul>

          <!--Slide 1 -->
          <li data-transition="fade" data-slotamount="7" data-masterspeed="600">
            <img src="assets/img/seplan/fondo.png" alt="" style="background-color:#ededed" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

            <div class="caption sfl" data-x="0" data-y="center" data-voffset="20" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
              <img src="assets/img/seplan/ped_maya.png" alt="">
            </div>


            <div class="caption sft xc_title_font" data-x="650" data-y="200" data-speed="800" data-start="2500" data-easing="easeOutBack">
              <b>PLAN ESTATAL DE DESARROLLO,
                <br>
                TRADUCIDO A LENGUA MAYA</b>
            </div>
            <div class="caption sfb p_normal_font" data-x="650" data-y="280" data-speed="800" data-start="3000" data-easing="easeOutBack">
              Como parte del esfuerzo continuo por la inclusión de las<br>
              comunidades indígenas, se concluyó de manera exitosa<br>
              la plataforma con el Plan Estatal de Desarrollo (PED)<br>
              2018-2024 traducido a lengua. maya
            </div>
            <div class="caption sfl tp-resizeme" data-x="650" data-y="430" data-speed="800" data-start="6000" data-easing="easeOutBack">
              <a class="tp-btn-dark-outline page-scroll" href="#portfolio">LEER MÁS</a>
            </div>
          </li>

          <!--Slide 2 -->
          <li data-transition="fade" data-slotamount="7" data-masterspeed="600">
            <img src="assets/img/seplan/fondo.png" alt="" style="background-color:#ededed" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

            <div class="caption sfl" data-x="0" data-y="center" data-voffset="20" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
              <img src="assets/img/seplan/ped_maya.png" alt="">
            </div>


            <div class="caption sft xc_title_font" data-x="650" data-y="200" data-speed="800" data-start="2500" data-easing="easeOutBack">
              <b>PLAN ESTATAL DE DESARROLLO,
                <br>
                TRADUCIDO A LENGUA MAYA</b>
            </div>
            <div class="caption sfb p_normal_font" data-x="650" data-y="280" data-speed="800" data-start="3000" data-easing="easeOutBack">
              Como parte del esfuerzo continuo por la inclusión de las<br>
              comunidades indígenas, se concluyó de manera exitosa<br>
              la plataforma con el Plan Estatal de Desarrollo (PED)<br>
              2018-2024 traducido a lengua. maya
            </div>
            <div class="caption sfl tp-resizeme" data-x="650" data-y="430" data-speed="800" data-start="6000" data-easing="easeOutBack">
              <a class="tp-btn-dark-outline page-scroll" href="#portfolio">LEER MÁS</a>
            </div>
          </li>

        </ul>
        <!--All slides ends here-->
      </div>
    </div>
  </section>

  <!--Welcome Box-->

  <!-- Shadow Element -->
  <section id="box-shadow-bottom"></section>
  <!-- Section About -->
  <section class="page-section-top-alt has-border" id="about">
    <div class="container">
      <div class="row">

        <div class="col-md-7 col-sm-7 mb-sm-80">
          <!--Heading-->
          <h2 id="heading" class="section-title">QUIENES SOMOS</h2>
          <!--Content-->
          <p class="intro-text">
            Somos un organismo público descentralizado de la Administración Pública estatal que
            tiene por objeto coordinar cada una de las etapas del proceso de planeación, con la
            participación de la sociedad civil y de los distintos órdenes de gobierno; los trabajos
            de los sistemas de Gabinete Sectorizado y el de Seguimiento y Evaluación del
            Desempeño; el desarrollo y asesoría en la implementación de programas y proyectos
            estratégicos que encargue el Gobernador, así como la gestión de recursos que
            permitan el financiamiento del desarrollo del estado, con base en la aplicación del
            modelo de Gestión para Resultados.
          </p>
          <br>
          <div class="col-md-10 col-sm-10 animate-in" data-anim-type="fade-in-left" data-anim-delay="1000">
            <div class="skills-showcase-right has-border">
              <div class="pull-left">
                <div class="main-icon-medium">
                  <i class="et icon-adjustments"></i>
                </div>
              </div>
              <div class="skills-showcase-right-body">
                <h4 id="heading" class="skills-showcase-right-heading">MISIÓN</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus tincidunt.</p>
              </div>
            </div>
            <div class="skills-showcase-right">
              <div class="pull-left">
                <div class="main-icon-medium">
                  <i class="et icon-key"></i>
                </div>
              </div>
              <div class="skills-showcase-right-body">
                <h4 id="heading" class="skills-showcase-right-heading">VISIÓN</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rhoncus tincidunt.</p>
              </div>
            </div>
          </div>
        </div> <!-- /.col -->

        <!--Right Side Image-->
        <div class="col-md-5 col-sm-5 hidden-xs">
          <img class="person" src="assets/img/seplan/logo_seplan_vertical.png" alt="SEPLAN">
        </div>
      </div><!-- /.row -->
      <div class="col-md-12 text-center">
        <div class="app-landing-button pt-25 text-center">

          <!--Google Play-->
          <a href="#" class="btn btn-lg btn-dark">
            <span class="small">ESTATUTO ORGÁNICO DE LA SECRETARÍA<br>
              TÉCNICA DE PLANEACIÓN Y EVALUACIÓN</span>
          </a>
          <div class="h-divider"></div>
          <!--Google Play-->
          <a href="#" class="btn btn-lg btn-dark">
            <span class="small">ESTATUTO ORGÁNICO DE LA SECRETARÍA<br>
              TÉCNICA DE PLANEACIÓN Y EVALUACIÓN</span>
          </a>
          <div class="h-divider"></div>
          <!--App Store-->
          <a href="#" class="btn btn-lg btn-dark">
            <span class="small">MANUAL DE ORGANIZACIÓN DE LA SECRETARÍA<br>
              TÉCNICA DE PLANEACIÓN Y EVALUACIÓN</span>
          </a>
          <div class="h-divider"></div>
          <!--Google Play-->
          <a href="#" class="btn btn-lg btn-dark" style="width:250px">
            <span class="small">ORGANIGRAMA</span>
          </a>

        </div>
      </div>
    </div><!-- /.container -->
    <br><br><br>
  </section>

  <!-- Our Skills -->
  <section class="page-section-top-alt-np mb-25 pb-100 pb-md-70 pb-sm-0" id="skills-showcase">
    <div class="container" style="width:1400px">
      <!-- Section Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h2 id="heading" class="section-title text-center">FUNCIONES</h2>
          <h3 class="section-title-nmt intro-text text-center pb-100 pb-md-95 pb-sm-60">----</h3>
        </div>
      </div>
      <!--/.row-->
      <div class="row">
        <div class="skills-box col-lg-12 col-md-12 col-sm-12 col-xs-12 vertical-center">
          <!--Middle Image-->
          <div class="col-md-4 col-sm-4 col-md-push-4 col-sm-push-4 animate-in" data-anim-type="fade-in" data-anim-delay="600">
            <div class="woman-middle-img">
              <img src="assets/img/seplan/funciones.png" alt="">
            </div>
          </div>
          <!--/.col-->

          <!--Left Column-->
          <div class="col-md-4 col-sm-4 col-md-pull-4 col-sm-pull-4 text-right animate-in" data-anim-type="fade-in-right" data-anim-delay="1000">
            <div class="skills-showcase-left has-border">
              <div class="pull-right">
                <div class="main-icon-medium">
                  <i class="et icon-documents"></i>
                </div>
              </div>
              <div class="skills-showcase-left-body">
                <h4 id="heading" class="showcase-left-heading">PLANEACIÓN</h4>
                <h6>Coordinar cada una de las etapas del proceso de planeación mediante la
                  coordinación del Consejo de Planeación y Evaluación de Yucatán (COPLEDEY), la
                  participación de la sociedad civil y de los distintos órdenes de gobierno, con base
                  en la aplicación del modelo de gestión para resultados.</h6>
              </div>
            </div>
            <div class="skills-showcase-left has-border">
              <div class="pull-right">
                <div class="main-icon-medium">
                  <i class="et icon-magnifying-glass"></i>
                </div>
              </div>
              <div class="skills-showcase-left-body">
                <h4 id="heading" class="skills-showcase-left-heading">SEGUIMIENTO</h4>
                <h6>Monitorea la evolución de las actividades estratégicas, obras, compromisos e
                  indicadores establecidos en los instrumentos de planeación (Plan Estatal de Desarrollo
                  y programas de mediano plazo) mediante la integración de informes
                  y reportes continuos.</h6>
              </div>
            </div>
            <div class="skills-showcase-left has-border-sm">
              <div class="pull-right">
                <div class="main-icon-medium">
                  <i class="et icon-bargraph"></i>
                </div>
              </div>
              <div class="skills-showcase-left-body">
                <h4 id="heading" class="showcase-left-heading">ESTADÍSTICAS</h4>
                <h6>Efectúa actividades para el diseño, captación, producción, actualización, organización,
                  procesamiento, integración, compilación, publicación, divulgación y conservación de
                  información estadística y geográfica de interés estatal.</h6>
              </div>
            </div>
          </div>
          <!--/.col-->

          <!--Right Column-->
          <div class="col-md-4 col-sm-4 animate-in" data-anim-type="fade-in-left" data-anim-delay="1000">
            <div class="skills-showcase-right has-border">
              <div class="pull-left">
                <div class="main-icon-medium">
                  <i class="et icon-pencil"></i>
                </div>
              </div>
              <div class="skills-showcase-right-body">
                <h4 id="heading" class="skills-showcase-right-heading">EVALUACIONES</h4>
                <h6>Coordina la valoración del rendimiento de los programas y políticas públicas,
                  apoyándose de los datos generados por el seguimiento de las actividades y datos
                  estadísticos y geográficos, con el objetivo de proponer acciones para la mejora de los
                  programas gubernamentales.</h6>
              </div>
            </div>
            <div class="skills-showcase-right has-border">
              <div class="pull-left">
                <div class="main-icon-medium">
                  <i class="xc icon-users"></i>
                </div>
              </div>
              <div class="skills-showcase-right-body">
                <h4 id="heading" class="skills-showcase-right-heading">COORDINACIÓN</h4>
                <h6>Gestiona convenios con los gobiernos Federal y municipales a efecto de que participen en la
                  planeación del desarrollo estatal y coadyuven, en el ámbito de sus respectivas competencias,
                  a la consecución de los objetivos y metas para que los planes nacionales, estatales y
                  municipales, así como sus programas presupuestarios guarden la debida congruencia entre sí.</h6>
              </div>
            </div>
            <div class="skills-showcase-right">
              <div class="pull-left">
                <div class="main-icon-medium">
                  <i class="et icon-clipboard"></i>
                </div>
              </div>
              <div class="skills-showcase-right-body">
                <h4 id="heading" class="skills-showcase-right-heading">PROYECTOS ESTRATÉGICOS</h4>
                <h6>Lleva a cabo la evaluación socioeconómica de los proyectos de infraestructura
                  estratégicos que encargue el Gobernador, y determina los costos y beneficios directos
                  e indirectos que contribuyan a determinar su rentabilidad y posterior ejecución.</h6>
              </div>
            </div>
          </div>
          <!--/.col-->
        </div>
        <!--/.skills-box col-lg-12 col-md-12 col-sm-12 col-xs-12 vertical-center-->
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
    <br><br>
    <div class="col-md-12 text-center">
      <div class="app-landing-button pt-25 text-center">

        <!--Google Play-->
        <a href="#" class="btn btn-lg btn-dark" style="width:200px">
          <span class="small">FUNDAMENTOS</span>
        </a>
        <div class="h-divider"></div>
        <!--Google Play-->
        <a href="#" class="btn btn-lg btn-dark">
          <span class="small">CODIGO DE ÉTICA Y CONDUCTA</span>
        </a>
        <div class="h-divider"></div>
      </div>
    </div>
  </section>


  <?php
  echo $tmp->generateFooter();
  ?>

  <!--Revolution Slider-->
  <script>
    jQuery(document).ready(function() {
      jQuery('.banner').revolution({

        delay: 9000,
        startwidth: 1170,
        startheight: 800,
        hideThumbs: 200,
        hideTimerBar: "on",
        navigationType: "none",
        navigationArrows: "solo",
        navigationStyle: "navbar-old",
        touchenabled: "on",
        dottedOverlay: "none",
        fullWidth: "on",
        forceFullWidth: "off",
        shadow: 0

      });
    });
  </script>

</body>

</html>