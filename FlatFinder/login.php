<?php  session_start(); ?> 

<?php


include_once("config.php");

//fetching data in descending order (lastest entry first)

$result = "SELECT r.Email, r.Password
        FROM register r 
        ";
$result = mysqli_query($conn, $result);

?>



<?php

if(isset($_SESSION['email']))   
 {
    header("Location:MemberHome.php"); 
 }

if(isset($_POST['Submit']))   
{
     $email = $_POST['email'];
     $password = $_POST['password'];


    while($res = mysqli_fetch_array($result)) { 
    

      if($email == $res['Email'] && $password == $res['Password'])    
         {                                       

          $_SESSION['email']=$email;


         echo '<script type="text/javascript"> window.open("MemberHome.php","_self");</script>';

        }

    }
    echo "<p style='color: white; background-color:grey '>";
    echo "Invalid Email or Password !";
    echo "</p>";

}
 ?>


<!DOCTYPE html>
<html> <head>  
    <title>Login|FlatFinder</title>
    <link rel="stylesheet" type="text/css" href="test2.css">
<style> 
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 24%;
    padding: 08px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=text]:hover{
    background-color: lightblue;
}
input[type=password]:hover{
    background-color: lightblue;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    border: none;
    cursor: pointer;
    width: 10%;
    margin-left: 128px;
    font-size: 17px;
}
input[type=submit]:hover{
    opacity: 0.6;
    font-weight: bold;
    color: black;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    font-size: 17px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

#login{}
</style>
</head>
<body>
    <div class="header">
  <p id="title">Flat Finder</p>
  <p id="subtitle">One step closer to your ideal residence</p>
</div>

<div id="navbar">
                <a href="home.php">HOME</a>
                <a href="aboutUs.html">ABOUT US </a>
                <a href="advertise.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

<div class="content">
<div id="login">
<h2>Login Form</h2>

<form action="login.php" method="post" >
  <div class="imgcontainer">
    <img src="login.jpg" alt="Avatar" class="avatar" >
  </div>
  <form action="login.php" method="post">
  <div class="container">
    <label style="margin-left: 29px"><b>Email : </b></label>
    <input type="text" placeholder="Enter email address" name="email" required>
    <br>
    <label><b>Password : </b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
     <label>   
   <p> <input type="checkbox" checked="checked"> Remember me </label>
   <input type="submit" name="Submit" value="Log In"></p> 
  </div>
</form>

  <div class="container" style="background-color:#f1f1f1">
    <a href="home.php"><button type="button" class="cancelbtn">Go back To Home</button></a>
    <span class="psw">Forgot <a href="signup.php">password?</a></span>
  </div>
</form>
</div> <br>

</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>
</body>
</html>
