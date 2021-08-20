<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ADGECO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="lib/alertify/css/alertify.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/alertify.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/default.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/default.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/semantic.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/semantic.rtl.min.css">-->

  <link rel="stylesheet" type="text/css" href="lib/jquery_upload/css/uploadfile-v3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">

          <h1 class="logo mr-auto"><a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"> ADGECO</a></h1>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#intro">Inicio</a></li>
              <li><a href="#about">Acerca de</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="#portfolio">Portafolio</a></li>
              <li><a href="#clients">Clientes</a></li>
              <li><a href="#team">Equipo</a></li>
              <li><a href="#contact">Contacto</a></li>

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= IMPORT PHP ======= -->
  <?php include 'data/conexion.php'; ?>
  <?php include 'api/adm_index.php'; ?>
  <!-- ======= END IMPORT PHP ======= -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <?php
          if (is_array($arrHome) && (count($arrHome) > 0)) {
            reset($arrHome);
            foreach ($arrHome as $rTMP['key'] => $rTMP['value']) { ?>

              <div class="carousel-item <?php echo  $rTMP["value"]['coment']; ?>" style="background-image: url(<?php echo  $rTMP["value"]['img']; ?>)">
                <div class="carousel-container">
                  <div class="container">
                    <h2 class="animate__animated animate__fadeInDown"><?php echo  $rTMP["value"]['title']; ?></h2>
                    <p class="animate__animated animate__fadeInUp"><?php echo  $rTMP["value"]['content']; ?></p>

                  </div>
                </div>
              </div>

          <?PHP
            }
          }

          ?>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>Acerca de</h3>
          <p><?php echo  $inf_general; ?></p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo  $img_mision; ?>" alt="" class="img-fluid">
                <div class="icon"><?php echo  $ico_mision; ?></div>
              </div>
              <h2 class="title"><a href="#"><?php echo  $title_mision; ?></a></h2>
              <p>
                <?php echo  $content_mision; ?> </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo  $img_plan; ?>" alt="" class="img-fluid">
                <div class="icon"><?php echo  $ico_plan; ?></div>
              </div>
              <h2 class="title"><a href="#"><?php echo  $title_plan; ?></a></h2>
              <p>
                <?php echo  $content_plan; ?> </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img src="<?php echo  $img_vision; ?>" alt="" class="img-fluid">
                <div class="icon"><?php echo  $ico_vision; ?></div>
              </div>
              <h2 class="title"><a href="#"><?php echo  $title_vision; ?></a></h2>
              <p>
                <?php echo  $content_vision; ?> </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>Servicios</h3>
          <p><?php echo  $content_gen; ?></p>
        </header>

        <div class="row">
          <?php
          if (is_array($arrService) && (count($arrService) > 0)) {
            reset($arrService);
            foreach ($arrService as $rTMP['key'] => $rTMP['value']) {
          ?>
              <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><?php echo  $rTMP["value"]['ico']; ?></div>
                <h4 class="title"><a href=""><?php echo  $rTMP["value"]['titulo']; ?></a></h4>
                <p class="description"><?php echo  $rTMP["value"]['content']; ?></p>
              </div>
          <?php
            }
          }
          ?>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container text-center" data-aos="zoom-in">
        <h3><?php echo  $title; ?></h3>
        <p> <?php echo  $content; ?></p>
        <a class="cta-btn" href="<?php echo  $url; ?>"><?php echo  $boton; ?></a>
      </div>
    </section><!-- End Call To Action Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Portafolio</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class=" col-lg-12">
            <ul id="portfolio-flters">
              <?php
              if (is_array($arrMenuPorfolio) && (count($arrMenuPorfolio) > 0)) {
                reset($arrMenuPorfolio);
                foreach ($arrMenuPorfolio as $rTMP['key'] => $rTMP['value']) {

                  if ($rTMP["value"]['abreviatura'] == '*') {
              ?>
                    <li data-filter="<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
                  <?php
                  } else {
                  ?>
                    <li data-filter=".<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
              <?php
                  }
                }
              }
              ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php
          if (is_array($arrPorfolio) && (count($arrPorfolio) > 0)) {
            reset($arrPorfolio);
            foreach ($arrPorfolio as $rTMP['key'] => $rTMP['value']) {
          ?>

              <div class="col-lg-4 col-md-6 portfolio-item <?php echo  $rTMP["value"]['abreviatura']; ?>">
                <div class="portfolio-wrap">
                  <figure>
                    <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
                    <a href="<?php echo  $rTMP["value"]['img']; ?>" data-lightbox="portfolio" data-title="<?php echo  $rTMP["value"]['tittle']; ?>" class="link-preview"><i class="ion ion-eye"></i></a>
                    <a href="<?php echo  $rTMP["value"]['url']; ?>" class="link-details"><i class="ion ion-android-open"></i></a>
                  </figure>

                  <div class="portfolio-info">
                    <h4><a href="<?php echo  $rTMP["value"]['url']; ?>"><?php echo  $rTMP["value"]['tittle']; ?></a></h4>
                    <p><?php echo  $rTMP["value"]['content']; ?></p>
                  </div>
                </div>
              </div>

          <?php
            }
          }
          ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Clientes</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <?php
          if (is_array($arrClients) && (count($arrClients) > 0)) {
            reset($arrClients);
            foreach ($arrClients as $rTMP['key'] => $rTMP['value']) {
          ?>
              <img src="<?php echo  $rTMP["value"]['img']; ?>" alt="">
          <?php
            }
          }
          ?>
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>Equipo</h3>
        </div>

        <div class="row">

          <?php
          if (is_array($arrTeam) && (count($arrTeam) > 0)) {
            reset($arrTeam);
            foreach ($arrTeam as $rTMP['key'] => $rTMP['value']) {
          ?>
              <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4><?php echo  $rTMP["value"]['title']; ?></h4>
                      <span><?php echo  $rTMP["value"]['descrip']; ?></span>
                      <div class="social">
                        <?php if ($rTMP["value"]['twitter']) { ?>
                          <a href="<?php echo  $rTMP["value"]['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                        <?php } ?>

                        <?php if ($rTMP["value"]['facebook']) { ?>
                          <a href="<?php echo  $rTMP["value"]['facebook']; ?>"><i class="fa fa-facebook"></i></a>
                        <?php } ?>

                        <?php if ($rTMP["value"]['google']) { ?>
                          <a href="<?php echo  $rTMP["value"]['google']; ?>"><i class="fa fa-google-plus"></i></a>
                        <?php } ?>

                        <?php if ($rTMP["value"]['link']) { ?>
                          <a href="<?php echo  $rTMP["value"]['link']; ?>"><i class="fa fa-linkedin"></i></a>
                        <?php } ?>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

          <?php
            }
          }
          ?>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>Contacto</h3>
          <p><?php echo  $descrip; ?></p>

          <div class="map-responsive">
            <?php echo  $ubi; ?>
          </div>
        </div>


        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>DIRECCION</h3>
              <address><?php echo  $dress; ?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>TELEFONO</h3>
              <p><a><?php echo  $telefono; ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>CORREO ELECTRONICO</h3>
              <p><a href="mailto:<?php echo  $mail; ?>"><?php echo  $mail; ?></a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="phpmailer/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>ADGECO</h3>
            <p>DESCRIPCION DE LA PAGINA WEB</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>OFICINAS</h4>
            <p>
              14 AV 13-1 Z 19 <br>
              <strong>TELEFONO:</strong> +1 5589 55488 55<br>
              <strong>CORREO:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SPI</strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="">SERVICIOS PROFECIONALES DE INFORMATICA</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->


  <style>
    .map-responsive {
      overflow: hidden !important;
      padding-bottom: 56.25% !important;
      position: relative !important;
      height: 0 !important;
    }

    .map-responsive iframe {
      left: 0 !important;
      top: 0 !important;
      height: 100% !important;
      width: 100% !important;
      position: absolute !important;
    }
  </style>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Font Osome -->
  <script src="https://kit.fontawesome.com/ed422f1332.js" crossorigin="anonymous"></script>

  <!-- ALERTS MODAL JS -->
  <script src="lib/alertify/alertify.js"></script>
  <script src="lib/alertify/alertify.min.js"></script>
  <!-- SEC  JS -->
  <!-- UPLOAD -->
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.form.js"></script>
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.uploadfile.js"></script>

</body>

</html>