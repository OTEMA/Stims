<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
  <link href="../resources/css/Appearance.css" rel="stylesheet" type="text/css"/>
  <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!--  JavaScript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <h1 style="color: #FFFFFF;">Thanks for stopping by</h1>
              
        <p style="color: #1ab188;"><?= 'You have been logged out!'; ?></p>
          
          <a href="../index.php"><button class="button button-block"/>Home</button></a>

    </div>
</body>
</html>
