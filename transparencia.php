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
          <h1 style="color: white;font-weight: bold;">TRANSPARENCIA</h1>
        </div>
        <!--Breadcrumb-->
        <div class="col-md-4">
          <div class="breadcrumb">
            <ul>
              <li><a href="index.php">INICIO</a></li>
              <li><a href="transparencia.php">TRANSPARENCIA</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!--/.row-->
    </div>
  </section>


  <!-- Shadow Element -->
  <section id="box-shadow-bottom">
    <div id="plat_nac"></div>
  </section>

  <!--                           -->
  <section>
    <h3>
      <center id="heading">TRANSPARENCIA</center>
      <p class="text-center">------</p>
    </h3>
    <p>
      <center>Esta sección estará disponible para la consulta de información al público en general a partir del 6 de noviembre, en términos del artículo segundo</br>
        transitorio de los Lineamientos Técnicos Generales para la publicación, homologación y estandarización de la información de las obligaciones</br>
        establecidas en el Título Quinto y en la fracción IV del artículo 31 de la Ley General de Transparencia y Acceso a la Información Pública; ya que los</br>
        Sujetos Obligados tienen seis meses para cargar su información.</center>
    </p>
    <br><br><br><br>
    <iframe src="http://transparencia.yucatan.gob.mx/seplan" width="1519px" height="800px" frameborder="0"></iframe>
    <br><br id="arm_cont">
  </section>
  <!--Progress Bar End--->
  <br><br>
  <!-- Our Skills -->
  <section class="page-section-top-alt-np has-border mt-25 pb-125 pb-md-85 pb-sm-65" id="our-skills">
    <div class="container">
      <div class="row">
        <section class="page-section-top-alt-np mt-25 pb-125 pb-md-85 pb-sm-65">
          <div class="container">
            <H3 id="heading" class="text-center">ARMONIZACIÓN CONTABLE
              <p class="text-center">------</p>
            </H3>
            <p class="text-justify">
              En seguimiento a la estrategia de transparencia y modernización del Sistema de Contabilidad Gubernamental, implantada por la Secretaría Técnica de Planeación y Evaluación (SEPLAN), en cumplimiento de la Ley General de Contabilidad Gubernamental (LGCG) y las disposiciones normativas emitidas por el Consejo Nacional de Armonización Contable (CONAC), le damos la cordial bienvenida a este apartado de armonización contable gubernamental.<br><br>

              Este apartado, difundirá en forma permanente los avances de la SEPLAN en la adopción e implementación de las Normas y Lineamientos emitidos por el CONAC y el cumplimiento de la LGCG.<br><br>

              Por lo anterior, esta herramienta tecnológica permitirá mantener informado a la ciudadanía y organismos gubernamentales sobre la instrumentación de la armonización contable en el Ente Público.<br><br>

              Asimismo, seguiremos trabajando atendiendo las mejores prácticas de transparencia, rendición de cuentas e implementación de las disposiciones normativas vigentes y de esta manera garantizar el proceso de armonización contable en la SEPLAN.<br><br>

              <strong>
                Atentamente.<br>
                C. Rafael Hernández Kotasek.
              </strong>
            </p>
          </div>
        </section>
        <div class="col-lg-6">
          <div id="tab-content" class="tab-content">
            <br>
            <img src="assets/img/seplan/evaluacion.png" alt="" class="tab-img-center">
            <br>
          </div>
        </div>
        <!-- Toggle Accordion -->
        <div class="col-lg-6 mt-md-10">
          <h3 id="heading">DOCUMENTOS</h3><br>
          <div class="panel-group" id="accordion">
            <!--Primera opcion del menú -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  <h4><span class="xc icon-plus"></span>
                    Marco Legal y Normativo</h4>
                </a>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="list-item">
                    <!-- Primer submenu del menú 1-->
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/LGCG.pdf">Ley General de Contabilidad Gubernamental</a>
                    </li>
                    <!-- Segundo submenu del menú 1-->
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/LDFEFM.pdf">Ley de Disciplina Financiera de las Entidades Federativas y Municipios</a>
                    </li>
                    <!-- Tercer submenu del menú 1-->
                    <li>
                      <a target="_blank" href="https://www.conac.gob.mx/es/CONAC/Normatividad_Vigente">Normas y Lineamientos emitidos por el CONAC</a>
                    </li>
                    <!-- Cuarto submenu del menú 1-->
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/Manual_de_Contabilidad_Gubernamental_SEPLAN.pdf">Manual de Contabilidad Gubernamental de la SEPLAN</a>
                    </li>
                    <!-- Quinto submenu del menú 1-->
                    <li>
                      <a target="_blank" >Clasificadores Presupuestarios de la SEPLAN</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Final de la primera opcion del menú -->

            <!--Segunda opcion del menú -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                  <h4><span class="xc icon-plus"></span>
                    Información financiera, Presupuestal, Programática y </h4>
                  <h4 style="margin-left:30px">de Postura Fiscal</h4>
                </a>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="list-unstyled">
                    <!-- Primer submenu de la opcion 2 -->
                    <li>
                      <a data-toggle="collapse" href="#submenu1" role="button" aria-expanded="false" aria-controls="submenu1">Estados e Información Contable</a>
                      <div class="collapse" id="submenu1">
                        <div class="card card-body">
                          <ul class="list-unstyled">
                            <!-- opcion 1 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_1" role="button" aria-expanded="false" aria-controls="submenu2_1_1">Estado de Situación financiera</a>
                              <div class="collapse" id="submenu2_1_1">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Situacion_financiera_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Situacion_financiera_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Situacion_financiera_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Situacion_financiera_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Situacion_financiera_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 2 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_2" role="button" aria-expanded="false" aria-controls="submenu2_1_2">Estado de Actividades</a>
                              <div class="collapse" id="submenu2_1_2">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Actividades_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Actividades_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Actividades_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Actividades_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Actividades_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 3 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_3" role="button" aria-expanded="false" aria-controls="submenu2_1_3">Estado de variaciones en la Hacienda Pública / Patrimonio</a>
                              <div class="collapse" id="submenu2_1_3">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_variaciones_en_la_Hacienda_Publica_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_variaciones_en_la_Hacienda_Publica_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_variaciones_en_la_Hacienda_Publica_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_variaciones_en_la_Hacienda_Publica_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_variaciones_en_la_Hacienda_Publica_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 4 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_4" role="button" aria-expanded="false" aria-controls="submenu2_1_4">Estado de Cambios en la Situación Financiera</a>
                              <div class="collapse" id="submenu2_1_4">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Cambios_en_la_Situacion_Financiera_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Cambios_en_la_Situacion_Financiera_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Cambios_en_la_Situacion_Financiera_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Cambios_en_la_Situacion_Financiera_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_Cambios_en_la_Situacion_Financiera_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 5 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_5" role="button" aria-expanded="false" aria-controls="submenu2_1_5"> Estado de flujos de Efectivos</a>
                              <div class="collapse" id="submenu2_1_5">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_flujos_de_Efectivos_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_flujos_de_Efectivos_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_flujos_de_Efectivos_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_flujos_de_Efectivos_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_de_flujos_de_Efectivos_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 6 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_6" role="button" aria-expanded="false" aria-controls="submenu2_1_6"> Estado Analítico del Activo</a>
                              <div class="collapse" id="submenu2_1_6">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_del_Activo_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_del_Activo_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_del_Activo_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_del_Activo_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_del_Activo_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 7 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_7" role="button" aria-expanded="false" aria-controls="submenu2_1_7"> Estado Analítico de la Deuda y Otros Pasivos</a>
                              <div class="collapse" id="submenu2_1_7">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_de_la_Deuda_y_Otros_Pasivos_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_de_la_Deuda_y_Otros_Pasivos_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_de_la_Deuda_y_Otros_Pasivos_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_de_la_Deuda_y_Otros_Pasivos_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_Analitico_de_la_Deuda_y_Otros_Pasivos_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 8 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_8" role="button" aria-expanded="false" aria-controls="submenu2_1_8"> Notas a los Estados Financieros</a>
                              <div class="collapse" id="submenu2_1_8">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Notas_a_los_Estados_Financieros_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Notas_a_los_Estados_Financieros_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Notas_a_los_Estados_Financieros_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Notas_a_los_Estados_Financieros_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Notas_a_los_Estados_Financieros_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 9 del primer submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_1_9" role="button" aria-expanded="false" aria-controls="submenu2_1_9"> Informe sobre Pasivos Contingentes</a>
                              <div class="collapse" id="submenu2_1_9">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Informe_sobre_Pasivos_Contingente_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Informe_sobre_Pasivos_Contingente_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Informe_sobre_Pasivos_Contingente_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Informe_sobre_Pasivos_Contingente_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Informe_sobre_Pasivos_Contingente_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <!-- Segundo submenu de la opcion 2 -->
                    <li>
                      <a data-toggle="collapse" href="#submenu2" role="button" aria-expanded="false" aria-controls="submenu2">Estados e Informes Presupuestarios</a>
                      <div class="collapse" id="submenu2">
                        <div class="card card-body">
                          <ul class="list-unstyled">
                            <!-- opcion 1 del segundo submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_2_1" role="button" aria-expanded="false" aria-controls="submenu2_2_1">Estado analítico de ingresos</a>
                              <div class="collapse" id="submenu2_2_1">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_analitico_de_ingresos_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_analitico_de_ingresos_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_analitico_de_ingresos_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_analitico_de_ingresos_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Estado_analitico_de_ingresos_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <!-- opcion 2 del segundo submenu de la opcion 2 -->
                            <li>
                              <a data-toggle="collapse" href="#submenu2_2_2" role="button" aria-expanded="false" aria-controls="submenu2_2_2">Estado analítico del ejercicio del Presupuesto de Egresos</a>
                              <div class="collapse" id="submenu2_2_2">
                                <div class="card card-body">
                                  <ul>
                                    <li>
                                      <a data-toggle="collapse" href="#submenu2_2_2_1" role="button" aria-expanded="false" aria-controls="submenu2_2_2_1">Clasificación por Objeto del Gasto (Capítulo y Concepto)</a>
                                      <div class="collapse" id="submenu2_2_2_1">
                                        <div class="card card-body">
                                          <table class="table table-bordered center">
                                            <thead>
                                              <tr>
                                                <th>AÑO</th>
                                                <th>1er TRIMESTRE</th>
                                                <th>2do TRIMESTRE</th>
                                                <th>3er TRIMESTRE</th>
                                                <th>4to TRIMESTRE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>2018</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_por_Objeto_del_Gasto_(Capitulo_y_Concepto)_1_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_por_Objeto_del_Gasto_(Capitulo_y_Concepto)_2_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_por_Objeto_del_Gasto_(Capitulo_y_Concepto)_3_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_por_Objeto_del_Gasto_(Capitulo_y_Concepto)_4_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>2019</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_por_Objeto_del_Gasto_(Capitulo_y_Concepto)_1_19.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <a data-toggle="collapse" href="#submenu2_2_2_2" role="button" aria-expanded="false" aria-controls="submenu2_2_2_2">Clasificación Económica (por Tipo de Gasto)</a>
                                      <div class="collapse" id="submenu2_2_2_2">
                                        <div class="card card-body">
                                          <table class="table table-bordered center">
                                            <thead>
                                              <tr>
                                                <th>AÑO</th>
                                                <th>1er TRIMESTRE</th>
                                                <th>2do TRIMESTRE</th>
                                                <th>3er TRIMESTRE</th>
                                                <th>4to TRIMESTRE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>2018</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Economica_(por_Tipo_de_Gasto)_1_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Economica_(por_Tipo_de_Gasto)_2_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Economica_(por_Tipo_de_Gasto)_3_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Economica_(por_Tipo_de_Gasto)_4_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>2019</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Economica_(por_Tipo_de_Gasto)_1_19.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <a data-toggle="collapse" href="#submenu2_2_2_3" role="button" aria-expanded="false" aria-controls="submenu2_2_2_3">Clasificación Administrativa</a>
                                      <div class="collapse" id="submenu2_2_2_3">
                                        <div class="card card-body">
                                          <table class="table table-bordered center">
                                            <thead>
                                              <tr>
                                                <th>AÑO</th>
                                                <th>1er TRIMESTRE</th>
                                                <th>2do TRIMESTRE</th>
                                                <th>3er TRIMESTRE</th>
                                                <th>4to TRIMESTRE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>2018</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Administrativa_1_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Administrativa_2_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Administrativa_3_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Administrativa_4_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>2019</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Administrativa_1_19.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <a data-toggle="collapse" href="#submenu2_2_2_4" role="button" aria-expanded="false" aria-controls="submenu2_2_2_4">Clasificación Funcional (Finalidad y Función)</a>
                                      <div class="collapse" id="submenu2_2_2_4">
                                        <div class="card card-body">
                                          <table class="table table-bordered center">
                                            <thead>
                                              <tr>
                                                <th>AÑO</th>
                                                <th>1er TRIMESTRE</th>
                                                <th>2do TRIMESTRE</th>
                                                <th>3er TRIMESTRE</th>
                                                <th>4to TRIMESTRE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>2018</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Funcional_(Finalidad_y_Funcion)_1_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Funcional_(Finalidad_y_Funcion)_2_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Funcional_(Finalidad_y_Funcion)_3_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Funcional_(Finalidad_y_Funcion)_4_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>2019</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Clasificacion_Funcional_(Finalidad_y_Funcion)_1_19.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <a data-toggle="collapse" href="#submenu2_2_2_5" role="button" aria-expanded="false" aria-controls="submenu2_2_2_5">Endeudamiento neto</a>
                                      <div class="collapse" id="submenu2_2_2_5">
                                        <div class="card card-body">
                                          <table class="table table-bordered center">
                                            <thead>
                                              <tr>
                                                <th>AÑO</th>
                                                <th>1er TRIMESTRE</th>
                                                <th>2do TRIMESTRE</th>
                                                <th>3er TRIMESTRE</th>
                                                <th>4to TRIMESTRE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>2018</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Endeudamiento_neto_1_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Endeudamiento_neto_2_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Endeudamiento_neto_3_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Endeudamiento_neto_4_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>2019</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Endeudamiento_neto_1_19.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </li>
                                    <li>
                                      <a data-toggle="collapse" href="#submenu2_2_2_6" role="button" aria-expanded="false" aria-controls="submenu2_2_2_6">Intereses de la deuda</a>
                                      <div class="collapse" id="submenu2_2_2_6">
                                        <div class="card card-body">
                                          <table class="table table-bordered center">
                                            <thead>
                                              <tr>
                                                <th>AÑO</th>
                                                <th>1er TRIMESTRE</th>
                                                <th>2do TRIMESTRE</th>
                                                <th>3er TRIMESTRE</th>
                                                <th>4to TRIMESTRE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>2018</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Intereses_de_la_deuda_1_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Intereses_de_la_deuda_2_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Intereses_de_la_deuda_3_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Intereses_de_la_deuda_4_18.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>2019</td>
                                                <td>
                                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Intereses_de_la_deuda_1_19.pdf">
                                                    <center><i class="et icon-document"></i></center>
                                                  </a>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <!-- Tercer submenu de la opcion 2 -->
                    <li>
                      <a data-toggle="collapse" href="#submenu3" role="button" aria-expanded="false" aria-controls="submenu3">Estados e Informes Programáticos</a>
                      <div class="collapse" id="submenu3">
                        <div class="card card-body">
                          <ul class="list-unstyled">
                            <li>
                              <a data-toggle="collapse" href="#submenu2_3_1" role="button" aria-expanded="false" aria-controls="submenu2_3_1"> Gasto por Categoría Programática</a>
                              <div class="collapse" id="submenu2_3_1">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Gasto_por_Categoria_Program%C3%A1tica_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Gasto_por_Categoria_Program%C3%A1tica_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Gasto_por_Categoria_Program%C3%A1tica_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Gasto_por_Categoria_Program%C3%A1tica_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Gasto_por_Categoria_Program%C3%A1tica_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a data-toggle="collapse" href="#submenu2_3_2" role="button" aria-expanded="false" aria-controls="submenu2_3_2"> Programas y Proyectos de Inversión</a>
                              <div class="collapse" id="submenu2_3_2">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Programas_y_Proyectos_de_Inversion_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Programas_y_Proyectos_de_Inversion_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Programas_y_Proyectos_de_Inversion_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Programas_y_Proyectos_de_Inversion_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Programas_y_Proyectos_de_Inversion_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a data-toggle="collapse" href="#submenu2_3_3" role="button" aria-expanded="false" aria-controls="submenu2_3_3"> Indicadores de resultado</a>
                              <div class="collapse" id="submenu2_3_3">
                                <div class="card card-body">
                                  <table class="table table-bordered center">
                                    <thead>
                                      <tr>
                                        <th>AÑO</th>
                                        <th>1er TRIMESTRE</th>
                                        <th>2do TRIMESTRE</th>
                                        <th>3er TRIMESTRE</th>
                                        <th>4to TRIMESTRE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>2018</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_resultado_1_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_resultado_2_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_resultado_3_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_resultado_4_18.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>2019</td>
                                        <td>
                                          <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_resultado_1_19.pdf">
                                            <center><i class="et icon-document"></i></center>
                                          </a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <!-- Cuarto submenu de la opcion 2 -->
                    <li>
                      <a data-toggle="collapse" href="#submenu2_3_4" role="button" aria-expanded="false" aria-controls="submenu2_3_4"> Indicadores de Postura Fiscal</a>
                      <div class="collapse" id="submenu2_3_4">
                        <div class="card card-body">
                          <table class="table table-bordered center">
                            <thead>
                              <tr>
                                <th>AÑO</th>
                                <th>1er TRIMESTRE</th>
                                <th>2do TRIMESTRE</th>
                                <th>3er TRIMESTRE</th>
                                <th>4to TRIMESTRE</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>2018</td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_Postura_Fiscal_1_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_Postura_Fiscal_2_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_Postura_Fiscal_3_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_Postura_Fiscal_4_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>2019</td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Indicadores_de_Postura_Fiscal_1_19.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Final de la segunda opcion del menú -->

            <!--Tercera opcion del menú -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/Relacion_de_bienes_de_la_SEPLAN.pdf">
                  <h4><span class="xc icon-plus"></span>
                    Inventario de Bienes Muebles e Inmuebles</h4>
                </a>
              </div>
            </div>
            <!--Final de la tercera opcion del menú -->

            <!--Cuarta opcion del menú -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                  <h4><span class="xc icon-plus"></span>
                    Información relativa al Título V de la LGCG</h4>
                </a>
              </div>
              <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="list-item">
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/Ley_de_Ingresos.pdf">Norma para armonizar la presentación de la información adicional a la iniciativa de la Ley de Ingresos. </a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/Presupuesto_de_Egresos.pdf">Norma para armonizar la presentación de la información adicional del Proyecto del Presupuesto de Egresos. </a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/Presupuesto_Ciudadano.pdf">Norma para la difusión a la ciudadanía de la Ley de Ingresos y del Presupuesto de Egresos. </a>
                    </li>
                  </ul>
                  <ul class="list-unstyled">
                    <li>
                      <a data-toggle="collapse" href="#submenu4_1_1" role="button" aria-expanded="false" aria-controls="submenu4_1_1"> Montos pagados por ayudas y subsidios.</a>
                      <div class="collapse" id="submenu4_1_1">
                        <div class="card card-body">
                          <table class="table table-bordered center">
                            <thead>
                              <tr>
                                <th>AÑO</th>
                                <th>1er TRIMESTRE</th>
                                <th>2do TRIMESTRE</th>
                                <th>3er TRIMESTRE</th>
                                <th>4to TRIMESTRE</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>2018</td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Montos_pagados_por_ayudas_y_subsidios_1_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Montos_pagados_por_ayudas_y_subsidios_2_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Montos_pagados_por_ayudas_y_subsidios_3_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Montos_pagados_por_ayudas_y_subsidios_4_18.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                              </tr>
                              <tr>
                                <td>2019</td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Montos_pagados_por_ayudas_y_subsidios_1_19.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Final de la cuarta opcion del menú -->

            <!--Quinta opcion del menú -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/Indicadores_Desempe%C3%B1o_SEPLAN.pdf">
                  <h4><span class="xc icon-plus"></span>
                    Indicadores de Desempeño</h4>
                </a>
              </div>
            </div>
            <!--Final de la quinta opcion del menú -->

            <!--Sexta opcion del menú -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                  <h4><span class="xc icon-plus"></span>
                    Cuentas Públicas</h4>
                </a>
              </div>
              <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="list-item">
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/Cuenta_Publica_SEPLAN.pdf">Cuenta Pública</a>
                    </li>

                  </ul>
                  <ul class="list-unstyled">
                    <li>
                      </i><a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Información Financiera.</a>
                      <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                          <table class="table table-bordered center">
                            <thead>
                              <tr>
                                <th>AÑO</th>
                                <th>1er TRIMESTRE</th>
                                <th>2do TRIMESTRE</th>
                                <th>3er TRIMESTRE</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>2019</td>
                                <td>
                                  <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/trimestrales/Informacion_Contable_y_Presupestal_1_2019.pdf">
                                    <center><i class="et icon-document"></i></center>
                                  </a>
                                </td>
                                <td></td>
                                <td></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Final de la sexta opcion del menú -->

            <!--Septima opcion del menú -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                  <h4><span class="xc icon-plus"></span>
                    Disciplina Financiera</h4>
                </a>
              </div>
              <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                  <ul class="list-item">
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/ESTADO_DE_SITUACION_FINANCIERA_DETALLADO.pdf">Estado de Situación Financiera detallado</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/INFORME_ANALITICO_DE_LA_DEUDA_PUBLICA_Y_OTROS_PASIVOS.pdf">Informe Analítico de la Deuda Pública y otros pasivos</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/BALANCE_PRESUPUESTARIO.pdf">Balance Presupuestario</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/ESTADO_ANALITICO_INGRESOS_DETALLADO.pdf">Estado Analítico Ingresos detallado</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/CLASIFICACION_POR_OBJETO_DEL_GASTO(CAPITULO_Y_CONCEPTO).pdf">Clasificación por Objeto del Gasto (Capítulo y Concepto)</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/CLASIFICACION_ADMINISTRATIVA.pdf">Clasificación Administrativa</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/CLASIFICACION_FUNCIONAL(FINALIDAD_Y_FUNCION).pdf">Clasificación Funcional (Finalidad y Función)</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/CLASIFICACION_DE_SERVICIOS_PERSONALES_POR_CATEGORIA.pdf">Clasificación de Servicios Personales por Categoría</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/RESULTADOS_DE_INGRESOS.pdf">Resultados de Ingresos</a>
                    </li>
                    <li>
                      <a target="_blank" href="http://www.seplan.yucatan.gob.mx/archivos/armonizacion_contable/RESULTADOS_DE_EGRESOS.pdf">Resultados de Egresos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--Final de la septima opcion del menú -->

          </div>
        </div>
      </div>
    </div>
    <br>

  </section>

  <?php
  echo $tmp->generateFooter();
  ?>

</body>

</html>