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
    FROM owner O
    WHERE O.Catagory = 'Flat Rent'
    ORDER BY O_ID ASC";

$result1 = mysqli_query($conn, $result1);

$result2 = "SELECT *
    FROM owner O
    WHERE O.Catagory = 'Flat Sell'
    ORDER BY O_ID ASC";

$result2 = mysqli_query($conn, $result2);


?>



<!DOCTYPE html>
<html>
<head>
	<title>Apartment Ad.|FlatFinder</title>
	<link rel="stylesheet" type="text/css" href="test2.css">
<style type="text/css">
ul{margin-left:200px;}
.size{margin-left:200px;} 
input[type=text], select {
    width: 26%;
    padding: 08px 20px;
    margin: 20px 0;
    display: inline-block;
    border: 2px solid #810208;
    border-radius: 4px;
    box-sizing: border-box;
    font-weight: bold;
    font-size: 15px;
    border-color:#45a049;
}
input[type=text],option{color:black; 
  background-color: #f2f1f1;}
input[type=text]:hover {
    background-color:#a9cce3;
    color: black;
}
#written{margin-right: 18px;}
#pro{font-size: 15px;padding: 10px;margin-top: 10px;
height: auto; 
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;}

.parallax { 
    height: auto; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("rent.jpg");
  color:white;
  font-size:20px;
  font-weight: bold;
}
form{font-weight: bold;}
span{float: right;text-decoration: none;color:#45a049;;}
span:hover {background-color: lightblue;
  color:black;}



button:hover {
    font-size: 15px;}

button:active {
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
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
                <a href="ApartmentRent.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

<div class="content">
	<div class="parallax"; >
		<div id="written">
	<br>
	<h1 style="text-align: center;text-decoration: underline;">Apartment to Rent / Sell </h1>

<?php
   
  while($res1 = mysqli_fetch_array($result1)) {     
  
  
		
		echo "<h2 style='margin-left: 200px;'> Property ID:  ".$res1['O_ID']. "</h2>";
		echo "<p class='size'>Catagory :  ".$res1['Catagory']. "</p>";
    echo "<p class='size'>Size : ".$res1['Size']."</p>";
    echo "<p class='size'>Preferred Number of Rooms: " .$res1['NOR']. " room(s)</p>";
  
  	echo "<p class='size'>Special Condition: ".$res1['SP_Condition']."</p>";
    echo "<p class='size'>Financial Detail:</p>";
  	echo "<ul class='non-list'>";
  	echo "<li>Rent:&#2547; " .$res1['Rent']. " Per Month </li> ";
		echo "</ul>"; 
    echo "<h4 class='size'>Contact: </h4>";
    echo "<p class='size'>Phone Number: " .$res1['Phone']."</p>";
    echo "<p class='size'>Email Address: " .$res1['Email']."</p>";

    echo "<a href='sendMessage.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Contact Owner </button></a><br> ";

    }

  ?>

  <?php
   
  while($res2 = mysqli_fetch_array($result2)) {     
  
  
    
    echo "<h2 style='margin-left: 200px;'> Property ID:  ".$res2['O_ID']. "</h2>";
    echo "<p class='size'>Catagory :  ".$res2['Catagory']. "</p>";
    echo "<p class='size'>Size : ".$res2['Size']."</p>";
    echo "<p class='size'>Number of Rooms: " .$res2['NOR']. " room(s)</p>";
  
    echo "<p class='size'>Special Condition: ".$res2['SP_Condition']."</p>";
    echo "<p class='size'>Financial Detail:</p>";
    echo "<ul class='non-list'>";
    echo "<li>Price:&#2547; " .$res2['Rent']. "</li> ";
    echo "</ul>"; 
    echo "<h4 class='size'>Contact: </h4>";
    echo "<p class='size'>Phone Number: " .$res2['Phone']."</p>";
    echo "<p class='size'>Email Address: " .$res2['Email']."</p>";

    echo "<a href='sendMessage.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Contact Owner </button></a><br> ";

    }

  ?>
   
	
<br>
   <!--    <a href="login.html"><button class="but">LOG OUT</button></a> -->

  <br> <br>	</div>  
		 
</div>
<div id="pro" style="background-image: url(pro.jpg);height:320px;font-size:20px;margin-top:20px;"">
	<h2 style="text-align: center">What We Provide </h2>
		<hr>
			<ul>
  				<li style="margin-left: 225px ">Connect property owners and tenants over internet.</li><br>
				
				<li style="margin-left: 190px ">Build a user friendly platform to sell or rent out their property.</li><br>
				
				<li style="margin-left: 225px ">Offer free tools and services for buyers and tenants.</li> <br>
			
			</ul>
	</div>

<div id="contact"> <form>
	<h1 style="text-align: center">Contact Us </h1>
	<p style="text-align: center"> Contact with us for any further reuirement </p> 
	<p> Name :
      <input type="text" name="fname" placeholder="Enter your firstname" required>
      <input type="text" name="lname" placeholder="Enter your lastname" required> </p>
     <p> Email : <input type="text" name="email" > </p>
     	<p>Any Enquiry </p>
      <textarea rows="4" cols="50" required> </textarea><br><br>
      <input type="button" name="submit" value="SUBMIT" style="background-color:#00ace6;color:white;padding:5px 15px;font-size:15px;""> <br> <br>
      <a href="home.html"><span>Go Back to Homepage</span> </a>  <br> <br>
</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>
	
</div>
</body>
</html>