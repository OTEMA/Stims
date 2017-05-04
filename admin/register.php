<?php
require '../Controller/db.php';
// Session variables to be used on profile.php page
$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

// Protection against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$Mname = $mysqli->escape_string($_POST['Mname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$StaffNo = $mysqli->escape_string($_POST['Staffno']);
$IdNo = $mysqli->escape_string($_POST['IdNo']);
$Tel = $mysqli->escape_string($_POST['Tel']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
$isAdmin = 0;

// Check if user email and Staff id already exists
$result = $mysqli->query("SELECT * FROM users WHERE Email='$email' AND StaffNo='$StaffNo'") or die($mysqli->error);

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: ../Controller/error.php");
    
}
else { // Email doesn't already exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO users (Fname, Mname, Lname, StaffNo, IdNo, Tel, Email, Password, Hash, Is_Admin) VALUES ('$first_name','$Mname','$last_name','$StaffNo','$IdNo','$Tel', '$email','$password', '$hash', '$isAdmin')";
    // Add user to the database
    if ( $mysqli->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( otelmaltd@gmail.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: ../Controller/error.php");
    }

}