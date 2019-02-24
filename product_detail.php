<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
// Check to see the URL variable is set and that it exists in the database
if (isset($_GET['id'])) {
	// Connect to the MySQL database  
    include "storescripts/connect_to_mysql.php"; 
	$id = preg_replace('#[^0-9]#i', '', $_GET['id']); 
	// Use this var to check to see if this ID exists, if yes then get the product 
	// details, if no then exit this script and give message why
	$sql = mysql_query("SELECT * FROM product WHERE ProdId='$id' LIMIT 1");
	$productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
		// get all the product details
		while($row = mysql_fetch_array($sql))
		{ 
			$ProdName= $row["ProdName"];
			$ProdCode= $row["ProdCode"];
			$img= $row["img"];
			$img1= $row["img1"];
			$img2= $row["img2"];
			$img3= $row["img3"];
			$img4= $row["img4"];
			$ProdDesc= $row["ProdDesc"];
			$ProdDetails= $row["ProdDetails"];
			$ProdColor= $row["ProdColor"]; 
			$ProdPrice= $row["ProdPrice"]; 
			$ProdAvailable= $row["ProdAvailable"];
			$ProdSale= $row["ProdSale"]; 
			$ProdBrand= $row["ProdBrand"];
			$CustReview= $row["CustReview"];
		}
		 
	} else {
		echo "That item does not exist.";
	    exit();
	}
		
} else {
	echo "Data to render this page is missing.";
	exit();
}
mysql_close();
?>

<!DOCTYPE html>
<html lang="en">
<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<?php include_once("header.php");?>
                	
			<section class="main-content" style="width: 100%;margin-top: 2%;margin-left: 5%">
			<h1 align="center" style="margin-left: -13%"><span>PRODUCT DETAILS</span></h1>				
				

				<div class="row">						
					<div class="span12">
						<div class="row">
							<div class="span12"  style="width: 45%;margin-left: 5%">
								<style type="text/css">
									.zoom { height: 90%;width: 90%;
z-index: 10;
    -webkit-transition: all .3s ease-out; 
    -moz-transition: all .3s ease-out; 
    -o-transition: all .3s ease-out; 
    transition: all .3s ease-out; 
-webkit-backface-visibility: hidden;
-webkit-perspective: 1000;
}

.zoom:hover { 
    -moz-transform: scale(2);
    -webkit-transform: scale(2);
    -o-transform: scale(2);
    transform: scale(2);
    -ms-transform: scale(2);
filter: progid:DXImageTransform.Microsoft.Matrix(sizingMethod='auto expand',
    M11=2, M12=-0, M21=0, M22=2);
  
}

.image { 
margin: 0; 
border: 0; height="200%" width="200%" }

.left {
width: 90%; 
z-index: 10; 
overflow: hidden;
  
}
								</style>
									<div class="left" style="margin-left: 10%">
										<img class="zoom image"  src="inventory_images/<?php echo $img; ?>.jpg">
									</div>						
								<ul class="thumbnails small" style="margin-left:10%;width: 100%">								
									<li class="span1">
										<a href="#" class="thumbnail" data-fancybox-group="group1" title="Description 2">
											<img src="inventory_images/<?php echo $img1; ?>.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="#" class="thumbnail" data-fancybox-group="group1" title="Description 3">
											<img src="inventory_images/<?php echo $img2; ?>.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="#" class="thumbnail" data-fancybox-group="group1" title="Description 4">
											<img src="inventory_images/<?php echo $img3; ?>.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="#" class="thumbnail" data-fancybox-group="group1" title="Description 5">
											<img src="inventory_images/<?php echo $img4; ?>.jpg" alt=""></a>
									</li>
								</ul>
							</div>
							<div class="span5">
								<h4><?php echo $ProdName; ?></h4>
									<span style="font-size: 30px!important;color: #ec1c23!important;margin-top: -1em!important;width:90% !important;" class="bv-rating-stars-on bv-rating-stars" style="" aria-hidden="true">
									★★★★★
								</span>
								<h5>Available In:</h5>
								<img src="images/color1.jpg" alt="orange">
								<img src="images/color2.jpg" alt="Teal Blue">
									<img src="images/color3.jpg" alt="Anthracite">
								</div>

							<div class="span5">
								<address><br>
									<strong>Brand:</strong> <span><?php echo $ProdBrand; ?></span><br>
									<strong>Product Code:</strong> <span><?php echo $ProdCode; ?></span><br>
									<strong>Availability:</strong> <span><?php echo $ProdAvailable; ?></span><br>								
								</address>									
								<h5><strong>Price: </strong><?php echo $ProdPrice; ?></h5>
							</div>

							<div class="span5">
                                <form action="addtocart.php">
									<button class="btn" type="submit">ADD TO CART</button>
									<div class="fb-like" data-href="https://facebook.com/Online Storeshop/" data-layout="button_count" style="height: 100%" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                                 </form>
							</div>							
						</div>
					</div>
				</div>            
            <div class="group-richtext" itemprop="description">
											<div class="row">
							<div class="span12"  style="width:100%;margin-left:-5%;margin-top: -1%">
								<style>
								/* Style tab links */
								.tablink {
									background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 26px;
    width: 70%;
}


/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding-left: 5%;
    padding-right: 5%;
    padding-top: 1%;
    padding-bottom: 1%;
    height: 33.3%;
}

#Home {background-color: #fff;}
#News {background-color: #fff;}
#Contact {background-color: #fff;}
</style>
<!--<button class="tablink" onclick="openPage('Home', this, '#3e7d7f')">Customer Reviews</button>-->
<button class="tablink" onclick="openPage('News', this, '#336768')" id="defaultOpen">Product Details</button>
<button class="tablink" onclick="openPage('Contact', this, '#1f3939')">Product Description</button>


<div id="News" class="tabcontent">
   <h3>Product Description</h3>
	<p style="font-size: 14px;" align="justify"><?php echo $ProdDetails; ?>
	</p>
</div>

<div id="Contact" class="tabcontent">
  <h3>Product Details</h3>
	<p style="font-size: 14px;" align="justify"><?php echo $ProdDesc; ?>
	</p>
</div>

</div>
</div>

<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</div>
</div>
						<style>
/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 16px;
    width: 50%;
}


#Home {background-color: #3e7d7f;}
#News {background-color: #336768;}
#Contact {background-color: #1f3939;}
</style>


			</section>	
<section class="main-content" style="width: 100%;margin-top: 2%;margin-left: 5%">
   <h3>Customer Reviews</h3>
	<p align="justify">
		<div class="control-group">
			<div class="controls">
				<textarea rows="3" id="custreview"  name="custreview" class="span11" style="width: 90%"></textarea>
			</div>
		</div>								
		<button class="btn" onclick="dothis()">COMMENTS</button>
		<script type="text/javascript">
			$(document).ready(function(){

$('#id').click(function(){
var id=$(this).val();

$.post('function.php',{id:id},function(data)
{
 alert(successfully)
})


});

});
		</script>
	</p>
	<br>
	<br>
</section>

			<section class="header_text" style="background-image: url(images/bgm.png);">
				<h1 align="center" style="color: white"> YOU MAY ALSO LIKE </h1>
			</section>

			<section class="main-content" style="width: 100%;margin-top: 2%;margin-left: 5%">													
						<div class="row">
								<div id="myCarousel" class="myCarousel carousel slide" style="width: 100%; margin-left: 5%">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="images/featured products/1.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">First Product</a><br/>
														<a href="products.php" class="category">All Products</a>
														<p class="price">Rs. 0.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="images/featured products/2.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Second Product</a><br/>
														<a href="products.php" class="category">All Product</a>
														<p class="price">Rs. 0.00</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="images/featured products/3.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Third Product</a><br/>
														<a href="products.php" class="category">All Products</a>
														<p class="price">Rs. 0.00</p>
													</div>
												</li>
										<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="images/featured products/4.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Fourth Product</a><br/>
														<a href="products.php" class="category">All Products</a>
														<p class="price">Rs. 0.00</p>
													</div>
												</li>
																																										
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
					</section>
	
<?php include_once("footer.php");?>


		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>