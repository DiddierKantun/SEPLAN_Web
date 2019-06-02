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

  <!-- Blog Starts -->
  <section class="page-section-top-alt-np has-border pb-65 pb-md-50 pb-sm-25" id="blog-content">
    <div class="container">
      <div class="row">

        <!-- Blog Main Content -->
        <div class="col-md-12 col-sm-12 blog-main">
          <!--Post 1-->
          <div class="blog-entry">
            <div class="container">
              <h2 id="heading" class="entry-title">lOREM IPSUM IS SIMPLY</h2><br>
              <img src="assets/img/seplan/IMG_5162.jpg" alt="">
              <br><br>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac massa quis erat vestibulum pulvinar a et purus. Phasellus dignissim finibus arcu id
                sollicitudin. Donec porta mi ac hendrerit lacinia. Curabitur convallis elementum egestas. Quisque tincidunt, nulla vitae malesuada aliquam, lectus ante
                placerat nisi, eu tempor eros massa ac odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse pulvinar nulla orci, a ornare felis
                blandit ut. Ut porttitor tortor et ex venenatis condimentum. Vestibulum facilisis, lectus sit amet fermentum dapibus, nisi diam ultricies arcu, a auctor augue
                lacus in augue. Mauris et semper purus, vitae lacinia ante. Nam ac mauris quis velit aliquam faucibus nec sed tortor. Nam aliquet tempus metus sed
                elementum. Nulla volutpat leo tortor, sit amet rutrum turpis luctus eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                egestas. In at lorem sit amet lectus bibendum ornare.
                </br>
                </br>
                Nam sed ipsum nisl. Curabitur viverra, mi eu maximus pulvinar, ligula est semper enim, vel consequat magna eros at lacus. Aenean id cursus ante. Etiam
                sodales eget enim eget malesuada. Fusce ornare ornare tincidunt. Vestibulum nec mi felis. Curabitur sed dui nec ipsum eleifend fermentum.
                </br>
                </br>
                Proin lacinia risus non mollis tincidunt. Suspendisse non est gravida, condimentum ex vel, aliquam dui. Duis in ullamcorper lorem, ut porta metus.
                Pellentesque faucibus aliquet justo gravida imperdiet. Ut eros ex, lobortis in scelerisque eget, luctus non libero. Aenean fermentum risus non ex
                pellentesque, in dictum felis semper. Donec efficitur ligula eget convallis imperdiet. Nunc sed tempor orci. Integer enim est, feugiat id pellentesque at,
                ultrices in mauris. Nam felis tellus, commodo ut eleifend volutpat, venenatis suscipit lectus.
                </br>
                </br>
                Sed id mauris nec nulla lobortis semper eget vitae nisl. Aenean aliquet dapibus augue, eu faucibus nibh gravida a. Donec nec augue et mi euismod auctor at
                vel quam. Pellentesque ullamcorper tortor a justo venenatis, a luctus nunc venenatis. Maecenas risus magna, maximus in arcu vitae, varius dapibus urna.
                Suspendisse potenti. Aenean a magna non lectus posuere egestas eu ut tellus. Phasellus vestibulum pharetra sodales. Integer eget nulla at sapien tempor
                commodo ac sed dolor. Nullam luctus, velit eu rhoncus ornare, nunc dolor bibendum purus, non suscipit magna ipsum eu justo. Integer egestas dolor mi,
                congue molestie ipsum volutpat eu.bh, vitae sollicitudin justo fermentum vitae. Integer erat odio, tincidunt vel metus et, efficitur varius mi. Suspendisse
                potenti. Cras nec euismod velit, a molestie ipsum.
              </p>
            </div>
            <!--/.entry-content-->
          </div>
          <!--/.blog-entry-->
          <!--Post 1 End-->
  </section>

  <?php
  echo $tmp->generateFooter();
  ?>

</body>

</html>