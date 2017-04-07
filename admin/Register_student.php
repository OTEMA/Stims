<?php
require '../Controller/db.php';

// Protection against SQL injections
$first_name = $mysqli->escape_string($_POST['firstname']);
$Mname = $mysqli->escape_string($_POST['Mname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$StaffNo = $mysqli->escape_string($_POST['Staffno']);
$IdNo = $mysqli->escape_string($_POST['IdNo']);
$Tel = $mysqli->escape_string($_POST['Tel']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string( md5( rand(0,1000) ) );
      


