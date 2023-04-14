<?php

 if(isset($_POST["registerbtn"]))
 {

    include("db2connect.php");

    $fn = $_POST["fullname"];
    $dob = $_POST["dob"];
    $gn = $_POST["gender"];
    $eid = $_POST["email"];
    $pwd = $_POST["password"];
    $mob = $_POST["mobile"];
    $addr = $_POST["address"];

     
 $qry = "INSERT INTO `register`(`id`, `fullname`, `dob`, `gender`, `email`, `passoword`, `mobile`, `address`) VALUES (NULL,'$fn','$dob','$gn','$eid','$pwd','$mob','$addr')";


    $result = mysqli_query($connect, $qry);
        if($result)
        {
           echo "Data Stored Successfully";
        }else
        {
          echo "something went wrong";
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
  	  <label >Fullname</label>
  	  <input type="fullname" class="form-control" placeholder="fullname" id="Enter Fullname" name="fullname">
  	</div>

  	<div class="form-group">
    <label >Date of Birth</label>
    <input type="date" class="form-control" placeholder="" id="dob" name="dob">
  </div>

<div class="form-group">
    <label >Gender</label>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
  </div>

	<div class="form-group">
    <label >Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>

  <div class="form-group">
    <label >Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
  </div>

  <div class="form-group">
    <label >Mobile</label>
    <input type="tel" class="form-control" placeholder="Enter mobile no" name="mobile">
  </div>


  <div class="form-group">
      <label >Address</label>
      <textarea id="address" class="form-control" placeholder="Address" name="address"></textarea>
    </div>

  
   <button type="submit" class="btn btn-primary" name="registerbtn">Submit</button>

 </form>
</div>
</div>
</div>


</body>
</html>