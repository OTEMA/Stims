<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <link rel="shortcut icon" href="../resources/images/student-portal_icon.png"  type="image/x-icon"/>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="../resources/css/Appearance.css" rel="stylesheet" type="text/css"/>
<link href="../resources/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../resources/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<!--  JavaScript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: ../index.php" );
    endif;
    ?>
    </p>
        <a href="../index.php"><button class="button button-block"/>Home</button></a>
        <!-- Remove this once you are ready to upload to the online server
        It should only be used for remote testing-->
              <a href="../admin/reset.php">Reset Now</a>
</div>
</body>
</html>
