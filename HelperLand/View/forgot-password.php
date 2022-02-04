<?php

session_start();

include( "../model/db_connection.php");

if(isset($_POST['Save']));
{
	$pass = $_POST['Password'];
	$email = $_POST['Email'];

	if(mysqli_query($conn,"UPDATE user SET Password = '$pass'  WHERE Email = '$email'"))
	{
		echo "<script type='text/javascript'>alert('Password Updated Successfully...');
              document.location='http://localhost/HelperLand/homepg.php'</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Password Not Updated...');
              document.location='http://localhost/HelperLand/homepg.php'</script>";
	}
}

 ?>
