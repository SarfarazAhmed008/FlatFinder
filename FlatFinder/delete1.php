<?php   session_start();  ?>

<?php
      if(!isset($_SESSION['email'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }
          echo "<p style='text-align: right;color: white'>";
          echo "Hello ".$_SESSION['email']."! "."\n";

          echo " You have successfully logged in."."\n";
          echo "</br>";
          echo "<a href='logout.php' style='color: white'> Logout</a> <br>";
          echo "</p>"; 
?>

<?php

include_once("config.php");

if(isset($_POST['Submit'])) { 
  $catagory = $_POST['catagory'];
  $id = $_POST['id'];
  $password = $_POST['password'];

  $result = "DELETE FROM register WHERE Password='$password'";
  $result = mysqli_query($conn, $result);


  session_destroy();


  header("Location: login.php");
    
  }

?>


<!DOCTYPE html>
<html>
<head>
<title>Delete Account|FlatFinder</title>
<link rel="stylesheet" href="test1.css">
<style>
    body {
  background-image: url('background.jpg');
     /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

p  {font-weight: bold;
    font-size: 20px;
    color: white;}
form { margin-left:10px; 
      margin-top: 100px;
      font-family:Times New Roman;
      color:  #133913;}
input[type=text], select {
    width: 24%;
    padding: 08px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-weight: bold;
    font-size: 15px;
}
input[type=submit] {
    width: 12%;
   background-color:#16a085;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
}
input[type=submit]:hover {
    background-color: white;
    color: black;
    width: bold;
    font-size: 16px;
}
div {
    border-radius: 5px;
    /*background-color: #f2f2f2;*/
    padding: 20px;
    
}
input[type=text]:focus {
    background-color: lightblue;
}
a{text-decoration: none;font-weight: bold; float: right;color:white ; font-size:17px; }
a:hover { background-color: navy;
    color: #4CAF50;
    font-weight: bold;
    font-size:18px;}
</style>
</head>

<body>

<div class="header">
  <p id="title" style="color:black">Flat Finder</p>
  <p id="subtitle" style="color:black">One step closer to your ideal residence</p>
</div>

<div id="navbar">
                <a href="home.html">HOME</a>
                <a href="aboutUs.html">ABOUT US </a>
                <a href="ApartmentRent.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

	<div class="content">
<h1 style="text-align: center;color: white; font-family:Times New Roman;text-decoration: underline;"> Account Delete</h1>
 <form style="text-align=center" action="delete.php" method="post">

    <p style="text-indent: 70px"> Password :
      <input type="text" name="password" placeholder="Enter your password" required></p>
      <input style="margin-left:312px" type="submit" name="Submit" value="Delete Account">
</form>
<a href="home.html"> Go Back to Homepage </a> 
</div>

<!--  <button type="submit" name="Submit" class="btn btn-danger">Delete Account</button> -->
  
 

 </div>
  </div>
</form>
</div>

 <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>



</body>
</html>