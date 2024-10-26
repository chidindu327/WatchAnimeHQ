<?php
session_start();
include "inc/controller.php";
include "inc/dp.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <title>WatchAnimeHQ - Your Anime Hub</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        /* Background image styling */
        body {
            background-image: url('https://preview.redd.it/5n8hs34ztzk61.png?auto=webp&s=b4c157aad0208ab41409e5c73dc0e3bcfa512cef');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        /* Login form styling */
        .login-container {
            background-color: rgba(27, 38, 59, 0.85); /* Semi-transparent dark overlay */
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            color: #ffffff;
        }

        .form-control {
            background-color: #0d1b2a;
            color: #ffffff;
            border: 1px solid #415a77;
        }

        .form-control:focus {
            border-color: #1d7ea6;
            box-shadow: 0 0 5px rgba(29, 126, 166, 0.6);
        }

        .btn-success {
            background-color: #1d7ea6;
            border: none;
        }

        .btn-success:hover {
            background-color: #184e77;
        }

        .alert-danger {
            color: #ff6b6b;
            background-color: #4e2e2e;
            border: 1px solid #ff6b6b;
        }
    </style>
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
    <div class="login-container">
        <h2 class="text-center mb-4">Welcome Back</h2>
        <h2 class="text-center mb-4">Login</h2>
        <form method="post">
            <div class="mb-3">
                <label for="signupEmail" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Add your email" required>
            </div>
            <div class="mb-3">
                <label for="signupPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Add your password" required>
            </div>
            <input type="submit" name="login" value="Login" class="btn btn-success w-100">
            
            <?php
            if (isset($_POST['login'])) {
                @$email = $_POST['email'];
                @$password = $_POST['password'];

                // Query the database to find the user by email
                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = $conn->query($sql);

                // Check if a user with that email exists
                if ($result->num_rows > 0) {
                    // Fetch the user's data from the database
                    $user = $result->fetch_assoc();

                    // Verify if the entered password matches the password in the database
                    if ($password == $user['password']) {
                        // Store email in session
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['username'] = $user['username'];
                        $_SESSION['full_name'] = $user['full_name'];
                        $_SESSION['users_id'] = $user['users_id'];

                        // Redirect the user to the homepage
                        header("location: welcome.php");
                        exit;
                    } else {
                        echo '<div class="alert alert-danger mt-3">Invalid password</div>';
                    }
                } else {
                    echo '<div class="alert alert-danger mt-3">No user found with that email</div>';
                }
            }
            ?>
        </form>
    </div>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
