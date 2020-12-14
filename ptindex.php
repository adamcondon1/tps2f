<?php
  include_once 'header.php'; //linking to header.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>PT Login</title>
</head>
<body style='background-color:lightblue'>

<body>

  <div class="wrapper">
    <div class="accountText">
    <div class="w4">

     <form class="form" action="ptlogin.php" method="post">
     	<h1>PT Login</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

      <input class="i" type="text" name="uname" placeholder="Username">
      <div class=space2> </div>
     	<input class="i" type="password" name="password" placeholder="Password"><br>
     	<button id="btn1" type="submit"><h2>Login</h2></button>

     </form>
  </div>
 </div>
</body>
</html>

<html>
 <html lang="en">



 <body>






<div class="container-fluid">
  	​​<div class="container">
  <div class="jumbotron">
    <h2 align="center">Welcome to Sit 2 Fit</h2>
<hr>
    <h2 align="center">Meet Our Personal Trainers Registered From Our Database</h2>
	<h2></h2>
  </div>

</div>
</div>


  <h2 align="center">Registered Personal Trainers</h2>
  <h2 align="center"></h2>

 


  <img src = "ben.png" alt = "ben"  height= "140px" width = "100px">
  <img src = "jordan.png" alt = "jordan"  height= "140px" width = "200px">


	<h2 align="left""font-family: serif;"><font >The Personal Trainer Database</font></h2>



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
		echo "ID: " . $row["ID"] . "<br>" . " Name: " . $row["name"]. "<br>" . " location: " . $row["location"]. "<br>" . " email: " . $row["email"]. "<br>" . " price: " . $row["price"]. "<br>" . " age: " . $row["age"]. " " . "<br>";
	}
	} else {
	echo "0 results";
  }

?>
</div>
<h2>Jordan's Location</h2>
<div class="col-sm-8" style="background-color:white;"><iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=FlyefitLiffeyValley&key=AIzaSyBdV7YjR4X3XOEbKVgSDIjOH7Viqn3mGrM" allowfullscreen></iframe>
</div>
<h2>Ben's Location</h2>
  <div class="col-sm-8" style="background-color:white;"><iframe width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=CitywestGym&key=AIzaSyBdV7YjR4X3XOEbKVgSDIjOH7Viqn3mGrM" allowfullscreen></iframe>
 </div>





	<footer>
		 <div class="container-fluid">
		  <div class="row">
			<div class="col-sm-12" style="background-color:#14b5d0;">
			<h2 align="center""font-family: serif;"><b>Change Your Life Today.</b></h2></div>
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







 </body>
</html>
