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

  <section id="section-page-header" class="grid-block" style="background-image: url('assets/img/seplan/business_meeting.jpg'); background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <!--Heading-->
          <h1 style="color: white;">NOTICIAS</h1>
        </div>
        <!--Breadcrumb-->
        <div class="col-md-4">
          <div class="breadcrumb">
            <ul>
              <li><a href="#">INICIO</a></li>
              <li><a href="#">NOTICIAS</a></li>
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
            <div class="panel">

              <div class="blog-post-img">
                <h4 id="heading" class="text-left">lOREM IPSUM IS SIMPLY</h4>
                <h6 class="text-left"><i class="fa fa-twitter">24 MAYO 2019</i></h6><br>
                <img src="assets/img/seplan/IMG_5162.jpg" alt="">
              </div>

              <div class="panel-body">
                <p class="text-left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                  the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                  type and scrambled it to make a type specimen book. It has survived not only.</p>
              </div>
              <!--/.panel-body-->
              <div class="panel-footer post-buttons-area text-left">
                <a href="#" class="btn btn-lg btn-dark">
                  <span class="small">LEER MÁS</span>
                </a>
              </div>
            </div>
            <!--/.panel-->
          </div>
          <!--/.col-->

          <!-- Blog-news 2 -->
          <div class="row-same-height row-full-height">
            <div class="col-md-9 col-md-height col-full-height">
              <div class="panel">

                <div class="blog-post-img">
                  <br><br>
                </div>

                <div class="panel-body">
                  <h5 class="text-left">FACEBOOK</h5>
                  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSeplan-Yucat%C3%A1n-238984159776058&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="350px" style="border:none;overflow:hidden" scrolling="si" frameborder="0" allowTransparency="true"></iframe>
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

                <div class="blog-post-img">
                  <br><br>
                </div>

                <div class="panel-body">
                  <h5 class="text-left">TWITTER</h5>
                  <div class="col-md-12">

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
        </div>
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
  </section>


  <?php
  echo $tmp->generateFooter();
  ?>

</body>

</html>