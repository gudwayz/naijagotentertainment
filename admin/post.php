<?php include 'includes/db.php';?>
<?php include 'includes/headers.php';?>
<?php
if (isset($_GET['post'])) {
	$post = mysqli_real_escape_string($conn, $_GET['post']);  
}
else {
    header('location:posts.php');
}
$currentuser = $_SESSION['firstname'];
if ($_SESSION['role'] == 'superadmin') {
$query = "SELECT * FROM post WHERE p_id='$post'";
}
else {
    $query = "SELECT * FROM post WHERE p_id='$post' AND author = '$currentuser'" ;
}
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0 ) {
while ($row = mysqli_fetch_array($run_query)) {
	$post_title = $row['title'];
	$post_id = $row['p_id'];
	$post_author = $row['author'];
	$post_date = $row['p_date'];
	$post_image = $row['img_1'];
	$post_content = $row['p_cont'];
	$post_tags = $row['pop_cont'];
	$post_status = $row['status'];

	?>
   
    <div id="wrapper">
       <?php include 'includes/adminav.php';?>
    <div id="page-wrapper">


    <div class="container-fluid">
    <div class="container">

        <div class="row">

            
            <div class="col-lg-8">

                
                <hr>
	       		<p><h2><a href="#"><?php echo $post_title; ?></a></h2></p>
                <p><h3>by <a href="#"><?php echo $post_author; ?></a></h3></p>
                <p><span class="glyphicon glyphicon-time"></span>Posted on <?php echo $post_date; ?></p>
                <hr>
                <img class="img-responsive img-rounded" src="../images/post_img/<?php echo $post_image; ?>" alt="900 * 300">
                <hr>
                <p><?php echo $post_content; ?></p>

                <hr>
                <?php } }
                else { echo"<script>alert('error');</script>"; } ?>
	        	
  </div>

           

        </div>
        </div>
        </div>
        </div>
        </div>

   

    
   <?php include('includes/footers.php');
?>     