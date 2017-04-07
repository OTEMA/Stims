<?php
require '../Controller/db.php';

// Protection against SQL injections
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
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['IdNo'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      


