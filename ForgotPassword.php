<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
                <a href="index.php" class="navbar-brand">Online Results </a>
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navHeaderCollapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php"><img src="resources/images/home.ico" alt="Home" class="image-responsive icon"/><b>Home</b></a></li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="resources/images/login.png" alt="Login" class="image-responsive icon"/> <b class="caret">Login</b></a>
                            <ul class="dropdown-menu">
                                <li><a href="admin/Login.php"> <img src="resources/images/admin.png" alt="Admin Login" class="image-responsive icon"/><i>Admin Login</i></a></li>
                                <li class="divider"></li>
                                <li><a href="student/Login.php"> <img src="resources/images/student-xxl.png" alt="Student Login" class="image-responsive icon"/><i>Student Login</i></a></li>
                            </ul>
                        </li>
                        <li><a href="#"> <img src="resources/images/contact.png" alt="Contact us" class="image-responsive icon"/><b>Contact Us</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rows">
            <div class=" col-sm-6 col-md-4 well">
                <h1 class="text-capitalize text-center">Instructions</h1>
                <p>Enter the email that you registered your account and click search <br>
                if the email corresponds to the one that you supplied, a password reset link will be sent to your email.<br>
                use it to reset your password.
                </p>
            </div>
        <div class="col-sm-6 col-md-5"> 
            <form class="login">
            <div class="form-group">
                        <label for="pwd">Email</label>
                        <input type="text" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn-primary" value="Search">
                    </div>
        </form>
        </div>
    </div>
    </body>
</html>
