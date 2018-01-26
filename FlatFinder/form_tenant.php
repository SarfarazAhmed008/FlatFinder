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
  <title>Tenant Form|FlatFinder</title>
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
      color:white;
      font-size:25px;}

input[type=text], select {
    width: 24%;
    padding: 08px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-weight: bold;
    font-size: 15px;
}
input[type=text]:hover{
 background-color: #b8f9bd;
}
input[type=text],option{
  color:black;
  background-color: #d1c7c7;
  cursor: pointer;
}

input[type=submit] {
    width: 10%;
    background-color: #16a085;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    font-weight: bold;
      font-size: 15px;
    

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
                <a href="Tenant_Post.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>




<div class="content">
     <div id="reg">

   <h1 style="text-align: center;font-family:Times New Roman;text-decoration: underline;font-size:44px;color:white; "> Advertisement form for Tenants</h1>
  <form style="text-align=center">
  
    <p> Catagory : 
      <input type="radio" name="catagory" value="Flat" required>Flat Searching 
      <input type="radio" name="catagory" value="Room" required>Room Searching </p>
    <p> Family Members (if not bachelor):
      <input type="text" name="member" > </p>
    <p style="text-indent: 152px"> Preferred Area :
      <input type="text" name="area" >  </p>
    <p style="text-indent: 42px"> Preferred Number of Rooms: 
      <select style="width:6%;height: 45px; margin-right:30px" required> 
        <option value="1" style="font-size:20px ";>1</option>
        <option value="2">2</option>
        <option value="3" style="font-size:20px ";>3</option>
        <option value="4">4</option>
        <option value="5" style="font-size:20px ";>5</option>
        <option value="Search_Flat">Searching For Flat</option>
      </select> 
      <p style="text-indent: 98px"> Preferred Rent Range: 
      <select style="width:18%;height: 45px; margin-right:30px" required> 
        <option value="1" style="font-size:20px ";>10,000-20,000/-</option>
        <option value="2">20,000-30,000/-</option>
        <option value="3" style="font-size:20px ";>30,000-40,000/-</option>
        <option value="4">40,000-50,000/-</option>
        <option value="5" style="font-size:20px ";>More</option>
        <option value="Search_Flat">Searching For Flat</option>
      </select> 
    <p style="text-indent: 155px"> Phone Number : <input type="text" name="phone" > <p>
    <p style="text-indent: 230px"> Email : <input type="text" name="email" > <p>
    <p style="text-indent: 155px">About yourself : </p>
      <textarea rows="6" cols="50" style="margin-left:290px"> </textarea>
      <br> <br><input style="margin-left: 595px;" type="submit" value="Submit">

  </form>
  <a href="home.php">Homepage </a> <br>
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
  $member = $_POST['member'];
  $area = $_POST['area'];
  $room = $_POST['room'];
  $range = $_POST['range'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $about = $_POST['about'];
  
  
        
  $result = "INSERT  INTO tenant(Catagory, Member, Area, Room, F_Range, Phone, Email, About) 
                VALUES('$catagory', '$member', '$area', '$room', '$range', '$phone','$email', '$about')";
                

   
  $result = mysqli_query($conn, $result);

  
  //header("Location: TenantPost.php");
    
  }

?>


</body>
</html>