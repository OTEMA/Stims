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
        <!--  JavaScript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="container">
            <img src="resources/images/msu_banner2.png" class="image-responsive header-image"/>
            <h1 class="text-center text-primary header-text">Welcome to the results portal!</h1>
        </div>
        <div class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="197" style="width: 100%; margin-top: -3.2px; padding: 0;">
            <div class="container">
                <a href="http://www.maseno.ac.ke" class="navbar-brand">Online Results </a>
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
                                <li><a href="admin/index.php"> <img src="resources/images/admin.png" alt="Admin Login" class="image-responsive icon"/><i>Admin Login</i></a></li>
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
                <div class="col-sm-6 col-md-6 well-sm well-lg">
                    <p><b>Welcome to the student Information management system</b></p>
                    <p>This system allows you to view your results and other informations.
                        <br> The administrator can also upload and manage student details easily.</p>
                    <p><b class="bg-note">New users:</b> Please check your email for your log-in information.</p>
                    <p><b class="bg-note">Existing users:</b> Proceed to your relevant login pages <a href="admin/index.php">Admin Login page </a> | <a href="student/index.php">Student Login Page</a> enter your username and password and click the Investigator log in button.</p>
                </div>
                <div class="col-sm-6 col-md-6">
                </div>
            </div>
        </div >
    </body>
</html>
