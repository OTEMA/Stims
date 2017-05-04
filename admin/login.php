<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$Staffno = $mysqli->escape_string($_POST['Staffno']);
$result = $mysqli->query("SELECT * FROM users WHERE StaffNo='$Staffno'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "That user does not exist!";
    header("location: ../Controller/error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['Password']) ) {
        if($user['Is_Admin'] == 1){
        
        $_SESSION['email'] = $user['Email'];
        $_SESSION['first_name'] = $user['Fname'];
        $_SESSION['last_name'] = $user['Lname'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: Admin.php");
    }
    else{
         $_SESSION['email'] = $user['Email'];
        $_SESSION['first_name'] = $user['Fname'];
        $_SESSION['last_name'] = $user['Lname'];
        $_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: profile.php");
    }
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: ../Controller/error.php");
    }
}