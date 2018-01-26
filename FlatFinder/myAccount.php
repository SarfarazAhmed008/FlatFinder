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


$result = mysqli_query($conn, "SELECT * FROM register WHERE Email = '{$_SESSION['email']}'");
$res = mysqli_fetch_array($result);

?>

<?php
if(isset($_POST['Edit']))   
{
     $email = $_POST['email'];
     $password = $_POST['password'];


    while($res = mysqli_fetch_array($result)) { 
    

      if($email == $res['Email'] && $password == $res['Password'])    
         {                                       

          $_SESSION['email']=$email;


         echo '<script type="text/javascript"> window.open("edit.php","_self");</script>';

        }

    }
    echo "<p style='color: white; background-color:grey '>";
    echo "Invalid Email or Password !";
    echo "</p>";

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    
    <title>Profile|FlatFinder</title>
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
    background-image: url("profile.jpg");

    /* Set a specific height */
    height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center; 
    font-size: 50px; 
    color: black; 
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
    border: 1px solid white;
    border-collapse: collapse;
    font-size:100%;
    color: white;
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
                <a href="home.html">HOME</a>
                <a href="aboutUs.html">ABOUT US </a>
                <a href="ApartmentRent.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>



<div class="content">

  	<div >
  <div class="parallax">
    <h1 style="font-family:Algerian">My</h1>
    <h1 style="font-family:Algerian">Profile</h1>
     </div>

     <div>
    <pre style="color:white;Font-size:153%; font-family:Times New Roman">

<div>
<h1 style="color:yellow">Personal Details:</h1>
<table style=" width: 100%;">
<tr><th><b>Member ID:</b></th><td><em><?php echo $res['RID']; ?> </em></td></tr>
<tr><th><b>First Name: </b></th><td><em><?php echo $res['FName']; ?></em></td></tr>
<tr><th><b>Last Name: </b></th><td><em><?php echo $res['LName'];?> </em></td></tr>
<tr><th><b>Gender: </b></th><td><em><?php echo $res['Gender'];?> </em></td></tr>
<tr><th><b>Occupation: </b></th><td><em><?php echo $res['Occupation'];?></em></td></tr>
<tr><th><b>Marital Status: </b></th><td><em><?php echo $res['Marital'];?> </em></td></tr>
<tr><th><b>Contact no.: </b></th><td><em><?php echo $res['Phone'];?> </em></td></tr>
<tr><th><b>Email: </b></th><td><em><?php echo $res['Email'];?></em></td></tr>
<tr><th><b>Address: </b></th><td><em><?php echo $res['Address'];?></em></td></tr>
<tr><th><b>City: </b></th><td><em><?php echo $res['City'];?> </em></td></tr>
<tr><th><b>State: </b></th><td><em><?php echo $res['State'];?> </em></td></tr>
<tr><th><b>Zip code: </b></th><td><em><?php echo $res['ZipCode'];?> </em></td></tr>
<tr><th><b>Country: </b></th><td><em><?php echo $res['Country'];?></em></td></tr>
<tr><th><b>Category: </b></th><td><em><?php echo $res['Catagory'];?></em></td></tr>
<tr><th><b>About: </b></th><td><em><?php echo $res['About'];?> </em></td></tr>
</table>
</pre>

 </div> 


 
 

<!-- <div>
 <pre style="color:white;Font-size:153%; font-family:Times New Roman">
<h1 style="color:yellow">Flat related Information:</h1>

<b>Number of flats: </b><em>3 </em>
<b>Addresses of flats: </b><em>Flat#1: </em><i>Banani</i>
                           <em>Flat#2: </em><i>Gulshan</i>
                           <em>Flat#3: </em><i>Bashundhara R/A</i>
<b>Preferred tenants Type: </b><em>Student, Job Holder, Family </em>
</pre>
 </div>  -->



<div>
  <a href="MemberHome.php"><button>Go to Member Domain</button> </a>
  <a href="edit.php"><button>Edit Information</button> </a>
 <!-- <input type="submit" name="Edit" value="Edit Information"> -->
  <a href="delete.php"><button>Delete Account</button> </a>
</div>
</div>

<div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>
</body>
  </html>