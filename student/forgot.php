<?php
/* Reset your password form, sends reset.php password link */
require '../Controller/db.php';
session_start();

// Check if form submitted with method="post"
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $mysqli->escape_string($_POST['email']);
    $result = $mysqli->query("SELECT * FROM students WHERE Email='$email'");

    if ($result->num_rows == 0) { // User doesn't exist
        $_SESSION['message'] = "User with that email doesn't exist!";
        header("location: ../Controller/error.php");
    } else { // User exists (num_rows != 0)
        $user = $result->fetch_assoc(); // $user becomes array with user data

        $email = $user['Email'];
        $hash = $user['Hash'];
        $first_name = $user['Fname'];

        // Session message to display on success.php
        $_SESSION['message'] = "<p>Please check your email <span>$email</span>"
                . " for a confirmation link to complete your password reset!</p>";

        // Send registration confirmation link (reset.php)
        $to = $email;
        $subject = 'Password Reset Link ( clevertechie.com )';
        $message_body = '
        Hello ' . $first_name . ',

        You have requested password reset!

        Please click this link to reset your password:

        http://localhost/login-system/reset.php?email=' . $email . '&hash=' . $hash;

        mail($to, $subject, $message_body);

        header("location: ../Controller/success.php");
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reset Your Password</title>
        <link rel="shortcut icon" href="../resources/images/student-portal_icon.png"  type="image/x-icon"/>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/Appearance.css" rel="stylesheet" type="text/css"/>
        <link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <!--  JavaScript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="form">

            <h1>Reset Your Password</h1>

            <form action="forgot.php" method="post">
                <div class="field-wrap">
                    <label>
                        Email Address<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off" name="email"/>
                </div>
                <button class="button button-block"/>Reset</button>
            </form>
        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../resources/js/index.js"></script>
    </body>

</html>
