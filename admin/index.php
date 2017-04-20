<?php
require '../Controller/db.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin|Sign-Up/Login Form</title>
        <link rel="shortcut icon" href="../resources/images/student-portal_icon.png"  type="image/x-icon"/>
        <link href="../resources/css/Appearance.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <!--  JavaScript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments);
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-40923671-1', 'websiteurl');
            ga('send', 'pageview');
        </script>
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
            <ul class="tab-group">
                <li class="tab"><a href="#signup">Sign Up</a></li>
                <li class="tab active"><a href="#login">Log In</a></li>
            </ul>
            <div class="tab-content">
                <div id="login">   
                    <h1 style="color: #FFFFFF;">Welcome Back!</h1>

                    <form action="index.php" method="post">

                        <div class="field-wrap">
                            <label>
                                Staff Number<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="on" name="Staffno" style="color: #FFFFFF;" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Password
                                <span class="req">*</span>
                            </label>
                            <input type="password" required autocomplete="off" name="password" style="color: #FFFFFF;" />
                        </div>

                        <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

                        <button class="button button-block" name="login" />Log In</button>
                    </form>
                </div>
                <div id="signup">   
                    <h1 style="color: #FFFFFF;">Sign Up Here</h1>

                    <form action="index.php" method="post">

                        <div class="top-row">
                            <div class="form-group field-wrap">
                                <label>
                                    First Name<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="on" name='firstname' style="color: #FFFFFF;" />
                            </div>
                            <div class="form-group field-wrap">
                                <label>
                                    Middle Name<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="on" name='Mname' style="color: #FFFFFF;" />
                            </div>                                                    
                        </div>
                        <div class="form-group field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text"required autocomplete="on" name='lastname' style="color: #FFFFFF;" />
                        </div>
                        <div class="middle-row">
                            <div class="form-group field-wrap">
                                <label>
                                    Staff ID<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="on" name='Staffno' style="color: #FFFFFF;" />
                            </div>
                            <div class="form-group field-wrap">
                                <label>
                                    National ID<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="on" name='IdNo' style="color: #FFFFFF;" />
                            </div>
                        </div>
                        <div class="center-row">
                            <div class="form-group field-wrap">
                                <label>
                                    Telephone Number<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="on" name='Tel' style="color: #FFFFFF;"/>
                            </div>
                            <div class="form-group field-wrap">
                                <label>
                                    Email Address<span class="req">*</span>
                                </label>
                                <input type="email"required autocomplete="on" name='email' style="color: #FFFFFF;" />
                            </div>
                        </div>
                        <div class="bottom-row">
                            <div class="form-group field-wrap">
                                <label>
                                    Set A Password<span class="req">*</span>
                                </label>
                                <input type="password"required autocomplete="off" name='password' id="pwd" style="color: #FFFFFF;" />
                            </div>
                            <div class="form-group field-wrap">
                                <label>
                                    Confirm Password<span class="req">*</span>
                                </label>
                                <input type="password" required autocomplete="off" name='PWD' id="cpwd" style="color: #FFFFFF;" onkeypress="passwordChecker()" onkeyup="passwordChecker()" />
                            </div>
                        </div>
                        <button type="submit" class="button button-block" name="register" />Register</button>
                    </form>
                </div>  
            </div><!-- tab-content -->
        </div> <!-- /form -->
        <div class="slideleft1">
            <p><img src="../resources/images/maseno20university.png" alt="Maseno Logo" class="image-responsive copyright-image"/> All rights reserved © <span id="year"></span> Lamo.<img src="../resources/images/maseno20university.png" alt="Maseno Logo" class="image-responsive copyright-image"/>
            </p>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../resources/js/index.js"></script>
        <script src="../resources/js/Copyright.js" type="text/javascript"></script>
    </body>
</html>
