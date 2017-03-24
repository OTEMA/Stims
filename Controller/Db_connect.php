<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "stims";

$conn =  new mysqli($host,$user,$password,$db) or die($mysqli->error);
if(mysqli_errno($conn)){
    die("Unable to connect to the database: ".mysqli_connect_error()); 
}