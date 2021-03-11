<?
include('includes/db.php');
include('includes/function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Naijagotentertainment buzz">
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    
    <link href="https://fonts.googleapis.com/css2?family=Candal&amp;family=Roboto&amp;display=swap" rel="stylesheet">
    <title>Naija Got Entertainment</title>
       <link href="assets/bootstrap.min.css" rel="stylesheet">
       <link href="assets/all.min.css" rel="stylesheet">
    <link href="assets/login.css" rel="stylesheet">
</head>
<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100 mt-5">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="logo.png" alt="naijagotentertainment" class="brand_logo">
                </div>
            </div>

            <div class="d-flex justify-content-center form-container">
                <form action="login.php" method="post">
                    <div class="input-group mt-5">
                        <div class="input-group-append">
                           <span class="input-group-text">
                                <i class="fa fa-user"></i>
                           </span>
                        </div>
                        <input type="text" placeholder= "Enter username" name="username" id="username" class="form-control input-user" required>
                    </div>

                    <div class="input-group mt-3">
                        <div class="input-group-append">
                             <span class="input-group-text">
                               <i class="fa fa-key"></i>
                             </span>
                        </div>
                        <input type="password" placeholder= "Enter password" name="pass" id="password" class="form-control input-password" required>
                    </div>
                    
                    <div class="mt-2 form-group d-flex justify-content-around">
                     
                      <div>
                         <input type="radio" id="superadmin" name="role" value="superadmin" required>
                     <label for="superadmin">Superadmin</label>
                     </div>
                      <div>
                         <input type="radio" id="admin" name="role" value="admin" required>
                     <label for="admin">Admin</label>
                     </div>
                      <div>
                         <input type="radio" id="user" name="role" value="user" required>
                     <label for="user">User</label>
                     </div>
                    </div>

                    
                    <div class="mt-4 d-flex justify-content-center">
                        <input type="submit" name="Login" class="btn btn-success W-75 value="Login">

                    </div>
                    
                </form>
                
            </div>

            <div class="mt-3">
                    <div class="d-flex justify-content-center">
                        Don't have an account?
                        <a href="register.php" class="ml-2">Sign Up</a>
                    </div>
            </div>

            
            <div class="mt-3">
                    <div class="d-flex justify-content-center">
                        <a href="login.php?forgot" class="ml-2">Forgot password?</a>
                    </div>
            </div>
        </div>
    </div>

</div>
<?
    if(isset($_POST['Login'])){
        $username = $_POST['username'];
         $password = $_POST['pass'];
          $role = $_POST['role'];
          
           $username = $_POST['username'];
           if($role =="user"){
              echo"<script>alert('You have no autorisation in this page');</script>";
                    echo"<script>window.open('login.php','_self');</script>"; 
           }
           else{
               
           
           $get_user = "SELECT * FROM user WHERE username = '$username' AND pass = '$password' ";
           $user_query = mysqli_query($conn,$get_user);
           $user_count = mysqli_num_rows($user_query);
           $user_row = mysqli_fetch_assoc($user_query);
           $rolee = $user_row['role'];
           $fname = $user_row['firstname'];
                   $lname = $user_row['lastname'];
                   $uname = $user_row['username'];
           if($rolee == $role){
                   if($user_count>0 AND $rolee==="admin"){
                        $_SESSION['role']= $role;
                        $_SESSION['firstname'] = $fname;
                          $_SESSION['lastname'] = $lname;
                           $_SESSION['username'] = $uname;
                        echo"<script>alert('Logged in Successsfully');</script>";
                        echo"<script>window.open('index.php','_self');</script>";
                    }
                   elseif($user_count>0 AND $rolee==="superadmin"){
                  
                   
                   
                       $_SESSION['role']= $rolee;
                         $_SESSION['firstname'] = $fname;
                          $_SESSION['lastname'] = $lname;
                          $_SESSION['username'] = $uname;
                       echo"<script>alert('Logged in Successsfully');</script>";
                       
                       echo"<script>window.open('index.php','_self');</script>";
                   }
               else{
               echo"<script>alert('invalid role')</script>";
               echo"<script>window.open('login.php', '_self')</script>";
           } 
            }
           
           else{
               echo"<script>alert('invalid username and password')</script>";
               echo"<script>window.open('login.php', '_self')</script>";
           }
       }
    }

?>




<script src = "assets/jquery.min.js"></script>
<script src = "assets/bootstrap.min.js"></script>
<script src = "assets/all.min.js"></script>
    
</body>
</html>