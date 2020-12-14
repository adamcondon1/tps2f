<?php
  include_once 'header.php'; //linking to header.php
?>
<html>

<body style='background-color:lightblue'>

<div class="space">
</div>

<div class="gym">
  <a href="api.php"><img src="images/gym.jpg"></a>
</div>

<div class="workouts">
  <a href=""><img src="images/workout.jpg"></a>
</div>

<div class="membership">
  <a href=""><img src="images/membership.png"></a>
</div>

<div class="profile">
  <a href=""><img src="images/profile.jpg"></a>
</div>

<div class="ptlogin">
  <a href="ptindex.php"><img src="images/pt.jpg"></a>
</div>

<div class="space3">
</div>

<div class="container-fluid">
  	​​<div class="container">
  <div class="jumbotron">
    <h1 align="center">Fitness Events 2020/2021</h1>
<html>
	<head>
		<script>
		function disable() {
			document.getElementById("mySelect").disabled=true;
			}
		function enable() {
			document.getElementById("mySelect").disabled=false;
			}
		</script>
	</head>
	<body>

	<form>
	<select id="mySelect">
	  <option>Hell and Back 12/6/21</option>
	  <option>Dublin Marathon 24/10/21</option>
    <option>Free Spiining Class Virtual on Eventbrite 10/12/20</option>

	</select>
	<br><br>
		<input type="button" onclick="disable()" value="Hide Events">
		<input type="button" onclick="enable()" value="Display Events">
		</form>

	</body>
</html>


<body>
  <?php
  if(isset($_SESSION["useruid"])){ //if logged in do nothing and stay on main page

  }
  else{
    header("Location: signup.php"); //else go to signup.php
  }
  ?>


</body>
</html>
