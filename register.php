<!DOCTYPE html>
<html lang="en">
	<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
<?php include_once("header.php");?>
<section class="main-content" style="width: 100%;margin-top: 2%;">				
				<h1 align="center"><span>REGISTER ACCOUNT</span></h1>
				 <div class="memberform" id="memberform" name="memberform">

						<script type="text/javascript">
  function validateForm()
  {
    var a = document.forms["memberform"]["name"].value;
    var b = document.forms["memberform"]["cnic"].value;
    var c = document.forms["memberform"]["cont"].value;
    var d = document.forms["memberform"]["dob"].value;
    var e = document.forms["memberform"]["pa"].value;
    var f = document.forms["memberform"]["form_select"].value;
    if ((a == "")||(b == "")||(c == "")||(d == "")||(e == "")||(f=="")) 
    {   return false;
    }
    else
      {
          alert("Dear Customer, Your membership request has been successfully submitted. Our team will contact you shortly for confirmation and processing the card. Team Shaheen Adventures");
      }
  }
</script>

<form onsubmit="return validateForm();" action="action.php" method="post">
        <br>
      <table style="width:65%; margin-left:20%">

      	<tr>
                  <td>*<b>Login Email:</b></td>
                  <td><input type="text" name="mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Please Enter your email address on format abc@example.com" style="width: 80%; height: 25px;"></td>
              </tr>
                <tr>
              <td>*<b>Full Name:</b></td>
              <td><input type="text" name="name" required  pattern="[a-zA-Z\s]{1,300}"  title="Please Enter your Name"  style="width: 80%; height: 25px;"></td>
              </tr>
              
                            <tr>
                  <td>*<b>Password:</b></td>
                  <td><input required name="password"  type="password" value="" autocomplete="OFF" autofillparam="ON" size="30" maxlength="25" style="width: 80%; height: 25px;"></td>
              </tr>

              <tr>
                  <td>*<b>Re-enter Password:</b></td>
                  <td><input required  type="password" value="" autocomplete="OFF" autofillparam="ON" size="30" maxlength="25" style="width: 80%; height: 25px;"></td>
              </tr>

              <tr>
                  <td>*<b>Contact#</b></td>
                  <td><input type="text" name="cont" required  pattern="[0-9]{11}" title="Please Enter your 11 Digit Cell Number without Dash or Space" style="width: 80%; height: 25px;"></td>
              </tr>
              
              
                 
              <tr>
                  <td>*<b>Postal Address:</b></td>
                  <td><input type="text" name="address" required style="width: 80%; height: 25px;"></td>
              </tr>
              
 </table> 

 
 <p style="margin-left: 20%"><input class="noBorder" name="agree" type="checkbox" style="margin-top: -0.1%" value="true" autofillparam="ON"> By submitting this form,you agree to our <a href="terms.php"><strong>Terms & Privacy</strong></a><br><br>
        <input style="margin-left: 18%" class="btn" type="submit" name="submit" value="CREATE ACCOUNT"  /></p>
  </form>
</div>
</div>
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