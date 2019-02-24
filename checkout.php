<!DOCTYPE html>
<html lang="en">
<body background="images/11.jpg"  style="background-color: #000000;background-repeat:no-repeat;background-size:cover;background-attachment:fixed;">		
    <?php include_once("header.php");?>
    
    <h1 align="center"><span>CHECKOUT</span></h1>
				<div class="row" style="margin-left: 5%">
					<div class="span12">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6" style="border-right: 1px solid #e6e6e6;">						
												<h4 class="title"><span class="text"><strong>New Customer</strong></span></h4>	
												<strong>Start receiving all the benefits of having your own Shaheen Outdoors Account:</strong>
												<ul style="margin-left: 3%">
													<li>Express Checkout</li>
													<li>Access your account anywhere</li>
													<li>24/7 live customer support available</li>
													<li>Write customer product review</li>
													<li>Track your order</li></ul>
													<div class="actions"><a href="register.html"><input tabindex="9" class="btn btn-inverse large" type="submit" value="CREATE ACCOUNT"></a>
													</div>
												</div>				
				<div class="span6" style="margin-left: 1%">					
						<h4 class="title"><span class="text"><strong>Returning Customer</strong></span></h4>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group" style="margin-top: -3%">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" placeholder="Enter your email" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group" style="margin-top: -1%">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
										<br>
										<a style="font-family:'Oswald',san-serif; color: #008AB9; font-size: 12px; text-decoration: none;" href="/user/forgot_password_from_login.jsp?back=%2Fuser%2Flogin.jsp">Forgot password?</a>
									</div>
											
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="LOG IN">
								</div>
							</fieldset>
						</form>				
					</div>
				</div>
			</div>
		</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account Billing Details
									</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
												<form action="#" method="post" style="width: 100%">
        <br>
      <table style="width: 100%">
                <tr>
              <td>*<b>Full Name:</b></td>
              <td colspan="3"><input type="text" name="name" required  pattern="[a-zA-Z\s]{1,300}"  title="Please Enter your Name"  style="width: 75%"></td>
              </tr>

              <tr>
                  <td>*<b>Contact#</b></td>
                  <td colspan="3"><input type="text" name="cont" required  pattern="[0-9]{11}" title="Please Enter your 11 digit cell number without dashes"  style="width: 75%"></td>
              </tr>
              
               <tr>
                  <td>*<b>Shipping Address:</b></td>
                  <td colspan="3"><input type="text" name="pa" required   style="width: 75%"></td>
              </tr>


          <script type="text/javascript">
              
              function Div(){
                  if(document.getElementById('easypay').checked){
                      document.getElementById('easy').style.display = "block";
                      document.getElementById('cashh').style.display = "none";
                      document.getElementById('transfer').style.display = "none";
                      document.getElementById('jazz').style.display = "none";
                      document.getElementById('visaa').style.display = "none";
                  }
                  
                  else if (document.getElementById('cash').checked){
                      document.getElementById('easy').style.display = "none";
                      document.getElementById('cashh').style.display = "block";
                      document.getElementById('transfer').style.display = "none";
                      document.getElementById('jazz').style.display = "none";
                      document.getElementById('visaa').style.display = "none";
                  }
                                    
                  else if (document.getElementById('bank').checked){
                      document.getElementById('easy').style.display = "none";
                      document.getElementById('cashh').style.display = "none";
                      document.getElementById('transfer').style.display = "block";
                      document.getElementById('jazz').style.display = "none";
                      document.getElementById('visaa').style.display = "none";
                  }
                  
                  else if (document.getElementById('jazzcash').checked){
                      document.getElementById('easy').style.display = "none";
                      document.getElementById('cashh').style.display = "none";
                      document.getElementById('transfer').style.display = "none";
                      document.getElementById('jazz').style.display = "block";
                      document.getElementById('visaa').style.display = "none";
                  }
                  
                  else if (document.getElementById('visa').checked){
                      document.getElementById('easy').style.display = "none";
                      document.getElementById('cashh').style.display = "none";
                      document.getElementById('transfer').style.display = "none";
                      document.getElementById('jazz').style.display = "none";
                      document.getElementById('visaa').style.display = "block";
                  }
              } 
          
          </script>

              <tr>
                  <td>*<b>Payment Modes:</b></td>
                  <td colspan="0.2">
                      <input style="margin-top:-0.1%" type="radio" name="payment" value="easypay" required onclick="Div();" id="easypay">
                      <img src="images/icons/easypaisa.png" height="40px" width="60px">
                  </td>
                  <td colspan="0.2">
                      <input style="margin-top:-0.1%" type="radio" name="payment" value="cash" required onclick="Div();" id="cash">
                      <img src="images/icons/cash.png" height="40px" width="60px">
                  </td>
                  <td colspan="0.2">
                      <input style="margin-top:-0.1%" type="radio" name="payment" value="bank" required onclick="Div();" id="bank">
                      <img src="images/icons/bank.png" height="40px" width="60px">
                  </td>
              </tr>
             
              <tr>
                  <td>
                  &nbsp;
                  </td>
                  <td colspan="2">
                      <input style="margin-top:-0.1%" type="radio" name="payment" value="jazzcash" required onclick="Div();" id="jazzcash">
                      <img src="images/icons/jazzcash.png" height="40px" width="60px">
                  </td>
                  
                  <td colspan="2">
                      <input style="margin-top:-0.1%" type="radio" name="payment" value="visa" required onclick="Div();" id="visa">
                      <img src="images/icons/visa.png" height="40px" width="60px">
                  </td>
              </tr>
          
          
 </table> 
  </form>
                                            
                                            <div id="easy" style="display:none">
              abc<?php include("intAPI.php");?>
          </div>
          
          <div id="cashh" style="display:none">
              <strong>Address:</strong><br>
              Office 22, Second Floor,Al-Rehmat Mall, <br>
              Sector G-11 Markaz, Islamabad. <br>
              <br>
              
              <em>Office Timings:</em>&ensp;09:00am-05:00pm<br>
              <em>Lunch Break:</em>&ensp;&ensp;&nbsp;1:30pm-2:30pm
          </div>
          
          <div id="transfer" style="display:none">
               <strong>Account Details:</strong>
              (Bank Alfalah) <br>
              <em>Account Number:</em> 0404 1005733857 <br>
              <em>Title:</em> Shaheen Adventures Pakistan <br>
          </div>
          
          <div id="jazz" style="display:none">
              
          </div>
          
          <div id="visaa" style="display:none">
              
          </div>

										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Additional Comments (if any)</label>
												<div class="controls">
													<textarea rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right">Confirm order</button>
										</div>
									</div>
								</div>
							</div>
						</div>				
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