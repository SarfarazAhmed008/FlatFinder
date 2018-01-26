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
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
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
  
  
        
  $result = mysqli_query($conn, "UPDATE register SET FName='$fname', LName='$lname', Gender='$gender', Occupation='$occupation', Marital='$marital', Phone='$phone', Email='$email', Password='$password', Address='$address', City='$city', State='$state', ZipCode='$zipcode', Country='$country', Catagory='$catagory', About='$about' WHERE Email = '{$_SESSION['email']}'"); 
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: MyAccount.php");
    
}
?>
<?php

$result = mysqli_query($conn, "SELECT * FROM register WHERE Email = '{$_SESSION['email']}'");
while($res = mysqli_fetch_array($result))
{

  $fname = $res['FName'];
  $lname = $res['LName'];
  $gender = $res['Gender'];
  $occupation = $res['Occupation'];
  $marital = $res['Marital'];
  $phone = $res['Phone'];
  $email = $res['Email'];
  $password = $res['Password'];
  $address = $res['Address'];
  $city = $res['City'];
  $state = $res['State'];
  $zipcode = $res['ZipCode'];
  $country = $res['Country'];
  $catagory = $res['Catagory'];
  $about = $res['About'];

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update  Information Form|FlatFinder</title>
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
 background-color:#b8f9bd;
}
input[type=text]:hover{
 background-color: #b8f9bd;
}
input[type=text],option{
  color:black;
  background-color:#d1c7c7;
  cursor: pointer;
}
input[type=password],option{
  color:black;
  background-color:#d1c7c7;
  cursor: pointer;
}
input[type=submit] {
    width: 12%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
      font-weight: bold;
   

}

input[type=submit]:hover {
    background-color: #d1c7c7;
    color: #4CAF50;
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
<body> <div class="header">
  <p id="title">Flat Finder</p>
  <p id="subtitle">One step closer to your ideal residence</p>
</div>

<div id="navbar">
                 <a href="home.php">HOME</a>
                <a href="aboutUs.php">ABOUT US </a>
                <a href="advertise.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

<div class="content">

  <div id="reg">
  
  <h1 style="text-align: center;font-family:Times New Roman;text-decoration: underline;font-size:44px;color:white; "> Update Your Information  </h1>
  <form style="text-align=center" action="edit.php" method="post">
    <p style="text-indent: 80px"> Name :
      <input type="text" name="fname" placeholder="Enter your firstname" value="<?php echo $fname;?>" required>
      <input type="text" name="lname" placeholder="Enter your lastname" value="<?php echo $lname;?>" required> </p>
    <p style="text-indent:69px"> Gender :
      <input type="radio" name="gender" value="Male" <?php if($gender=='Male') echo 'checked="checked"'; ?>" /> Male 
      <input type="radio" name="gender" value="Female" <?php if($gender=='Female') echo 'checked="checked"'; ?>" /> Female </p>
    
    <p style="text-indent: 36px"> Occupation : 
      <select style="width:17%;height: 45px; margin-right:30px" name="occupation" value="<?php echo $occupation;?>"  required> 
        <option value="Student" style="font-size:20px ";>Student</option>
        <option value="Jobholder">Job Holder</option>
        <option value="Business" style="font-size:20px ";>Business</option>
        <option value="Housewife">House-Wife</option>
        <option value="Worker" style="font-size:20px ";>Worker</option>
        <option value="Other">Other</option>
      </select> 
    Marital Status:
      <select style="width:20%;height: 45px; margin-left:06px" name="marital" value="<?php echo $marital;?>" > 
        <option value="Married" style="font-size:20px ";>Married</option>
        <option value="Unmarried">Unmarried</option>
      </select> </p>
    <p> Phone Number : <input type="text" name="phone" value="<?php echo $phone?>"  > <p>
    <p style="text-indent: 80px"> Email : <input type="text" name="email" placeholder="Enter your email address" value="<?php echo $email;?>"  required>     <p>
      <p style="text-indent: 50px">Password : <input type="password" name="password" placeholder="Enter your password" value="<?php echo $password;?>" required></p>
    <p style="text-indent:62px"> Address : <input type="text" name="address" value="<?php echo $address;?>" > <p>
      <p style="text-indent: 94px"> City : <input type="text" name="city" value="<?php echo $city;?>"  > <p>
        <p style="text-indent: 86px"> State : <input type="text" name="state" value="<?php echo $state;?>"  > <p>
          <p style="text-indent: 52px"> Zip Code : <input type="text" name="zipcode" value="<?php echo $zipcode;?>"  > <p>
            <p style="text-indent:60px"> Country : <input type="text" name="country" value="<?php echo $country;?>"  > <p>
    <p> Choose Catagory :
      <input type="radio" name="catagory" value="Tenant" <?php if($catagory=='Tenant') echo 'checked="checked"'; ?>" /> Tenant 
      <input type="radio" name="catagory" value="Owner" <?php if($catagory=='Owner') echo 'checked="checked"'; ?>" /> Owner</p> 
    <p>About yourself : </p>
      <textarea style="margin-left: 148px" rows="6" cols="46" name="about" value="<?php echo $about;?>" > </textarea> <br>
      <input style="margin-left: 397px" type="submit" name="update" value="Update">

  </form>
  <a href="home.html"> Go Back to Homepage </a> 
  <br> <br>

</div>

</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>