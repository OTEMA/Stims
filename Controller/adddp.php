<?php
require 'db.php';
session_start();
$SC = $mysqli->escape_string($_POST['SC']);
$dpname = $mysqli->escape_string($_POST['dpname']);
$result = $mysqli->query("SELECT * FROM department WHERE Dept_Name = '$dpname'") or die($mysqli->error);

// school exists if the rows returned are more than 0
if ($result->num_rows > 0) {

    $_SESSION['message'] = 'The department already exists in the database!';
    header("location: error.php");
} else { // School doesn't exist in a database, proceed...
    // active is 0 by DEFAULT (no need to include it here)
    $sql = "INSERT INTO department (Dept_Name,School_id) VALUES ('$dpname',$SC)";
    // Add user to the database
    if ($mysqli->query($sql)) {
        $_SESSION['message'] = 'The department has been added successfully';
        header("location: ../Admin/manage_departments.php");
    } else {
        $_SESSION['message'] = 'The department has not been added!';
        header("location: error.php");
    }
}