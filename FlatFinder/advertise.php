<!DOCTYPE html>
<html>
<head>
	<title>Advertisement|FlatFinder</title>
<link rel="stylesheet" type="text/css" href="test2.css">
<style type="text/css">

#advertise{
	background-image: url("advertise.jpg");
	color:white;
	font-family: arial;
	height: auto; 
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;}

.list{margin-left:300px;}
li{font-weight: bold;}
#Service{
	text-align:center;
	height: 300px;
	font-size: 20px;
	padding:40px;}	
#image1{
			
			width: 10%
			clear:none;
			float: left;
			
			
		}
#image2{
			
			width:20%;
			float: left;
			clear:none;
		
		}
#image3{
		
		width:20%;
		float:right;
		clear: none;
}
#pro{font-size: 15px;padding: 10px;margin-top: 10px;
height: auto; 
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;}

a{color: #336699;
text-decoration: none;}
span:hover{background-color:#53c68c;
	color:white;
	font-weight: bold;
font-size: 20px;}
button:hover {
    font-size: 18px;}

button:active {
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.but{margin-left: 300px;
	background-color: #00ace6;
	color:white;padding:5px 15px;
	font-size:18px;
}
.but:hover{  
	box-shadow: 0 3px yellow;
  transform: translateX(4px);
}

		
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
                <a href="advertise.php">ADVERTISEMENT</a>
                <a href="login.php">LOG IN</a>
                <a href="reportAdmin.php">CONTACT</a>
                <a href="search.php">SEARCH</a>
</div>

<div class="content">
<div id="advertise"> 
	<br>
	<h1 style="text-align: center;text-decoration: underline;">Advertisement</h1>
		
		<h2 style="margin-left: 300px;">Property ID:00192 </h2>
			<ul class="list">
  				<li>Location: Gulshan 2 ,Dhaka </li>
  				<li>Rent:&#2547; 50,000.00 /month </li>
  				<li>Service Charge:&#2547; 7,000.00 /sft</li>
			</ul>
			<a href="ApartmentRent.php"> <button style="margin-left: 300px; background-color: gray;color:white;padding:5px 10px">More Details</button> </a> <br>
			


		<h2 style="margin-left: 300px;">Property ID:00212 </h2>
			<ul class="list">
			  <li>Location: Baridhara R/A, Uttara. </li>
			  <li>Rent:30,000 &#2547; - 40,000 &#2547;</li>
			  <li>Occupation: Job-Holder.</li>
			</ul> 
			<a href="ApartmentRent.php"> <button style="margin-left: 300px; background-color: gray;color:white;padding:5px 10px">More Details</button> </a> <br>


		<h2  style="margin-left: 300px;">Tenant ID:00123 </h2>
			<ul class="list">
			  <li>Location: Baridhara R/A, Uttara. </li>
			  <li>Rent:30,000 &#2547; - 40,000 &#2547;</li>
			  <li>Occupation: Job-Holder.</li>
			</ul> 
			<a href="Tenant_post.php"> <button style="margin-left: 300px; background-color: gray;color:white;padding:5px 10px">More Details</button> </a> <br>

		<h2  style="margin-left: 300px;">Tenanat ID:00212 </h2>
			<ul class="list">
			  <li>Location: Mirpur </li>
			  <li>Rent:15,000 &#2547; - 18,000 &#2547;</li>
			  <li>Occupation: Student</li>
			</ul>
			<a href="Tenant_post.php"> <button style="margin-left: 300px; background-color: gray;color:white;padding:5px 10px">More Details</button> </a>  <br> <br>


	<p style="margin-left: 300px;font-size: 20px"> Ad. Post Catagory <br>
      	<select style="width:30%;height: 45px; margin-right:30px"  style="margin-left: 300px;" required> 
        	<option value="Owner" style="font-size:20px ";>Owner</option>
        	<option value="Tenant">Tenant</option>
    	</select></p> <br>

  	<a href="form_owner.php"><button class="but">POST AD.</button><br>

  <p style="margin-left: 300px;color: white;">New Here?</p> 
  <a href="signup.php" style="margin-left: 300px;"><span>Create</span> </a> an account for posting advertisement!!  <br> </br>
  
  		<a href="login.php"><button class="but">LOG IN</button>
  <br> <br> <br> <br>

</div>

  
  <div id="Service">
  	
  	<h2>Services </h2>
  	
  	<p>Lots of landlords use an agent but not everyone wants to pay commission. For many landlords renting out properties is their job, so they'd rather put the work in and reap the rewards themselves. Similarly, not all tenants want to rent through an agent and pay the admin fees charged by most - they're happier to rent direct from the landlord. </p>
	  	<ul>
	  		<li style="margin-right: 50px "><a href="sendMessage.html"><span>Contact</span> </a> With Flat-Owner.</li>
	    	<li style="margin-right: 60px "><a href="sendMessage.html"><span>Contact</span> </a> with preferable Tenant .</li>
	    	<li style="margin-right: 50px "><a href="advertise.html"><span>View</span> </a> Other Post.</li>
		</ul> 

	</div>
	
	<div id="image1">
			<img src="service1.jpg" alt="This is a nice pic" height="250px" width="95%">
	</div>


	<div id="image2">
		<img src="service2.jpeg" alt="this is 2nd pic" height="250px" width="188%">
	</div>


	<div id="image3">
		<img src="service3.jpg" alt="this is 2nd pic" height="250px" width="100%" margin-left="100px">
	</div>


	<div id="pro" style="background-image: url(pro.jpg);padding-top:20px;height:300px;font-size:20px;margin-top:300px;"">
		
		<h2 style="text-align: center">What We Provide </h2>
		<hr>
			<ul>
  				<li style="margin-left: 350px ">Connect property owners and tenants over internet.</li><br>
				
				<li style="margin-left: 320px ">Build a user friendly platform to sell or rent out their property.</li><br>
				
				<li style="margin-left: 350px ">Offer free tools and services for buyers and tenants.</li> <br>
			
			</ul> 
	</div>
</div>

<div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>

</body>
</html>