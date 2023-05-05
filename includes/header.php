   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

   </head>
   <body>
    
   </body>
   </html>
   
   
   <?php 
error_reporting(0);
   ?>
    <main>
        <!-- <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <header class="stick">
            <div class="topbar">
                <div class="container">
               
                    <div class="topbar-register">
                         <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a>
                <?php }?>
                     <?php if (strlen($_SESSION['fosuid']>0)) {?>
   <a  href="my-account.php" title="My Account" itemprop="url">My Account</a>
                     <?php } ?>
                    </div>
                    <div class="social1">
                         <a href="https://www.facebook.com/JacksFoodChain" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a -->
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="index.php" title="Home" itemprop="url">
                        <!-- show image logo -->
                        <img src="assets/images/lg.png" alt="lg.png" itemprop="image" class="img-responsive" style="width: 140px; height: 80px; position: relative; left: 60px; bottom: 20px; margin-bottom: -40px;">
                    </a></h1></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                <li><a href="index.php" title="Home" itemprop="url">Home</li>

                    <li class="menu-item-has-children"><a href="our-menu.php" title="RESTAURANTS" itemprop="url">Food Menu</a>
                                                        <ul class="sub-dropdown">
                                                            <?php
                        $query=mysqli_query($con,"select * from  tblcategory");
                                while($row=mysqli_fetch_array($query))
                                {
                                ?> 
                                                            <li><a href="categorywise-menu.php?catid=<?php echo $row['CategoryName'];?>" title="<?php echo $row['CategoryName'];?>" itemprop="url"><?php echo $row['CategoryName'];?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </li>

                                <li><a href="track-order.php" title="Track Order" itemprop="url">Track Order</a></li>
                                <li><a href="contact-us.php" title="Contact us" itemprop="url">Contact us </a></li>
                                <li><a href="reservation.php"  title="BOOK A TABLE" itemprop="url">
                                    Reservation
                                </a></li>

                                            
                                                </ul>
                            <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                                        <a class="log-popup-btn brd-rd4" href="#" title="Login" itemprop="url" style="color: black; position: relative; bottom: 16px; right: 50px;">
                                        <i class="bx bx-cart bx-lg"></i>
                                        </a>
                                        <!-- cart icon medium size-->
                                    <?php }?>

                                                    <?php if (strlen($_SESSION['fosuid']>0)) {?>
                                                <a class="btn brd-rd4" href="cart.php" style="color: black; position: relative; bottom: 16px; right: 50px;" title="Register" itemprop="url">
                                                <i class="bx bx-cart bx-lg"></i>
                                            </a>
                                            <?php } ?>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </header>

                            <div class="responsive-header">
                        
                                <div class="responsive-logomenu">
                                    <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url">JacksFoodChain</h1></div>
                                    <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
                                </div>
                                <div class="responsive-menu">
                                    <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                                    <div class="menu-lst">
                                        <ul>
                    <li><a href="index.php" title="Home" itemprop="url">Home</li>
                    <li class="menu-item-has-children"><a href="our-menu.php" title="RESTAURANTS" itemprop="url">Food Menu</a>
                                    <ul class="sub-dropdown">
                                        <?php
     $query=mysqli_query($con,"select * from  tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?> 
                                        <li><a href="categorywise-menu.php?catid=<?php echo $row['CategoryName'];?>" title="<?php echo $row['CategoryName'];?>" itemprop="url"><?php echo $row['CategoryName'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
<li><a href="track-order.php" title="Track Order" itemprop="url">Track Order</a></li>
<li><a href="contact-us.php" title="Contact us" itemprop="url">Contact us </a></li>
                    </ul>
                </div>
              
                <div class="topbar-register">
                        <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                    <a class="log-popup-btn" href="#" title="Login" itemprop="url">LOGIN</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">REGISTER</a> / 
                <?php }?>
                     <?php if (strlen($_SESSION['fosuid']>0)) {?>
   <a  href="my-account.php" title="My Account" itemprop="url">My Account</a>
                     <?php } ?>
                </div>
                <
                <div class="social1">
                    <a href="https://www.facebook.com/JacksFoodChain" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">

                            <?php if (strlen($_SESSION['fosuid']==0)) {?> 
                    <a class="btn btn-primary log-popup-btn brd-rd4" href="#" style="position: relative; bottom: 10px;" title="Login" itemprop="url">My Cart</a> 
                <?php }?>
                     <?php if (strlen($_SESSION['fosuid']>0)) {?>
                    <a class="btn btn-primary brd-rd4" href="cart.php" style="position: relative; bottom: 10px;" title="Register" itemprop="url">My Cart</a>
                <?php } ?>
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->