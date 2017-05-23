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
 <html>
     <head>
         <meta charset="UTF-8">
         <title>Admin</title>
         <link rel="shortcut icon" href="../resources/images/student-portal_icon.png"  type="image/x-icon"/>
         <link href="../resources/css/Appearance.css" rel="stylesheet" type="text/css"/>
         <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
         <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
         <link href='http://fonts.googleapis.com/css?family=Titillium Web:400,300,600' rel='stylesheet' type='text/css'>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         <link href="../resources/css/Style.css" rel="stylesheet" type="text/css"/>
         <!--  JavaScript files-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
         <link href="//fonts.googleapis.com/css?family=Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
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
         <div class="navbar navbar-inverse navbar-static-top" data-spy="affix" data-offset-top="197" style="width: 100%; margin-top: -3.2px; padding: 0;">
             <div class="container">
                 <a href="../index.php" class="navbar-brand">STUDENT INFORMATION MANAGEMENT SYSTEM </a>
                 <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <div class="collapse navbar-collapse navHeaderCollapse">
                     <ul class="nav navbar-nav" >
                         <li class="active"><a href="Admin.php"><img src="../resources/images/home.ico" alt="Home" class="image-responsive image-circular icon"/><b>Home</b></a></li>
                         <li><a href=""> <img src="../resources/images/admin.png" alt="Administrators" class="image-responsive image-circular icon"/><b>Administrators</b></a></li>
                         <li><a href=""> <img src="../resources/images/Schools-Icon.png" alt="Schools" class="image-responsive image-circular icon"/><b>Schools</b></a></li>
                         <li><a href=""> <img src="../resources/images/departments.png" alt="Departments" class="image-responsive image-circular icon"/><b>Departments</b></a></li>
                         <li class="dropdown">
                             <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="../resources/images/academicprograms_icon.png" alt="Login" class="image-responsive icon"/> <b class="caret">Programs</b></a>
                             <ul class="dropdown-menu">
                                 <li><a href=""><i>Phd</i></a></li>
                                 <li class="divider"></li>
                                 <li><a href=""><i>Masters</i></a></li>
                                 <li class="divider"></li>
                                 <li><a href=""><i>Degree</i></a></li>
                                 <li class="divider"></li>
                                 <li><a href=""><i>Diploma</i></a></li>
                                 <li class="divider"></li>
                                 <li><a href=""><i>Certificate</i></a></li>
                             </ul>
                         </li>  
                         <li><a href=""> <img src="../resources/images/registericon.png" alt="Courses" class="image-responsive image-circular icon"/><b>Courses</b></a></li>
                     </ul>
                     <ul class=" nav navbar-nav navbar-right">
                         <li> <a href="../Controller/logout.php"><button class="btn btn-block btn-danger" name="logout"/>Log Out</button></a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
         <script src="../resources/js/index.js"></script>
     </body>
 </html>
