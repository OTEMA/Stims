<?php
require 'db.php';
session_start();
$scname = $mysqli->escape_string($_POST['scname']);
// Check if the school already exists
$result = $mysqli->query("SELECT * FROM schools WHERE School_name = '$scname'") or die($mysqli->error);

// school exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'The school already exists in the database!';
    header("location: error.php");
    
}
else { // School doesn't exist in a database, proceed...

    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO schools (School_name) VALUES ('$scname')";
    // Add user to the database
    if ( $mysqli->query($sql) ){
        $_SESSION['message'] = 'The school has been added successfully';
        header("location: ../Admin/manage_schools.php");
        
    }
 else {
       $_SESSION['message'] = 'The school has not been added!';
    header("location: error.php"); 
    }
}
