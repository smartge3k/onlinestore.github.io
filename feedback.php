<!DOCTYPE html>
<html lang="en">
<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
    <?php include_once("header.php");?>
<h1 align="center"><span>LEAVE FEEDBACK</span></h1>
				
				<div class="row" style="width: 100%;">
			<p align="center">You can either use the form below or email us on <b><a href="mailto:enquiries@gooutdoors.co.uk">info@abc.com</a></b></p>
			<h3 align="center">Your Details</h3>

            <table style="width:50%; margin-left:28%;margin-top: 2%">

      	<tr>
                  <td>*<b>Email:</b></td>
                  <td><input type="text" name="mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please Enter your email address on format abc@example.com" style="width: 80%; height: 25px;"></td>
              </tr>
                <tr>
              <td>*<b>Full Name:</b></td>
              <td><input type="text" name="name" required  pattern="[a-zA-Z]{1,300}"  title="Please Enter your Name"  style="width: 80%; height: 25px;"></td>
              </tr>

              <tr>
                  <td>*<b>Contact#</b></td>
                  <td><input type="text" name="cont" required  pattern="[0-9]{11}" title="Please Enter your 11 digit cell number without dashes" style="width: 80%; height: 25px;"></td>
              </tr>

              <tr>
                  <td>*<b>Message:</b></td>
                  <td><input type="text" name="msg" required title="Please Enter your Message" style="width: 80%; height: 65px;"></td>
              </tr>


 </table> 
		    					
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