<!DOCTYPE html>
<html lang="en">
<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">				
<?php include_once("header.php");?>

<script type="text/javascript">
	function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
    <section class="main-content" style="width: 100%;margin-top: 2%;">				
				<h1 align="center"><span>SITE MAP</span></h1>
				
				<div class="row" style="width: 100%;margin-left: 2%">						
					<div class="span3 col"  style="width: 20%">
						<div class="block">	
							<ul class="nav nav-list" style="margin-left: 5%;list-style: none">
								<li class="nav-header">CATEGORIES</li>
								<li class="active"><a href="products.php">AIR GUNS(12)</a></li>									
								<li><a href="#">BAG PACKS (18)</a></li>
								<li><a href="#">CAMPING (56)</a></li>
								<li><a href="#">FLASH LIGHTS (11)</a></li>									
								<li><a href="#">HUNTING (12)</a></li>
								<li><a href="#">ICE BOXES (16)</a></li>
								<li><a href="#">KNIVES (87)</a></li>									
								<li><a href="#">SHOOTING (32)</a></li>
								<li><a href="#">THERMOS (22)</a></li>
								<li><a href="#">FITNESS (64)</a></li>	
								<li><a href="#">SKEETS & TRAPS (26)</a></li>
							</ul>
						</div>
							<br/>
							<div class="block">	
							<ul class="nav nav-list" style="margin-left: 5%;list-style: none">
								<li class="nav-header">BRANDS</li>
								<li><a href="#">Buck</a></li>
								<li><a href="#">Victorionox</a></li>
								<li><a href="#">Maglite</a></li>
								<li><a href="#">Highlander</a></li>
								<li><a href="#">Coleman</a></li>
								<li><a href="#">Campingaz</a></li>
							</ul>
						</div>
						</div>

						<div class="span11" style="width: 70%;margin-left: 5%;margin-bottom: 2%">
								<ul style="font-size: 14px;margin-left: 12%">
									<li style="list-style-type: none"><strong><a href="#">AIR GUNS</a></strong></li>									
									<li  style="list-style-type: none"><strong><a href="#">CAMPING</a></strong>
										<ul>
										 <li>TENTS & SHELTERS</li>
									     <li>STOVES & GRILLS</li>
									     <li>COOLERS & WATER JUICE </li>
										 <li>LANTERNS & LIGHTS </li>
										 <li>FURNITURE & GAMES </li>
										 <li>SLEEPING BAGS & BEDS </li>
										</ul>
								</li>
									<li style="list-style-type: none"><strong><a href="#">FOOT WEAR</a></strong></li>
									<li style="list-style-type: none"><strong><a href="#">HUNTING ACCESSORIES</a></strong>
									<ul>
											<li>SHOTGUN SIGHTS </li>
											<li>STOOLS & RACKS </li>
											<li>HUNTING BLINDS & TAPES </li>
											<li>HUNTING GUN CASES </li>
											<li>CARTRIDGE BELTS </li>
										</ul>
								</li>
									<li style="list-style-type: none"><strong><a href="#">KNIVES</a></strong>
										<ul>
											<li>POCKET KNIVES </li>
											<li>EVERYDAY KNIVES </li>
											<li>HUNTING KNIVES </li>
											<li>RECREATIONAL KNIVES </li>
											<li>SURVIVAL KNIVES </li>
										</ul>
									</li>
									<li style="list-style-type: none"><strong><a href="#">LIGHTS</a></strong></li>	
									<li style="list-style-type: none"><strong><a href="#">PACKS & BAGS</a></strong></li>								
									<li style="list-style-type: none"><strong><a href="#">SHOOTING ACCESSORIES</a></strong>
										<ul>
											<li>AMMO & STORAGE BOXES </li>
											<li>GUN SLINGS </li>
											<li>GUN CARE </li>
											<li>SHELL HOLDERS </li>
											<li>SHOOTING REST & STICKS </li>
											<li>GUN CASES </li>
											<li>HOLSTER & MAG POUCHES </li>
											<li>EAR & EYE PROTECTION </li>
										</ul>
									</li>
								</ul>
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