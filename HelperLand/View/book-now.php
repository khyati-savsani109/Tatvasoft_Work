<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../assets/css/book-now_style.css">
</head>

<body>

		<div class="container conta1">
			<header class="header">
				<div class="container cont_6">
					<div class="row align-items-center justify-content-between">
						<div class="logo"><a href=""><img src="../assets/images/logo-large.png"></a></div>
							<input type="checkbox" id="nav-check">
							<div class="ir"><img class="m1" src="../assets/images/icon-notification.png" class="display-sm display-sm-notification text-right nav-border nav-link-image"></div>
								<label for="nav-check" class="nav-toggler">
								<span></span>
								</label>
								<nav class="nav">
								<ul>
									<li><a class="active" href="">Book now</a></li>
									<li><a class="active1" href="http://localhost/helperland/View/prices.php">Prices & services</a></li>
									<li><a class="active2" href="">Warranty</a></li>
									<li><a class="active2" href="">Blog</a></li>
									<li><a class="active2" href="http://localhost/helperland/View/contact-us.php">Contact</a></li>
									<li class="v1"><a href=""><img class="imgs1" src="../assets/images/icon-notification.png"><sup>2</sup></a></li>
									<li><a class="v2" href=""><img class="imgs2" src="../assets/images/admin-user.png"> <img class="arr" src="../assets/images/sp-arrow-down.png"></a></li>
								</ul>
								</nav>
						</div>
					</div>
				</header>

				<img src="../assets/images/book-service-banner.jpg" class="img-fluid">

			<div class="container py-3">
				<h4>Set up your cleaning service</h4>
				<center><img src="../assets/images/forma-1-copy-5.png"></center>

					<div class="row py-4">
						<div class="col-md-8">
							<div class="main-div d-flex justify-content-center flex-nowrap">

								<div class="t1"><button class="but1" id="tab1" onclick="show1()">
									<img src="../assets/images/setup-service-white.png" class="tabimg1" id="tab-img1"> Setup Service</button>
								</div>

								<div class="t2"><button class="but2" id="tab2" onclick="show2()">
									<img src="../assets/images/schedule.png" class="tabimg2" id="tab-img2"> Schedule & Plan</button>
								</div>

								<div class="t3"><button class="but3" id="tab3" onclick="show3()">
									<img src="../assets/images/details.png" class="tabimg3" id="tab-img3"> Your Details</button>
								</div>

								<div class="t4"><button class="but4" id="tab4" onclick="show4()">
									<img src="../assets/images/payment.png" class="tabimg4" id="tab-img4"> Make Payment</button>
								</div>

							</div>

							<div class="main-div1">
								<div class="tab-body1" id="body1">
									<label>Enter your Postal Code</label>
									<form>
										<div class="form-group d-flex">
											<input type="text" placeholder="Postal Code" class="form-control"> &nbsp;&nbsp;&nbsp; <button type="submit" class="subbut">Check Availability</button>
										</div>
									</form>
								</div>



								<div class="tab-body2" id="body2">
									<div class="row">
									<div class="col-md-5">
										<p class="pa6">When do you need the cleaner?</p>
										<div class="b1"><p class="pa8"><img src="../assets/images/admin-calendar-blue.png"> 07/10/2021</p></div>
										<div class="b2"><select id="s2"><option>1:00</option>
																										<option>2:00</option>
																										<option>3:00</option>
																										<option>4:00</option>
																										<option>5:00</option>
																										<option>6:00</option>
																										<option>7:00</option>
																										<option>8:00</option>
																										<option>9:00</option>
																										<option>10:00</option>
																										<option>11:00</option>
																										<option>12:00</option></select></div>
										</div>

										<div class="col-md-7">
										<p class="pa6">How long do you need your cleaner to stay?</p>
										<p class="pa7"><select id="s3"><option>1.0 Hrs</option>
																										<option>2:0 Hrs</option>
																										<option>3:0 Hrs</option>
																										<option>4:0 Hrs</option>
																										<option>5:0 Hrs</option>
																										<option>6:0 Hrs</option>
																										<option>7:0 Hrs</option>
																										<option>8:0 Hrs</option>
																										<option>9:0 Hrs</option>
																										<option>10:0 Hrs</option>
																										<option>11:0 Hrs</option>
																										<option>12:0 Hrs</option></select>

									</div>
								</div>

									<hr>
									<p class="p1">Extra Services</p>

									<div class="row">
										<div class="col-md-2"><center><p class="pa11"><img src="../assets/images/3-green.png" class="pic"><br><p class="pa10">Inside cabinets</p></div>

										<div class="col-md-2"><center><p class="pa11"><img src="../assets/images/5-green.png" class="pic"><br><p class="pa10">Inside fridge</p></div>

										<div class="col-md-2"><center><p class="pa9"><img src="../assets/images/4.png" class="pic"><br><p class="pa10">Inside oven</p></div>

										<div class="col-md-2"><center><p class="pa9"><img src="../assets/images/2.png" class="pic"><br><p class="pa10">Laundry wash<br>& dry</p></div>

										<div class="col-md-2"><center><p class="pa9"><img src="../assets/images/1.png" class="pic"><br><p class="pa10">Interior<br>windows</p></div>
									</div>
									<hr>
										<br>
									<p class="pa12">Comments</p>
									<textarea class="form-control"rows="2" placeholder="Comments"></textarea>
									<br>
									<p class="pa13"><input type="checkbox" name="checkbox"> I have pets at home</p>
									<hr>
									<button type="submit" class="subbut1">Continue</button>

								</div>



								<div class="tab-body3" id="body3">
									<label>Enter your contact details, so we can serve you in better way!</label>
									<div class="d-flex a1"><div class="r1"><input type="radio"></div>
									<div class="r2"> Address: Koenigstrasse 112, Tambach-Dietharz 99897<br>
												Phone number: 9955648797</div>
									</div>

									<br>

									<div class="d-flex a1"><div class="r1"><input type="radio"></div>
									<div class="r2"> Address: Koenigstrasse 112, Tambach-Dietharz 99897<br>
												Phone number: 9955648797</div>
									</div>
									<br>
									<button type="submit" class="subbut3" data-toggle="collapse" data-target="#formdetails" onclick="show5()">+ Add New Address</button>

									<br><br>
									<div id="formdetails" class="collapse c1">
										<div class="row">
											<div class="col-md-1"></div>
											<div class="col-md-10">
												<form class="form-group" method="post" autocomplete="off" onsubmit="return validation()">

													<div class="row py-2">
														<div class="col-md-6">
															<p class="l1">Street Name</p>
															<input type="text" name="fname" id="fname" placeholder="Street name" class="form-control" required>
															<span id="msg1" style="color:red;"></span>
														</div>

														<div class="col-md-6">
															<p class="l1">House Number</p>
															<input type="text" name="lname" id="lname" placeholder="House number" class="form-control" required>
															<span id="msg2" style="color:red;"></span>
														</div>
													</div>

													<div class="row py-2">
														<div class="col-md-6">
															<p class="l1">Postal Code</p>
															<input type="text" name="number" placeholder="Postal code" class="form-control" required>
															<span id="msg3" style="color:red;"></span>
														</div>

														<div class="col-md-6">
															<p class="l1">City</p>
															<input type="text" name="fname" placeholder="City" class="form-control" required>
															<span id="msg3" style="color:red;"></span>
														</div>
													</div>

													<div class="row">
														<div class="col-md-6"><p class="l1">Phone Number</p></div>
													</div>



													<div class="row py-2 pt-1">
														<div class="col-md-6">
															<div class="input-group-prepend">
																<div class="input-group-text">+49</div>
															<input type="text" minlength="10" maxlength="10" name="number" id="mobile" placeholder="Mobile number" class="form-control" required>
															</div>
						                  <span id="msg" style="color:red;"></span>
														</div>
													</div>

													<div class="row py-2">
														<div class="col-md-6">
															<button type="submit" class="subbut5">Save</button>  <button type="submit" class="subbut6">Cancel</button>
														</div>
													</div>

													<div class="col-md-1"></div>
											</div>

										</div>
									</div>
									<br>
									<br>
									<label>Your Favourite Service Providers</label>
									<hr>
									<p>You can choose your favourite service provider from the below list:</p>
									<div class="r3">
								  	<p class="cap1"><img src="../assets/images/cap.png"></p>
										<p><b>Sandip Patel</b></p>
										<button type="submit" class="subbut4">Select</button>
								  </div>
									<br><br><br><br><br><br><br>
									<hr>
									<button type="submit" class="subbut1">Continue</button>
								</div>



								<div class="tab-body4" id="body4">
									<label>Pay securely with Helperland payment gateway!</label><br>
									<p class="lab1">Promo code (optional)</p>
									<form>
										<div class="form-group d-flex">
											<input type="text" placeholder="Promo code (optional)" class="form-control"> &nbsp;&nbsp;&nbsp; <button type="submit" class="subbut2">Apply</button>
										</div>
									</form>
									<br>
									<hr>
									<br>
									<form>
										<input type="number" class="form-control" placeholder="Card Number"><br>
										<div class="d-flex justify-content-start">
										<input type="number" class="form-control" placeholder="MM/YY"> &nbsp;&nbsp;&nbsp; <input type="number" class="form-control" placeholder="CVC">
										</div>
									</form>

									<div class="f4">
										Accepted cards:
										<p class="f5"><img src="../assets/images/visa.png">
																	<img src="../assets/images/mastercard.png">
																	<img src="../assets/images/american-express.jpg"></p>
									</div>
									<hr>

									<p class="f3"><input type="checkbox" name="checkbox"> I accepted <font color="#009999">term and conditions,</font> the <font color="#009999">cancellation policy</font> and the <font color="#009999">private policy.</font>
																																					I confirm that HelperLand starts to execute the contract before the expiry of the
																																					withdrawal period and I lose my right of withdrawal as a consumer with full
																																					performance of the contract</p>

									<hr>
									<button type="submit" class="subbut1">Complete Booking</button>
								</div>

							</div>

						</div>

						<div class="col-md-4">
							<div class="card">
								<div class="card-header">Payment Summary</div>

									<div class="d1">
										length of time
										<div class="d2">
											<div class="l1">basic</div><div class="r1">0 hrs</div>
										</div>
									</div>

									<center><hr width="310px" height="1px"></center>

									<div class="d3">
										<div class="l1">total service time</div><div class="r1">3 hours</div>
									</div>

									<div class="d4">
										<center><hr width="100%" height="1px"></center>
										<div class="l4">Per cleaning</div><div class="r4"><b>&euro;0.00</b></div><br>
										<center><hr width="100%" height="1px"></center>
									</div>

									<div class="d5">
										<div class="l2">total price</div><div class="r2">&euro;0.00</div><br><br>
										<p class="par1">According to &sect; 19 UStG no sales tax will be charged</p>
									</div>

									<div class="d6">
											<div class="l3">Effective Price*</div><div class="r3">&euro;0.00</div><br><br>
											<p class="par1"><font color="red">*</font>Save 20% according to &sect; 35a Income Tax Act (EStG).</p>
									</div>

									<div class="d7"><p class="par2"><img src="../assets/images/smiley.png"> Take a look at our included basic services</p></div>

							</div>

							<h6>Questions</h6>

							<div class="accordion" id="accorex">
								<a href="#link1" data-toggle="collapse" class="text1"><img src="../assets/images/right-arrow.png"> What is included in the basic cleaning?</a>
								<hr>
									<div id="link1" class="collapse" data-parent="#accorex">
										<div class="text2">Living room, bedroom and bathroom, kitchen and common areas</div>
									</div>


								<a href="#link2" data-toggle="collapse" class="text1"><img src="../assets/images/right-arrow.png"> Can I skip or move bookings?</a>
								<hr>
									<div id="link2" class="collapse" data-parent="#accorex">
										<div class="text2">You can change a booking free of charge 48 hours before an assignment.
											If ypu want to skip an already booked assignment, we will credit the value of the booking to your account. You can use the credit for a future booking.
										</div>
									</div>

								<a href="#link3" data-toggle="collapse" class="text1"><img src="../assets/images/right-arrow.png"> Do I have to be at home during the cleaning?</a>
								<hr>
									<div id="link3" class="collapse" data-parent="#accorex">
										<div class="text2">Wir empfehlen dir, bei der ersten Reinigung zu Hause zu sein.
											Auf diese Weise lernst du deinen Helper persönlich kennen. Außerdem kannst du ihm die
											Räume zeigen und auf deine Wünsche eingehen. Natürlich kannst du mit deinem Helper einen
											Termin oder Ort zur Schlüsselübergabe vereinbaren. Bei häufigen Buchungen entscheiden sich
											einige Kunden, einen Ersatzschlüssel ihrer Reinigungskraft zu überlassen.</div>
									</div>
							</div>

							<div class="d8">
								<a class="text3" href="http://localhost/helperland/View/faqs.php">More questions and answers</a>
						</div>

						</div>
					</div>
			</div>


			<div class="container cont_3">
				<div class="row">
					<div class="col-md-1 offset-md-1"><img class="logo_1" src="../assets/images/footer-logo.png"></div>

					<div class="col-md-6  offset-md-1">
						<ul>
						  <li><a href="http://localhost/HelperLand/homepg.php">HOME</a></li>
						  <li><a href="http://localhost/helperland/View/about.php">ABOUT</a></li>
						  <li><a href="">TESTIMONIALS</a></li>
						  <li><a href="http://localhost/helperland/View/faqs.php">FAQS</a></li>
						  <li><a href="http://localhost/helperland/view/insurance-policy.php">INSURANCE COVERAGE</a></li>
						  <li><a href="http://localhost/helperland/view/impressum.php">IMPRESSUM</a></li>
						</ul>
					</div>

					<div class="col-md-1  offset-md-1"><img class="logo_2" src="../assets/images/ic-facebook.png"><img class="logo_2" src="../assets/images/ic-instagram.png"></div>
				</div>

       <center><hr color="#3d3c3a" width="1250px"></center>

       <br>
				<p class="copyright">&copy;2018 Helperland All rights reserved. Terms and Conditions &nbsp; | &nbsp; Privacy Policy</p>
			</div>

		</div>

		<script src="../assets/js/script.js"></script>

</body>

</html>
