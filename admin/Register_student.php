<?php

require '../Controller/db.php';
session_start();

$Fname = $mysqli->escape_string($_POST['Fname']);
$Mname = $mysqli->escape_string($_POST['Mname']);
$Lname = $mysqli->escape_string($_POST['Lname']);
$AdmNo = $mysqli->escape_string($_POST['AdmNo']);
$date = $mysqli->escape_string($_POST['date']);
$date1 = $mysqli->escape_string($_POST['date1']);
$IdNo = $mysqli->escape_string($_POST['IdNo']);
$SC = $mysqli->escape_string($_POST['SC']);
$Dept = $mysqli->escape_string($_POST['Dept']);
$program = $mysqli->escape_string($_POST['program']);
$Tel = $mysqli->escape_string($_POST['Tel']);
$email = $mysqli->escape_string($_POST['Email']);
$password = $mysqli->escape_string(password_hash($_POST['IdNo'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string(md5(rand(0, 1000)));

// Check if Admission number and Id Number already exists
$result = $mysqli->query("SELECT * FROM students WHERE AdmNo='$AdmNo' OR IdNo='$IdNo'") or die($mysqli->error);


if ($result->num_rows > 0) {

    $_SESSION['message'] = 'Student already exists!';
    header("location: ../Controller/error.php");
} else {
    $sql = "INSERT INTO students (Fname, Mname, Lname, AdmNo, DOB, DOA, IdNo, School, Dept, Prog_Id, Tel, Email, Password, Hash)"
            . " VALUES "
            . "('$Fname','$Mname','$Lname','$AdmNo','$date','$date1','$IdNo','$SC','$Dept','$program', '$Tel', '$email','$password', '$hash')";
    if ($mysqli->query($sql)) {

        $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['message'] = "User Added successully!";

        // Send registration confirmation link (verify.php)
        $to = $email;
        $subject = 'Account Verification ( otelmaltd@gmail.com )';
        $message_body = '
        Hello ' . $Fname . ',

        You have been registered for' . $program . '!

        Please click this link to activate your account:

        http://localhost/StudentInformationManagementSystem/student/verify.php?email=' . $email . '&hash=' . $hash;

        mail($to, $subject, $message_body);

        header("location: Add_register.php");
    } else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: ../Controller/error.php");
    }
}
