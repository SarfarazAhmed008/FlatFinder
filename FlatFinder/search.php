

<!DOCTYPE html>
<html>
<head>
	<title>Search|FlatFinder</title>
	<link rel="stylesheet" type="text/css" href="test2.css">
	<style type="text/css">	
.parallax { 
    /* The image used */
    background-image: url("search.jpg");
    height: 500px; 
    width: 100%;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
p{font-weight: bold;}

input[type=text],option{color:black; background-color: #45a049;font-weight: bold;}
input[type=text]:hover {
    background-color:#b3ffb3;
    color: black;}
.button{margin-left:200px ; 
    padding:15px; 
    background-color: #3e8e41;
    color:white;
    padding:5px 10px;
    font-weight: bold;
}
.button:hover {
    background-color: gray;
    font-size: 16px;}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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
	<div class="parallax"> </div>
	<div class="written">
	<br>
	<p style="text-align: center; font-size:26px;font-family:serif;font-style: italic;font-weight: bold; ">Flat Finder is a website that brings the facility of searching for the most suitable flat for its users and members from the comfort of their home instead of going out looking for it day in and day out.<p>

	<p style="margin-left: 200px;font-size:22px">Search For </p>


    <form action="search.php" method="post"> 
	<input style="margin-left: 200px;font-size:20px" type="radio" name="search" value="Flat Searching" required> Flat Searching  <br>
	<input style="margin-left: 200px";font-size:20px type="radio" name="search" value="Room Searching" required> Room Searching <br>
    <input style="margin-left: 200px;font-size:20px" type="radio" name="search" value="Flat Rent" required> Flat For Rent  <br>
    <input style="margin-left: 200px";font-size:20px type="radio" name="search" value="Flat Sell" required> Flat For Sell <br><br><br>
	<!-- <p style="margin-left: 200px;font-size:22px">Search by post ID </p>
	<input style="margin-left:200px ;padding:15px;" placeholder="Enter Post ID" type="text" ; name="search_id" required><br> <br> -->
     <input type="submit" class="button" name="Submit" value="Search"> <br><br>
        </form>
	</div> 
	

<?php


include_once("config.php");

if(isset($_POST['Submit'])) { 
  $search = $_POST['search'];

     $result1 = "SELECT *
    FROM owner O
    WHERE O.Catagory = '$search'
    ORDER BY O_ID ASC";

    $result1 = mysqli_query($conn, $result1);


    $result2 = "SELECT *
    FROM tenant T
    WHERE T.Catagory = '$search'
    ORDER BY T_ID ASC";

    $result2 = mysqli_query($conn, $result2);

   
  while($res1 = mysqli_fetch_array($result1)) {     
  
  
        
    echo "<h2> Property ID:  ".$res1['O_ID']. "</h2>";
    echo "<p class='size'>Catagory :  ".$res1['Catagory']. "</p>";
    echo "<p class='size'>Size : ".$res1['Size']."</p>";
    echo "<p class='size'>Preferred Number of Rooms: " .$res1['NOR']. " room(s)</p>";
  
    echo "<p class='size'>Special Condition: ".$res1['SP_Condition']."</p>";
    echo "<p class='size'>Financial Detail:</p>";
    echo "<ul class='non-list'>";
    echo "<li>Rent:&#2547; " .$res1['Rent']. " Per Month </li> ";
        echo "</ul>"; 
    echo "<h4 class='size'>Contact: </h4>";
  //  echo "<p class='size'>Phone Number: " .$res1['Phone']."</p>";
  //  echo "<p class='size'>Email Address: " .$res1['Email']."</p>";
    echo "<a href='sendMessage.php'><button style='background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Contact Owner </button></a><br> ";

    }

   
  while($res2 = mysqli_fetch_array($result2)) {     
  
       echo "<h2>Tenant ID:  ".$res2['T_ID']. "</h2>";
            echo   "<ul class='list'>";
        echo  "<li>Catagory: ".$res2['Catagory']. "</li>"; 
        echo  "<li>Family Members (If not bachelor): ".$res2['Member']."</li>";
         echo  "<li>Preferred Area: ".$res2['Area']."</li>";
          echo "<li>Preferred Number of Rooms: ".$res2['Room']."</li>"; 
          echo "<li>Preferred Rent Range: ".$res2['F_Range']."</li>"; 
 //         echo "<li>Phone Number: ".$res2['Phone']."</li>";
   //       echo "<li>Email: ".$res2['Email']."</li>";
          echo "<li>About yourself: ".$res2['About']."</li>";
          echo "</ul>";
          echo "<a href='sendMessage.php'><button style='background-color: gray;color:white;padding:5px 10px;font-weight: bold'>Contact</button></a><br> ";
    }


  }



?>


</div> 

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>

</body>
</html>