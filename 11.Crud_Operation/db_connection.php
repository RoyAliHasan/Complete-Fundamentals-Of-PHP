<?php
$servername="localhost";
$username="root";
$password="";
$datatbase="learn-php";
 $conn=	mysqli_connect($servername,$username,$password,$datatbase);
 if (!$conn) {
	die("connection failed!". mysqli_connect_error()); }
else 	 echo "";
?>