
 <div class="container">
     
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            
            <div class="navbar-header">
               <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                
                <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"><i class="fas fa-arrow-left"></i></span>
               </button>&nbsp;&nbsp;
                <a class="navbar-brand" href="index.php">NAIJAGOTENTERTAINMENT &nbsp; ADMIN PANEL</a>
            </div>
            
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php">VISIT SITE</a></li>&nbsp;&nbsp;
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./profile.php?section=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php" class="active"><i class="fas fa-landmark"></i> Dashboard</a>
                    </li>

                   <li>
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="collapse" data-target="#posts"><i class="fas fa-blog"></i> Posts <i class="fa fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="./posts.php">View All Posts</a>
                            </li>
                            <li>
                                <a href="./publishnews.php">Add New Post</a>
                            </li>
                        </ul>
                           <li>
                         <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-users"></i> Users <i class="fa fa-caret-down"></i>
                         </a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="./users.php">View All Users</a>
                            </li>
                            
                        </ul>
                    </li>
                           <li>
                        <a href="./profile.php?section=<?php echo $_SESSION['username']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>
     
 </div>