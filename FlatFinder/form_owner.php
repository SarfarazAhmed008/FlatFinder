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
<html>
<head>
  <title>Owner Form|FlatFinder</title>
    <link rel="stylesheet" type="text/css" href="test2.css">
<style> 
#reg{
     
    border-radius: 5px;
    padding: 20px;
    background-image: url("signBack.jpg");height: auto; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;}

p  {font-weight: bold;
    font-size: 20px;}
form { margin-left:10px; 
      margin-top: 100px;
      font-family:Times New Roman;
      color:#d1c7c7;
      color:white;
      font-size:25px;}

input[type=text], select {
    width: 24%;
    padding: 08px 17px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-weight: bold;
    font-size: 15px;
}
input[type=text]:hover{
 background-color: white;
}
input[type=text],option{
  color:black;
  background-color: #d1c7c7;
  cursor: pointer;
}

input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 12px 0;
    border: none;
    border-radius: 4px;  
    font-size: 16px;

}

input[type=submit]:hover {
    background-color: #d1c7c7;
    color: #4CAF50;
    font-weight: bold;
    font-size:16px;
}

input[type=text]:focus {
    background-color: #d9ffb3;
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
      <div id="reg">

  <h1 style="text-align: center;font-family:Times New Roman;text-decoration: underline;font-size:44px;color:white; ">Advertisement form for Flat Owner</h1>
  <form style="text-align=center">
  
    <p> Catagory : 
      <input type="radio" name="catagory" value="Flat" required>Flat Rent 
      <input type="radio" name="catagory" value="Room" required>Flat Sell</p>
    <p style="text-indent: 30px"> Size of Flat :
      <input type="text" name="member" required > </p>
    <p style="text-indent: 84px"> Rent :
      <input type="text" name="area" >  </p>
    <p> Preferred Number of Rooms: 
      <select style="width:06%;height: 45px; margin-right:30px" required> 
        <option value="1" style="font-size:20px ";>1</option>
        <option value="2">2</option>
        <option value="3" style="font-size:20px ";>3</option>
        <option value="4">4</option>
        <option value="5" style="font-size:20px ";>5</option>
        <option value="Sublet">Sublet</option>
        <option value="flatSell">Selling Flat</option>
      </select> 
    <p> Phone Number : <input type="text" name="phone" > <p>
    <p style="text-indent: 76px"> Email : <input type="text" name="email" > <p>
    <p>Special Conditions (if any) <p>
      <textarea rows="4" cols="50"> </textarea>
      <br>
      <input style="margin-left: 302px " type="submit" value="Submit">

   </form>
  <a href="home.php"> Homepage </a> <br>
  <a href="advertise.html"> View Other Ad. </a>  <br> <br>
  

</div>

</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>


<?php

include_once("config.php");

if(isset($_POST['Submit'])) { 
  $catagory = $_POST['catagory'];
  $size = $_POST['size'];
  $rent = $_POST['rent'];
  $check = $_POST['check'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $special = $_POST['special'];
  
  
        
  $result = "INSERT  INTO owner(Catagory, Size, Rent, NOR, Phone, Email, SP_Condition) 
                VALUES('$catagory', '$size', '$rent', '$check', '$phone', '$email','$special')";
                

   
  $result = mysqli_query($conn, $result);

  
  header("Location: ApartmentRent.php");
    
  }

?>

</body>
</html>