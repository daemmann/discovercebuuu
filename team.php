<?php
include 'db_connection.php';
session_start();
if (!empty($_SESSION)) {
  $name = $_SESSION["name"];
  $id = $_SESSION["id"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Discover Cebu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">



      <!-- <h1 class="logo me-auto"><a href="index.php">Cicerone</a></h1> -->
      <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/logo.jpg" alt=" "></a></h1>



      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="team.php">Team</a></li>



            </ul>
          </li>
          <li><a href="portfolio.php">Discover</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if (!isset($name)) {
            echo  "<li><a href='login.php' class='getstarted'>Sign In</a></li>";
          } else {


            $sql = "SELECT * FROM users where id='$id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                $img = $row['img'];
              }
            } else {
              echo "0 results";
            }


            echo '<li class="nav-item dropdown style=">
        
            <img src="' . 'assets/img/user/' . $img . '" style="border-radius: 50%; width: 50px; height:50px;">
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </li>';
          }

          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Team</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Our Project Team</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/weweng2.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Emmanuel A. Danuco II</h4>
                <p>USTP-Claveria Student.</p>
                <div class="social">
                  <a href="https://facebook.com/daemmann"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/daemmann"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team//ketchie2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ketchie Cuizon</h4>
                <p>USTP-Claveria Student.</p>
                <div class="social">
                  <a href="https://www.facebook.com/profile.php?id=100068943309903"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/misschinguu"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team//boboy2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ronuel Jay A. Matugas</h4>
                <p>USTP-Claveria Student.</p>
                <div class="social">
                  <a href="https://www.facebook.com/ronueljay.matugas"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/ronuelmatugas_"><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-6 mt-4">

          </div>
          <div class="col-lg-6 mt-4">

          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>DISCOVER CEBU</h3>
              <p>
                Poblacion, Claveria<br>
                Misamis Oriental<br><br>
                <strong>Phone:</strong> +6399444121491<br>
                <strong>Phone:</strong> +639300825662<br>
                <strong>Phone:</strong> +639948337158<br>
                <strong>Email:</strong> discovercebu2024@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.twitter.com/_discovercebu" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/people/Discover-Cebu/61560497165291/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/_discovercebu" class="instagram"><i class="bx bxl-instagram"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Details</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://mail.google.com/mail/ ">Mail us</a></li>

            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Discover Cebu</span></strong>. All Rights Reserved
      </div>

    </div>
    <div class="container">
      <div class="copyright">
        <strong><span>Disclaimer</span></strong><br>This website is created and maintained for educational purposes only. <br>It is intended to be used as part of a school project and is not intended for commercial use.
      </div>

    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>