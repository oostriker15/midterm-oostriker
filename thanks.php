<?php 
  //1. Create database connection
  $dbhost = "66.147.242.186";  
  $dbuser = "urcscon3_olivero";  
  $dbpass = "oliver15"; 
  $dbname = "urcscon3_oostriker";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$email = Trim(stripcslashes($_POST["thanks"]));

  //2. Perform database query
  $query = "INSERT INTO thanks (thanks) VALUES ('$email')";
  $result = mysqli_query($connection, $query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Boston Celtics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>

<header>
	<div class="container">
		<div class="primary">
			<!-- Primary Optical Area -->
			<a href="index.html"><img src="images/logo.png" alt="logo"></a>
		</div>
		<div class="big-message">
			<a href="index.html"><h1>The Boston Celtics</h1></a>
		</div>
		<div class="strong">
			<!-- Strong Follow Area -->
			<div class="excited">Thank you!</div>
		</div>
	</div><!-- .container -->
</header>

<main>
	<div class="container">

		<div class="too-wide2">

			<p>Thanks for subscribing to my blog! <strong></strong>.</p>

			<p>Go <a href="celtics.html">Green!</a></p>

		</div>

	</div><!-- .container -->
</main>

</body>
</html>

<?php
	mysql_close($connection)
?>
