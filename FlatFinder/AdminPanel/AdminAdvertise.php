<?php

include_once("config.php");


$result1 = "SELECT *
    FROM owner
    ORDER BY O_ID ASC";

$result1 = mysqli_query($conn, $result1);


$result2 = "SELECT *
    FROM tenant
    ORDER BY T_ID ASC";

$result2 = mysqli_query($conn, $result2);

?>



<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Flat Finder Admin Advertisement</title>
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
						<h2 class="left">Advertisement Post</h2>
					
					</div>
					

					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
			<!-- 					<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Name</th>
								<th>Date</th> -->
								
								<th>Post</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
						



<?php
   
  while($res1 = mysqli_fetch_array($result1)) {     
  
  
	echo "<tr>";
	echo "<td> Property ID:  ".$res1['O_ID']. "</br>";
		echo "Catagory :  ".$res1['Catagory']. "</br>";
    echo "Size : ".$res1['Size']."</br>";
    echo "Preferred Number of Rooms: " .$res1['NOR']. " room(s)</br>";
  
  	echo "Special Condition: ".$res1['SP_Condition']."</br>";
    echo "Financial Detail:</br>";
  	echo "Rent:&#2547; " .$res1['Rent']. " Per Month </br> "; 
    echo "Contact: </br>";
    echo "Phone Number: " .$res1['Phone']."</br>";
    echo "Email Address: " .$res1['Email']."</td>";

    echo "<td><a href=\"deletepost.php?id=$res1[O_ID]\"
					onClick=\"return confirm('Are you sure you want to delete this post?')\" class='ico del'>Delete post</a></td>";
	echo "</tr>";
    
    }


      while($res2 = mysqli_fetch_array($result2)) {     
  
          echo "<tr>";
          echo "<td>Tenant ID:  ".$res2['T_ID']. "</br>";
          echo  "Catagory: ".$res2['Catagory']. "</br>"; 
          echo  "Family Members (If not bachelor): ".$res2['Member']."</br>";
          echo  "Preferred Area: ".$res2['Area']."</br>";
          echo "Preferred Number of Rooms: ".$res2['Room']."</br>"; 
          echo "Preferred Rent Range: ".$res2['F_Range']."</br>"; 
          echo "Phone Number: ".$res2['Phone']."</br>";
          echo "Email: ".$res2['Email']."</br>";
          echo "About yourself: ".$res2['About']."</td>";
          echo "<td><a href=\"deletepostt.php?id=$res2[T_ID]\"
					onClick=\"return confirm('Are you sure you want to delete this post?')\" class='ico del'>Delete post</a></td>";
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
					
					
					<form action="AdminAdvertise.php" method="post">
						
					
						<div class="form">
						
								
								<p>
									<span class="req">max 500 symbols</span>
									<label>Content <span>(Required Field)</span></label>
									<textarea class="field size1" rows="10" cols="30" name="msg"></textarea>
								</p>	
							
						</div>
					
						<div class="buttons">
							<input type="submit" class="button" value="Submit"  name="Submit" />
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

  
  header("Location: AdminAdvertise.php");
    
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