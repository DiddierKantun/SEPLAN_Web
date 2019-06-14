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

  <section id="section-page-header" class="grid-block" style="background-image: url('assets/img/seplan/computer-767776.jpg'); background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <!--Heading-->
          <h1 style="color: white;font-weight: bold;">NUESTROS SISTEMAS</h1>
        </div>
        <!--Breadcrumb-->
        <div class="col-md-4">
          <div class="breadcrumb">
            <ul>
              <li><a href="../index.php">INICIO</a></li>
              <li><a href="../nuestros_sistemas.php">NUESTROS SISTEMAS</a></li>
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
          <a href="http://siegy.yucatan.gob.mx/" target="_blank" class="btn btn-lg btn-dark">
            <span class="small">IR AL SITIO</span>
          </a>
        </div>

        <div class="col-lg-4">
          <div class="clients-logo"><img src="assets/img/seplan/logo_sied.png" class="img-responsive center-block" alt=""></div>
          <h3>SIED</h3>
          <p>Gestionar información para la integración del Programa Anual de Evaluación
            Llevar un registro del flujo de información y de la evaluación entre las Dependencias-Evaluador-Seplan.
            Elaborar los Documentos de Opinión, en donde las Dependencias y Entidades fijen su postura institucional ante las observaciones y recomendaciones derivadas de la evaluación.
            Elaborar los Documentos de Trabajo, en donde las Dependencias y Entidades establezcan acciones, responsables y comprometan evidencia de la atención a las observaciones y recomendaciones derivadas de la evaluación.
            Dar seguimiento a la atención de los Aspectos Susceptibles de Mejora que se comprometieron en los Documentos de Trabajo.</p>
          <a href="#" class="btn btn-lg btn-dark">
            <span class="small">IR AL SITIO</span>
          </a>
        </div>

        <div class="col-lg-4">
          <div class="clients-logo"><img src="assets/img/seplan/logo_sigo.png" class="img-responsive center-block" alt=""></div>
          <h3>SIGO</h3>
          <p>El Gobernador del Estado ha dispuesto la formulación de
            los Lineamientos para la integración del Informe de Gobierno del Poder Ejecutivo
            del Estado, a través del cual se establece el proceso sistemático, continuo y
            permanente a que se deben ajustar las dependencias y entidades de la
            Administración Pública Estatal para la elaboración del Informe de Gobierno del
            Poder Ejecutivo.
            Los lineamientos disponen el desarrollo y administración, por parte de la
            Secretaría Técnica de Planeación y Evaluación, del Sistema de
            Seguimiento de Gabinete Sectorizado e Informe de Gobierno (SIGO), el cual
            consiste en un sistema informático por medio del cual se registra y da
            seguimiento a los planes anuales de trabajo de las dependencias y entidades, y se
            captura la información relevante para la integración del Informe de Gobierno.</p>
          <a href="#" class="btn btn-lg btn-dark">
            <span class="small">IR AL SITIO</span>
          </a>
        </div>
      </div>
      <!--/.row-->

      <div class="row pt-15">
        <div class="col-lg-4 hidden">
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
          <a href="#" class="btn btn-lg btn-dark">
            <span class="small">IR AL SITIO</span>
          </a>
        </div>

        <div class="col-lg-4 hidden">
          <div class="clients-logo"><img src="assets/img/seplan/logo-avales.png" class="img-responsive center-block" alt=""></div>
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
          <a href="#" class="btn btn-lg btn-dark">
            <span class="small">IR AL SITIO</span>
          </a>
        </div>

      </div>
    </div>
  </section>


  <?php
  echo $tmp->generateFooter();
  ?>

</body>

</html>