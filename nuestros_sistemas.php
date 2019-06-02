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
          <h1 style="color: white;">NUESTROS SISTEMAS</h1>
        </div>
        <!--Breadcrumb-->
        <div class="col-md-4">
          <div class="breadcrumb">
            <ul>
              <li><a href="#">INICIO</a></li>
              <li><a href="#">NUESTROS SISTEMAS</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.row-->
    </div>
  </section>


  <!-- Shadow Element -->
  <section id="box-shadow-bottom"> </section>

  <!-- Clients -->
  <section class="page-section-top-alt-np has-border mt-25 pb-115 pb-md-95 pb-sm-75" id="clients-mp">
    <div class="container">
      <div class="row">

        <div class="col-lg-4">
          <div class="clients-logo"><img src="assets/img/seplan/logo_siegy.png" class="img-responsive center-block" alt=""></div>
          <h3>SIEGY</h3>
          <p>El Sistema de Información Estadística y Geográfica de
            Yucatán surge por mandato de la Ley de Planeación del
            Desarrollo del Estado y tiene como finalidad
            proporcionar información estadística y geográfica de
            calidad para la planeación del desarrollo, contribuir al
            seguimiento y evaluación de las políticas, instituciones,
            programas y actividades del Estado de Yucatán, así
            como la prestación del servicio público de información
            a través del sitio electrónico respectivo, que está a
            cargo de la SEPLAN.</p>
        </div>

        <div class="col-lg-4">
          <div class="clients-logo"><img src="assets/img/seplan/logo_sied.png" class="img-responsive center-block" alt=""></div>
          <h3>SIED</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially
            unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum
            passages, and more recently.</p>
        </div>

        <div class="col-lg-4">
          <div class="clients-logo"><img src="assets/img/seplan/logo_sigo.png" class="img-responsive center-block" alt=""></div>
          <h3>SIGO</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially
            unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum
            passages, and more recently.</p>
        </div>
      </div>
      <!--/.row-->

      <div class="row pt-15">
        <div class="col-lg-4">
          <div class="clients-logo"><img src="assets/img/seplan/logo_siegy.png" class="img-responsive center-block" alt=""></div>
          <h3>SIPREY</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially
            unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum
            passages, and more recently.</p>
        </div>

        <div class="col-lg-4">
          <div class="clients-logo"><img src="assets/img/seplan/logo_siegy.png" class="img-responsive center-block" alt=""></div>
          <h3>CONOCER</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially
            unchanged. It was popularised in the 1960s with the
            release of Letraset sheets containing Lorem Ipsum
            passages, and more recently.</p>
        </div>

      </div>
    </div>
  </section>


  <?php
  echo $tmp->generateFooter();
  ?>

</body>

</html>