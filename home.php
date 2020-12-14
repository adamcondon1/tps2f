<?php 
  include_once 'header.php'; //linking to header.php

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a class="btn btn-primary" href="ptlogout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: ptindex.php");
     exit();
}
 ?>

<html>
 <html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./font/css/open-iconic-bootstrap.min.css">
</head>

<div class="container-fluid">
  	​​<div class="container"   style="background-color:#14b5d0;">
  <div class="jumbotron" >
    <h2 align="center">Welcome to S2F Admin/PT page.</h2>   
    <h2 align="center">You may Add, Update or Delete your details.</h2>  
	<h2></h2>
  </div>
</div>
</div>

 	<div class="container-fluid" style="background-color:lavenderblush;">
  	<div class="row">
	
	<div class="col-sm-4" style="background-color:lightblue;">
	<h2 align="left""font-family: serif;"><font >Add PT</font></h2>
	<form action="home.php" method="post"> 
	<label id="first">ID</label><br/>
	<input type="text" name="id"><br/>
	
	<label id="first"> Name:</label><br/>
	<input type="text" name="name"><br/>

	<label id="first">Location</label><br/>
	<input type="text" name="location"><br/>

	<label id="first">Email</label><br/>
	<input type="text" name="email"><br/>

	<label id="first">Price</label><br/>
	<input type="text" name="price"><br/>

	<label id="first">Age</label><br/>
	<input type="text" name="age"><br/>
	
	<button class="btn info" type="submit" name="save">Add</button>
	</div>
	
	<div class="col-sm-4" style="background-color:lightblue;">
	<h2 align="left""font-family: serif;"><font >Update a Personal Trainer</font></h2>
	<form action="home.php" method="post"> 
	<label id="first">ID</label><br/>
	<input type="text" name="id2"><br/>
	
	<label id="first"> Name:</label><br/>
	<input type="text" name="name2"><br/>

	<label id="first">Location</label><br/>
	<input type="text" name="location2"><br/>

	<label id="first">Email</label><br/>
	<input type="text" name="email2"><br/>

	<label id="first">Price</label><br/>
	<input type="text" name="price2"><br/>

	<label id="first">Age</label><br/>
	<input type="text" name="age2"><br/>

	<button class="btn success" type="submit" name="update">update</button>
	
	<h2 align="left" ><b>Remove a PT</b></h2>
	<form action="home.php" method="post"> 
	
	<label id="first">ID</label><br/>
	<input type="text" name="id3"><br/>

	<button class="btn danger" type="submit" name="delete">delete</button>
	</div>
	
	<div class="col-sm-4" style="background-color:lightblue;">
	<h2 align="left""font-family: serif;"><font >The PT Team Database</font></h2>
  <?php 
 
   $user = 'root';
   $pass = '';
   $db = 'test_db';
   
   $conn = new mysqli('localhost:3307', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
   }

   echo "The PT Team <br>";
   
   $sql = "SELECT * FROM trainers";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "ID: " . $row["ID"] . "<br>" . " Name: " . $row["name"]. "<br>" . " Location: " . $row["location"]. "<br>" . " Email: " . $row["email"]. "<br>" . " Price: " . $row["price"]. "<br>" . " Age: " . $row["age"]. " " . "<br>";
	}
	} else {
	echo "0 results";
	}

	//insert
	if(isset($_POST['save']))
	{
		$sql = "INSERT INTO trainers (name, location, email, price, age)
		VALUES ('".$_POST["name"]."','".$_POST["location"]."','".$_POST["email"]."','".$_POST["price"]."','".$_POST["age"]."')";
		$result = mysqli_query($conn,$sql);
	}
	
	//update
	if(isset($_POST['update']))
	{
		$sql="UPDATE trainers SET name='".$_POST["name2"]."', location ='".$_POST["location2"]."', email='".$_POST["email2"]."', price='".$_POST["price2"]."',age = '".$_POST["age2"]."', WHERE id='".$_POST["id2"]."'" or die ("this stuffed up");
									                                                
		$result = mysqli_query($conn,$sql);
	}
																	
	//delete
	if(isset($_POST['delete']))
	{
		$sql="DELETE FROM trainers WHERE id='".$_POST["id3"]."'" or die ("this stuffed up");

		$result = mysqli_query($conn,$sql);
	}
	$conn->close();
?>
</div>
</div>
</div>

	<footer>
		 <div class="container-fluid">
		  <div class="row">
			<div class="col-sm-12" style="background-color:#14b5d0;">
			<h2 align="center""font-family: serif;"><b>Sit 2 Fit.</b></h2></div>
			<h1></h1>
			<h1></h1>
			<h1></h1>
		  </div>
		 </div>
    
         <div class="container-fluid">
         <h3 style="text-align:center">Follow us on Social Media</h3>
       
         <div class="row">
           <div class="col-sm-2" style="background-color:;"></div>
           <div class="col-sm-2" style="background-color:;"></div>
           <div class="col-sm-2" style="background-color:;"><a href="https://www.facebook.com/"><img src="images/facebookicon.png" alt="1" style="width:25%;"></a><a href="https://www.twitter.com/"><img src="images/twittericon.png" alt="1" style="width:25%;"></a><a href="https://www.plus.google.com/"><img src="images/googleplusicon.png" alt="1" style="width:25%;"></a><a href="https://www.youtube.com/"><img src="images/youtubeicon.png" alt="1" style="width:25%;"></a></div>
           <div class="col-sm-2" style="background-color:;"><a href="https://www.pinterest.com/"><img src="images/pintresticon.png" alt="1" style="width:25%;"></a><a href="https://www.reddit.com/"><img src="images/redditicon.png" alt="1" style="width:25%;"></a><a href="https://www.flickr.com/"><img src="images/flickricon.png" alt="1" style="width:25%;"></a><a href="https://www.tumblr.com/"><img src="images/tumblericon.png" alt="1" style="width:25%;"></div>
           <div class="col-sm-2" style="background-color:lavender;"></div>
           <div class="col-sm-2" style="background-color:lavender;"></div>
         </div>
       </div>
       </footer>

	 <form action="includes/login.inc.php" method="post">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

		<style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
li{
	padding-right: 35px;
}
.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #14b5d0; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>
 </body>
</html>




	
