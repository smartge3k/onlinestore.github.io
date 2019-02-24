<?php
    session_start();

?>
	<head>
		<meta charset="utf-8">
		<title>SHAHEEN OUTDOORS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Outdoors Ecommerce Website">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  
            <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a9650445e5b2d0d"></script>
		  <!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "outdoorsshop", // Facebook page ID
            whatsapp: "+923341111759", // WhatsApp number
            email: "info@abc.com", // Email
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,email" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<!--<script src="themes/js/jquery.scrolltotop.js"></script>-->
        
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

<div id="top-bar" style="height: 100%; width: 100%">
			<div class="row">	
				<style type="text/css">
							.dropdown {
								position: relative;
								display: inline-block;
							}

							.dropdown-content {
								display: none;
								position: absolute;
								box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
								z-index: 2000;
								padding: 21px 15px 10px 15px;
								margin-left: 0;
								line-height: 30px;
								background-size: 100%;
								margin-top: -3px;
								zoom: 1;
								border-radius: 4px;
							}
							.dropdown:hover .dropdown-content {
							background: white;
							display: inline-block;
							position: relative;
							z-index: 1200;
							font-weight: 700;
							font-size: 12px;
						}
						a{
							color:#0f6b37;
							font-family: 'Open Sans Condensed', sans-serif;
						}

						@media only screen and (min-width: 790px) 
						{
							.menuu2
							{
								display: none;
							}

						}
						@media only screen and (max-width: 790px) 
						{
							.menuu
							{
								display: none;
							}

							.menuu2
							{
								display: block;
							}
						}
					</style>

				<div class="menuu2">
					<img style="margin-left: 10%;margin-right: 10%" height="80%" width="80%" src="images/logo3.png">
				</div>
									
				<div class="menuu">
					<div class="span12" style="width: 100%;">
					<nav id="menu" style="width: 100%; margin-left: 3%; font-size: 14px;font-weight: 600; color: white">
					<a href="index.php"><img style="margin-bottom: 1%" class="pull-left" height="20%" width="20%" src="images/logo3.png"></a>
					<div style="width: 10%; margin-left: 69.4%; margin-top: 1.5%;">
					<div style="margin-top: 0.8%;margin-left: 150px; background-color: #0f6b37; border-radius: 4px; text-align: center; position: absolute; height: 35px;width: 165px">
                        <?php if(!isset($_SESSION['FName']) )
                                 {?>
					<div class="dropdown" style="margin-top: 3%">
						<span style="margin-top: 5%">Sign In / Register</span>
						<div  id="menu" class="dropdown-content" style="margin-top: 6%;background-color: #eee">
							<p>
								<a href="login.php">LOG IN</a><br>
								<a href="register.php">REGISTER</a><br>
								<a href="#">ORDER HISTORY</a><br>
								<a href="http://blue-ex.com/">TRACK YOUR ORDER</a>    
							</p>
						</div>
					</div>
                    <?php }
                        else if(isset($_SESSION['FName'])) { ?>
                  	<div class="dropdown" style="margin-top: 3%">
						<span style="margin-top: 5%"><?php echo $_SESSION['FName']; ?></span>
                        		<div  id="menu" class="dropdown-content" style="margin-top: 6%;background-color: #eee">
                                   							<p>
								<a href="logout.php">LOG OUT</a><br>
								<a href="#">ORDER HISTORY</a><br>
								<a href="http://blue-ex.com/">TRACK YOUR ORDER</a>    
							</p>
                        </div>
					</div>
                       <?php } ?>
				</div>
<a href="cart.php" style="color: white;margin-top: 0.8%;">
	<img height="30%" width="30%" src="images/icons/cart.png"></a>
					<a href="checkout.php"><input tabindex="2" class="btn" type="submit" style="margin-top: 0.8%;position: absolute; padding: 5px 10px; margin-left: 10px; color: #000;font-size: 12px; font-family: 'Open Sans Condensed', sans-serif; font-weight: 700;" value="CHECKOUT"></a>
					
			</div>
<br>
</nav>			
</div>
</div>
</div>
</div>
		<div id="wrapper" style="height: 100%; width: 100%">
			<style type="text/css">
				.navbar {
					position: relative;
					min-height: 0px;
					width: 100%;
					border: 0px solid transparent;

				}

				@media only screen and (max-width: 790px) {
					.navbar{
						display: none
    }
}
			</style>

			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<nav id="menu" class="pull-left">
						<ul style="font-size: 16px;">

						<li style=" background-color: #f88b1d; border-radius: 4px;text-decoration: none">
							<a href="products.php">PRODUCTS&nbsp; <span class="glyphicon glyphicon-chevron-down"></span></a>					
								<ul style="font-size: 16px;">
									<li><a href="products.php"?cat=1>AIR GUNS</a></li>
									<li><a href="products.php?cat=2">THERMOSES</a></li>									
									<li><div class="dropdown"><a href="products.php?cat=3">CAMPING</a>
										<p style="" class="dropdown-content">
										&ensp;TENTS & SHELTERS<br>
									    &ensp;STOVES & GRILLS<br>
									    &ensp;COOLERS & WATER JUICE<br>
										&ensp;LANTERNS & LIGHTS<br>
										&ensp;FURNITURE & GAMES<br>
										&ensp;SLEEPING BAGS & BEDS<br>
										</p>
									</div>
								</li>
								<li><div class="dropdown"><a href="products.php?cat=4">ARCHERY</a>
										<p style="" class="dropdown-content">
										&ensp;BOWS<br>
									    &ensp;ARROWS<br>
									    &ensp;ARCHER ACCESSORIES<br>
										&ensp;TARGETS<br>
										</p>
									</div>
								</li>
									<li><a href="products.php?cat=5">FOOT WEAR</a></li>
									<li><div class="dropdown"><a href="products.php?cat=6">HUNTING ACCESSORIES</a>
									<p class="dropdown-content">
											SHOTGUN SIGHTS<br>
											STOOLS & RACKS<br>
											HUNTING BLINDS & TAPES<br>
											HUNTING GUN CASES<br>
											CARTRIDGE BELTS<br>
										</p>
									</div>
								</li>
									<li><div class="dropdown" ><a href="products.php?cat=7">KNIVES</a>
										<p class="dropdown-content">
											POCKET KNIVES<br>
											EVERYDAY KNIVES<br>
											HUNTING KNIVES<br>
											RECREATIONAL KNIVES<br>
											SURVIVAL KNIVES<br>
										</p>
									</div>
									</li>
									<li><a href="products.php?cat=8">LIGHTS</a></li>	
									<li><a href="products.php?cat=9">PACKS & BAGS</a></li>								
									<li><div class="dropdown" ><a href="products.php?cat=10">SHOOTING ACCESSORIES</a>
										<p class="dropdown-content">
											AMMO & STORAGE BOXES<br>
											GUN SLINGS<br>
											GUN CARE<br>
											SHELL HOLDERS<br>
											SHOOTING REST & STICKS<br>
											GUN CASES<br>
											HOLSTER & MAG POUCHES<br>
											EAR & EYE PROTECTION<br>
										</p>
									</div>
									</li>
								</ul>
							</li>															
							<li><a href="index.php">HOME</a></li>									
							<li><a href="about.php">ABOUT US</a></li>					
							<li><a href="brand.php">BRANDS</a></li>					
							<li><a href="tips.php">ADVICE & TIPS</a></li>		
							</ul>
					</nav>
					<div class="span3 pull-right">
						<div class="searchBox" style="margin-top: -1.2%;margin-right: 2%; z-index: 1000;position: absolute; right: 0;top: 5px;">
						<input onkeyup="myFunction()" id="myInput" style="height: 32px;margin-top: 4.9%;width: 230px" id="searchKeyword" type="text" placeholder="What are you looking for?" name="searchKeyword" autofillparam="ON" autocomplete="off" autocorrect="off" size="50" maxlength="100" class="ui-autocomplete-input">
						<script type="text/javascript">
							function myFunction() {
								var input, filter, table, tr, td, i;
								input = document.getElementById("myInput");
								filter = input.value.toUpperCase();
    							table = document.getElementById("myTable");
  							    tr = table.getElementsByTagName("tr");
  							    for (i = 0; i < tr.length; i++) {
  							    	td = tr[i].getElementsByTagName("td")[0];
   							        if (td) { 
   							        	if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
   							        		tr[i].style.display = "";
   							        	} 
   							        	else {
   							        		tr[i].style.display = "none";
   							        	}
   							        }       
   							    }
   							}
   						</script>
						
						<style>
						
.btn {
    display: inline-block;
    padding: 4px 12px;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 20px;
    color: #000;
    font-weight: 700;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255,255,255,0.75);
    vertical-align: middle;
    cursor: pointer;
    background-color: #f88b1d;
    background-image: -moz-linear-gradient(top,#f88b1d ,##f88b1d );
    background-image: -webkit-gradient(linear,0 0,0 100%,from(#f88b1d ),to(#FF6601));
    background-image: -webkit-linear-gradient(top,#f88b1d ,#f88b1d );
    background-repeat: repeat-x;
    border: 2px solid #f88b1d;
}
					</style>
					<button style="margin-top: 1.15%;margin-left: -3%;height: 32px; " type="button" class="btn">
						<span class="glyphicon glyphicon-search"></span> Search 
					</button>
						<!--<input style="margin-top: 1.15%;margin-left: -3%;height: 32px; " tabindex="3" class="btn" type="submit" value="SEARCH">-->
						<script>
						$("#searchKeyword").keypress(function(e) {
							if (e.which == 13) {
								e.preventDefault();
								$('#searchKeywordButton').click();
							}
						});
						</script>
					</div>
				</div>
				</div>
			</section>
