<!DOCTYPE html>
<html lang="en">
    <?php include_once("header.php");?>
    <body bgcolor="white">		
			<section class="main-content" style="width: 100%;">
			<img src="images/2.jpg" width="100%">	
			<style type="text/css">
				button{
					border-radius: .5rem;
					background: linear-gradient(0deg,#991217 0,#ec1c23 100%);
					color: #fff;
					font-size: 1rem;
					line-height: 2.5rem;
					padding: 0 1.875rem;
					text-transform: uppercase;
					width: auto;
					height: 2.5rem;
}
			</style>
		</strong>
		<h1 align="center"><span>MY ACCOUNT</span></h1>
						
				<div class="row" style="margin-left: 2%">
					<div class="span6" style="margin-left: 7%;color: #5c5c5c;">					
						<h4 class="title"><span class="text"><strong>Login</strong></span></h4>
						<form action="signinform.php" method="post" style="border-right: 1px solid #e6e6e6;">
							<fieldset>
								<div class="control-group" style="margin-top: -2%">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" name="mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please Enter your email address on format abc@example.com">
									</div>
								</div>
								<div class="control-group" style="margin-top: -1%">
									<label class="control-label">Password</label>
									<div class="controls">
										<input required name="password"  type="password" value="" autocomplete="OFF" autofillparam="ON" size="30" maxlength="25">
										<br>
										<a style="font-family:'Oswald',san-serif; color: #008AB9; font-size: 12px; text-decoration: none;" href="resetpassword.php">Forgot password?</a>
									</div>
											
								</div>
								<div class="control-group">
									<input class="btn" type="submit" name="submit" value="LOG IN">
								</div>
							</fieldset>
						</form>				
					</div>
<div class="span6" style="margin-left: 1%">						
	<h4 class="title"><span class="text"><strong>Create Account</strong></span></h4>	
	<strong>Start receiving all the benefits of having your own Shaheen Outdoors Account:</strong>
	<ul style="margin-left: 3%">
	<li>Express Checkout</li>
	<li>Access your account anywhere</li>
	<li>24/7 live customer support available</li>
	<li>Write customer product review</li>
	<li>Track your order</li></ul>

	<div class="actions"><a href="register.php"><input tabindex="9" class="btn btn-inverse large" type="submit" value="CREATE ACCOUNT"></a></div>		
					</div>				
				</div>
			</section>			
			<section id="footer-bar" style="background-image: url(images/14.jpg);">
				<style type="text/css">
					.nav>li>a {
    position: relative;
    display: block;
    padding: 0px 5px;
}
				</style>
				<div class="row" style="margin-left: 10%">
					<div class="span4">
						<ul class="nav" style="margin-left: -5%">
							<li><a href="#">ABOUT US</a></li>  
							<li><a href="#">BRAND PARTNERS</a></li>
							<li><a href="#">LEAVE FEEDBACK</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
						<form action="mail.php" class="newsletter" method="POST">Subscribe to get our latest updates
							<input class="input" name="email" placeholder="Enter email address" type="text"><br>
							<input style="margin: 0 50px; padding: 0 5px"  class="btn" type="submit" value="SUBSCRIBE" onclick="alert('You have succesfully subscribed to our latest updates via email')">
</form>
					</div>

					<div class="span4">
						<ul class="nav" style="margin-left: -5%">
							<li><a href="#">PRIVACY POLICY</a></li>
							<li><a href="#">SHIPMENT POLICY</a></li>
							<li><a href="#">REFUND POLICY</a></li>
							<li><a href="#">RETURN POLICY</a></li>
							<li><a href="#">TERMS & CONDITIONS</a></li>
						</ul>
						Follow Us:<br>
						<img height="32%" width="32%"  src="images/footer/socialmedia icons.png">
					</div>

					<div class="span4">
						<ul class="nav" style="margin-left: -5%">
							<li><a href="#">MY ACCOUNT</a></li>
							<li><a href="#">TRACK ORDER</a></li>
							<li><a href="#">CUSTOMER SERVICES</a></li>
							<li><a href="#">SITE MAP</a></li>
							<li><a href="#">TIPS & ADVICE</a></li>
						</ul>
						Payment Methods:<br>
						<img height="60%" width="60%" src="images/footer/payment modes.png">
					</div>
				</div>	
			</section>
			<section id="copyright">
				<span style="margin-left: 35%">Copyright Shaheen Outdoors. All right reserved.</span>
			</section>


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