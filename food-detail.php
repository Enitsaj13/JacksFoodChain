
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>JacksFoodChain | Food Details</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
">

</head>

<?php
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
if(isset($_POST['addcart']))
{
$foodid=$_POST['foodid'];
$foodqty=$_POST['foodqty'];
$userid= $_SESSION['fosuid'];
$query=mysqli_query($con,"insert into tblorders(UserId,FoodId,FoodQty) values('$userid','$foodid','$foodqty') ");
if($query)
{
   // show toast alert from bootstrap 4 
   echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="mr-auto">Bootstrap Toast</strong>
    <small>just now</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    This is a Bootstrap toast.
  </div>
</div>';


  
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}
?>

<body itemscope>
<?php include_once('includes/header.php');?>
     
<?php
//Getting Food details
 $cid=$_GET['fid'];
$ret=mysqli_query($con,"select * from tblfood where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

        <section>
            <div class="block">
				<div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
					<div class="col-md-12 col-sm-12 col-lg-12">
						<div class="page-title-inner">
							<h1 itemprop="headline"><?php echo $row['ItemName'];?> Details</h1>
						
				
						</div>
					</div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Food Details</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block gray-bg bottom-padd210 top-padd30">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="sec-box">
    							<div class="sec-wrapper">
<form method="post">

    								<div class="col-md-8 col-sm-12 col-lg-8">
    									<div class="restaurant-detail-wrapper">
    										<div class="restaurant-detail-info">
    											<div class="restaurant-detail-thumb">
    												<ul class="restaurant-detail-img-carousel">
    													<li><img class="brd-rd3" src="admin/itemimages/<?php echo $row['Image'];?>" alt="<?php echo $row['ItemName'];?>" itemprop="image"></li>
    												
    												</ul>
    											</div>
    											<div class="restaurant-detail-title">
    												<h1 itemprop="headline"><?php echo $row['ItemName'];?></h1>
    												<div class="info-meta">
    													<span><?php echo $row['CategoryName'];?></span>
    												
    												</div>
    										
    												<span class="price">₱<?php echo $row['ItemPrice'];?></span>
    												<div class="qty-wrap">
    						  <input type="hidden" name="foodid" value="<?php echo $row['ID'];?>"> 
    <input class="qty" name="foodqty" type="text" value="1">
    												</div>
    												<p itemprop="description"><?php echo $row['ItemDes'];?></p>
<?php if($_SESSION['fosuid']==""){?>
  <a class="log-popup-btn" href="#" title="Login" class="btn btn-primary pull-left" style="margin-top: 40px;"><i class='bx bxs-cart'></i>
Add to Cart</a>
<?php } else {?>
<button type="submit" name="addcart" class="btn btn-primary pull-left" style="margin-top: 40px;"><i class='bx bxs-cart'></i>
Add to Cart</button>
                                                <?php } ?>
    											</div>
    										</div>
    									</div>
    								</div>
                                    </form>
<?php } ?>

<div class="col-md-3 col-sm-12 col-lg-3" style="margin-left:2%">
                                    <div class="sidebar right">
                                        
                                        <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                            <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Food Categories</h4>
                                            <div class="widget-data">
                                                <ul>

<?php
     $query=mysqli_query($con,"select * from  tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?> 
                                                    <li><span class="radio-box"><label for="filt1-1"><a href="categorywise-menu.php?catid=<?php echo $row['CategoryName'];?>"><?php echo $row['CategoryName'];?></a></label></span></li>
                                                   
                                                <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                 
                                    </div><!--Sidebar -->
                                </div>
    							</div>
                            </div>
                        </div>
                    </div>
                </div><!-- Section Box -->
            </div>
        </section>

    <!-- red section -->
    <?php include_once('includes/footer.php');
include_once('includes/signin.php');
include_once('includes/signup.php');
      ?>
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="assets/js/google-map-int2.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>