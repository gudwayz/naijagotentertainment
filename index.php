<?php
include('db.php');
include('function.php');



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
    <link href="main -naija.css" rel="stylesheet">
</head>
  <body>
    <header>
           <nav>
          
              <div class="top_nav">
                  <div class="logo">
                      <img src="logo.png" alt="logo">
                  </div>
              
                 <!--<i class="fab fa-bars menu_toggle"></i>-->
                  <ul class="nav">
                    <li><a href="login.php">SIGN IN</a></li>
                    <li><a href="register.php">SIGN UP</a></li>
                 </ul>
              </div>
              <hr class="mobile_hr">

              <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a class="navbar-brand font-italic" href="#">Naijagotentertainment</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navig" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navig">
                  <ul class="navbar-nav mr-auto d-flex justify-content-between" data-target="#posting">
                    <li class="nav-item active">
                        
                      <a class="nav-link" href="index.php?gen = 1">General <span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                        
                         $get_p_cat = "SELECT * FROM p_cat";
                         $run_get_PCat= mysqli_query($conn, $get_p_cat);
                         while($row_get_PCat = mysqli_fetch_assoc($run_get_PCat)){
                                 $cat_id = $row_get_PCat['cat_id'];
                                 $cat_name = $row_get_PCat['cat_name']; 
                                  echo"
                                       <li class='nav-item' data-target='#posting'>
                                           <a class='nav-link' href='index.php?cat= $cat_id'>
                                            $cat_name</a>
                                       </li>
                                    ";
                                    
                                }
                                
                        ?>
                  </ul>
                  <form class="form-inline my-2 my-lg-0 section search">
                    <input class="form-control mr-sm-2 section_title" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
                
            </nav>
              
              
        
            </nav>
        </header>
        
    <div class="page_wrapper">
         <div class="carousel slide">
             <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/anime1.jpg" class="d-block w-100" alt="studio">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/car repair.jpg" class="d-block w-100" alt="repairs">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="./images/castle.jpg" class="d-block w-100" alt="castle">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
             </div>
         </div>
    </div>
<section class="container-fluid mt-5">
  <div class="row site-content">
    <div class="col-sm-8 post" id="posting">
      <?php
      if(!isset($_GET['cat'])||isset($_GET['gen'])){
          post();
      }
      else{
          $data = $_GET['cat'];
          postData($data);
      }
      ?>
      <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
             </div>
             <div class="modal-body">
        ...
      </div>
             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Save changes</button>
             </div>
         </div>
       </div>
    </div>

      
      
      <hr class="bg-danger font-bold">
     
      <div class="pagination d-flex justify-content-center my-2">
        <a href="#" class=""><i class="fa fa-chevron-left"></i></a>
        <a class="pages" href="#">1</a>
        <a class="pages" href="#">2</a>
        <a class="pages" href="#">3</a>
        <a href="#" class=""><i class="fa fa-chevron-right"></i></a>
      </div>
    </div>
    <aside class="col-sm-4 sidebar">
      <div class="category">
        <h2>Category</h2>
        <ul class="category-list">
        <?php getPCat();?>
        
         </ul>
      </div>
      <div class="advert bg-warning py-1 px-2 mt-3">
      <h4 class="text-uppercase font-italic">place your advert here</h4>
      <p><h6>for advert bookings call: 070406......<h6></p>
      <p><h6>or  email: naijagotentertainment@gmail.com.<h6></p>
      </div> 


      <div class="popular-post">
        <h2 class="pt-5">Popular post</h2>
       
          <?php
           
           getPPost();
          
          
          ?>

        
      </div>
      <div class="newsletter mt-4 pl-3">
        <h2>Newsletter</h2>
        <div class="form-element">
          <input type="email" class="py-2 mr-1"name="" id="" placeholder="Enter your E-mail">
          <button type="submit" class="btn form-btn py-2">Subcribe</button>
        </div>
      </div>

   
    </aside>
  </div>
</section>

    <div class="container-fluid footer mt-4">
        <div class="row footer_content">
            <div class="col-md-4 footer_section about">
                <h2>Naija Got Entertainment</h2>
                <p></p>
                <div class="contact">
                  <span><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; biosoky@gmail.com
                    </span>
                
                </div>
                <div class="socials">
                    <a href="/#" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="/#" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="/#" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="/#" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 footer_section quick_links">
                <h2>Quick Links</h2>
                <ul>
                    <a href="about.php"><li>About us</li></a>
                    <a href="/#"><li>Press</li></a>
                    <a href="/#"><li>Advertise</li></a>
                    <a href="/#"><li>Developers</li></a>
                    <a href="about.php"><li>About the Blog</li></a>
                </ul>
            </div>
            <div class="col-md-4 footer_section contact_form">
                <h2>Contact us</h2>
                New Road Borokiri Port Hacourt
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 footer_bottom bg-light">
                © Powered by Biosoky Entertainment Ltd
            </div>
        </div>
    </div>
</div>

<div class='modal comment' id='comment' tabindex='-1' role='dialog' aria-labelledby='commentLabel' aria-hidden='true'>
            <div class='.modal-dialog-scrollable'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <h5 class='modal-title' id='comment'>Modal title</h5>
                  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                <div class='modal-body'>
                   <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      You better believe it!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Working with AdminLTE on a great new app! Wanna join?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      I would love to.
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
                </div>
                <div class='modal-footer'>
                  <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                  <button type='button' class='btn btn-primary'>Save changes</button>
                </div>
              </div>
            </div>
          </div>




<script src="jquery.min.js"></script>
<script src = "bootstrap.min.js"></script>
     <script src="/static/js/2.448b9485.chunk.js"></script>
     <script src="/static/js/main.70e9448c.chunk.js"></script>  
</body>
</html>