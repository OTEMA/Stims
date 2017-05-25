<?php
require 'db.php';
session_start();
$id=$_GET['School_Id'];

$sql ="DELETE FROM fees WHERE AdmNo='$id'";
if ($mysqli->query($sql)) {
    $sql1 ="DELETE FROM students WHERE AdmNo='$id'";
    if ($mysqli->query($sql1)) {
        $_SESSION['message'] = 'Student deleted Successfully!';
    header("location: ../Registrar/profile.php");
    $mysqli->close();
    }
    else{
       $_SESSION['message'] = 'Student not deleted!';
   header("location: error.php");
    $mysqli->close();
   }
}
else{
    $_SESSION['message'] = 'Student not deleted!';
    header("location: error.php");
    $mysqli->close();
}