<?php
  $connect= mysqli_connect("localhost","root"," ","studentdb");

 if(!$connect)

 {
 	echo "connect failed,please contact to administrator";
 }

?>