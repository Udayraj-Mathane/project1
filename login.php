<?php

if(isset($_POST['loginbtn']))
{

	include("db2connect.php");

	$eid = $_POST['email'];
	$pwd = $_POST['password'];

  $qry = "SELECT * FROM `register` WHERE email='$eid' AND password='$pwd'";

  $result = mysqli_query($connect, $qry);
 
  $row = mysqli_num_rows($result);
echo $row;

  if($row>0)
  {
    $data = mysqli_fetch_assoc($result);

    $id = $data["id"];

    session_start();

    $_SESSION['uid'] = $id;

  	header("location:user.php"); 

  }
  else
  {
  	echo "Login Failed";
  }
  
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</head>
<body>

	<div class="container">
	<div class="row">
		<div class="col-md-5 mx-auto">
<form method="post">
  	  
	<div class="form-group">
    <label >Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email" id="eid">
  </div>

  <div class="form-group">
    <label >Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
  </div>

  <button type="submit" class="btn btn-success" name="loginbtn">Login</button>
  <p> Don't Have an Account ? <a href="register.php"> Sign Up </a> </p>




</form>
  </div>
 </div>
</div>

</body>
</html>