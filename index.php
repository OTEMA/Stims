<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Home|Welcome</title>
        <link rel="shortcut icon" href="resources/images/student-portal_icon.png"  type="image/x-icon"/>
        <link href="resources/css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
        <div class="container-fluid header">
            <!--img src="resources/images/Back.jpg" class="image-responsive"/-->
        </div>
        <div class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="197" style="width: 100%; margin-top: -3.2px; padding: 0;">
            <div class="container">
                <a href="http://www.maseno.ac.ke" class="navbar-brand">STUDENT INFORMATION MANAGEMENT SYSTEM </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html"><img src="resources/images/Home.ico" alt="Home" class="image-responsive icon"/><b>Home</b></a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="resources/images/login.png" alt="Login" class="image-responsive icon"/> <b class="caret">Login</b></a>
                            <ul class="dropdown-menu">
                                <li><a href="Registrar/index.php"> <img src="resources/images/admin.png" alt="Admin Login" class="image-responsive icon"/><i>Admin Login</i></a></li>
                                <li class="divider"></li>
                                <li><a href="student/index.php"> <img src="resources/images/student-xxl.png" alt="Student Login" class="image-responsive icon"/><i>Student Login</i></a></li>
                            </ul>
                        </li>
                        <li><a href="#"> <img src="resources/images/contact.png" alt="Contact us" class="image-responsive icon"/><b>Contact Us</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="body">
            <div class="rows">
                <div class="col-sm-7 col-md-4 well">
                    <p><b>Welcome to the student Information management system</b></p>
                    <p>This system allows you to view your results and other informations.
                        <br> The administrator can also upload and manage student details easily.</p>
                    <p><b class="bg-note">New users:</b> Please check your email for your log-in information.</p>
                    <p><b class="bg-note">Existing users:</b> Proceed to your relevant login pages <a href="Registrar/index.php">Admin</a> | <a href="student/index.php">Student</a> enter your username and password and click the log in button.</p>
                </div>
                <div class="col-sm-5 col-md-6 well">
                </div>
                <div class="col-md-2 well"></div>
            </div>
        </div >
    </body>
</html>
