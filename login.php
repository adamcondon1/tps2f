<?php
  include_once 'header.php'; //linking to header.php
?>

<body style='background-color:lightblue'>

<section class="signup-form">
  <div class="wrapper">
    <div class:"accountText">
      <h1>Users Login</h1>
    <div class="w4">
  <form action="includes/login.inc.php" method="post">
    <input class="i" type="text" name="uid" placeholder="Username or Email">
    <input class="i" type="password" name="pwd" placeholder="Password">
    <button id="btn1" type="submit" name="submit"><h4>Login</h4></button>
  </form>
</div>
<?php
  include_once 'fb-login.php'; //linking to fb-login.php
?>
</div>
</section>

<?php
//error messages
  if(isset($_GET["error"])){
    if($_GET["error"]=="emptyinput"){
      echo "<h5>Fill in all fields!</h5>";
    }
    elseif ($_GET["error"] == "wronglogin") {
      echo "<h5>Incorrect login credentials</h5>";
    }
  }

 ?>
