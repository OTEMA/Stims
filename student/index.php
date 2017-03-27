<?php
/* Main page with two forms: sign up and log in */
require '../Controller/db.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign-Up/Login Form</title>
        <link href="../resources/css/Appearance.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!--  JavaScript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['login'])) { //user logging in
            require 'login.php';
        } elseif (isset($_POST['register'])) { //user registering
            require 'register.php';
        }
    }
    ?>
    <body>
        <div class="form">
                             
                    <h1>Welcome Back!</h1>

                    <form action="index.php" method="post" autocomplete="off">

                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" required autocomplete="off" name="email"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password" required autocomplete="off" name="password"/>
                        </div>

                        <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

                        <button class="button button-block" name="login" />Log In</button>

                    </form>
                          
            </div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../resources/js/index.js"></script>

</body>
</html>
