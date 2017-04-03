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
            ga('create', 'UA-40923671-1', 'lakehub.co.ke');
            ga('send', 'pageview');
        </script>
    </head>
    <body>
        <div class="container">

            <h1>Welcome</h1>

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
              </div>';
                }
                ?>
            <h2><?php echo $first_name . ' ' . $last_name; ?></h2>
            <p><?= $email ?></p>
            <img src="../resources/images/msu_banner2.png" class="image-responsive header-image"/>
            <h1 class="text-center text-primary header-text">Welcome to the results portal!</h1>
        </div>
        <div class="navbar navbar-inverse navbar-static-top" data-spy="affix" data-offset-top="197" style="width: 100%; margin-top: -3.2px; padding: 0;">
            <div class="container">
                <a href="http://www.maseno.ac.ke" class="navbar-brand">Online Results </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html"><img src="resources/images/home.ico" alt="Home" class="image-responsive icon"/><b>Home</b></a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="resources/images/login.png" alt="Login" class="image-responsive icon"/> <b class="caret">Login</b></a>
                            <ul class="dropdown-menu">
                                <li><a href="admin/index.php"> <img src="resources/images/admin.png" alt="Admin Login" class="image-responsive icon"/><i>Admin Login</i></a></li>
                                <li class="divider"></li>
                                <li><a href="student/index.php"> <img src="resources/images/student-xxl.png" alt="Student Login" class="image-responsive icon"/><i>Student Login</i></a></li>
                            </ul>
                        </li>
                        <li> <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a></li>
                    </ul>
                </div>
            </div>


        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>

    </body>
</html>
