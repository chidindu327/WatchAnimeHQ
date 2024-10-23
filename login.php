<?php
session_start();
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
        href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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

    <form method="post">
        <div class="mb-3">
            <label for="signupPassword" class="form-label">Email</label>
            <input type="password" class="form-control" name="email" placeholder="Add your email" required>
        </div>
        <div class="mb-3">
            <label for="signupPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Add your password" required>
        </div>
        <input type="submit" name="login" value="Login" class="btn btn-success w-100">
        <?php
        if (isset($_POST['login']))
        $email = $_POST["email"];
        $password = $_POST["password"];


        $sql = "INSERT INTO `users` (`email`, `password`)
 VALUES ('$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "welcome $user";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        ?>
        <!-- Scripts -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>
</body>

</html>