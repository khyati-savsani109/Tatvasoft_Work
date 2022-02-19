<?php

session_start();

include( "../model/db_connection.php");

if(isset($_POST['register']));{
  @$firstname = $_POST['fname'];
  @$lastname = $_POST['lname'];
  @$email = $_POST['email'];
  @$password = $_POST['pass'];
  @$mobileno = $_POST['number'];
}

$qry = "INSERT INTO user(Firstname,Lastname,Email,Password,Mobile) VALUES('$firstname','$lastname','$email','$password','$mobileno')";

$result = mysqli_query($conn,$qry);

if(!$result){
  echo "data not inserted";
}

 ?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/create-account.css">
</head>

<body>

		<div class="container py-4">

				<h3>Create an account</h3>
				<center><img src="../assets/images/forma-1-copy-5.png"></center>

				<div class="row py-4">
					<div class="col-lg-2"></div>

					<div class="col-lg-8">
						<form class="form-group" method="post" name="myform" autocomplete="off" onsubmit="return validation()">

							<div class="row py-2">
								<div class="col-lg-6">
									<input type="text" name="fname" id="fname" placeholder="First name" class="form-control" required>
                  <span id="msg1" style="color:red;"></span>
								</div>

								<div class="col-lg-6">
									<input type="text" name="lname" id="lname" placeholder="Last name" class="form-control" required>
                  <span id="msg2" style="color:red;"></span>
								</div>
							</div>

							<div class="row py-2">
								<div class="col-lg-6">
									<input type="email" name="email" value="" placeholder="E-mail address" class="form-control" required>
                  <span id="msg3" style="color:red;"></span>
								</div>

								<div class="col-lg-6">
									<div class="input-group-prepend">
										<div class="input-group-text">+49</div>
									<input type="text" minlength="10" maxlength="10" name="number" id="mobile" placeholder="Mobile number" class="form-control" required>
									</div>
                  <span id="msg" style="color:red;"></span>
								</div>
							</div>

							<div class="row py-2">
								<div class="col-lg-6">
									<input type="password" name="pass" placeholder="Password" class="form-control" required>
								</div>

								<div class="col-lg-6">
									<input type="password" name="cpass" placeholder="Confirm Password" class="form-control" required>
								</div>
							</div>

							<div class="row py-3">
								<div class="col-lg-6">
									<input type="checkbox" name="checkbox" required> I have read the <font color="#00ccff">privacy policy.</font>
								</div>
							</div>

							<div class="row py-2">
								<div class="col-lg-12">
									<center><input type="submit" name="register" value="Register" class="subbut"></center>
								</div>
							</div>

							<div class="row py-2">
								<div class="col-lg-12">
									<center>Already registered? <a class="p1"  href="http://localhost/HelperLand/homepg.php">Login now</a></font></center>
								</div>
							</div>

						</form>
					</div>
				</div>

					<div class="col-lg-2"></div>
			</div>

      <script src="../assets/js/script.js"></script>
</body>

</html>
