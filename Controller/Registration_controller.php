<?php

include 'Db_connect.php';
// Set session variables to be used on profile.php page
$_SESSION['Email'] = $_POST['Email'];
$_SESSION['Fname'] = $_POST['Fname'];
$_SESSION['Lname'] = $_POST['Lname'];

// Escape all $_POST variables to protect against SQL injections
$Fname = $conn->escape_string($_POST['Fname']);
$Mname = $conn->escape_string($_POST['Mname']);
$Lname = $conn->escape_string($_POST['Lname']);
$AdmNo = $conn->escape_string($_POST['AdmNo']);
$date = $conn->escape_string($_POST['date']);
$date1 = $conn->escape_string($_POST['date1']);
$IdNo = $conn->escape_string($_POST['IdNo']);
$SC = $conn->escape_string($_POST['SC']);
$Dept = $conn->escape_string($_POST['Dept']);
$Course = $conn->escape_string($_POST['Course']);
$Tel = $conn->escape_string($_POST['Tel']);
$Email = $conn->escape_string($_POST['Email']);
$pwd = $conn->escape_string($_POST['IdNo']);
// Check if user with that email already exists
$result = $conn->query("SELECT * FROM students WHERE AdmNo='$AdmNo'") or die($conn->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'User with this Admission Number already exists!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...
$sql = "INSERT INTO students(Fname, Mname, Lname, AdmNo, DOB, DOA, IdNo, School, Dept, Course, Tel, Email, Password)"
        . " VALUES ('$Fname', '$Mname', '$Lname', '$AdmNo', '$date', '$date1', '$IdNo', '$SC', '$Dept', '$Course', '$Tel', '$Email', '$pwd')";
 // Add user to the database
    if ( $conn->query($sql) ){

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $_SESSION['message'] =
                
                 "Confirmation link has been sent to $Email, please verify
                 your account by clicking on the link in the message!";

        // Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( clevertechie.com )';
        $message_body = '
        Hello '.$Fname.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/login-system/verify.php?email='.$Email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); 

    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}
