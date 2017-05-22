<?php
require '../Controller/db.php';

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
            <h1 class="text-center text-primary header-text">Welcome <?php echo $first_name . ' ' . $last_name; ?>!</h1>
        </div>
        <div class="navbar navbar-inverse navbar-static-top" >
            <div class="container-fluid">
                <a href="../index.php" class="navbar-brand">STUDENT INFORMATION MANAGEMENT SYSTEM </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html"><img src="../resources/images/home.ico" alt="Home" class="image-responsive icon"/><b>Home</b></a></li>
                        <li><a href="Add_register.php"> <img src="../resources/images/registericon.png" alt="Student Login" class="image-responsive icon"/><b>Register a Student</b></a></li>
                        <li><button class="btn btn-block btn-success" onclick="ViewStudents()">View Students</button></li>
                        <li> <a href="../Controller/logout.php"><button class="btn btn-block btn-danger" name="logout"/>Log Out</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="std-details">
                
                    <?php
                    include 'studentsFn.php';
                    ?>
                
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../resources/js/index.js" type="text/javascript"></script>
        <script>
                            $(document).ready(function ViewStudents() {
                                if (document.getElementById('std-details').style.display === "none") {
                                    document.getElementById('std-details').style.display = "block";
                                }
                                else {
                                    document.getElementById('std-details').style.display = "none";
                                }
                            });
        </script>
    </body>
</html>
