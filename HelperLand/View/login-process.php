<?php

session_start();

include( "../model/db_connection.php");

if(isset($_POST['Login']));
{
  $email_unsafe=$_POST['Email'];
  $pass_unsafe=$_POST['Password'];

  $email = mysqli_real_escape_string($conn,$email_unsafe);
  $pass = mysqli_real_escape_string($conn,$pass_unsafe);

  $sql = mysqli_query($conn,"select * from user where Email='$email' and Password='$pass'") or die(mysqli_error($conn));
  $row = mysqli_fetch_array($sql);

  $n = $row['Email'];
  $counter = mysqli_num_rows($sql);
  $id = $row['UserId'];

  if($counter==0){
    echo "<script type='text/javascript'>alert('Invalid Email or Password!');
              document.location='http://localhost/HelperLand/homepg.php'</script>";
  }else{
    $_SESSION['UserId']=$id;
    $_SESSION['Email']=$n;

    echo "<script type='text/javascript'>
              document.location='http://localhost/HelperLand/view/customer-page.php'</script>";
  }
}

?>
