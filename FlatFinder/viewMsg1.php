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

//fetching data in descending order (lastest entry first)


$result1 = mysqli_query($conn,  "SELECT r.RID, r.Email
    FROM register r
    WHERE Email = '{$_SESSION['email']}'");
$res1 = mysqli_fetch_array($result1);

$SenResult = mysqli_query($conn,  "SELECT * FROM message 
    WHERE SenEmail ='{$res1['Email']}'");

$RecResult = mysqli_query($conn,  "SELECT * FROM message 
    WHERE RecEmail ='{$res1['Email']}'");

$adminn = mysqli_query($conn,  "SELECT * FROM adminmsg");


$report = mysqli_query($conn,  "SELECT * FROM report 
    WHERE SenEmail ='{$_SESSION['email']}'");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    
    <title>My Messages|FlatFinder</title>
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
    background-image: url("msg.jpg");

    /* Set a specific height */
    height: 400px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center; 
    font-size: 35px; 
    color: white; 
    padding: 10px;
}

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
.info:hover {background: #0b7dda;}

.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}

.danger {background-color: #f44336;} /* Red */ 
.danger:hover {background: #da190b;}

.default {background-color: #e7e7e7; color: black;} /* Gray */ 
.default:hover {background: #ddd;}

table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
    font-size:100%;
    color: black;
    background-color: #bde2ea;
    font-weight: bold;
}
th, td {
    padding: 5px;
    text-align: center;
    width: 35%;
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

  	<div >
  <div class="parallax">
    <h1 style="font-family:Algerian">My</h1>
    <h1 style="font-family:Algerian">Messages</h1>
     </div>
<div>

<h1 style="color: yellow;">Sent Messages</h1>
<table style="width:100%">
  <tr>
    <th>Receiver Email</th>
    <th >Subject</th>
    <th>Message</th>
    <th > </th>
  </tr>


<?php
   
  while($res2 = mysqli_fetch_array($SenResult)) { 
  ?>  


  <tr>
  <td ><?php echo $res2['RecEmail']; ?> </td>
  <td><?php echo $res2['Subject']; ?> </td>
    <td><?php echo $res2['Message']; ?> </td>
    <td><?php  echo "<a href='sendMessage.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Reply </button></a><br> "; ?> </td>
  </tr>
<?php 
}
?>
  </table>
 

</div>

<div>
<h1 style="color: yellow;">Received Messages</h1>




<table style="width:100%">
  <tr>
    <th>Sender Email</th>
    <th >Subject</th>
    <th>Message</th>
    <th > </th>
  </tr>


<?php
   
  while($res3 = mysqli_fetch_array($RecResult)) { 
  ?>  


  <tr>
  <td ><?php echo $res3['SenEmail']; ?> </td>
  <td><?php echo $res3['Subject']; ?> </td>
    <td><?php echo $res3['Message']; ?> </td>
    <td><?php  echo "<a href='sendMessage.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Reply </button></a><br> "; ?> </td>
  </tr>
<?php 
}
?>
  </table>
 

</div>



<div>
<h1 style="color: yellow;">Report to Admin Messages</h1>




<table style="width:100%">
  <tr>
    <th>Type of Report</th>
    <th >Subject</th>
    <th>Message</th>
    <th > </th>
  </tr>


<?php
   
  while($ress = mysqli_fetch_array($report)) { 
  ?>  


  <tr>
  <td ><?php echo $ress['Report']; ?> </td>
  <td><?php echo $ress['Subject']; ?> </td>
    <td><?php echo $ress['Message']; ?> </td>
    <td><?php  echo "<a href='reportAdmin.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Report Admin </button></a><br> "; ?> </td>
  </tr>
<?php 
}
?>
  </table>
 

</div>





<div>
<h1 style="color: yellow;">Admin Messages</h1>




<table style="width:100%">
  <tr>
    <th>Message</th>
    <th > </th>
  </tr>


<?php
   
  while($admin = mysqli_fetch_array($adminn)) { 
  ?>  


  <tr>
  
    <td><?php echo $admin['Message']; ?> </td>
    <td><?php  echo "<a href='reportAdmin.php'><button style='margin-left: 200px;background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Reply </button></a><br> "; ?> </td>
  </tr>
<?php 
}
?>
  </table>
 

</div>



<br>

<div>
  <a href="MemberHome.php"><button>Go to Member Domain</button> </a>
  <a href="signup.php"><button>Edit Information</button> </a>
  <a href="delete.php"><button>Delete Account</button> </a>
</div>
</div>
</body>
<div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>

  </html>