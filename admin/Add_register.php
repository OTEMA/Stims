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
$result = $mysqli->query("SELECT * FROM schools") or die($mysqli->error);
$result1 = $mysqli->query("SELECT * FROM departments") or die($mysqli->error);
$result2 = $mysqli->query("SELECT * FROM programs") or die($mysqli->error);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register a user</title>
        <link rel="shortcut icon" href="../resources/images/student-portal_icon.png"  type="image/x-icon"/>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- //custom-theme -->
        <link href="../resources/css/Style.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- js -->
        <script src="../resources/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <!-- //js -->
        <link href="../resources/css/flexslider.css" rel="stylesheet" type="text/css"/>
        <!-- font-awesome-icons -->
        <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
        <!-- Include jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

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
        <div id="container">
            <img src="../resources/images/msu_banner2.png" class="image-responsive header-image"/>
            <h1 class="text-center text-primary header-text" style="margin-top:-50px;">You are Logged in as <?php echo $first_name . ' ' . $last_name; ?>!</h1><a href="../Controller/logout.php" style="float:right; width: 100px;"><button class="button button-block" name="logout"/>Log Out</button></a>
        </div>
        <div class="rows">
            <div class="col-sm-6 col-md-3">
            </div>
            <div class="col-sm-6 col-md-7 ">
                <form action="Register_student.php" method="POST" class="login">
                    <div class="form-group">
                        <label for="Fname">First Name</label>
                        <input type="text" class="form-control" id="Fname" name="Fname" autocomplete="on" placeholder="Enter your First name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="Mname">Middle Name</label>
                        <input type="text" class="form-control" id="Mname" name="Mname" autocomplete="on" placeholder="Enter your Middle name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="Lname">Last Name</label>
                        <input type="text" class="form-control" id="Lname" name="Lname" autocomplete="on" placeholder="Enter your Last name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="AdmNo">Admission Number</label>
                        <input type="text" class="form-control" id="AdmNo" name="AdmNo" autocomplete="on" placeholder="Enter your Admission" required="required">
                    </div>
                    <div class="form-group">
                        <label for="DOB">Date of Birth</label>
                        <input class="form-control" id="DOB"  name="date" placeholder="MM/DD/YYYY" required="required" type="text"/>
                    </div>
                    <div class="form-group">
                        <label for="DOA">Date of Admission</label>
                        <input class="form-control" id="DOA"  name="date1" placeholder="MM/DD/YYYY" required="" type="text"/>
                    </div>
                    <div class="form-group">
                        <label for="IdNo">National Identity Number</label>
                        <input type="text" class="form-control" id="IdNo" name="IdNo" autocomplete="on" placeholder="Enter your National Identity Number" required="required">
                    </div>
                    <div class="form-group">
                        <label for="SC">School</label>
                        <select name="SC" class="form-control">
                            <option value="Select School">Select Shool</option>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option value='" . $row['School_name'] . "'>" . $row['School_name'] . "</option>";
                            }
                            ?>        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Dept">Department</label>
                        <select name="dept" class="form-control">
                            <option value="Select School Name">Select Department</option>
                            <?php
                            while ($row = mysqli_fetch_array($result1)) {
                                echo "<option value='" . $row['Dept_Name'] . "'>" . $row['Dept_Name'] . "</option>";
                            }
                            ?>        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="program">Program</label>
                        <select name="program" class="form-control">
                            <option value="Select Program">Select Program</option>
                            <?php
                            while ($row = mysqli_fetch_array($result2)) {
                                echo "<option value='" . $row['Prog_name'] . "'>" . $row['Prog_name'] . "</option>";
                            }
                            ?>        
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Tel">Telephone</label>
                        <input type="Tel" class="form-control" id="Tel" name="Tel" autocomplete="on" placeholder="Enter telephone number" required="required">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" class="form-control" id="Email" name="Email" autocomplete="on" placeholder="Enter Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn-primary login" value="Register">
                    </div>
                </form>
                <div class="slideleft">
                    <p><img src="../resources/images/maseno20university.png" alt="Maseno Logo" class="image-responsive copyright-image"/> All rights reserved © <span id="year"></span> Lamo.<img src="../resources/images/maseno20university.png" alt="Maseno Logo" class="image-responsive copyright-image"/>
                    </p>
                </div>
                <script src="../resources/js/Copyright.js" type="text/javascript"></script>
                </body>
                </html>
