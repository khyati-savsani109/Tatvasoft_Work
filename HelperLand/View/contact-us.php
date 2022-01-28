<?php

include( "../model/contact-us-db.php");

if(isset($_POST['submit'])){
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $mobileno = $_POST['number'];
  $message = $_POST['message'];
}

$qry = "INSERT INTO contactus(Firstname,Lastname,Email,Subject,PhoneNumber,Message) VALUES('$firstname','$lastname','$email','$subject','$mobileno','$message')";

$result = mysqli_query($conn,$qry);

if(!$result){
  echo "data not inserted";
}

 ?>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/css/contact_style.css">
</head>

<body>

		<div class="container conta1">
		<header class="header">
			<div class="container cont_6">
				<div class="row align-items-center justify-content-between">
					<div class="logo"><a href=""><img src="../assets/images/logo-large.png"></a></div>
					<input type="checkbox" id="nav-check">
					<label for="nav-check" class="nav-toggler">
					<span></span>
					</label>
					<nav class="nav">
					<ul>
						<li><a class="active" href="">Book now</a></li>
						<li><a class="active1" href="">Prices & services</a></li>
						<li><a class="active2" href="">Warranty</a></li>
						<li><a class="active2" href="">Blog</a></li>
						<li><a class="active2" href="">Contact</a></li>
						<li><a class="active" href="">Login</a></li>
						<li><a class="active3" href="">Become a helper</a></li>
					</ul>
					</nav>
				</div>
			</div>
			</header>

			<img src="../assets/images/group-16_2.png" class="img-fluid">

			<div class="container">
			<br>
			<h3>Contact us</h3>
			<center><img src="../assets/images/forma-1-copy-5.png"></center><br>

			<div class="row rowed">
				<div class="col-md"><img src="../assets/images/forma-1_2.png"><br>1111 Lorem ipsum text 100,<br>Lorem ipsum AB</div>
				<div class="col-md"><img src="../assets/images/phone-call.png"><br>+49 (40) 123 56 7890<br>+49 (40) 987 56 0000</div>
				<div class="col-md"><img src="../assets/images/vector-smart-object.png"><br><br>info@helperland.com<br></div>
			</div>
			<br><br>

			<hr class="h1" color="#d1d0ce">
			</div>

			<div class="container cont1">
				<br><br>
				<h4>Get in touch with us</h4>

				<div class="row">
					<div class="col-lg-3"></div>

					<div class="col-lg-6">
						<form class="form-group" method="POST">

							<div class="row">
								<div class="col-lg-6">
									<input type="text" name="fname" placeholder="First name" class="form-control mb-4">
								</div>

								<div class="col-lg-6">
									<input type="text" name="lname" placeholder="Last name" class="form-control">
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="input-group-prepend">
										<div class="input-group-text mb-4">+49</div>
									<input type="text" name="number" placeholder="Mobile number" class="form-control mb-4">
									</div>
								</div>
								<div class="col-lg-6">
									<input type="email" name="email" placeholder="Email address" class="form-control">
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<select class="form-control" name="subject">
                    <option>Subject</option>
										<option>General</option>
                    <option>Inquiry</option>
                    <option>Renewal</option>
                    <option>Revocation</option>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<textarea class="form-control" placeholder="Message" rows="6" name="message"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12">
									<input type="submit" name="submit" value="Submit" class="subbut">
								</div>
							</div>
						</form>
					</div>
				</div>

					<div class="col-lg-3"></div>
			</div>

			<br><br>
			<div class="container cont1"><img src="../assets/images/group-16.png" class="img-fluid"></div>

			<div class="container cont1">
			<br><br>
			<h5>GET OUR NEWSLETTER</h5>
			<center><button class="d1">&nbsp;&nbsp;YOUR EMAIL</button>&nbsp;
			<button class="d2">Submit</button></center>
			</div>
			<br><br>

			<div class="container cont_3">
				<div class="row">
				<div class="col-md-1 offset-md-1"><img class="logo_1" src="../assets/images/footer-logo.png"></div>

				<div class="col-md-6  offset-md-1">
					<ul>
					  <li><a href="http://localhost/HelperLand/homepg.php">HOME</a></li>
					  <li><a href="http://localhost/helperland/View/about.php">ABOUT</a></li>
					  <li><a href="">TESTIMONIALS</a></li>
					  <li><a href="http://localhost/HelperLand/View/faqs.php">FAQS</a></li>
					  <li><a href="">INSURANCE POLICY</a></li>
					  <li><a href="">IMPRESSUM</a></li>
					</ul>
				</div>

				<div class="col-md-1  offset-md-1"><img class="logo_2" src="../assets/images/ic-facebook.png"><img class="logo_2" src="../assets/images/ic-instagram.png"></div>
				</div>

					<center><hr color="#3d3c3a" width="1250px"></center>

			<p class="copyright">&copy;2018 Helperland All rights reserved. Terms and Conditions &nbsp; | &nbsp; Privacy Policy</p>
			</div>
		</div>

</body>

</html>
