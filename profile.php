<?php
  include_once 'header.php'; //linking to header.php
?>
<html>
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
    
        
<style>
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: white;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #14b5d0; color: black;} /* Gray */ 
.default:hover {background: #ddd;}
</style>    
    
    
    

<div class="container-fluid">
    ​​<div class="container"   style="background-color:#14b5d0;">
  <div class="jumbotron" >
    <h2 align="center">Current Members</h2>   
<img src = "conor.jpg" alt = "conor"  height= "140px" width = "100px">

<img src = "adam.jpg" alt = "adam"  height= "140px" width = "100px">
<img src = "liam.jpg" alt = "liam"  height= "140px" width = "100px">
<img src = "james.jpg" alt = "james"  height= "140px" width = "100px">
<img src = "leonardo.jpg" alt = "leonardo"  height= "140px" width = "100px">
<img src = "gavin.jpg" alt = "gavin"  height= "140px" width = "100px">
<hr>    
    <h2 align="center"> its easy! just add in  details</h2>  

    <h2></h2>
  </div>

</div>
</div>





 <div class="container-fluid" style="background-color:lavenderblush;">
  <div class="row">
    
    <div class="col-sm-4" style="background-color:#c3d6f0;">
    <h2 align="left""font-family: serif;"><font >Make Profile</font></h2>
    <form action="profile.php" method="post"> 
    
    <label id="first"> Name:</label><br/>
    <input type="text" name="name"><br/>

    <label id="first">Bio</label><br/>
    <input type="text" name="bio"><br/>

    <label id = "first">Class </label><br/>
    <input type = "text" name = "class"><br/>

    <label id="first">Age</label><br/>
    <input type="text" name="age"><br/>
    
    
    
    <button class="btn info" type="submit" name="save">Add</button>
    </div>
    
    
    
    <div class="col-sm-4" style="background-color:#c3d6f0;">
    <h2 align="left""font-family: serif;"><font >profile user</font></h2>
    <form action="profile.php" method="post"> 
    <label id="first">ID</label><br/>
    <input type="text" name="id2"><br/>
    
    <label id="first"> Name:</label><br/>
    <input type="text" name="name2"><br/>

    <label id="first"> Class:</label><br/>
    <input type="text" name="class2"><br/>

    <label id="first">Bio</label><br/>
    <input type="text" name="bio2"><br/>

    <label id="first">Age</label><br/>
    <input type="text" name="age2"><br/>

    <button class="btn success" type="submit" name="update">update</button>
    
    <h2 align="left" ><b>Remove a Profile</b></h2>
    <form action="profile.php" method="post"> 
    
    <label id="first">ID</label><br/>
    <input type="text" name="id3"><br/>

    <button class="btn danger" type="submit" name="delete">delete</button>
    </div>
    
    
    <div class="col-sm-4" style="background-color:#c3d6f0;">
    <h2 align="left""font-family: serif;"><font >The Profile Database</font></h2>
  <?php 
 
   $user = 'root';
   $pass = '';
   $db = 'test_db';
   
   $conn = new mysqli('localhost:3307', $user, $pass, $db) or die("Unable to connect");
   
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }

   echo "The Profile Team <br>";
   
   $sql = "SELECT * FROM profile2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"] . "<br>" . " Name: " . $row["name"]. "<br>" . " Bio: " . $row["bio"]. "<br>" . " Class: " . $row["class"]. "<br>" . " Age: " . $row["age"]. "<br>" ;
    }
    } else {
    echo "0 results";
    }

    //insert
    if(isset($_POST['save']))
    {
        $sql = "INSERT INTO profile2 (name, bio, class, age)
        VALUES ('".$_POST["name"]."','".$_POST["bio"]."','".$_POST["class"]."','".$_POST["age"]."')";
        $result = mysqli_query($conn,$sql);
    }
    
    //update
    if(isset($_POST['update']))
    {
        $sql="UPDATE profile2  SET name='".$_POST["name2"]."', Bio ='".$_POST["bio2"]."', class='".$_POST["class2"]."' ,age = '".$_POST["age2"]."', WHERE id='".$_POST["id2"]."'" or die ("this stuffed up");
                                                                                    
        $result = mysqli_query($conn,$sql);
    }
                                                                    
    //delete
    if(isset($_POST['delete']))
    {
        $sql="DELETE FROM profile2  WHERE id='".$_POST["id3"]."'" or die ("this stuffed up");

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
       </footer>

   

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
 </body>
</html>