<!DOCTYPE html>
<!--
This application is property of Otema and is licenced under otema ©2017
No part of it whatsoever shall be shared or used unless under written permission by Otema
A breech of this may lead to prosecution.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin|Home</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> 
            addEventListener("load", function() { 
                setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ 
                window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link href="../resources/css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- js -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- //js -->
        <link href="../resources/css/flexslider.css" rel="stylesheet" type="text/css"/>
        <!-- font-awesome-icons -->
        <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-40923671-1', 'lakehub.co.ke');
            ga('send', 'pageview');

        </script>
    </head>
    <body>
        <div id="container">
            <img src="../resources/images/msu_banner2.png" class="image-responsive header-image"/>
            <h1 class="text-center text-primary header-text">Welcome to the Admin portal!</h1>
        </div>
        <div class="rows">
            <div class="col-sm-6 col-md-3"></div>
            <div class="col-sm-6 col-md-7 login">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="uname">User name</label>
                        <input type="text" class="form-control" id="uname"autocomplete="on" placeholder="Enter your user name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" id="pwd" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
