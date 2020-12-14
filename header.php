<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Meta Description Example, will often show up in search results.">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>
		  Sit2Fit
		</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

	<header>
	  <!--Navigation bar-->
		<nav class="navbar navbar-expand-md ">
			<a class="navbar-brand" href="index.php">S2F</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">

				<!--Navigation Headings and Links-->
				<?php
				if (isset($_SESSION["useruid"])) {
					echo "<li><a href='index.php'>Home</a></li>";
					echo "<li><a href='profile.php'>Profile</a></li>";
					echo "<li><a href='workouts.php'>Workouts</a></li>";
					echo "<li><a href='api.php'>Gym Finder</a></li>";
					echo "<li><a href='ptindex.php'>PTLogin</a></li>";
					echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
				}
				else{
					echo "<li><a href='signup.php'>Sign Up</a></li>";
					echo "<li><a href='login.php'>Login</a></li>";
				}
			   ?>

				</ul>
			</div>
		</nav>
	</body>
</html>