<?php
if(isset($_POST["fileuploadbtn"]))
{
$file = $_FILES["photo"];

$filename = $_FILES["photo"]["tmp_name"];
$orgname = $_FILES["photo"]["name"];

move_uploaded_file($filename, "images/$orgname");

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
	<input type="file" name="photo"> <button type="submit" name="fileuploadbtn"> Upload </button>
</form>
</body>
</html>