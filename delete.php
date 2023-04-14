<?php

include("dbconnect.php");

$id = $_GET["id"];

$qry = "DELETE FROM `register` WHERE id = '$id'";
$result = mysqli_query($connect, $qry);
if($result)
{
	?> <script> alert("Record Deleted"); </script> <?php
}
else
{
	?> <script> alert("Something went wrong, please try later"); </script> <?php
} 

header("location:admin.php");
?>