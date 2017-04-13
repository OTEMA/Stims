<?php
/* Main page with two forms: sign up and log in */
require '../Controller/db.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
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
        <body>
        <div class="form">
            <h1 style="color: #ffffff; font-family: vietnamese Serif;">Welcome Back!</h1>
            <h2 class="text-danger" style="font-family: vietnamese Serif; font-size: 14px;"><b style="font-size: 16px;">For first time Login</b>, use your National identity number as password but <b style="font-size: 16px;"> incase you have no Id yet</b>, use your admission number</h2>>
            <form action="login.php" method="post" autocomplete="off">
                <div class="field-wrap">
                    <label>
                        Admission Number<span class="req">*</span>
                    </label>
                    <input type="email" required autocomplete="on" name="email" style="color: #ffffff;"/>
                </div>
                <div class="field-wrap">
                    <label>
                        Password<span class="req">*</span>
                    </label>
                    <input type="password" required autocomplete="off" name="password" style="color: #ffffff;"/>
                </div>
                <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>
                <button class="button button-block" name="login" />Log In</button>
            </form>
                       </div> <!-- /form -->
         <div class="slideleft">
                <p><img src="../resources/images/maseno20university.png" alt="Maseno Logo" class="image-responsive copyright-image"/> All rights reserved © <span id="year"></span> Lamo.<img src="../resources/images/maseno20university.png" alt="Maseno Logo" class="image-responsive copyright-image"/>
                </p>
            </div> 
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../resources/js/Copyright.js" type="text/javascript"></script>
        <script src="../resources/js/index.js" type="text/javascript"></script>
    </body>
</html>