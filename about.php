<!DOCTYPE html>
<html lang="en">
    <body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
		<?php include_once("header.php");?>



			<section class="main-content" style="width: 100%;">
			<img src="images/Sliders/out%20story.jpg" width="100%">	
				<div class="row" style="margin-left: 6%;margin-right: 20%">
					<div class="span12" width="100%">
					<h3 align="center">-HISTORY-</h3>
                        <p style="font-size: 16px" align="justify">Shaheen Outdoors is a subsidiary company of Shaheen Adventures Pakistan. It is the fastest growing online adventure gear / equipment store of Pakistan. At Shaheen Outdoors Shop, we deal in Camping, Hunting, Fishing, Archery, Skeet Machines, Air Guns, Hiking, Trekking, Biking, Paintball, Water Sports & Paragliding equipment / gear from world's best manufacturers. Shaheen Outdoors Team is measuring up well to its mission of facilitating the valuable customers in terms of product quality, flawless service and effective after sales support.</p>
					
					<h3 align="center">-VISION-</h3>
                        <p style="font-size: 16px" align="justify">Shaheen Outdoors guarantees that its products meet the highest standards in all areas and quality is never compromised, regardless of the production site. For reasons of expertise, items are produced abroad, where the technical, staff and material resources needed for efficient manufacture can be accessed.</p>
					
					<h3 align="center">-MISSION-</h3>
                        <p style="font-size: 16px" align="justify">To serve the adventure community with the best of intention, commitment and professionalism. </p>
					
					<h3 align="center">-GOALS-</h3>
					
				</div>

				<a href="products.php"><button style="margin-left: 50%" class="btn">VIEW ALL PRODUCTS</button></a>
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