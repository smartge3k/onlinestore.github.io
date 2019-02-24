<!DOCTYPE html>
<html lang="en">
<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
    <?php include_once("header.php");?>
			<h1 align="center"><span>SHOPPING CART</span></h1>

				<div class="row" style="margin-left: 4%;margin-top: 4%">
					<div class="span12" >					
						<table class="table table-striped table-bordered">
							<thead>
								<tr style="font-size: 14px">
									<th><div style="margin-left: 30%">Product Image</div></th>
									<th><div style="margin-left: 30%">Product Details</div></th>
									<th><div style="margin-left: 30%">Quantity</div></th>
									<th><div style="margin-left: 30%">Unit Price</div></th>
									<th><div style="margin-left: 35%">Total</div></th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="#"><img  height="120px" width="120px" alt="" src="images/featured products/2.jpg"></a></td>
									<td>one product</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>Rs. 9.00</td>
									<td>Rs. 235.00</td>
									<td class="col-delete a-center last">
										<a href="http://www.Online Store.com/checkout/cart?remove=1152" class="btn-remove btn-remove2">Delete</a>
									</td>
								</tr>			  
								<tr>
									<td><a href="#"><img height="120px" width="120px" alt="" src="images/featured products/1.jpg"></a></td>
									<td>two product</td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>Rs. 150.00</td>
									<td>Rs. 450.00</td>
									<td class="col-delete a-center last">
										<a href="http://www.Online Store.com/checkout/cart?remove=1152" class="btn-remove btn-remove2">Delete</a>
									</td>
								</tr>
								<tr>
									<td><a href="#"><img height="120px" width="120px"  alt="" src="images/featured products/3.jpg"></a></td>
									<td>third product</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>Rs. 210.00</td>
									<td>Rs. 123.00</td>
									<td class="col-delete a-center last">
										<a href="http://www.Online Store.com/checkout/cart?remove=1152" class="btn-remove btn-remove2">Delete</a>
									</td>
								</tr>

								<tr>
									<th colspan="3" align="center"><a href="#">Total Bill</th>
									<td colspan="3">Rs. 32,0202</td>
								</tr>
									  
							</tbody>
						</table>
						<hr>
						<p class="cart-total right">
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">EMPTY CART</button>
							<button class="btn" type="button">UPDATE CART</button>
							<button class="btn" type="submit" id="checkout">CHECKOUT</button>
						</p>					
					</div>
					</div>
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