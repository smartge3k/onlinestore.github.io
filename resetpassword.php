<!DOCTYPE html>
<html lang="en">
         <div class="layer" style="background-color: rgba(255, 255, 255, 0.3);">
    <body background="images/opt1.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
   
		<?php include_once("header.php");?>
		<section class="main-content" style="width: 100%;">
		    <form method="post" action="send_link.php">
      <p>Enter Email Address To Send Password Link</p>
      <input type="text" name="email">
      <input type="submit" name="submit_email">
    </form>
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