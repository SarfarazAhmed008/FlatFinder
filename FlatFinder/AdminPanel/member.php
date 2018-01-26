<?php

include_once("config.php");


$result1 = "SELECT *
    FROM register";

$result1 = mysqli_query($conn, $result1);

?>





<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Flat Finder Admin Panel</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>

<div id="header">
	<div class="shell">
		
		<div id="top">
			<h1><a href="#">Flat Finder Admin Panel</a></h1>
			<div id="top-navigation">
				Welcome <a href="admin.php"><strong>Administrator</strong></a>
	
			</div>
		</div>

		<div id="navigation">
			<ul>
			    <li><a href="admin.php"><span>Dashboard</span></a></li>
			    <li><a href="member.php"><span>Members List</span></a></li>
			    <li><a href="AdminAdvertise.php"><span>Advertisements List</span></a></li>
			    <li><a href="AdminMessage.php"><span>Messages</span></a></li>
			</ul>
		</div>
		
	</div>
</div>

<div id="container">
	<div class="shell">
		
		
		<div class="small-nav">
			<a href="admin.php">Dashboard</a>
			
		</div>

		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			
			<div id="content">
				
				
				<div class="box">
					
					<div class="box-head">
						<h2 class="left">Current Members</h2>
					</div>
					

					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th>Member ID</th>
								<th>Information</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
<?php
   
  			while($res1 = mysqli_fetch_array($result1)) {     
  
  	echo "<tr>";
  	echo "<td>".$res1['RID']."</td>";
	echo "<td> First Name:  ".$res1['FName']. "</br>";
	echo "Last Name :  ".$res1['LName']. "</br>";
    echo "Gender : ".$res1['Gender']."</br>";
    echo "Occupation: " .$res1['Occupation']. "</br>"; 
  	echo "Marital Status: ".$res1['Marital']."</br>";
    echo "Phone Number: ".$res1['Phone']."</br>";
  	echo "Email:" .$res1['Email']. "</br> "; 
    echo "Address: ".$res1['Address']."</br>";
    echo "City: " .$res1['City']."</br>";
    echo "State: " .$res1['State']."</br>";
    echo "Zip Code: " .$res1['ZipCode']."</br>";
    echo "Country: ".$res1['Country']."</br>";
    echo "Category: " .$res1['Catagory']."</br>";
    echo "About: " .$res1['About']."</td>";


	echo "<td><a href=\"delete.php?id=$res1[RID]\"
					onClick=\"return confirm('Are you sure you want to delete this member?')\" class='ico del'>Delete Membership</a></td>";
	echo "</tr>";
	

    }

  ?>
						
						</table>
									
						
					</div>
					
					
				</div>
							<div class="box">
				
					<div class="box-head">
						<h2>Add New Announcement to All Members</h2>
					</div>
					
					
					<form action="member.php" method="post">
						
					
						<div class="form">
						
								
								<p>
									<span class="req">max 500 symbols</span>
									<label>Content <span>(Required Field)</span></label>
									<textarea class="field size1" rows="10" cols="30" name="msg"></textarea>
								</p>	
							
						</div>
					
						<div class="buttons">
							<input type="submit" class="button" value="Submit" name="Submit" />
						</div>
						
					</form>
				</div>
			

			</div>
	

			
			<div class="cl">&nbsp;</div>			
		</div>
		
	</div>
</div>

<?php

include_once("config.php");

if(isset($_POST['Submit'])) { 
  $msg = $_POST['msg'];

  
  
        
  $m = "INSERT  INTO adminmsg(Message) 
                VALUES('$msg')";
                

   
  $m = mysqli_query($conn, $m);

  
  header("Location: member.php");
    
  }

?>

<div id="footer">
	<div class="shell">
		<span class="left">Flat Finder Admin Panel</span>
		<span class="right">
			Copyright &copy; 2017 Flat Finder
		</span>
	</div>
</div>

	
</body>
</html>