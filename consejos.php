<?php
include_once("layout/layout.php");
$tmp = layout::getlayout();
echo $tmp->getPage();
?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <div id="loader-wrapper">
    <div id="loader"></div>
  </div>

  <?php
  echo $tmp->generateNavbar();
  ?>

  <section id="section-page-header" class="grid-block" style="background-image: url('assets/img/seplan/business_meeting.jpg'); background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <!--Heading-->
          <h1 style="color: white;">CONSEJOS</h1>
        </div>
        <!--Breadcrumb-->
        <div class="col-md-4">
          <div class="breadcrumb">
            <ul>
              <li><a href="#">INICIO</a></li>
              <li><a href="#">INFORMACIÓN</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.row-->
    </div>
  </section>

  <!-- Shadow Element -->
  <section id="box-shadow-bottom"> </section>

  <!-- Left Side --->
  <section class="page-section-top-alt-np has-border mt-5 pb-115 pb-md-80 pb-sm-55" id="project-mp">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mt-20 mb-40">
          <div class="project-left-side">
            <div class="xc-item square effect from_top_and_bottom">
              <div class="img"><img src="assets/img/seplan/logo_copledey.png" alt="img"></div>
              <div class="mask">
                <div class="portfolio-caption">
                  <!-- Your Picture Here -->
                  <a class="fancybox" href="assets/img/seplan/logo_copledey.png" title="COPLEDEY"><i class="fa fa-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Image 2 if you want -->
            <!-- 
      <div class="project-img-2 mt20">
       <div class="xc-item square effect from_top_and_bottom">
        <div class="img"><img src="assets/img/portfolio/work04.jpg" alt="img"></div>
         <div class="mask">
          <div class="portfolio-caption">
            Your Picture Here -->
            <!-- <a class="fancybox" href="assets/img/portfolio/work04.jpg" title="Project No. 1"><i class="fa fa-plus"></i></a>
         </div> 
        </div>
       </div>
      </div> -->

          </div><!-- /.project-left-side -->
        </div><!-- /.col -->

        <!-- Right Side -->
        <div class="col-lg-7">
          <div class="project-right-side mt-20">
            <h3>COPLEDEY</h3>
            <p>
              El Consejo de Planeación y Evaluación del Estado de Yucatán (Copledey) es el órgano máximo del
              Sistema de Planeación del Desarrollo Estatal, de carácter permanente, consultivo y deliberativo, en
              cuyo seno se definen los objetivos, estrategias y principales mecanismos para la ejecución de los
              instrumentos de planeación del desarrollo, mediante la coordinación interinstitucional y la participación
              ciudadana.
              </br>
            </p>
            <a href="#" class="btn btn-lg btn-dark" style="width:200px">
              <span class="small">QUIENES LO INTEGRAN</span>
            </a>
          </div><!-- /.col -->
        </div><!-- /.project-right-side -->

      </div>
    </div>
  </section>

  <!-- Owl-Slider -->
  <section class="page-section-top-alt-np has-border mt-5 pb-115 pb-md-80 pb-sm-55" id="project-mp">
    <div class="container">
      <div class="row">
        <!-- Right Side -->
        <div class="col-lg-7">
          <div class="project-right-side mt-20">
            <h3>CEIEG</h3>
            <p>
              Somos uno de los Comités Técnicos Especializados Estatales establecidos de conformidad con las
              normas del Sistema Nacional de Información Estadística y Geográfica (SNIEG).
              Los Comités Estatales se constituyen como órganos colegiados de participación y consulta, donde
              confluyen los representantes de las áreas administrativas con actividades estadísticas y geográficas
              del estado, sus municipios y el INEGI, para la ejecución y cumplimiento de los principios, bases y
              normas establecidos en el SNIEG; la elaboración del Programa Estatal de Estadística y Geografía, así
              como para promover el conocimiento y aplicación de las normas técnicas en las Unidades de su
              competencia.
              </br>
            </p>
            <a href="#" class="btn btn-lg btn-dark" style="width:200px">
              <span class="small">QUIENES LO INTEGRAN</span>
            </a>
          </div><!-- /.col -->
        </div><!-- /.project-right-side -->
        <div class="col-lg-5 mt-20 mb-40">
          <div class="project-left-side">
            <div class="xc-item square effect from_top_and_bottom">
              <div class="img"><img src="assets/img/seplan/logo_ceieg.png" alt="img"></div>
              <div class="mask">
                <div class="portfolio-caption">
                  <!-- Your Picture Here -->
                  <a class="fancybox" href="assets/img/seplan/logo_ceieg.png" title="COPLEDEY"><i class="fa fa-plus"></i></a>
                </div>
              </div>
            </div>
            <!-- Image 2 if you want -->
            <!-- 
          <div class="project-img-2 mt20">
           <div class="xc-item square effect from_top_and_bottom">
            <div class="img"><img src="assets/img/portfolio/work04.jpg" alt="img"></div>
             <div class="mask">
              <div class="portfolio-caption">
                Your Picture Here -->
            <!-- <a class="fancybox" href="assets/img/portfolio/work04.jpg" title="Project No. 1"><i class="fa fa-plus"></i></a>
             </div> 
            </div>
           </div>
          </div> -->

          </div><!-- /.project-left-side -->
        </div><!-- /.col -->
      </div>
    </div>
  </section>


  <?php
  echo $tmp->generateFooter();
  ?>

</body>

</html>