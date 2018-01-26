<!DOCTYPE html>
<html>
<head>
  <title>Registration Form|FlatFinder</title>
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
input[type=password], select {
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
input[type=password]:hover{
 background-color: #b8f9bd;
}
input[type=text]:hover{
 background-color: #b8f9bd;
}
input[type=text],option{
  color:black;
  background-color: #d1c7c7;
  cursor: pointer;
}
input[type=password],option{
  color:black;
  background-color:#d1c7c7;
  cursor: pointer;
}
input[type=submit] {
    width: 10%;
    background-color:#16a085;
    color: white;
    padding: 12px 20px;
    margin: 12px 0;
    border: none;
    border-radius: 4px;
    font-size: 15px;
    font-weight: bold;
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
a{text-decoration: none;font-weight: bold; float:right;color:white;}
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
                 <a href="home.html">HOME</a>
                <a href="aboutUs.html">ABOUT US </a>
                <a href="ApartmentRent.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

<div class="content">

  <div id="reg">
  
  <h1 style="text-align: center;font-family:Times New Roman;text-decoration: underline;font-size:44px;color:white; "> Registration Form </h1>
  <form style="text-align=center" action="signup.php" method="post">
    <p style="text-indent: 80px"> Name :
      <input type="text" name="fname" placeholder="Enter your firstname" required>
      <input type="text" name="lname" placeholder="Enter your lastname" required> </p>
    <p style="text-indent:69px"> Gender :
      <input type="radio" name="gender" value="Male" required>Male
      <input type="radio" name="gender" value="Female" required>Female </p>
    <p style="text-indent: 36px"> Occupation : 
      <select style="width:17%;height: 45px; margin-right:30px" name="occupation" required> 
        <option value="Student" style="font-size:20px ";>Student</option>
        <option value="Jobholder">Job Holder</option>
        <option value="Business" style="font-size:20px ";>Business</option>
        <option value="Housewife">House-Wife</option>
        <option value="Worker" style="font-size:20px ";>Worker</option>
        <option value="Other">Other</option>
      </select> 
    Marital Status:
      <select style="width:20%;height: 45px; margin-left:06px" name="marital"> 
        <option value="Married" style="font-size:20px ";>Married</option>
        <option value="Unmarried">Unmarried</option>
      </select> </p>
    <p> Phone Number : <input type="text" name="phone" > <p>
    <p style="text-indent: 80px"> Email : <input type="text" name="email" placeholder="Enter your email address" required>     <p>
      <p style="text-indent: 50px">Password : <input type="password" name="password" placeholder="Enter your password" required></p>
    <p style="text-indent:62px"> Address : <input type="text" name="address" > <p>
      <p style="text-indent: 94px"> City : <input type="text" name="city" > <p>
        <p style="text-indent: 86px"> State : <input type="text" name="state" > <p>
          <p style="text-indent: 52px"> Zip Code : <input type="text" name="zipcode" > <p>
            <p style="text-indent:60px"> Country : <input type="text" name="country" > <p>
    <p> Choose Catagory :
      <input type="radio" name="catagory" value="Tenant" required>Tenant
      <input type="radio" name="catagory" value="Owner" required>Owner</p>  
   <p> About yourself: </p>
      <textarea rows="5" cols="38" name="about" style="margin-left: 144px;"> </textarea>
      <br><input type="submit" name="Submit" value="Submit"
      style="margin-left: 352px;">

  </form>
  <a href="home.php"> Go Back to Homepage </a> 
  <br> <br>

</div>

</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>





<?php

include_once("config.php");

if(isset($_POST['Submit'])) { 
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $occupation = $_POST['occupation'];
  $marital = $_POST['marital'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zipcode = $_POST['zipcode'];
  $country = $_POST['country'];
  $catagory = $_POST['catagory'];
  $about = $_POST['about'];
  
  
        
  $result = "INSERT  INTO register(FName, LName, Gender, Occupation, Marital, Phone, Email, Password, Address, City, State, ZipCode, Country, Catagory, About ) 
                VALUES('$fname', '$lname', '$gender', '$occupation', '$marital', '$phone','$email', '$password' ,'$address', '$city', '$state', '$zipcode', '$country', '$catagory','$about')";
                

   
  $result = mysqli_query($conn, $result);

  
  //header("Location: login.php");
    
  }

?>

</body>
</html>