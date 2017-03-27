<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'Sima';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
