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
        </div>
        <div class="row">
            <div class="col-sm-3 col-md-2 well">
                <div class="bg-info">
                    <h1 class="text-center text-primary">Nav</h1>
                </div>
                <div class="buttons">
                    <ul>
                        <li><a href="Admin.php"><button class="btn btn-block bg-primary">Back</button></a></li>
                        <li><a href="manage_schools.php"><button class="btn btn-block btn-success">Manage schools </button></a></li>
                        <li><a href="manage_departments.php"><button class="btn btn-block btn-warning">Manage Departments </button></a></li>
                        <li> <a href="../Controller/logout.php"><button class="btn btn-block btn-danger">LOG OUT</button></a></li>
                    </ul>
                </div>
            </div> 
            <div class="col-sm-9 col-md-10">
                <div class="admin-show">
                    <table width="400" border="0" cellspacing="1" cellpadding="0">
                        <tr>
                            <td>
                                <form name="form1" method="post" action="">
                                    <table class="table table-bordered table-striped table-hover table-responsive">
                                        <thead>
                                            <tr class="bg-primary">
                                                <th>#</th>
                                                <th>Staff NO</th>
                                                <th>Date Of Employment</th>
                                                <th>Department</th>
                                                <th>Role</th>
                                                <th>Name</th>
                                                <th>ID NO</th>
                                                <th>Email</th>
                                                <th>Tel</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        require '../Controller/db.php';
                                        $result = $mysqli->query("select staffs.Fname,staffs.Mname,staffs.Lname,staffs.StaffNo,staffs.IdNo,staffs.Tel,staffs.Email,staffs.Is_Admin,staffs.Image,Date(DOE),department.Dept_Name from staffs join department on staffs.Department=department.Department_id")or die($mysqli->error);
                                        $a = 1;
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td align="center"><?php echo $a++; ?></td>
                                                    <td><?php echo $row['StaffNo']; ?></td>
                                                    <td><?php echo $row['Date(DOE)']; ?></td>
                                                    <td><?php echo $row['Dept_Name']; ?></td>
                                                    <td><?php
                                                        if ($row['Is_Admin'] == 1) {
                                                            echo 'Admin';
                                                        } else {
                                                            echo 'Registrar';
                                                        }
                                                        ?></td>
                                                    <td><?php echo $row['Lname'] . '&nbsp;' . '&nbsp;' . $row['Mname'] . '&nbsp;' . '&nbsp;' . $row['Fname']; ?></td>
                                                    <td><?php echo $row['IdNo']; ?></td>
                                                    <td><?php echo $row['Email']; ?></td>
                                                    <td><?php echo $row['Tel']; ?></td>
                                                    <td><img src="<?php echo $row['Image']; ?>"/></td>
                                                    <td><a href='../Controller/Admin_promo.php?staffno=<?php echo $row['StaffNo']; ?>' class="btn btn-block btn-danger">Promote</a></td>
                                                </tr>
                                                <?php
                                            }
                                            $mysqli->close();
                                            ?>
                                        </tbody>
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
