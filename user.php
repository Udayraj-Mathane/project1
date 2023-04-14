<?php

session_start();
$id = $_SESSION["uid"];

include("db2connect.php");

$qry = "SELECT * FROM `register` WHERE id='$id'";

$result = mysqli_query($connect, $qry);

$data = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> User </title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
	a{
		color: white;
	}

</style>

</head>
<body>

	<h1> Welcome <?php echo $data["fullname"]; ?> </h1>
     
     <div class="container">
        <div class="row">
           <div class="col-md-5 mx-auto">         


  <table class="table">

  	<tr>
  	 	<th> fullname -</th>
  	 	<td> <?php echo $data["fullname"]; ?> </td>
  	 </tr>
  	 
  	 <tr>
  	 	<th> Date of Birth -</th>
  	 	<td> <?php echo $data["dob"]; ?> </td>
  	 </tr>

  	 <tr>
  	 	<th> Email ID -</th>
  	 	<td> <?php echo $data["email"]; ?> </td>
  	 </tr>

  	 <tr>
  	 	<th> Mobile No. -</th>
  	 	<td> <?php echo $data["mobile"]; ?> </td>
  	 </tr>

  	 <tr>
  	 	<th> Address -</th>
  	 	<td> <?php echo $data["address"]; ?> </td>
  	 </tr>

  </table>

   <button type="submit" class="btn btn-primary"> <a herf = "logout.php"> Logout </a> </button>

	     </div>
	 </div>
</div>  	 
  	 

</body>
</html>