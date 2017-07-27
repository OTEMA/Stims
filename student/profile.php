<?php
session_start();


if ($_SESSION['logged_in'] != 1) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
    header("location: ../Controller/error.php");
} else {

    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Welcome <?= $first_name . ' ' . $last_name ?></title>
        <link rel="shortcut icon" href="../resources/images/student-portal_icon.png"  type="image/x-icon"/>
        <link href="../resources/css/Appearance.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href="../resources/css/Style.css" rel="stylesheet" type="text/css"/>
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
        <style>
            ul li{
                text-decoration: none;
                list-style: none;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid header">
            <p>
                <?php
// Display message about account verification link only once
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];

                    // Don't annoy the user with more messages upon page refresh
                    unset($_SESSION['message']);
                }
                ?>
            </p>

            <?php
            // Keep reminding the user this account is not active, until they activate
            if (!$active) {
                echo
                '<div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              <a href="verify.php">Verify now</>
              </div>';
            }
            ?>
        </div>
        <div class="navbar navbar-inverse navbar-static-top" data-spy="affix" data-offset-top="197" style="width: 100%; margin-top: -3.2px; padding: 0;">
            <div class="container">
                <a href="http://www.maseno.ac.ke" class="navbar-brand">HI <?php echo $first_name . ' ' ?></a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="../resources/images/pROPHILE.png" alt="Prophile" class="image-responsive icon"/> <b class="glyphicon glyphicon-wrench"></b></a>
                            <ul class="dropdown-menu tab-group">
                                <li><a href="profile.php"> <img src="../resources/images/Setting.png" alt="Admin Login" class="image-responsive icon"/><i>Update Profile</i></a></li>
                                <li class="divider"></li>
                                <li><a href="student/index.php"> <img src="../resources/images/student-xxl.png" alt="Student Login" class="image-responsive icon"/><i>Change Password</i></a></li>
                            </ul>
                        </li>
                        <li><a href="../Controller/logout.php"><button class="btn-danger btn" value="LogOut">LogOUT</button></a></li>
                    </ul>
                    <img src="" alt=""/>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3 well">
<li class="active"><a href="index.html"><img src="../resources/images/Home.ico" alt="Home" class="image-responsive icon"/><b>Home</b></a></li>
<li class="active"><a href="index.html"><img src="../resources/images/result.jpg" alt="Results" class="image-responsive icon"/><b>Results</b></a></li>
                </div>
                <div class="col-sm-8 col-md-9 well">

                </div>
            </div>

        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../resources/js/index.js"></script>

    </body>
</html>
