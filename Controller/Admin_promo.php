<?php
require 'db.php';
session_start();
$staff_no=$_GET['staffno'];
$result=$mysqli->query("SELECT Is_Admin FROM staffs WHERE StaffNo='$staff_no' ");
$row = mysqli_fetch_array($result);
$sql = "UPDATE staffs SET Is_Admin='1' WHERE StaffNo='$staff_no'";
    $sql1 = "UPDATE staffs SET Is_Admin='0' WHERE StaffNo='$staff_no'";
if ($row['Is_Admin'] == 1){
     if ($mysqli->query($sql1)) {
        $_SESSION['message'] = 'Staff has been demoted Successfully!';
    header("location: ../Admin/manage_admins.php");
    $mysqli->close();
    }
    else{
       $_SESSION['message'] = 'Staff not demoted!';
   header("location: error.php");
    $mysqli->close();
   }
}
else{
     if ($mysqli->query($sql)) {
        $_SESSION['message'] = 'Staff has been promoted to admin Successfully!';
    header("location: ../Admin/manage_admins.php");
    $mysqli->close();
    }
    else{
       $_SESSION['message'] = 'Student not deleted!';
   header("location: error.php");
    $mysqli->close();
   }
}
