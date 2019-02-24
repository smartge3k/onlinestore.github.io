<!DOCTYPE html>
<html lang="en">
<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
    <?php include_once("header.php");?>
						<h1 align="center">
							<span>FREQUENTLY ASKED QUESTIONS</span>
						</h1>
	<div class="anchor-item-list" style="margin-top: 2%; margin-left:6%">
				<h4 class="title-item e-h2" id="item-1">
					How do I retrieve the password to my Shaheen Outdoors account?</h4>
				<div class="group-richtext">
					<p>Click on “Forgot password?” on the&nbsp;<a href="/log in.php">Login page</a> to reset your password.</p></div>
				<h4 class="title-item e-h2" id="item-2">
					How do I change the email address on my account?</h4>
				<div class="group-richtext">
					<p>Log in to <a href="/index.php">My Shaheen Outdoors</a>.</p> <p>You will be able to update your email address in “My Profile” section.</p></div>
				<h4 class="title-item e-h2" id="item-3">
					How do I write a review on a product?</h4>
				<div class="group-richtext">
					<p>To write a review for a Shaheen Outdoors product, simply search for the product you wish to review and open the product details page.</p> <p>Under the description of the product, you will find a tab “Reviews”. <br> Click on “write a review” and submit the form with your&nbsp;</p> <p>Please note that you must have a&nbsp;<a href="/index.php">My Shaheen Outdoors</a> account in order to submit a product review.</p></div>
				<h4 class="title-item e-h2" id="item-6">
					How do I add/register a product in “My Shaheen Outdoors profile”?</h4>
				<div class="group-richtext">
					<ol>     
						<li>Login to<span style="text-align: center;">&nbsp;</span><a href="/log in.php" style="text-align: center;">My Shaheen Outdoors profile</a></li>     
						<li>Go to “Products”</li>     
						<li>Click “Add New product”</li>     
						<li>Select your product by clicking “Add to cart”.&nbsp;</li> 
					</ol> 
					<p>Note:&nbsp;In the case that no results are found, you can manually add your product to the list.</p> 
				</div>
    </div>
</section>

<?php include_once("footer.php");?>
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