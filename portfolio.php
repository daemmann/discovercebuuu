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

  <title>Discover</title>
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
          <h2>Discover</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Discover</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


    <div class="carousel-container text-center mt-5 ">
      <div class="container">
        <h1 class="animate__animated animate__fadeInDown display-3 text-uppercase fw-bold">Tour places of<spam style="color:#d9232d"> Cebu</spam>
        </h1>
      </div>
    </div>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter=".filter-card" class="filter-active">Cebu Adventures</li>
              <li data-filter=".filter-app" class="filter-active">Cebu Landmarks</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://cebucitytour.com/cebu-destinations/cebu-magellans-cross/')">
            <a href="https://cebucitytour.com/cebu-destinations/cebu-magellans-cross/">
              <div class="portfolio-wrap">
                <img src="assets/img/sites/magellan.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Magellan Cross</h4>
                  <p>Cebu</p>
                  <div class="portfolio-links">
                    <a href="https://cebucitytour.com/cebu-destinations/cebu-magellans-cross/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/basilica-minore-del-santo-nino')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/basilicachurch.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Minor Basilica of the Holy Child of Cebu</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/basilica-minore-del-santo-nino" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/temple-of-leah')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/templeofleah.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Temple of Leah</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/temple-of-leah" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/sirao-flower-farm')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/siraoflower.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sirao Garden</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/sirao-flower-farm" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://www.spot.ph/arts-culture/the-latest-arts-culture/90581/history-behind-jesuit-house-in-cebu-hidden-by-a-warehouse-a1197-20220928-lfrm')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/jesuithouse.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>1730 Jesuit House</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://www.spot.ph/arts-culture/the-latest-arts-culture/90581/history-behind-jesuit-house-in-cebu-hidden-by-a-warehouse-a1197-20220928-lfrm" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://steemit.com/travel/@sissyjill/the-monastery-of-the-holy-eucharist-or-lindogon-sibonga-southern-cebu-philippines')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/MonasteryoftheHolyEucharist.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Monastery of the Holy Eucharist</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://steemit.com/travel/@sissyjill/the-monastery-of-the-holy-eucharist-or-lindogon-sibonga-southern-cebu-philippines" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/museo-sugbo')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/museumcebu.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Museo Sugbo</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/museo-sugbo" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/mactan-shrine')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/ceburentacarmactan.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mactan Shrine</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/mactan-shrine" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/10000-roses-cafe-more')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/roses.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>10,000 Roses of Cebu</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/10000-roses-cafe-more" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://www.holidify.com/places/cebu-city/tops-lookout-sightseeing-1257475.html')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/topslookout.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tops Lookout</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://www.holidify.com/places/cebu-city/tops-lookout-sightseeing-1257475.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/fort-san-pedro')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/fortsanpedro.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Fort San PEdro</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/fort-san-pedro" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/heritage-of-cebu-monument')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/monument.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>The Heritage of Cebu Monument</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/heritage-of-cebu-monument" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/pescador-island')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/pecador.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pecador Island</h4>
                <p>Southern Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/pescador-island" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://www.booking.com/hotel/ph/oslob-whale-shark-resort.html')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/whaleshark.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Oslob Whale Shark Resort</h4>
                <p>Looc, Oslob, Cebu</p>
                <div class="portfolio-links">

                  <a href="https://www.booking.com/hotel/ph/oslob-whale-shark-resort.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://thewanderingitinerant.wordpress.com/2021/08/22/carnaza-island-still-a-paradise-amidst-covid-19/')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/carnaza.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Carnaza Island</h4>
                <p>Visayan Sea Cebu</p>
                <div class="portfolio-links">

                  <a href="https://thewanderingitinerant.wordpress.com/2021/08/22/carnaza-island-still-a-paradise-amidst-covid-19/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://www.journeyera.com/sumilon-island-sandbar-resort/')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/sumilon.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sumilon Island Sandbar</h4>
                <p>Southeastern Coast of Cebu Island</p>
                <div class="portfolio-links">

                  <a href="https://www.journeyera.com/sumilon-island-sandbar-resort/" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://www.tripadvisor.com.ph/Attraction_Review-g3360199-d3262157-Reviews-Bojo_River-Aloguinsan_Cebu_Island_Visayas.html')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/bojoriver.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bojo River Aloguinsan</h4>
                <p>Aloguinsan Cebu</p>
                <div class="portfolio-links">

                  <a href="https://www.tripadvisor.com.ph/Attraction_Review-g3360199-d3262157-Reviews-Bojo_River-Aloguinsan_Cebu_Island_Visayas.html" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://guidetothephilippines.ph/articles/ultimate-guides/malapascua-island-cebu-travel-guide')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/malapscua.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Malapascua Island</h4>
                <p>Island in Daanbantayan, Cebu</p>
                <div class="portfolio-links">

                  <a href="https://guidetothephilippines.ph/articles/ultimate-guides/malapascua-island-cebu-travel-guide" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/dao-waterfalls')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/DauFalls.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>DAO Falls</h4>
                <p>Cebu City</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/dao-waterfalls" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://somethingoffreedom.com/tumalog-falls-cebu/')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/Tumalog-Falls.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Tumalog Falls</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://somethingoffreedom.com/tumalog-falls-cebu/" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://guidetothephilippines.ph/trips-and-experiences/cebu-tours/cebu-private-full-day-ocean-park-anjo-world-theme-park-tour-transfers')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/anjopark.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4> Anjo World Theme Park</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/trips-and-experiences/cebu-tours/cebu-private-full-day-ocean-park-anjo-world-theme-park-tour-transfers" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://chillandtravel.com/cebu-ocean-park-guide/')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/oceanpark.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4> Cebu Ocean Park </h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://chillandtravel.com/cebu-ocean-park-guide/" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://camotesfreediving.com/about-camotes-island/')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/camotes.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4> Camotes Island</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://camotesfreediving.com/about-camotes-island/" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" onclick="goToLink('https://guidetothephilippines.ph/destinations-and-attractions/osmena-peak')">
            <div class="portfolio-wrap">
              <img src="assets/img/sites/osmenapark.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4> Osmeña Peak</h4>
                <p>Cebu</p>
                <div class="portfolio-links">
                  <a href="https://guidetothephilippines.ph/destinations-and-attractions/osmena-peak" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      </div>



      </div>

      </div>
    </section><!-- End Portfolio Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
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
  <script>
    function goToLink(url) {
      window.location.href = url;
    }
  </script>

</body>

</html>