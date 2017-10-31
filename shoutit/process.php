<?php
//the user is directed here after submiting the form on index.php
//1. include the database.php file without it query and DB connection not possible
include 'database.php';


//now see if the form is submitted or not
//name is "submit" of input type submit
if(isset($_POST['submit'])){
	$user=mysqli_real_escape_string($conn,$_POST['user']);//first parameter $conn from database.php
	$message=mysqli_real_escape_string($conn,$_POST['message']);//this variable will store the message from index.php but to sanitize it, use mysqli_real_escape_string(); function
	echo $user;
	//the user is not entering the time here so we have to do it ourself
	date_default_timezone_set('Asia/Kolkata');
	$time=date("h:i:s a");//refering the php manual h-hours, i-minutes,s-seconds,a-am anti or pm post meridiem(lower case)

	//validate input
	if(!isset($user) || $user==''){
		$error="Please fill in your name!";//bringing the error with us to the index.php
		header("Location: index.php?error=".urlencode($error));//GET method
		exit();
	}
	if(!isset($message) || $message==''){
		$error="please fill message";
		header("Location: index.php?error=".urlencode($error));
	}
	else{
		$query="INSERT INTO shouts(user,message,time)
				VALUES ('$user','$message','$time')";

				if(!mysqli_query($conn,$query)){
					die("Error:".mysqli_error($con));
				}
				else{
					header("Location:index.php");
					exit();
				}
	}

}
?>