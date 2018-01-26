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
$result1 = mysqli_query($conn,  "SELECT *
    FROM register r
    WHERE Email = '{$_SESSION['email']}'");
$res = mysqli_fetch_array($result1);

$OwnResult = mysqli_query($conn,  "SELECT *
    FROM owner 
    WHERE Email = '{$_SESSION['email']}'");

$TenResult = mysqli_query($conn,  "SELECT *
    FROM tenant 
    WHERE Email = '{$_SESSION['email']}'");




?>
<!DOCTYPE html>
<html>
<head>
  <title>MY Advertisement</title>
<link rel="stylesheet" type="text/css" href="test1.css">
<style type="text/css">

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
    background-image: url("myAd.jpg");

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
#advertise{
  background-image: url("advertise.jpg");
  color:white;
  font-family: arial;}

.list{margin-left:300px;}
li{font-weight: bold;}
#Service{
  text-align:center;
  height: 300px;
  font-size: 20px;
  padding:40px;
} 
#image1{
      
      width: 10%
      clear:none;
      float: left;
      
      
    }
#image2{
      
      width:20%;
      float: left;
      clear:none;
    
    }
#image3{
    
    width:20%;
    float:right;
    clear: none;
}
#pro{font-size: 15px;padding: 10px;margin-top: 10px;}

a{color: #336699;
text-decoration: none;}
a:hover{background-color:#53c68c;
  color:white;
  font-weight: bold;
font-size: 20px;}

#written{margin-right: 18px;}
.myAd { 
    height: auto; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
 /*   background-image: url("rent.jpg");*/
  color:white;
  font-size:20px;
  font-weight: bold;
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

    <div class="myAd">
  <div class="parallax">
    <h1 style="font-family:Algerian">Delete</h1>
    <h1 style="font-family:Algerian">Advertisements</h1>
     </div>


<div class="content">
  <div  >
    <div id="written">
  <br>

<?php
  echo "<h2 style='margin-left: 200px;'> Name:  ".$res['FName']." ".$res['LName']."</h2>";
      echo "<h2 style='margin-left: 200px;'> ".$res['Catagory']."ID:  ".$res['RID']. "</h2>"; 
  while($res1 = mysqli_fetch_array($OwnResult)) {     
  
  
    

      echo "<u>Advertisment:</u>";
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

      echo "<a href=\"deletepost.php?id=$res1[O_ID]\"
          onClick=\"return confirm('Are you sure you want to delete this advertisement?')\" class='ico del'>Delete Advertisement</a>";

    }

 ?>

 </div>

<div>
  <?php 
  while($res2 = mysqli_fetch_array($TenResult)) {     

          
            echo   "<ul >";
            echo "<u>Advertisment:</u>";
        echo  "<li>Catagory: ".$res2['Catagory']. "</li>"; 
        echo  "<li>Family Members (If not bachelor): ".$res2['Member']."</li>";
         echo  "<li>Preferred Area: ".$res2['Area']."</li>";
          echo "<li>Preferred Number of Rooms: ".$res2['Room']." room(s)</li>"; 
          echo "<li>Preferred Rent Range: ".$res2['F_Range']."</li>"; 
          echo "<li>Phone Number: ".$res2['Phone']."</li>";
          echo "<li>Email: ".$res2['Email']."</li>";
          echo "<li>About yourself: ".$res2['About']."</li>";
          echo "</ul>";


        echo "<a href=\"deletepostt.php?id=$res2[T_ID]\"
          onClick=\"return confirm('Are you sure you want to delete this advertisement?')\" class='ico del'>Delete Advertisement</a>";
    }

  ?>
  </div>


    
</div>
</div>


<div>
  <a href="MemberHome.php"><button>Go to Member Domain</button> </a>
</div>

<div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>

</body>
</html>