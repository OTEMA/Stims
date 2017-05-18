<?php
require '../Controller/db.php';
function ViewStudents(){
    $result = $mysqli->query("SELECT * FROM students");
}

