<?php

include_once("config.php");


$result1 = "SELECT *
    FROM message
    ORDER BY M_ID ASC";

$result1 = mysqli_query($conn, $result1);

$result2 = "SELECT *
    FROM adminmsg
    ORDER BY A_ID ASC";

$result2 = mysqli_query($conn, $result2);

$result3 = "SELECT *
    FROM report
    ORDER BY RA_ID ASC";

$result3 = mysqli_query($conn, $result3);


?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Message</title>
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
						<h2 class="left">Message</h2>
					
					</div>
					

					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>Message ID</th>
								
								<th>Messages</th>
								<th width="110" class="ac">Content Control</th>
							</tr>
<?php

  while($res1 = mysqli_fetch_array($result1)) {     
  
  
	echo "<tr>";
	echo "<td> Message ID:  ".$res1['M_ID']. "</td>";
	echo "<td>Sender Email: ".$res1['SenEmail']."</br>";
	echo "Receiver Email: ".$res1['RecEmail']."</br></br>";
	echo "Message Subject: ".$res1['Subject']."</br>";
    echo "Message: ".$res1['Message']."</td>";

    echo "<td><a href=\"deletemsg.php?id=$res1[M_ID]\"
					onClick=\"return confirm('Are you sure you want to delete this Message?')\" class='ico del'>Delete Message</a></td>";
	echo "</tr>";
    
    }


  while($res2 = mysqli_fetch_array($result2)) {     
  
  	
	echo "<tr>";
	echo "<td>Admin Message ID:  ".$res2['A_ID']. "</td>";
    echo "<td>Message: ".$res2['Message']."</td>";

    echo "<td><a href=\"deletemsgadmin.php?id=$res2[A_ID]\"
					onClick=\"return confirm('Are you sure you want to delete this Admin Message?')\" class='ico del'>Delete Admin Message</a></td>";
	echo "</tr>";
    
    }


  while($res3 = mysqli_fetch_array($result3)) {     
  
  
	echo "<tr>";
	echo "<td> Message ID:  ".$res3['RA_ID']. "</td>";
	echo "<td>Sender Email: ".$res3['SenEmail']."</br>";
	echo "Report: ".$res3['Report']."</br>";
	echo "Subject: ".$res3['Subject']."</br><br>";
    echo "Message: ".$res3['Message']."</td>";

    echo "<td><a href=\"reportmsg.php?id=$res3[RA_ID]\"
					onClick=\"return confirm('Are you sure you want to delete this Message?')\" class='ico del'>Delete User Report Message</a></td>";
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
					
					
					<form action="AdminMessage.php" method="post">
						
					
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

  
  header("Location: AdminMessage.php");
    
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