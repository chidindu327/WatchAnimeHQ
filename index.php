<?php
include "inc/controller.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <title>WatchAnimeHQ - Your Anime Hub</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
  </head>

  <body>
    <!-- Preloader Start -->
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
    <!-- Preloader End -->

    <!-- Header Area Start -->
    <?php 
    include "inc/nav.php";
    ?>
    <!-- Header Area End -->

    <!-- Main Banner Section Start -->
    <div class="main-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 align-self-center">
            <div class="caption header-text">
              <h6>Welcome to WatchAnimeHQ</h6>
              <h2>Your Ultimate Anime Streaming Site!</h2>
              <p>
                Discover a world of your favorite anime, from classic series to
                the latest releases. Join us and immerse yourself in anime
                magic!
              </p>
              <div class="search-input">
                <form id="search" action="#">
                  <input
                    type="text"
                    placeholder="Search for anime..."
                    id="searchText"
                    name="searchKeyword"
                    onkeypress="handle"
                  />
                  <button role="button">Search Now</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-2">
            <div class="right-image">
              <img src="assets/images/anime-banner.jpg" alt="Anime Banner" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Banner Section End -->

    <!-- Features Section Start -->
    <div class="features">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <a href="#">
              <div class="item">
                <div class="image">
                  <img
                    src="assets/images/featured-anime-01.png"
                    alt=""
                    style="max-width: 44px"
                  />
                </div>
                <h4>Free Streaming</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="#">
              <div class="item">
                <div class="image">
                  <img
                    src="assets/images/featured-anime-02.png"
                    alt=""
                    style="max-width: 44px"
                  />
                </div>
                <h4>Latest Releases</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="#">
              <div class="item">
                <div class="image">
                  <img
                    src="assets/images/featured-anime-03.png"
                    alt=""
                    style="max-width: 44px"
                  />
                </div>
                <h4>HD Quality</h4>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6">
            <a href="#">
              <div class="item">
                <div class="image">
                  <img
                    src="assets/images/featured-anime-04.png"
                    alt=""
                    style="max-width: 44px"
                  />
                </div>
                <h4>Multi-Device</h4>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Features Section End -->

    <!-- Trending Anime Section Start -->
    <div class="section trending">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-heading">
              <h6>Trending</h6>
              <h2>Trending Anime</h2>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="main-button">
              <a href="anime-list.html">View All</a>
            </div>
          </div>
          <!-- Trending Anime List -->
          <div class="col-lg-3 col-md-6">
            <div class="item">
              <div class="thumb">
                <a href="anime-details.html"
                  ><img src="assets/images/trending-anime-01.jpg" alt=""
                /></a>
              </div>
              <div class="down-content">
                <span class="category">Action</span>
                <h4>My Hero Academia</h4>
                <a href="currently.php"
                  ><i class="fa fa-info-circle"></i
                ></a>
              </div>
            </div>
          </div>
          <!-- Additional anime items here -->
        </div>
      </div>
    </div>
    <!-- Trending Anime Section End -->

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="col-lg-12">
          <p>Copyright © 2024 WatchAnimeHQ. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
