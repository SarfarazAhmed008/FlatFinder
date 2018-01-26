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
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>File View|FlatFinder</title>
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

input[type=submit]:hover {
    background-color: #d1c7c7;
    color: #4CAF50;
    font-weight: bold;
    font-size:16px;
}


input[type=text]:focus {
    background-color: #d9ffb3;
}
a{text-decoration: none;font-weight: bold; float: right;color:blue;}
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
<label style="color:white;">List of uploaded files</label> <br>
	<table width="100%" border="solid" style="border-collapse: collapse;">
    <tr>
    <th colspan="4">Your uploads...<label><a href="index.php">Upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    </div>
    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>
    
</body>
</html>