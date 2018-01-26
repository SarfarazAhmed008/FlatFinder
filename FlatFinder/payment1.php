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
  <title>Payment Form|FlatFinder</title>
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
      color: #133913;
      color:white;
      font-size:25px;}

input[type=text], select {
    width: 27%;
    padding: 8px 20px;
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
  background-color:#d1c7c7;
  cursor: pointer;
}

input[type=submit] {
    width: 12%;
    background-color: #4CAF50;
    color: white;
    padding: 8px 20px;
    margin: 8px 40px 0;
    border: none;
    border-radius: 4px;
    font-weight: bold;
   

}

input[type=submit]:hover {
    background-color: #d1c7c7;
    color: #4CAF50;
    font-weight: bold;
    font-size:12px;
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
<body> <div class="header">
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
  
  <h1 style="text-align: center;font-family:Times New Roman;text-decoration: underline;font-size:44px;color:white; "> Payment </h1>
  <form style="text-align=center">
    <p style="text-indent: 80px"> Name :
      <input type="text" name="fname" placeholder="Enter your firstname" required>
      <input type="text" name="lname" placeholder="Enter your lastname" required> </p>
    <p style="text-indent:55px"> Catagory:
      <input type="radio" name="gender" value="owner" required>Owner
      <input type="radio" name="gender" value="tenant" required>Tenant </p>
      <p style="text-indent: 32px"> Member ID :
      <input type="text" name="id" placeholder="Enter your ID" required>
    <p> Phone Number : <input type="text" name="phone" > </p>
    <p style="text-indent: 80px"> Email : <input type="text" name="email" > <p>
   <p style="text-indent: 75px"> Month :
      <select style="width:16%;height: 45px; margin-right:30px" required> 
        <option value="1" style="font-size:20px ";>January</option>
        <option value="2">February</option>
        <option value="3" style="font-size:20px ";>March</option>
        <option value="4">April</option>
        <option value="5" style="font-size:20px ";>May</option>
        <option value="6">June</option>
        <option value="7" style="font-size:20px ";>July</option>
        <option value="8">August</option>
        <option value="9" style="font-size:20px ";>September</option>
        <option value="10">October</option>
        <option value="11" style="font-size:20px ";>November</option>
        <option value="12">December</option>
      </select> <br>
      <p style="text-indent:62px"> Address : 
      <input type="text" name="Address"> </p>

      <p style="text-indent: 20px"> <a href="home.php">Homepage </a>
      <a href="fileupload/fileupload/index.php">Click here to upload file(s)</a>
      </p>
  </form>

  <br> <br>

</div>

</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>

</body>
</html>