<?php
include "inc/controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <title>Watch Anime HQ - Anime List</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css" />
  <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css" />
  <link rel="stylesheet" href="assets/css/owl.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
 <?php
 include "inc/css.php";
 ?>
</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php
  include "inc/nav.php";
  ?>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Anime List</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Anime List</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".action">Action</a>
        </li>
        <li>
          <a href="#!" data-filter=".adventure">Adventure</a>
        </li>
        <li>
          <a href="#!" data-filter=".romance">Romance</a>
        </li>
        <li>
          <a href="#!" data-filter=".comedy">Comedy</a>
        </li>
      </ul>
      <div class="row trending-box">
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 action">
          <div class="item">
            <div class="thumb" style="  background-image: url('https://static1.srcdn.com/wordpress/wp-content/uploads/2022/01/attack-on-titan-warrior-characters-season-4.jpg');">
              <a href="product-details.html"></a> <!-- Link remains, but no image tag needed -->
            </div>
            <div class="down-content">
              <span class="category">Action</span>
              <h4>Attack on Titan</h4>
              <a href="product-details.html"><i class="fa fa-info-circle"></i></a>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 adventure">
        <div class="item">
          <div class="thumb">
            <a href="product-details.html"></a>
          </div>
          <div class="down-content">
            <span class="category">Adventure</span>
            <h4>One Piece</h4>
            <a href="product-details.html"><i class="fa fa-info-circle"></i></a>
          </div>
        </div>
      </div>
      <div
        class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 romance">
        <div class="item">
          <div class="thumb">
            <a href="product-details.html"><img src="assets/images/anime-03.jpg" alt="" /></a>
          </div>
          <div class="down-content">
            <span class="category">Romance</span>
            <h4>Your Lie in April</h4>
            <a href="product-details.html"><i class="fa fa-info-circle"></i></a>
          </div>
        </div>
      </div>
      <div
        class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 comedy">
        <div class="item">
          <div class="thumb">
            <a href="product-details.html"><img src="assets/images/anime-04.jpg" alt="" /></a>
          </div>
          <div class="down-content">
            <span class="category">Comedy</span>
            <h4>KonoSuba</h4>
            <a href="product-details.html"><i class="fa fa-info-circle"></i></a>
          </div>
        </div>
      </div>
      <!-- Add more anime items as needed -->
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
          <li><a href="#">1</a></li>
          <li><a class="is_active" href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#"> &gt; </a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>
          Copyright © 2048 Watch Anime HQ. All rights reserved. &nbsp;&nbsp;
          <!-- <a rel="nofollow" href="https://templatemo.com" target="_blank"
              >Design: TemplateMo</a
            > -->
        </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>