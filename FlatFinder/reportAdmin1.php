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



<!DOCTYPE html>
<html>
<head>
<title>Report|FlatFinder</title>
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
    width: 41%;
    padding: 07px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-weight: bold;
    font-size: 15px;
}
input[type=text],option{color:black; }

input[type=submit] {
    width: 100%;
    background-color: orange;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: yellow;
    color: black;
}

input[type=submit] {
    width: 14%;
    /*background-color: #4CAF50;*/
    color: black;
    padding: 6px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
}
input[type=submit]:hover {
    /*background-color: #45a049;*/
    color: black;
}

div {
    border-radius: 5px;
    /*background-color: #f2f2f2;*/
    padding: 20px;
    
}
input[type=text]:focus {
    background-color: lightblue;
}
a{text-decoration: none;font-weight: bold; float: right;color:white;}
a:hover { background-color: navy;
    color: #4CAF50;
    font-weight: bold;
    font-size:18px;}
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
<h1 style="text-align: center;color: white; font-family:Times New Roman;text-decoration: underline;"> Report to Admin</h1>
 <form style="text-align=center" action="reportAdmin.php" method="post">
      
      <p> Type of report :
      <input type="radio" name="report" value="Complaint" required>Complaint
      <input type="radio" name="report" value="Query" required>Query </p>
      
      <p> Subject :
      <input type="text" name="subject" placeholder="Enter Subject" required> </p> 
   
    <p>Type your message to Admin Here : </p>
      <textarea rows="10" cols="70" name="message"> </textarea>
      <br> <br>
      <input type="submit" value="Send " name="Submit" style="font-size: 17px;margin-left: 415px">
</form>
<a href="home.php "> Go Back to Homepage </a> 
</div>

 </div>
  </div>
</form>
</div>

 <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>

<?php

include_once("config.php");

if(isset($_POST['Submit'])) { 

  $report = $_POST['report'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  
  
        
  $result = "INSERT  INTO report(Report, Subject, Message, SenEmail) 
                VALUES('$report', '$subject', '$message', '{$_SESSION['email']}')";
                

   
  $result = mysqli_query($conn, $result);

  
  header("Location: MemberHome.php");
    
  }

?>




</body>
</html>