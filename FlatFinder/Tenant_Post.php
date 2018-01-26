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
          echo "<a href='logout.php' style='color: white'> Logout</a> ";
          echo "</p>"; 
?>
<?php

include_once("config.php");


$result1 = "SELECT *
    FROM tenant T
    WHERE T.Catagory = 'Flat Searching'
    ORDER BY T_ID ASC";

$result1 = mysqli_query($conn, $result1);

$result2 = "SELECT *
    FROM tenant T
    WHERE T.Catagory = 'Room Searching'
    ORDER BY T_ID ASC";

$result2 = mysqli_query($conn, $result2);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tenant Post|FlatFinder</title>
	<link rel="stylesheet" type="text/css" href="test2.css">
<style type="text/css">
li{margin-left:200px;}  
input[type=text], select {
    width: 26%;
    padding: 08px 20px;
    margin: 20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-weight: bold;
    font-size: 15px;
    border-color:#45a049;
}
input[type=text],option{color:black; background-color: #45a049;}
input[type=text]:hover {
    background-color:#b3ffb3;
    color: black;
}
#pro{font-size: 15px;padding: 10px;margin-top: 10px;
height: auto; 
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;}
#written{margin-right: 18px;}
.parallax { 
    height: auto; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("tenant_post.png");
  color:white;
  font-size:20px;
  font-weight: bold;
}
form{font-weight: bold;}
span{float: right;text-decoration: none;color:#45a049;;}
span:hover {background-color: lightblue;
  color:black;}
  .but{
  margin-left: 200px;
  background-color:#00ace6;
  color:white;
  padding:5px 15px;
  font-size:14px;"
}
.but:hover{
  box-shadow: 0 3px yellow;
  transform: translateX(4px);
  background-color:gray;
  width: bold;
  font-size: 14px;
}

</style>
</head>
<body> 
	<div class="header">
  <p id="title">Flat Finder</p>
  <p id="subtitle">One step closer to your ideal residence</p>
</div>

<div id="navbar">
                 <a href="home.php">HOME</a>
                <a href="aboutUs.php">ABOUT US </a>
                <a href="Tenant_Post.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

<div class="content">
	<div class="parallax"; >
		<div id="written">
	<br>
	<h1 style="text-align: center;text-decoration: underline;">Flat Wanted List</h1>
		  	
<?php
   
  while($res1 = mysqli_fetch_array($result1)) {     
  
       echo "<h2 style='margin-left: 200px;'>Tenant ID:  ".$res1['T_ID']. "</h2>";
            echo   "<ul class='list'>";
        echo  "<li>Catagory: ".$res1['Catagory']. "</li>"; 
        echo  "<li>Family Members (If not bachelor): ".$res1['Member']."</li>";
         echo  "<li>Preferred Area: ".$res1['Area']."</li>";
          echo "<li>Preferred Number of Rooms: ".$res1['Room']." room(s)</li>"; 
          echo "<li>Preferred Rent Range: ".$res1['F_Range']."</li>"; 
          echo "<li>Phone Number: ".$res1['Phone']."</li>";
          echo "<li>Email: ".$res1['Email']."</li>";
          echo "<li>About yourself: ".$res1['About']."</li>";
          echo "</ul>";
              echo "<a href='sendMessage.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Contact</button></a><br> ";
    }

  ?>

  <?php
   
  while($res2 = mysqli_fetch_array($result2)) {     
  
       echo "<h2 style='margin-left: 200px;'>Tenant ID:  ".$res2['T_ID']. "</h2>";
            echo   "<ul class='list'>";
        echo  "<li>Catagory: ".$res2['Catagory']. "</li>"; 
        echo  "<li>Family Members (If not bachelor): ".$res2['Member']."</li>";
         echo  "<li>Preferred Area: ".$res2['Area']."</li>";
          echo "<li>Preferred Number of Rooms: ".$res2['Room']."</li>"; 
          echo "<li>Preferred Rent Range: ".$res2['F_Range']."</li>"; 
          echo "<li>Phone Number: ".$res2['Phone']."</li>";
          echo "<li>Email: ".$res2['Email']."</li>";
          echo "<li>About yourself: ".$res2['About']."</li>";
          echo "</ul>";
          echo "<a href='sendMessage.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Contact</button></a><br> ";
    }

  ?>
  	
<br> <br>
		<a href="login.php"><button class="but">LOG OUT</button></a>
  <br> <br> <br> <br>
			</div>  
		
  
			
  <br> <br> <br> <br>
</div>
<div id="pro" style="background-image: url(pro.jpg);height:320px;font-size:20px;margin-top:20px;"">
  <h2 style="text-align: center">What We Provide </h2>
    <hr>
      <ul>
          <li style="margin-left: 350px ">Connect property owners and tenants over internet.</li><br>
        
        <li style="margin-left: 320px ">Build a user friendly platform to sell or rent out their property.</li><br>
        
        <li style="margin-left: 350px ">Offer free tools and services for buyers and tenants.</li> <br>
      
      </ul>
  </div>

<div id="contact"> <form>
	<h1 style="text-align: center">Contact Us </h1>
	<p style="text-align: center"> Contact with us for any further reuirement </p> 
	<p> Name
      <input type="text" name="fname" placeholder="Enter your firstname" required>
      <input type="text" name="lname" placeholder="Enter your lastname" required> </p>
     <p> Email : <input type="text" name="email" > <p>
     	<p>Any Enquiry </p>
      <textarea rows="4" cols="50" required> </textarea><br><br>
      <input type="button" name="submit" value="SUBMIT" style="background-color:#00ace6;color:white;padding:5px 15px;font-size:15px;""> <br> <br>
      <a href="home.php"><span> Go Back to Homepage </span> </a>  <br> <br>
</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>
	
</div>
</body>
</html>