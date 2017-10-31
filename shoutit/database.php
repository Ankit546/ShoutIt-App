<?php
//connect to database
//use mysqli instead of mysql-its now deprecated and is less secure, use mysqli instead

$conn=mysqli_connect('localhost','root','','shoutit');

if(mysqli_connect_errno()){
	die("Failed to connect to MYSQL:".mysqli_connect_error()); //die() if fails to connect remember the paranthesis
}


?>