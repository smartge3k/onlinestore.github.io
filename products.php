<?php
include_once("connection/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
<?php include_once("header.php");?>
			<section class="main-content" style="width: 100%;margin-top: 2%;">
				<h1 align="center"><span>PRODUCTS</span></h1>
				
				<div class="row" style="width: 100%;margin-left: 2%">						
					<div class="span3 col"  style="width: 20%">
						<div class="block">	
                        <ul class="nav nav-list" style="margin-left: 5%">
								<li class="nav-header">CATEGORIES</li>
                            <?php  
                               $query = "SELECT * from cat";
                                $run = mysqli_query($con,$query);
                                While($row = mysqli_fetch_array($run)){
                                        $cat_id = $row['CatId'];
                                        $cat_name = $row['CatName'];
                            ?>
                            <li><a href='products.php?cat=<?php echo $cat_id;?>'><?php echo $cat_name; ?></a></li>
                            <?php
                                }
                            ?>
							</ul>
						</div>
							<br/>
							<div class="block">	
							<ul class="nav nav-list" style="margin-left: 5%">
								<li class="nav-header">BRANDS</li>
								<?php  
                               $query = "SELECT * from brand";
                                $run = mysqli_query($con,$query);
                                While($row = mysqli_fetch_array($run)){
                                        $brand_id = $row['BrandId'];
                                        $brand_name = $row['BrandName'];
                            ?>
                            <li><a href='products.php?brand=<?php echo $brand_id;?>'><?php echo $brand_name; ?></a></li>
                            <?php
                                }
                            ?>
							</ul>
						</div>
						</div>
						


					<div class="span11" style="width: 70%;margin-left: 5%;margin-top: 2%;margin-bottom: 2%">
						<div style="float: left; width: 20%"  class="sort-by">
							<label hidden="true" for="grid-sort-header">Sort By:</label>
							<form action="#" method="post" name="Product-Sorting-Options" novalidate="novalidate">
								<fieldset>
									<div class="select-wrapper">
										<select style="width: 80%" id="grid-sort-header" aria-invalid="false" class="valid">
											<option value="https:// www.Online Store.com/products.php/?srule=category-position&amp;sz=24&amp;start=0" selected="">Most Relevant</option>
											<option value="https:// www.Online Store.com/products.php/?srule=most-popular&amp;sz=24&amp;start=0">Most Popular</option>
											<option value="https:// www.Online Store.com/products.php/?srule=alpha-a-z&amp;sz=24&amp;start=0">Name A to Z</option>
											<option value="https:// www.Online Store.com/products.php/?srule=price-high-low&amp;sz=24&amp;start=0">Price High to Low</option>
											<option value="https:// www.Online Store.com/products.php/?srule=price-low-high&amp;sz=24&amp;start=0">Price Low to High</option>
										</select>
									</div>
									Showing 1 - 16 of 200 Results
									<button hidden="true" class="sort-Go-Button simple-submit" type="submit" value="Go">Go</button>
								</fieldset>
							</form>
						</div>

						<div style="float: left; width: 20%" class="items-per-page">
							<label hidden="true" for="grid-paging-header">Items / Page</label>
							<form action="#" method="post" name="Product-Paging-Options" novalidate="novalidate">
								<fieldset>
									<div class="select-wrapper">
										<select style="width: 30%" id="grid-paging-header">
											<option value="https://www.Online Store.com/products.php/?sz=16" selected="selected">16</option>
											<option value="https://www.Online Store.com/products.php/?sz=24">24</option>
											<option value="https://www.Online Store.com/products.php/?sz=48">48</option>
										</select>
									</div>
									<button hidden="true" class="sort-Go-Button simple-submit" type="submit" value="Go">Go</button>
								</fieldset>
							</form>
						</div>
						<div style="float: left; width: 40%; margin-left: 15%;margin-top: -0.1%" class="pagination">
							<svg style="margin-left: 55%" height="8%" width="8%" viewBox="0 0 22 22" id="grid-tiles">
								<path style="" d="M16 22v-6h6v6h-6zm0-14h6v6h-6V8zm0-8h6v6h-6V0zM8 16h6v6H8v-6zm0-8h6v6H8V8zm0-8h6v6H8V0zM0 16h6v6H0v-6zm0-8h6v6H0V8zm0-8h6v6H0V0z"></path>
							</svg>
						</div>

					<br>				
                        <br>				

</div>
                    
 <?php
if(!isset($_GET['cat']) && !isset($_GET["page"])){
          $query = "SELECT * from product";
          $run = mysqli_query($con, $query);
			
    ?>
<div class="span11" style="width: 70%;margin-left: 5%">		
					<ul class="thumbnails listing-products">
						<?php while($row = mysqli_fetch_array($run))	
                            {   
                                 $pimg =  $row['img'];
                                 $pid =  $row['ProdId'];
                        ?>
							<li style="width:190px">
								<div class="product-box">												
									<a href="product_detail.php?id=<?php echo $pid; ?>">
                                        <img alt="" src="inventory_images/<?php echo $pimg;?>.jpg"></a><br/>
									<a href="product_detail.php" class="title"><?php echo $row["ProdName"] ?></a><br/>
									<!--<span style="font-size: 30px!important;color: #ec1c23!important;margin-top: -1em!important;width:90% !important;" class="bv-rating-stars-on bv-rating-stars" style="" aria-hidden="true">
									★★★★★
								</span>-->
								<p class="price"><?php echo $row["ProdPrice"] ?></p>
							</li>

                            <?php } ?>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					
				</div>
                
                
                <?php }else if(isset($_GET['cat'])){
            $catid = $_GET['cat'];
          $query = "SELECT * from product where CatId = $catid ";
          $run = mysqli_query($con, $query);
    ?>

<div class="span11" style="width: 70%;margin-left: 5%">		
					<ul class="thumbnails listing-products">
						<?php while($row = mysqli_fetch_array($run))	
                            {   
                                 $pimg =  $row['img'];
                                 $pid =  $row['ProdId'];
                        ?>
							<li style="width:190px">
								<div class="product-box">												
									<a href="product_detail.php?id=<?php echo $pid; ?>">
                                        <img alt="" src="inventory_images/<?php echo $pimg;?>.jpg"></a><br/>
									<a href="product_detail.php" class="title"><?php echo $row["ProdName"] ?></a><br/>
									
								<p class="price"><?php echo $row["ProdPrice"] ?></p>
							</li>

                            <?php } ?>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
                </div>
                
                
                <?php }else if(isset($_GET['brand'])){
            $catid = $_GET['brand'];
          $query = "SELECT * from product where BrandId = $brandid ";
          $run = mysqli_query($con, $query);
    ?>

<div class="span11" style="width: 70%;margin-left: 5%">		
					<ul class="thumbnails listing-products">
						<?php while($row = mysqli_fetch_array($run))	
                            {   
                                 $pimg =  $row['img'];
                                 $pid =  $row['ProdId'];
                        ?>
							<li style="width:190px">
								<div class="product-box">												
									<a href="product_detail.php?id=<?php echo $pid; ?>">
                                        <img alt="" src="inventory_images/<?php echo $pimg;?>.jpg"></a><br/>
									<a href="product_detail.php" class="title"><?php echo $row["ProdName"] ?></a><br/>
									
								<p class="price"><?php echo $row["ProdPrice"] ?></p>
							</li>

                            <?php } ?>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
                </div>
                <?php } ?> 
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