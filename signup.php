<?php
include "inc/controller.php";
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
        body {
            font-family: 'Poppins', sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2>Register Now</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="signupName" class="form-label">Firstname</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="signupLastName" class="form-label">Lastname</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-3">
                    <label for="signupEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="signupPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                </div>
                <input type="submit" name="register" value="Register" class="btn btn-primary w-100">
                
                <?php
                if (isset($_POST['register'])) {
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $phone = $_POST["phone"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    $sql = "INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`)
                            VALUES (NULL, '$firstname', '$lastname', '$phone', '$email', '$password')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<div class='alert alert-success mt-3'>New User Added Successfully!</div>";
                    } else {
                        echo "<div class='alert alert-danger mt-3'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                    }
                }
                ?>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
