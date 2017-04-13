<?php
require '../Controller/db.php';
session_start();
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$AdmNo = $mysqli->escape_string($_POST['AdmNo']);
$result = $mysqli->query("SELECT * FROM students WHERE AdmNo='$AdmNo'")or die($mysqli->error);
//$user = $result->fetch_assoc();

//echo $user['Email'];
//echo $user['Password'];


if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User doesn't exist!";
    header("location: ../Controller/error.php");
}
else { // User exists
    $user = $result->fetch_assoc();
     if ( password_verify($_POST['password'], $user['Password']) ) {
                 
        $_SESSION['email'] = $user['Email'];
        $_SESSION['first_name'] = $user['Fname'];
        $_SESSION['last_name'] = $user['Lname'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    //Show a message inaces of an error
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: ../Controller/error.php");
    }
}

