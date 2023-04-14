<?php

include("dbconnect.php");
$id = $_GET["id"];
$qry = "SELECT * FROM `register` WHERE id = '$id'";
$result = mysqli_query($connect, $qry);
$data = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="col-md-5 mx-auto">
<form method="post">
			<div class="form-group">
		    <label>Fullname</label>
		    <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname" value="<?php echo $data['fullname'] ?>">  
		  </div>
		  <div class="form-group">
		    <label>Date of Birth</label>
		    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $data['dob'] ?>"> 
		  </div>

		   <div class="form-group">
		    <label>Mobile</label>
		    <input type="tel" class="form-control" id="mobile" placeholder="Mobile No" name="mobile" value="<?php echo $data['mobile'] ?>">
		  </div>
		  
		   <div class="form-group">
		    <label>Address</label>
		    <textarea id="address" placeholder="Address" class="form-control" name="address"> <?php echo $data['address'] ?>" </textarea>
		  </div>

		  <button type="submit" class="btn btn-primary" name="updatebtn">Update</button>

		</form>
	</div>

</body>
</html>