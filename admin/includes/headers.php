<?php
include('includes/db.php');
include('includes/function.php');

session_start();
if (!isset($_SESSION['role'])) {
 
   echo"<script> window.location.href='login.php';</script>";		
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - <?php echo $_SESSION['username']; ?></title>
    <link rel="icon" type="image/png" href="../img/vimeo.png">
    
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href="assets/all.min.css" rel="stylesheet">
 <script src="assets/tinymce.min.js"></script>
    <script src="assets/tinymce_script.js"></script>
    
    <link href="assets/sb-admin.css" rel="stylesheet">

</head>

<body>
