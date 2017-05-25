<?php
require '../Controller/db.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin|Sign-Up/Login Form</title>
        <link rel="shortcut icon" href="../resources/images/student-portal_icon.png"  type="image/x-icon"/>
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
         <div class="row">
            <div class="col-sm-3 col-md-3 well">
                <div class="bg-info">
                    <h1 class="text-center text-primary">Nav</h1>
                </div>
                <div class="buttons">
                    <ul style="list-style: none; float: contour;">
                        <li style="margin-bottom: 10px;"><a href="Admin.php"><button class="btn btn-block bg-primary">Back</button></a></li>
                        <li style="margin-bottom: 10px; margin-top: 10px;"><a href="manage_admins.php"><button class="btn btn-block btn-success">Manage Admin </button></a></li>
                        <li><a href="manage_departments.php"><button class="btn btn-block btn-success">Manage Departments </button></a></li>
                        <li style="margin-top: 10px;"> <a href="../Controller/logout.php"><button class="btn btn-block btn-danger">LOG OUT</button></a></li>
                    </ul>
                </div>
            </div> 
            <div class="col-sm-9 col-md-9 well">
        <div class="form">
            <ul class="tab-group">
                <li class="tab"><a href="#addschools">Add schools</a></li>
                <li class="tab active"><a href="#viewschools">View Schools</a></li>
            </ul>
            <div class="tab-content">
                <div id="viewschools">   
                    <?php
                    require '../Controller/manage_school.php';
                    ?>
                </div>
                <div id="addschools">   
                    <h1 style="color: #FFFFFF;">Enter all the relevant details here</h1>

                    <form action="../Controller/addsc.php" method="post">

                        <div class="top-row">
                            <div class="form-group field-wrap">
                                <label>Name<span class="req">*ex education</span>
                                </label>
                                <input type="text" required autocomplete="on" name='scname' style="color: #FFFFFF;" />
                            </div>
                        </div>
                        <div class="form-group field-wrap">
                            <button type="submit" class="button button-block" name="register" />SUBMIT</button>
                        </div>
                    </form>
                </div>  
            </div><!-- tab-content -->
        </div> <!-- /form -->
            </div>
         </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../resources/js/index.js"></script>
        <script src="../resources/js/Copyright.js" type="text/javascript"></script>
    </body>
</html>
