<?php


include('db.php');
$post_cat=array('music','advert','afric_news','H_news','b_news', 'sports','football');
function getPost(){
  global $conn;
    if(isset($_GET['cat'])){
        $music = $_GET['cat'];
        $get_music_post="SELECT * FROM post WHERE p_cat_id = '$music' ORDER BY 1 DESC";
        $run_music_post = mysqli_query($conn,$get_music_post);
        while($row_music_post = mysqli_fetch_assoc($run_music_post)){
            $post_id = $row_music_post['p_id'];
            $title = $row_music_post['title'];
            $author = $row_music_post['author'];
            $date = $row_music_post['p_date'];
            $content = $row_music_post['p_cont'];
            $p_comment_id = $row_music_post['p_id'];
            $p_image_1 = $row_music_post['img_1'];
            $status = $row_music_post['status'];
            echo"
            <div class='post-content w-100'>
            <div class='post-image'> 
            <div>
              <img src='./images/post_img/$p_image_1' class='img w-100' alt='blog1'>
            </div> 
          
            <div class='post-info flex-row'>
              <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
              <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
             <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
            </div>
            </div>
            <div class='post-title'>
              <a href='#' class='text-dark'><h4>$title</h4></a>
              <p>
              $content
              </p>
              <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
            </div>
          </div>
            
            ";


        }


    }elseif (isset($_GET['cat'])) {
        $advert = $_GET['cat'];
        $get_advert_post="SELECT * FROM post WHERE p_cat_id = '$advert' ORDER BY 1 DESC";
        $run_advert_post = mysqli_query($conn,$get_advert_post);
        while($row_advert_post = mysqli_fetch_assoc($run_advert_post)){
            $post_id = $row_advert_post['p_id'];
            $title = $row_advert_post['title'];
            $author = $row_advert_post['author'];
            $date = $row_advert_post['p_date'];
            $content = $row_advert_post['p_cont'];
            $p_comment_id = $row_advert_post['p_id'];
            $p_image_1 = $row_advert_post['img_1'];
            $status = $row_advert_post['status'];
            echo"
            <div class='post-content w-100'>
            <div class='post-image'> 
            <div>
              <img src='images/post_img/$p_image_1' class='img w-100' alt='blog1'>
            </div> 
          
            <div class='post-info flex-row'>
              <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
              <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
              <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
            </div>
            </div>
            <div class='post-title'>
              <a href='#' class='text-dark'><h4>$title</h4></a>
              <p>
              $content
              </p>
              <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
            </div>
          </div>
            
            ";


        }


    }elseif (isset($_GET['cat'])) {
        $afric_news = $_GET['cat'];
        $get_afric_news_post="SELECT * FROM post WHERE p_cat_id = '$afric_news' ORDER BY 1 DESC";
        $run_afric_news_post = mysqli_query($conn,$get_afric_news_post);
        if($count_afric_news = mysqli_rows_num($run_afric_news_post)>0){
        while($row_afric_news_post = mysqli_fetch_assoc($run_afric_news_post)){
            $post_id = $row_afric_news_post['p_id'];
            $title = $row_afric_news_post['title'];
            $author = $row_afric_news_post['author'];
            $date = $row_afric_news_post['p_date'];
            $content = $row_afric_news_post['p_cont'];
            $p_comment_id = $row_afric_news_post['p_id'];
            $p_image_1 = $row_afric_news_post['img_1'];
            $status = $row_afric_news_post['status'];
            echo"
            <div class='post-content w-100'>
            <div class='post-image'> 
            <div>
              <img src='images/post_img/$p_image_1' class='img w-100' alt='blog1'>
            </div> 
          
            <div class='post-info flex-row'>
              <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
              <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
              <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
            </div>
            </div>
            <div class='post-title'>
              <a href='#' class='text-dark'><h4>$title</h4></a>
              <p>
              $content
              </p>
              <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
            </div>
          </div>
            
            ";
        }

      }
      {
        echo"
      <div class='post-content w-100'>
        <h4>No news on football found </h4>
      </div>
      ";
    }


    }elseif (isset($_GET['cat'])) {
        $H_news = $_GET['cat'];
        $get_H_news_post="SELECT * FROM post WHERE p_cat_id = '$H_news' ORDER BY 1 DESC";
        $run_H_news_post = mysqli_query($conn,$get_H_news_post);
        while($row_H_news_post = mysqli_fetch_assoc($run_H_news_post)){
            $post_id = $row_H_news_post['p_id'];
            $title = $row_H_news_post['title'];
            $author = $row_H_news_post['author'];
            $date = $row_H_news_post['p_date'];
            $content = $row_H_news_post['p_cont'];
            $p_comment_id = $row_H_news_post['p_id'];
            $p_image_1 = $row_H_news_post['img_1'];
            $status = $row_H_news_post['status'];
            echo"
            <div class='post-content w-100'>
            <div class='post-image'> 
            <div>
              <img src='images/post_img/$p_image_1' class='img w-100' alt='blog1'>
            </div> 
          
            <div class='post-info flex-row'>
              <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
              <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
              <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
            </div>
            </div>
            <div class='post-title'>
              <a href='#' class='text-dark'><h4>$title</h4></a>
              <p>
              $content
              </p>
              <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
            </div>
          </div>
            
            ";


        }


    }elseif (isset($_GET['cat'])) {
        $b_news = $_GET['cat'];
        $get_b_news_post="SELECT * FROM post WHERE p_cat_id = '$b_news' ORDER BY 1 DESC";
        $run_b_news_post = mysqli_query($conn,$get_b_news_post);
        while($row_b_news_post = mysqli_fetch_assoc($run_b_news_post)){
            $post_id =$row_b_news_post['p_id'];
            $title = $row_b_news_post['title'];
            $author = $row_b_news_post['author'];
            $date = $row_b_news_post['p_date'];
            $content = $row_b_news_post['p_cont'];
            $p_comment_id = $row_b_news_post['p_id'];
            $p_image_1 = $row_b_news_post['img_1'];
            $status = $row_b_news_post['status'];
            echo"
            <div class='post-content w-100'>
            <div class='post-image'> 
            <div>
              <img src='images/post_img/$p_image_1' class='img w-100' alt='blog1'>
            </div> 
          
            <div class='post-info flex-row'>
              <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
              <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
              <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
            </div>
            </div>
            <div class='post-title'>
              <a href='#' class='text-dark'><h4>$title</h4></a>
              <p>
              $content
              </p>
              <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
            </div>
          </div>
            
            ";


        }


    }elseif (isset($_GET['cat'])) {
        $sports = $_GET['cat'];
        $get_sports_post="SELECT * FROM post WHERE p_cat_id = '$sports' ORDER BY 1 DESC";
        $run_sports_post = mysqli_query($conn,$get_sports_post);
        while($row_sports_post = mysqli_fetch_assoc($run_sports_post)){
            $post_id = $row_sports_post['post_id'];
            $title = $row_sports_post['title'];
            $author = $row_sports_post['author'];
            $date = $row_sports_post['post_date'];
            $content = $row_sports_post['content'];
            $p_comment_id = $row_sports_post['post_id'];
            $p_image_1 = $row_sports_post['p_image_1'];
            $status = $row_sports_post['status'];
            echo"
            <div class='post-content w-100'>
            <div class='post-image'> 
            <div>
              <img src='images/post_img/$p_image_1' class='img w-100' alt='blog1'>
            </div> 
          
            <div class='post-info flex-row'>
              <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
              <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
              <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
            </div>
            </div>
            <div class='post-title'>
              <a href='#' class='text-dark'><h4>$title</h4></a>
              <p>
              $content
              </p>
              <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
            </div>
          </div>
            
            ";


        }


    }
    elseif (isset($_GET['cat'])) {
        $football = $_GET['cat'];
        $get_football_post="SELECT * FROM post WHERE p_cat_id = '$football' ORDER BY 1 DESC";
        $run_football_post = mysqli_query($conn,$get_football_post);
        if($count_football = mysqli_rows_num($run_football_post)>0){
                while($row_football_post = mysqli_fetch_assoc($run_football_post)){
                    $post_id = $row_football_post['p_id'];
                    $title = $row_football_post['title'];
                    $author = $row_football_post['author'];
                    $date = $row_football_post['p_date'];
                    $content = $row_football_post['p_cont'];
                    $p_comment_id = $row_football_post['p_id'];
                    $p_image_1 = $row_football_post['img_1'];
                    $status = $row_football_post['status'];
                    echo"
                    <div class='post-content w-100'>
                    <div class='post-image'> 
                    <div>
                      <img src='images/post_img/$p_image_1' class='img w-100' alt='blog1'>
                    </div> 
                  
                    <div class='post-info flex-row'>
                      <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
                      <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
                      <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
                    </div>
                    </div>
                    <div class='post-title'>
                      <a href='#' class='text-dark'><h4>$title</h4></a>
                      <p>
                      $content
                      </p>
                      <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
                    </div>
                  </div>
                    
                    ";


                }
              }
              {
                echo"
              <div class='post-content w-100'>
                <h4>No news on football found </h4>
              </div>
              ";
            }

      
    }
    else{
      $get_post="SELECT * FROM post ORDER BY 1 DESC";
      $run_post = mysqli_query($conn, $get_post);
      while($row_post = mysqli_fetch_assoc($run_post)){
          $post_id = $row_post['p_id'];
          $title = $row_post['title'];
          $author = $row_post['author'];
          $date = $row_post['p_date'];
          $content = $row_post['p_cont'];
          $p_comment_id = $row_post['p_id'];
          $p_image_1 = $row_post['img_1'];
          $status = $row_post['status'];
          echo"
          <div class='post-content w-100'>
          <div class='post-image'> 
          <div>
            <img src='images/post_img/$p_image_1' class='img w-100' alt='blog1'>
          </div> 
        
          <div class='post-info flex-row'>
            <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
            <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
            <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
          </div>
          </div>
          <div class='post-title'>
            <a href='#' class='text-dark'><h4>$title</h4></a>
            <p>
            $content
            </p>
            <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
          </div>
        </div>
          
          ";


      }
    }
}

function post(){
    
    global $conn;
        $get_post="SELECT * FROM post ORDER BY 1 DESC";
        $run_post = mysqli_query($conn,$get_post);
        while($row_post = mysqli_fetch_assoc($run_post)){
            $post_id = $row_post['p_id'];
            $title = $row_post['title'];
            $author = $row_post['author'];
            $date = $row_post['p_date'];
            $content = $row_post['p_cont'];
            $p_comment_id = $row_post['p_id'];
            $p_image_1 = $row_post['img_1'];
            $status = $row_post['status'];
            echo"
            <div class='post-content w-100'>
            <div class='post-image'> 
            <div>
              <img src='./images/post_img/$p_image_1' class='img w-100' alt='blog1'>
            </div> 
          
            <div class='post-info flex-row'>
              <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
              <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
              <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
            </div>
            </div>
            <div class='post-title'>
              <a href='#' class='text-dark'><h4>$title</h4></a>
              <p>
              $content
              </p>
              <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
            </div>
          </div>
            
            ";
        }
    }



function postData($data){
    global $conn;
        $get_postdata="SELECT * FROM post WHERE p_cat_id = '$data' ORDER BY 1 DESC";
        $run_postdata = mysqli_query($conn,$get_postdata);
        if($row_count = mysqli_num_rows($run_postdata)<=0){
            echo"
                    <div class='post-content w-100'>
                        <div class='post-title'>
                           <h4>No News avalaible for this category</h4>
                       </div>
                    </div>
              ";
        }
        else{
                while($row_postdata = mysqli_fetch_assoc($run_postdata)){
                    $post_id = $row_postdata['p_id'];
                    $title = $row_postdata['title'];
                    $author = $row_postdata['author'];
                    $date = $row_postdata['p_date'];
                    $content = $row_postdata['p_cont'];
                    $p_comment_id = $row_postdata['p_id'];
                    $p_image_1 = $row_postdata['img_1'];
                    $status = $row_postdata['status'];
                    echo"
                    <div class='post-content w-100'>
                    <div class='post-image'> 
                    <div>
                      <img src='./images/post_img/$p_image_1' class='img w-100' alt='blog1'>
                    </div> 
                  
                    <div class='post-info flex-row'>
                      <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
                      <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$date</span>
                      <span class='text-primary mx-2'data-toggle='modal' data-target='#comment'><a href='index.php?p_comment_id=$p_comment_id' ><?php getComNum(); ?> comments</a></span>
                    </div>
                    </div>
                    <div class='post-title'>
                      <a href='#' class='text-dark'><h4>$title</h4></a>
                      <p>
                      $content
                      </p>
                      <button class='btn post-btn'>Read more&nbsp;<i class='fa fa-arrow-right'></i></button>
                    </div>
                  </div>
                    
                    ";
                }
        }

}


function getPCatNum(){
  global $conn;
  if(isset($_GET['cat'])){
    $music = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = '$music'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }
  elseif(isset($_GET['cat'])){
    $advert = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = '$advert'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }

  elseif(isset($_GET['cat'])){
    $afric_news = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = '$afric_news'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }

  elseif(isset($_GET['cat'])){
    $H_news = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = '$H_news'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }

  elseif(isset($_GET['cat'])){
    $b_news = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = '$b_news'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }

  elseif(isset($_GET['cat'])){
    $b_news = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = '$b_news'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }

  elseif(isset($_GET['cat'])){
    $sports = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = 'sports'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }

  elseif(isset($_GET['cat'])){
    $football = $_GET['cat'];
    $catNum = "SELECT * FROM post WHERE p_cat_id = '$football'";
    $run_catNum = mysqli_query($conn,$catNum);
    $count_catNum = mysqli_num_rows($run_catNum);
  }
  return $count_catNum;
  
}

function getPCat(){
  
  global $conn;
  $get_p_cat = "SELECT * FROM p_cat";
  $run_get_PCat= mysqli_query($conn, $get_p_cat);
  while($row_get_PCat = mysqli_fetch_assoc($run_get_PCat)){
    $cat_id = $row_get_PCat['cat_id'];
    $cat_name = $row_get_PCat['cat_name']; 
    $get_post_cat = "SELECT * FROM post WHERE p_cat_id = '$cat_id' ORDER BY 1 DESC";
    $run_post_cat = mysqli_query($conn,$get_post_cat);
    $count_post_cat = mysqli_num_rows($run_post_cat);
    echo"
    
    <li class='list-items d-flex justify-content-between'>
      
      <a href='index.php?cat = $cat_id' class='text-light'>$cat_name</a>
      <span>($count_post_cat)</span>
    </li>
    
    ";
  }
}

function getComNum(){
   if(isset($_GET['p_comment_id']))
   {
    $p_comment_id = $_GET['p_comment_id'];
    $get_comm = "SELECT * FROM comment WHERE ref_id = '$p_comment_id' ORDER BY 1 DESC";
    $run_comm = mysqli_query($conn, $get_comm);
    $row_count = mysqli_num_rows($run_comm);
    echo $row_count;
   }
};

function getPPost(){
  global $conn;
  $pop_status = 1;
  $get_pop = "SELECT * FROM post WHERE pop_status = '$pop_status' ORDER BY 1 DESC";
  $run_pop = mysqli_query($conn, $get_pop);
  $row_pop_count = mysqli_num_rows($run_pop);
  
  if($row_pop_count <= 0){
    echo"
         <div class='post-content py-1 w-100'>
            <h4 class='text-danger'>No popular post presently </h4>
        </div>
       ";
  }
  else{
  while($row_pop = mysqli_fetch_assoc($run_pop)){

         $p_id =$row_pop['p_id']; 
         $title =$row_pop['title'];
         $author =$row_pop['author'];
         $p_date =$row_pop['p_date'];
         $img_1 =$row_pop['img_1'];
         $p = substr($p_date,0,11); 

    echo"
         
        <div class='post-content py-1 w-100'>
          <div class='post-image'> 
           <div>
             <img src='images/post_img/$img_1' class='img w-100' alt='blog1'>
           </div> 
        
           <div class='post-info flex-row'>
            <span class='mx-2'><i class='fa fa-user text-primary'></i>&nbsp;&nbsp;$author</span>
            <span class='mx-2'><i class='fa fa-calendar text-primary'></i>&nbsp;&nbsp;$p</span>
            <span class='text-primary mx-2'><a href='#'>12 comments</a></span>
           </div>
          </div>
          <div class='post-title'>
            <a href='#' class='text-dark'><h6>$title</h6></a>
           
          </div>
        </div>

        
        ";
   }
    
    }

};

?>