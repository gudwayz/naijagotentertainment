<?php
include_once('db.php');
include_once('function.php');

if (isset($_POST['signup'])){
   $role = "user";
   $fname = $_POST['firstname'];
   $lname = $_POST['lastname'];
   $uname = $_POST['username'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $pass = $_POST['pass'];
   
   $select_users = "INSERT INTO user (username, firstname, lastname, email, phone, pass, role) VALUES ('$uname', '$fname', '$lname', '$email', ' $phone', '$pass', '$role')";
    $users_query = mysqli_query($conn,$select_users);
    if($users_query){
        echo"<script>alert('You have successfully registered');
            window.open('login.php','_self');
        </script>";
        
    }
    else{
        echo"<script>alert('Error registering');
            window.open('register.php','_self');
             </script>";
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Naijagotentertainment buzz">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link href="all.min.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&amp;family=Roboto&amp;display=swap" rel="stylesheet">
    <title>Naija Got Entertainment</title>
       <link href="bootstrap.min.css" rel="stylesheet">
       <link href="all.min.css" rel="stylesheet">
    <link href="main -naija.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a a class="navbar-brand font-italic" href="#">
  <img src="./logo.png" class="d-block w-50" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
                      <a class="nav-link" href="#post">General <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?cat=2">African Stories</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?cat=1">Musics</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?cat=5">Sports</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?cat=3">News</a>
                      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" pos>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="form-content w-75 mx-auto bg-light p-3 m-3">
<form method ="post" action ="register.php">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputFname">First-Name</label>
      <input type="text" class="form-control" id="inputFname" name="firstname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLname">Last-Name</label>
      <input type="text" class="form-control" id="inputLname" name="lastname">
    </div>
  </div>  
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUsername">Username</label>
      <input type="text" class="form-control" id="inputUsername" name="username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="pass">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">E-mail</label>
      <input type="email" class="form-control" id="inputEmail" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPhone">Phone</label>
      <input type="text" class="form-control" id="inputPhone" name="phone">
    </div>
  </div>
 <!-- <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState">
    </div>
    
  </div>-->
    <button type="submit" class="btn btn-primary  w-50 ml-5" name="signup">Signup</button>
</form>
</div>


<script src="jquery.min.js"></script>
<script src = "bootstrap.min.js"></script>
<script src = "all.min.js"></script>

</body>