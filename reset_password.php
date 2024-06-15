<?php
session_start();
require 'db_connection.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if token is valid
    $query = "SELECT * FROM users WHERE reset_token='$token' AND reset_token_expiry > NOW()";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
    } else {
        $_SESSION['message'] = "Invalid or expired token.";
        header("Location: login_signup.php");
        exit(0);
    }
} else {
    $_SESSION['message'] = "No token provided.";
    header("Location: login_signup.php");
    exit(0);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Reset Password</title>
  <!-- Add your other head elements here -->
</head>
<body>
<!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
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
      <h1 class="logo me-auto"><a href="index.php"><img src= "assets/img/logo.jpg" alt=" "></a></h1>

      

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
          <li><a href="login_signup.php" class="getstarted">Login || Signup</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Login or Signup</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="login_signup.php">Signup</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="carousel-container text-center mt-5 ">
            <div class="container">
              <h1 class="animate__animated animate__fadeInDown display-3 text-uppercase fw-bold">Log<spam style="color:#d9232d">in</spam> to Discover Cebu</h1>
            </div>
          </div>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Reset Password</h4>
          </div>
          <div class="card-body">
            <form action="update_password.php" method="POST">
              <input type="hidden" name="token" value="<?php echo $token; ?>">
              <div class="mb-3">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" required>
              </div>
              <div class="mb-3">
                <button type="submit" name="update_password" class="btn btn-primary">Update Password</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Your footer elements -->
</body>
</html>
