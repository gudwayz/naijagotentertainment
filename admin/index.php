<?php include('includes/headers.php');
?>

    <div id="wrapper">
       
       <?php include ('includes/adminav.php');?>
        <div id="page-wrapper">

            <div class="container">

                
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="page-header">
                            Welcome to NIJAGOTENTERTAINMENT  
                            <small><?php echo $_SESSION['firstname']; ?></small>
                       </h1>

                    </div>
                </div>
                
          <div class="row">
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-danger">
                            <div class="card-heading">
                                <div class="row">
                                    <div class="col-xs-3  ">
                                        <i class="fas fa-blog fa-5x pl-4"></i>
                                    </div>
                                    <div class="col-xs-9">
                                    <?php
$query = "SELECT * FROM post";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$post_num = mysqli_num_rows($result);
echo "<div class='text-right huge'>{$post_num}</div>";
?>

                                        <div class="text-right">Posts</div>

                                    </div>
                                </div>
                            </div>
                            <a href="posts.php">
                                <div class="card-footer">
                                    <span class="pull-left">View All Posts</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-warning">
                            <div class="card-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x pl-4"></i>
                                    </div>
                                    <div class="col-xs-9">
                                                                   <?php
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$user_num = mysqli_num_rows($result);
echo "<div class='text-right huge'>{$user_num}</div>";
?>


                                        <div class="text-right">Users</div>

                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="card-footer">
                                    <span class="pull-left">View All Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
            </div>
            
        </div>
   <?php include('includes/footers.php');
?>     
   
    
