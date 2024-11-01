<?php
include '_dbconnect.php';
$sql2 = "SELECT * FROM user";
$result1 = mysqli_query($con, $sql2);
$num1 = mysqli_num_rows($result1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CV-HUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="img/logoFav.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="css/styels.css">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Butterfly - v4.8.1
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <div class="loader_bg">
    <div class="loader"></div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
         
          <li><a class="nav-link scrollto" href="#contact">Address</a></li>
          <li><a class="nav-link scrollto" href="login.php"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;&nbsp;Login/Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content jus">
          <h1>CV-HUB</h1>
          <h2>CV-HUB is a Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum, reiciendis possimus officiis quo perferendis odio dignissimos? Dolore reprehenderit corrupti aut porro dolores in quaerat est consectetur a exercitationem quidem soluta accusamus suscipit nostrum laborum possimus iure officiis quibusdam, repellendus qui.</h2>
          <div><a href="signup.php" class="btn-get-started scrollto">Get Started</a></div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
        <p>List of our services given below</p>        
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-crate-file" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Generate CV</a></h4>
              <p class="description">It is very user friendly</p><br>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-file" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Multiple CV Create</a></h4>
              <p class="description"> User </p>
            </div>
          </div>

         
          <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">24-hour Services</a></h4>
              <p class="description">Generate CV  24-hours anytime</p><br>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    

    

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
            <p> Meet our team</p>        
            </div>

        <div class="row">

          <div class="col-lg-3 col-md-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/E.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Khan Mohammad Emon</h4>
                <span>Full-Stack Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/B.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Bushra</h4>
                <span>Full-Stack Developer</span>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/S1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sahariar</h4>
                <span>Full-Stack Developer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="img/K.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Kibria</h4>
                <span>Back-End Developer</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Address</h2>
          <p>United City, Madani Avenue, Badda, Dhaka 1212</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?q=united%20international%20university&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>

        

      </div>
    </section><!-- End Contact Section -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between padfff border-bottom">
      <!-- Left -->
      
      <!-- Left -->
  
      <!-- Right -->
      
      <!-- Facebook -->
      <a
      class="btn btn-link btn-floating btn-lg text-dark m-1"
      href="#!"
      role="button"
      data-mdb-ripple-color="dark"
      ><i class="fab fa-facebook-f"></i
    ></a>
  
    <!-- Twitter -->
    <a
      class="btn btn-link btn-floating btn-lg text-dark m-1"
      href="#!"
      role="button"
      data-mdb-ripple-color="dark"
      ><i class="fab fa-twitter"></i
    ></a>
  
   
  
    <!-- Instagram -->
    <a
      class="btn btn-link btn-floating btn-lg text-dark m-1"
      href="#!"
      role="button"
      data-mdb-ripple-color="dark"
      ><i class="fab fa-instagram"></i
    ></a>
  
    <!-- Linkedin -->
    <a
      class="btn btn-link btn-floating btn-lg text-dark m-1"
      href="#!"
      role="button"
      data-mdb-ripple-color="dark"
      ><i class="fab fa-linkedin"></i
    ></a>
    <!-- Github -->
    <a
      class="btn btn-link btn-floating btn-lg text-dark m-1"
      href="#!"
      role="button"
      data-mdb-ripple-color="dark"
      ><i class="fab fa-github"></i></a>
      
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
            CV-HUB
            </h6>
            <p>
            CV-HUB is a Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum repellat repudiandae blanditiis adipisci molestiae officiis quam aut ex officia quidem.
            </p>
          </div>
          
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i> United City, Madani Avenue, Badda, Dhaka</p>
            <p>
              <i class="fas fa-envelope me-3 text-secondary"></i>
              cvhub@bscse.uiu.ac.bd
            </p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> 01571337468</p>
            
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Copyright:
      <a class="text-reset fw-bold" href="#">CV-HUB.COM</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        setTimeout(function(){
            $('.loader_bg').fadeToggle();
        }, 1500);
    </script>

</body>

</html>
