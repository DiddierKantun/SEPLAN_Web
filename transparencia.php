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
          <h1 style="color: white;">TRANSPARENCIA</h1>
        </div>
        <!--Breadcrumb-->
        <div class="col-md-4">
          <div class="breadcrumb">
            <ul>
              <li><a href="#">INICIO</a></li>
              <li><a href="#">TRANSPARENCIA</a></li>
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
            <img src="assets/img/seplan/evaluacion.png" alt="" class="tab-img-center">
          </div>
        </div>
        <!-- Toggle Accordion -->
        <div class="col-lg-6 mt-md-10">
          <H3 id="heading">ARMONIZACIÓN CONTABLE</br></H3>
          <small id="heading">MARCO LEGAL</small>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  <h5><span class="xc icon-minus"></span>
                    Ley General de Contabilidad Gubernamental</h5>
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
                    Ley de Disciplina Financiera de las Entidades Federativas y Municipios</h5>
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
                    Normas y Lineamientos emitidos por el CONAC</h5>
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
                    Manual de Contabilidad Gubernamental de la SEPLAN</h5>
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
                    Clasificadores Presupuestarios de la SEPLAN</h5>
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
        <center id="heading">FUNCIONES</center>
        <p class="text-center">------</p>
      </h3>
    <p>
      <center>Esta sección estará disponible para la consulta de información al público en general a partir del 6 de noviembre, en términos del artículo segundo</br>
        transitorio de los Lineamientos Técnicos Generales para la publicación, homologación y estandarización de la información de las obligaciones</br>
        establecidas en el Título Quinto y en la fracción IV del artículo 31 de la Ley General de Transparencia y Acceso a la Información Pública; ya que los</br>
        Sujetos Obligados tienen seis meses para cargar su información</center>
    </p>
  </section>

  <!--                           -->
  <section id="section">
    <div class="container">
      <div class="row">
        <!-- CopyRight Text -->
        <div class="col-md-6 col-sm-6">
          <div class="copy-footer">
            <img src="assets/img/seplan/logo_seplan.png" alt="img">
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="social text-center">
            <p></br>Sistemas de Obligciones de Transparencia</br>
              <strong id="str">Secretaria Técnica de Planeación y Evaluación</strong></p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <section id="border_purple"></section>
  <!-- section end -->

  <section class="page-section" id="section-bars-mp">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <a href="http://consultapublicamx.inai.org.mx:8080/vut-web/?idEntidadParametro=31&idSectorParametro=21&idSujetoObigadoParametro=13045" target="_blank"><img src="assets/img/seplan/seplan_transparencia.JPG"></a>
        </div>
      </div>

    </div>
  </section>
  <!--Progress Bar End--->

  <?php
  echo $tmp->generateFooter();
  ?>

</body>

</html>