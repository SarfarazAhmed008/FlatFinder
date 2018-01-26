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
	
			    <!-- <li><a href="#"><span>Contact</span></a></li>
 -->			</ul>
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
	<!-- 					<div class="right">
							<label>search member</label>
							<input type="text" class="field small-field" placeholder="Enter Member ID" />
							<input type="submit" class="button" value="search" />
						</div> -->
					</div>
					

					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th>Member ID</th>
								<th>Full Name</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
<?php
   
  			while($res1 = mysqli_fetch_array($result1)) {     
  
  						echo "<tr>";
  						echo "<td>".$res1['RID']."</td>";
						echo "<td><h3><a href='member.php'>".$res1['FName']." ".$res1['LName']."</a></h3></td>";
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
					
					
					<form action="admin.php" method="post">
						
					
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

  
  header("Location: admin.php");
    
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