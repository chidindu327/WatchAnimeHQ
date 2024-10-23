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
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Rock+Salt&display=swap"
    rel="stylesheet" />

  <title>WatchAnimeHQ - Contact Us</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>
  <!-- Preloader -->
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

  <!-- Header Area -->
  <?php
  include "inc/nav.php";
  ?>

  <!-- Page Heading -->
  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Page Section -->
  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Say Hello, Anime Fans!</h2>
            </div>
            <p>
              Welcome to WatchAnimeHQ, your one-stop hub for all things anime.
              Drop us a message if you have any questions or feedback!
            </p>
            <ul>
              <li><span>Address</span> Anime City, Tokyo, Japan</li>
              <li><span>Phone</span> +234-904-1657-689</li>
              <li><span>Email</span> watchanimehq@gmail.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=Tokyo"
                    width="100%"
                    height="325px"
                    frameborder="0"
                    style="border: 0; border-radius: 23px"
                    allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    
                    <div class="col-lg-6">
                      <fieldset>
                        <input
                          type="subject"
                          name="subject"
                          id="subject"
                          placeholder="Subject..."
                          autocomplete="on" />
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea
                          name="message"
                          id="message"
                          placeholder="Your Message"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button
                          type="submit"
                          id="form-submit"
                          class="anime-button">
                          Send Message Now
                        </button>
                        <!-- Styled Button -->
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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