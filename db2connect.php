<?php
$connect=mysqli_connect("localhost","root","","studentdb");

if(!$connect)
{
	echo "connection failed,please contact to administrator";
}
?>