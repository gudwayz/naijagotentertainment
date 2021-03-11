<?php include 'includes/headers.php';

?>
    <div id="wrapper">

       <?php include 'includes/adminav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            PUBLISH NEWS 
                        </h1>
                       <?php
                          if (isset($_POST['publish'])) {
                            require "../gump.class.php";
                             $gump = new GUMP();
                             $_POST = $gump->sanitize($_POST); 

                            $gump->validation_rules(array(
                                'title'    => 'required|max_len,120|min_len,15',
                                'pop_cont'   => 'required|max_len,100|min_len,3',
                                'p_cont' => 'required|max_len,20000|min_len,150',
                            ));

                            $gump->filter_rules(array(
                                'title' => 'trim|sanitize_string',
                                'pop_cont' => 'trim|sanitize_string',
                            ));
                            
                           $validated_data = $gump->run($_POST);

                           if($validated_data === false) {
                             ?>
                             <center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
                    
                              <?php 
                              $post_title = $_POST['title'];
                              $post_tag = $_POST['pop_cont'];
                              $post_content = $_POST['p_cont'];
                            }
                            else {
                                 $post_title = $validated_data['title'];
                                 $post_tag = $validated_data['pop_cont'];
                                 $post_content = $validated_data['p_cont'];
                                 if (isset($_SESSION['firstname'])) {
                                 $post_author = $_SESSION['firstname'];
                                 }
                                $post_date = date('Y-m-d');
                                $post_status = 'draft';
                                $p_cat_id = $_POST['p_cat_id'];

                                $image = $_FILES['img_1']['name'];
                                $ext = $_FILES['img_1']['type'];
                                $validExt = array ("img_1/gif",  "img_1/jpeg",  "img_1/pjpeg", "img_1/png");
                                if (empty($image)) {
                                   echo "<script>alert('Attach an image');</script>";
                                }
                                else if ($_FILES['img_1']['size'] <= 0 ||   $_FILES['img_1']['size'] > 1024000 )
                                    {
                                      echo "<script>alert('Image size is not proper');</script>";
                                    }
                                else if (!in_array($ext, $validExt)){
                                     echo "<script>alert('Not a valid image');</script>";

                                    }
                                else {
                                      $folder  = '../images/post_img/';
                                      $imgext = strtolower(pathinfo($image, PATHINFO_EXTENSION) );
                                      $picture = rand(1000 , 1000000) .'.'.$imgext;
                                      if(move_uploaded_file($_FILES['img_1']['tmp_name'], $folder.$picture)) {
                                          
                                         $query = "INSERT INTO post (p_cat_id,title,author,p_date,img_1,p_cont,status,pop_cont) VALUES ('$p_cat_id',$post_title' , '$post_author' , '$post_date' , '$picture' , '$post_content' , '$post_status', '$post_tag') ";
                                      
                                        $result = mysqli_query($conn , $query) or die(mysqli_error($conn));
                                        if (mysqli_affected_rows($conn) > 0) {
                                           echo "<script> alert('News posted       successfully.It will be published       after admin approves it');
                                     
                                           window.location.href='posts.php'        ;</script>";
                                       }
                                      else {
                                           "<script> alert('Error while posting..try again');</script>";
                                        }
                                   }
                                    }
                            }
                         }
                        ?>

                      <form role="form" action="publishnews.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                       <label for="post_title">Post Title</label>
                       <input type="text" name="title" placeholder = "ENTER TITLE " value= "<?php if(isset($_POST['publish'])) { echo $post_title; } ?>"  class="form-control" required>
                     </div>
    
                       <div class="form-group">
                       <label for="post_title">Post Category</label>
                       <select class="custom-select mr-sm-2" id="post_title" name="p_cat_id" required>
                           <option selected>Choose Category</option>
                           <option value="1">Music</option>
                           <option value="2">Advert</option>
                           <option value="3">African News</option>
                           <option value="4">Hot News</option>
                           <option value="5">Foot-Ball</option>
                           <option value="6">Sports</option>
                        
                      </select>
                       
                    </div>

    
                      <div class="form-group">
                       <label for="post_image">Post Image </label> <font color='brown' > &nbsp;&nbsp;(Allowed image size: 1024 KB) </font> 
                      <input type="file" name="img_1" >
                   </div>
             
                      <div class="form-group">
                     <label for="post_tag">Post Tags</label>
                     <input type="text" name="pop_cont" placeholder = "ENTER SOME TAGS SEPERATED BY COMMA (,)" value= "<?php if(isset($_POST['publish'])) { echo $post_tag; } ?>" class="form-control" >
                    </div>
    
                     <div class="form-group">
                      <label for="post_content">Post Content</label>
                      <textarea class="form-control" name="p_cont"  id="post_content" cols="30" rows="15" ><?php if(isset($_POST['publish'])) { echo $post_content; } ?>
                      </textarea>
                  </div>
                     <button type="submit" name="publish" class="btn btn-primary" value="Publish Post">Publish Post</button>

                   </form>

                    </div>
                </div>
                
            </div>

        </div>
        
   
    </div>
  <?php include('includes/footers.php');?>   
    
