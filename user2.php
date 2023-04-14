<?php

session_start();
/*$id =  $_SESSION["id"];*/	
include("dbconnect.php");

$qry = "SELECT * FROM `register` WHERE id = '$id'";

$result = mysqli_query($connect, $qry);

$data = mysqli_fetch_assoc($result);

/*update code*/
if(isset($_POST["updatebtn"]))
{
$fn = $_POST["fullname"];
$dob = $_POST["dob"];
$mob = $_POST["mobile"];
$addr = $_POST["address"];

$qry = "UPDATE `register` SET `fullname`='$fn',`dob`='$dob',`mobile`='$mob',`address`='$addr' WHERE id = '$id'";

$result = mysqli_query($connect, $qry);

if($result)
{
	?><script> alert("Record Updated Successfully") </script><?php
}
else
{
	?><script> alert("Something went wrong") </script><?php
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
	 <div class="container-fluid">
	 	<div class="row">
	 		<div class="col-md-3">
	 	
	 	 <ul>
	 	     <li class="list-group-item class=list-group-item-action"> <a herf="#profiledetail"> </a> </li>
	 	     
	 	     <li class="list-group-item class=list-group-item-action"data-toggle="tab"> <a herf="#editprofile">Edit profile</a> </li>
	 	     
	 	     <li class="list-group-item class=list-group-item-action"> <a herf="#changepwd"> change password</a> </li>
	 	     
	 	     <li class="list-group-item class=list-group-item-action"> <a herf="logout.php"> Logout </a> </li>

            </div>

            <div class="col-md-9">
            	
            	<div class="tab-content">
            		<div class="tab-pane active" id="profiledetail">

            			<table class="table">
						<tr>
							<th> Fullname </th>
							<td> <?php echo $data["fullname"]; ?> </td>
						</tr>
						<tr>
							<th> Date of Birth </th>
							<td> <?php echo $data["dob"]; ?> </td>
						</tr>
						<tr>
							<th> Mobile </th>
							<td> <?php echo $data["mobile"]; ?> </td>
						</tr>
						<tr>
							<th> Address </th>
							<td> <?php echo $data["address"]; ?> </td>
						</tr>
					
					</table>

            			 
                    </div>

                    <div class="tab-plane" id="editprofile">
                    	<h1> edit profile </h1>

                       		<form method="post">
			<div class="form-group">
		    <label>Fullname</label>
		    <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname" value="<?php echo $data['fullname']; ?>">  
		  </div>
		  <div class="form-group">
		    <label>Date of Birth</label>
		    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $data['dob']; ?>"> 
		  </div>

		   <div class="form-group">
		    <label>Mobile</label>
		    <input type="tel" class="form-control" id="mobile" placeholder="Mobile No" name="mobile" value="<?php echo $data['mobile']; ?>">
		  </div>
		  
		   <div class="form-group">
		    <label>Address</label>
		    <textarea id="address" placeholder="Address" class="form-control" name="address"> <?php echo $data['address']; ?> </textarea>
		  </div>

		  <button type="submit" class="btn btn-primary" name="updatebtn">Update</button>

		</form>



                    </div>
            		
            	</div>
            </div>
	 	</div>
	 </div>

</body>
</html>