<?php include 'database.php';
	  include 'process.php'; 
?>
<?php 
	//Create Select Query
	$query="SELECT * FROM shouts ORDER BY id desc";
	$shouts= mysqli_query($conn,$query);
	// echo $shouts;
	if($shouts==FALSE){
		echo "nopes"; 
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Shout it!</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		<header>
			<h1>Shout it! Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
						<li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?> </li>
				<?php endwhile; ?> 	
				
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])) : ?>

			<div class="error" style="color:#fff;background:red;padding:5px;margin-bottom:20px;">
					<?php echo $_GET['error']; ?>
			</div>

			<?php endif; ?>
			<form method="POST" action="process.php">
				<input type="text" name="user" placeholder="Enter Your name">
				<input type="text" name="message" placeholder="Enter your message">
				<br>
				<input class="shout-btn" type="submit" name="submit" value="Shout it out!">
			</form>
		</div>
	</div>
</body>
</html>