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





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Members' Domain|FlatFinder</title>
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
.parallax { 
    /* The image used */
    background-image: url("hp7.jpg");

    /* Set a specific height */
    height: 400px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center; font-size: 50px; color: red; padding: 10px;
}
.button {
   
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    padding: 30px 60px;
    width: 10%;
}
.dropbtn {
    
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

.dropdown {
    position: relative;
    display: inline-block;
    padding: 5px;
    font-weight: bold;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: pink;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
 </head>
  <body>

<div class="header">
  <p id="title">Flat Finder</p>
  <p id="subtitle">One step closer to your ideal residence</p>
</div>

<div id="navbar">
                <a href="home.html">HOME</a>
                <a href="aboutUs.html">ABOUT US </a>
                <a href="advertise.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

    
 <div class="content">  
    
  <div  class="parallax" style=" margin: 10px;">
    <h1>Members' Domain</h1>
     </div>

  <div style=" width: 20%; height:250px; float: left; clear: none; padding-top: 5px; ">
    
    <img src="room.jpg" >
  </div>
    
<div style=" width: 35%; height:250px; float: right ; clear: none; padding-top: 5px; " >
 
 <div class="dropdown">
  <button class="dropbtn" style="background-color: green; width: 113%;">Member Features</button>
  <div class="dropdown-content">
    <a href="myAccount.php">My Profile</a>
    <a href="delete.php">Delete Account</a>
    <a href="edit.php">Edit account</a>
  </div>
</div> 


<div>
 <div class="dropdown">
  <button class="dropbtn" style="background-color: red;width: 124%">Advertisements</button>
  <div class="dropdown-content">
    <a href="ApartmentRent.php">Apartment Advertisements</a>
    <a href="Tenant_Post.php">Tenant Advertisements</a>
    <a href="myAd.php">My Advertisements</a>
    <a href="delAd.php">Delete Ad.</a>
  </div>
</div>    
</div>

<div>
 <div class="dropdown">
  <button class="dropbtn" style="background-color: purple;">Post Advertisements</button>
  <div class="dropdown-content">
    <a href="form_owner.php">As an Owner</a>
    <a href="form_tenant.php">As a Tenant</a>
  </div>
</div>    
</div>


<div>
 <div class="dropdown">
  <button class="dropbtn" style="background-color: orange;width: 123%">Message Centre</button>
  <div class="dropdown-content">
  <!--  <a href="#">View Message</a>-->
    <a href="sendMessage.php">Send New Message</a>
    <a href="viewMsg.php">View Message</a>
  </div>
</div>    
</div>

<div>
 <div class="dropdown">
  <button class="dropbtn" style="background-color: cyan;width: 111%">Complain/Queries</button>
  <div class="dropdown-content">
    <a href="reportAdmin.php">Report to Admin</a>
 <!--   <a href="#">Show My Complains</a> -->
  </div>
</div>    
</div>
 
 

   </div>
      
 </div>


 

    
    
  </body>



</html>