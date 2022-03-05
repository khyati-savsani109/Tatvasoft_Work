<?php

session_start();

include( "../model/db_connection.php");

?>

<?php

if(isset($_POST['submit']));{
  @$firstname = $_POST['fname'];
  @$lastname = $_POST['lname'];
  @$email = $_POST['email'];
  @$password = $_POST['pass'];
  @$mobileno = $_POST['number'];


  $qry2 = mysqli_query($conn,"SELECT * FROM user WHERE Email = '$email'");
  if(mysqli_num_rows($qry2)>0){
    echo "Email Already Exists..";
  }

else{

  $qry = "INSERT INTO user(Firstname,Lastname,Email,Password,Mobile) VALUES('$firstname','$lastname','$email','$password','$mobileno')";

  $result = mysqli_query($conn,$qry);

    if(!$result){
      echo "data not inserted";
    }
  }
}
 ?>

 <html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="../assets/css/become-a-provider_style.css">
</head>

<body>

		<div class="container conta1" style="background-image: url(../assets/images/become-a-pro-banner.png);">
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
							<li><a href="">Book a Cleaner</a></li>
							<li><a href="http://localhost/HelperLand/View/prices.php">Prices</a></li>
							<li><a href="http://localhost/HelperLand/View/our-guarantee.php">Our guarantee</a></li>
							<li><a href="">Blog</a></li>
							<li><a href="http://localhost/HelperLand/View/contact-us.php">Contact us</a></li>
							<li><a href="">Login</a></li>
							<li><a data-target="#mymodel" data-toggle="modal" href="">Become a helper</a></li>
              <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown"><img class="img1" src="../assets/images/ic-flag.png">
                        <div class="dropdown-menu"></div></a></li>
						</ul>
						</nav>
					</div>
				</div>
			</header>

			<center><img class="img2" src="../assets/images/group-18_5.png"></center>
				<br>
		</div>

		<div class="container con1">
		<br>
				<img src="../assets/images/blog-left-bg.png" class="div-left"><img src="../assets/images/blog-right-bg.png" class="div-right">

				<h3>How it works</h3>

				<div class="row py-2">
					<div class="col-md-2"></div>

					<div class="col-md-8 tab1">
						<div class="table-responsive">
							<table class="table table-borderless">
								<tbody>
									<tr align="center">
										<td><p class="para1">Register yourself</p>
											<p class="para2">Provide your basic information to register<br>yourself as a service provider.<br><br>
											Read more <img src="../assets/images/shape-2.png"></td>
										<td><img src="../assets/images/group-23.png" class="pic1"></td>
									</tr>

									<tr align="center">
										<td><img src="../assets/images/group-29.png" class="pic1"></td>
										<td><p class="para1">Get service requests</p>
											<p class="para2">You will get service requests from<br>customers depend on service area and profile.<br><br>
											Read more <img src="../assets/images/shape-2.png"></td>
									</tr>

									<tr align="center">
										<td><p class="para1">Complete service</p>
											<p class="para2">Accept service requests from your customers<br>and complete your work.<br><br>
											Read more <img src="../assets/images/shape-2.png"></td>
										<td><img src="../assets/images/group-30.png" class="pic1"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="col-md-2"></div>
				</div>

				<h6>GET OUR NEWSLETTER</h6>
			<center><button class="d1">&nbsp;&nbsp;YOUR EMAIL</button>&nbsp;
			<button class="d2">Submit</button></center>
      <br><br>
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

			<p class="copyright">&copy;2018 Helperland All rights reserved. Terms and Conditions &nbsp; | &nbsp; Privacy Policy</p>
			</div>

		<div class="container">
		<div class="modal fade" id="mymodel">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="text-center text-gray">Register Now!</h3>
						<button type="button" class="close" data-dismiss="modal"> &times; </button>
					</div>

					<div class="modal-body">
						<form method="post" name="myform" autocomplete="off" onsubmit="return validation()">
							<div class="form-group">
								<input type="text" name="fname" id="fname" placeholder="First name" class="form-control" required>
                <span id="msg1" style="color:red;"></span>
								<br>
								<input type="text" name="lname" id="lname" placeholder="Last name" class="form-control" required>
                <span id="msg2" style="color:red;"></span>
								<br>
								<input type="email" name="email" value=""  placeholder="Email Address" class="form-control" required>
                <span id="msg3" style="color:red;"></span>
								<br>
								<div class="input-group-prepend">
									<div class="input-group-text">+46</div>
									<input type="number" name="number" maxlength="10" id="mobile" placeholder="Phone Number" class="form-control" required>
								</div>
                <span id="msg" style="color:red;"></span>
								<br>
								<input type="password" name="pass" placeholder="Password" class="form-control" required>
								<br>
								<input type="password" name="cpass" placeholder="Confirm Password" class="form-control" required>
								<br>
								<input type="checkbox" required> Send me newsletters from Helperland
								<br>
								<input type="checkbox" required> I accept <font color="#00ccff">terms and conditions</font> & <font color="#00ccff">privacy policy</font>
								<br>
								<br>
								<center><button name="submit" class="subbut">Get Started <img src="../assets/images/arrow-white.png"></center>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script src="../assets/js/script.js"></script>

</body>

</html>
