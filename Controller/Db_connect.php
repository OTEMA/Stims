<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "stims";

$conn = mysqli_connect($host, $user, $password, $db );
if(!conn){
    die("Unable to connect: ".mysqli_connect_error());
}
