<?php
require 'modules/sessions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
</head>
<body>


    <section class="min-vh-100" style="background-image: url(assets/images/main-bg.jpg); background-size: cover;">
        <div class="min-vh-100 w-100 d-flex justify-content-center align-items-center">
        <div class="card border-0 shadow-lg" style="min-width: 400px;">
               
                <?php success_msg(); error_msg();?>
                <form action="app/register_control" method="post">
                    <h3 class="text-center py-2">
                        Create an Account
                    </h3>

                    <div class="card-body">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" id="name" class="form-control mb-3">

                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control mb-3">

                        <label for="passsword">Password:</label>
                        <input type="password" name="password" id="password"  class="form-control mb-3">

                        <label for="confirm">Confirm Password:</label>
                        <input type="password" id="confirm" name="confirm" class="form-control mb-3">

                        <div class="text-center mb-2">
                            <button class="btn btn-primary" name="register">
                                Sign Up
                            </button>
                        </div>

                        <p>
                           Already have an account? <a href="index">Sign In </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>