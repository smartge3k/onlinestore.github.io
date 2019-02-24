

<!DOCTYPE html>
    <body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
  <?php include_once("header.php");?>

			<section  class="homepage-slider" id="home-slider">
				<style type="text/css">
					.carousel-indicators
					{
						position:absolute;
						top:90%;
						right:50%;
						z-index:5;
						margin-left:-8%;
						list-style:none
					}

					.carousel-indicators li{
						display:block;
						float:left;
						width:15px;
						height:15px;
						border-radius:5px;
						margin-left:5px;
						text-indent:-999px;
						background-color:#ccc;
						background-color:rgba(255,255,255,0.25);
						
					}

					.carousel-indicators .active{
						display:block;
						float:left;
						width:15px;
						height:15px;
						border-radius:5px;
						margin-left:5px;
						text-indent:-999px;
						background-color:#f89406;
					}
				</style>
  <div id="mCarousel" class="carousel slide" data-ride="carousel" width="100%">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#mCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#mCarousel" data-slide-to="1"></li>
      <li data-target="#mCarousel" data-slide-to="2"></li>
      <li data-target="#mCarousel" data-slide-to="3"></li>
      <li data-target="#mCarousel" data-slide-to="4"></li>
      <li data-target="#mCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/Sliders/1.jpg" alt="">
        <style type="text/css">
									.button1 {
										background-color: rgba(255,255,255,0.4);
										opacity: 1;
										color: black;
										height: 38px;
										width: 200px;
										font-size: 22px;
										border: 2px solid #00000;
									}
									.button2 {
										background-color: rgba(255,255,255,0.4);
										opacity: 1;
										color: black;
										height: 38px;
										width: 200px;
										font-size: 22px;
										border: 2px solid #f88b1d;
									}
									.button3 {
										background-color: rgba(255,255,255,0.4);
										opacity: 1;
										color: black;
										height: 38px;
										width: 200px;
										font-size: 22px;
										border: 2px solid #a30315;
									}
									.button4 {
										background-color: rgba(255,255,255,0.4);
										opacity: 1;
										color: black;
										height: 38px;
										width: 200px;
										font-size: 22px;
										border: 2px solid #00000;
									}
									.button5 {
										background-color: rgba(255,255,255,0.4);
										opacity: 1;
										color: black;
										height: 38px;
										width: 200px;
										font-size: 22px;
										border: 2px solid #084b89;
									}

									.button6 {
										background-color: rgba(255,255,255,0.4);
										opacity: 1;
										color: black;
										height: 38px;
										width: 200px;
										font-size: 22px;
										border: 2px solid #2f9e36;
									}
								</style>
          
								<div class="intro" style="margin-top: 5%">
                                    <p align="center" style="color: #f88b1d; font-size: 30px; background-color: rgba(255,255,255,0.7);padding: 5px"><strong>PERFECT FOR CAMPING<br>ENJOY THE SEASON</strong></p><br>
                                    <a href="products.php?cat=3"><button style="margin-left: 20%" class="button2"><strong>SHOP NOW</strong></button></a><br>
								</div>
        </div>
        
        <div class="item">
            <img src="images/Sliders/2.jpg" alt="">
            <div class="intro">
                <p align="center" style="color: black; font-size: 30px;margin-top: -15%"><strong>LIGHTING PRODUCTS<br>Ultra Modern Technology</strong></p><br>
                <a href="products.php?cat=7"><button style="margin-left: 20%" class="button1"><strong>SHOP NOW</strong></button></a>
            </div>
        </div>
        
        <div class="item">
            <img src="images/Sliders/3.jpg" alt="">
            <div class="intro" style="margin-left: 70%;margin-top: 10%">
                <p align="center" style="color: black; font-size: 25px; margin-left: -70%;width: 160%"><strong>QUALITY POCKET KNIVES<br>Trusted Tool for Adventurers</strong></p><br>
                <a href="products.php?cat=6"><button style="margin-left: -15%" class="button3"><strong>SHOP NOW</strong></button></a>
            </div>
        </div>
        
        <div class="item">
            <img src="images/Sliders/4.jpg" alt="">
            <div class="intro">
        	<p align="center" style="color: black; font-size: 25px;margin-top: 10%; background-color: rgba(255,255,255,0.7);padding: 5px"><strong>EASY TO CARRY<br>Keep Your Drink Hot or Cool</strong></p><br>
            <a href="products.php?cat=2"><button style="margin-left: 20%" class="button4"><strong>SHOP NOW</strong></button></a>
								</div>
      </div>

      <div class="item">
        <img src="images/Sliders/5.jpg" alt="">
        <div class="intro" style="margin-left: 27%;margin-top: 7%">
								<p align="center" style="color: white; font-size: 25px;margin-top: -40%;line-height: 120%"><strong>EAR & EYE PROTECTION<br>Best Shooting Accessories</strong></p><br>
            <a href="products.php?cat=9"><button style="margin-left: 20%" class="button5"><strong>SHOP NOW</strong></button></a>
								</div>
      </div>


      <div class="item">
        <img src="images/Sliders/6.jpg" alt="">
        <div class="intro" style="margin-left: 70%;margin-top: 5%; ">
       <p align="center" style="background-color: rgba(255,255,255,0.7);padding: 5px;color: black; font-size: 25px;width: 120%;margin-left: -50%;line-height: 120%"><strong>EXPLORE THE WORLD<br>Extremely Comfortable Bags</strong></p><br>
            <a href="products.php?cat=8"><button style="margin-left: -20%" class="button6"><strong>SHOP NOW</strong></button></a>
							</div>
      </div>
    </div>
  </div>
  </section>

  <section class="header_text" style="background-image: url(images/bgm.png);background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
		<h1 align="center" style="color: white"> FEATURED PRODUCTS</h1>
</section>
<div id="myTable">
			<section class="main-content" style="margin-left: -3%">	
				<style type="text/css">
					.accordian{
  width: 1920px;
  overflow:hidden;
  }
.accordian ul{
  
}
.accordian li{
  position: relative;
  display:block;
  width:233px;
  border: 1px solid #1f3939;
  float: left;
    
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
}


.accordian ul:hover li{
  width: 233px;
}

.accordian ul li:hover{
  width:300px;
}

.accordian li img{
  display: block;
}

				</style>
				<div class="accordian">
					<ul>
						<li>
							<a href="#">
								<img src="images/featured products/3.jpg">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/featured products/2.jpg">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/featured products/1.jpg">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/featured products/4.jpg">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/featured products/6.jpg">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/featured products/7.jpg">
							</a>
						</li>
					</ul>
				</div>
			</section>

			<section class="header_text" style="background-image: url(images/bgm.png);background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
				<h1 align="center" style="color: white"> NEW ARRIVALS</h1>
			</section>

			<section class="main-content" style="margin-left: -1%">													
						<div class="row">
							<div class="span12" style="width: 95%">
								<h4 class="title" style="align-self: center;" align="center">
										<a class="left button" href="#myCarousel" data-slide="prev"></a>
										<a class="right button" href="#myCarousel" data-slide="next"></a>
								</h4>

							<div class="span12" style="width: 95%" style="background-image: url(images/15.png);">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide" style="width: 100%; margin-left: 5%">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="products.php?cat=6"><img src="images/featured products/1.jpg" alt="" /></p>
                                                            Pocket Knives</a><br/>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="products.php?cat=9"><img src="images/featured products/2.jpg" alt="" /></p>
                                                            Gun Cases</a><br/>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="products.php?cat=9"><img src="images/featured products/3.jpg" alt="" /></p>
                                                            Shooting Accessories</a><br/>
													</div>
												</li>
										<li class="span3">
													<div class="product-box">
														<p><a href="products.php?cat=8"><img src="images/featured products/4.jpg" alt="" /></p>
                                                            Bags & Packs</a><br/>
													</div>
												</li>
												</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="products.php?cat=8"><img src="images/featured products/5.jpg" alt="" /></p>
														Coolers</a><br/>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="products.php?cat=8"><img src="images/featured products/6.jpg" alt="" /></p>
														Camping</a><br/>
													</div>
												</li>
										
												<li class="span3">
													<div class="product-box">
														<p><a href="products.php?cat=8"><img src="images/featured products/7.jpg" alt="" />
                                                            </p>
                                                            Gun Shots</a><br/>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
                                                        <img src="images/featured products/8.jpg?cat=8" alt="" /></p>
                                                         Torch Lights</a><br/>
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



			<section class="header_text" style="background-image: url(images/bgm.png);background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
				<h1 align="center" style="color: white"> SALES</h1>
			</section>

			<section class="main-content" style="margin-left: -3%">													
						<div class="row">
							<div class="span12" style="width: 95%">
								<script>
				var myIndex = 0;
				carousel();
				function carousel() {
					var i;
					var x = document.getElementsByClassName("mySlides");

					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
					setTimeout(carousel, 9000);    
}
</script>
								<div id="myCarousel" class="myCarousel carousel slide" style="width: 100%; margin-left: 8%; margin-top: 2%">
									<div class="carousel-inner">
										<div class="active item">
								<div class="mySlides w3-animate-fading">
									<ul class="thumbnails">
										<li class="span3">
											<div class="span3">
													<div class="product-box">
														<p><a href="product_detail.php?id="><img src="images/latest sales/5.jpg" alt="" /></a></p>
														<a href="products.php" class="title"></a>Cooler<br/>
													</div>
												</div>
											</li>
												<li class="span3">
											<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/6.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Bag and Pack</a><br/>
													</div>
												</div>
											</li>
												<li class="span3">
											<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/7.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Pack</a><br/>
													</div>
												</div>
											</li>
												<li class="span3">
											<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/8.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Double Cooler</a><br/>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

<!--
			<section class="main-content" style="margin-left: 6%">		
			<script>
				var myIndex = 0;
				carousel();
				function carousel() {
					var i;
					var x = document.getElementsByClassName("mySlides");

					for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";  
					}
					myIndex++;
					if (myIndex > x.length) {myIndex = 1}    
						x[myIndex-1].style.display = "block";  
					setTimeout(carousel, 9000);    
}
</script>
											
						<div class="row">		
											<div class="w3-content w3-section" style="max-width:1000px">
												<div class="mySlides w3-animate-fading">
											<div class="active item">
												<div class="thumbnails">												
												<div class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="products.php"><img src="images/latest sales/1.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Sales image 1</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>
												<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/2.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Sales image 2</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>
												<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/3.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Sales image 3</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>
												<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/4.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Sales image 4</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>
										</div>
									</div>
									</div>									
									<div class="mySlides w3-animate-fading">
										<div class="item">
											<div class="thumbnails">
												<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/5.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Sales image 5</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>
												<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/6.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Select image 6</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>
												<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/7.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Select image 7</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>
												<div class="span3">
													<div class="product-box">
														<p><a href="products.php"><img src="images/latest sales/8.jpg" alt="" /></a></p>
														<a href="products.php" class="title">Select image 8</a><br/>
														<p class="price">Rs. 0.00</p>
													</div>
												</div>			
								</div>
							</div>
						</div>
					</div>
				</div>
						</section>

-->
			<section class="header_text" style="background-image: url(images/bgm.png);background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">
				<h1 align="center" style="color: white"> PARTNERS</h1>
			</section>

			<section class="our_client" style="margin-left: 3%, width:100%">
				<div class="row"  style="width: 100%; margin-left: 5%">
					<style type="text/css">
						.swing {
    animation: swing ease-in-out 1s infinite alternate;
    transform-origin: center -20px;
    float:left;
    margin: 0px;
    
}
.swing img {
    border: 2px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;  
    width: 20px; height: 20px;  
    border: 1px solid #999;
    top: -10px; left: 50%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}
/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;left: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}
 
@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}
					</style>
									
					<!--<marquee scrolldelay="100" style="margin-left: 3%; margin-right: 10%">-->
						<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/1.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/2.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/3.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/4.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/5.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/6.png"></a>
						</figure>
                    <figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/7.jpg"></a>
						</figure>
                    <br><br><br><br>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/8.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/9.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/10.png"></a>
						</figure>
					<figure class="swing">
							<a href="brand.php"><img class="span2" alt="" src="images/clients/11.png"></a>
						</figure>
					</div>

				<!--</marquee>-->
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
