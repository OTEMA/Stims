<?php
require 'db.php';
session_start();
$id=$_GET['id'];
$sql ="DELETE FROM programs WHERE Department_id='$id'";
if ($mysqli->query($sql)) {
    $sql1 ="DELETE FROM department WHERE Department_id='$id'";
    if ($mysqli->query($sql1)) {
        $_SESSION['message'] = 'Department deleted Successfully!';
    header("location: ../Admin/manage_departments.php");
    $mysqli->close();
    }
    else{
        die($mysqli->error);
       //$_SESSION['message'] = 'Student not deleted!';
  // header("location: error.php");
    $mysqli->close();
   }
}
else{
     die($mysqli->error);
   // $_SESSION['message'] = 'Student not deleted!';
  //  header("location: error.php");
    $mysqli->close();
}
