<!DOCTYPE html>
<html>
<head>
	<title>Home|FlatFinder</title>
	<link rel="stylesheet" type="text/css" href="test2.css">
	<style type="text/css">
.parallax { 
    /* The image used */
    background-image: url("search2.jpg");
    height: 520px; 
    width: 100%;
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}	
.button {
  border-radius: 2px;
  background-color: #006666;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  width: 140px;
  transition: all 0.5s;
  cursor: pointer;
  margin-left: 580px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
#para{
	font-weight: bold;
	width: 20%;
 	color:#ff1a1a;
 	font-style:oblique;
 	text-align:center;
  font-family:cursive;
  font-size:30px;
  margin-left: 540px;
  padding-top:18px;}
  #para:hover{
  	font-size:32px;
  	cursor:pointer;

  }
 #image1{
			clear:none;
			float: left;	
		}
#image2{	
			width:18%;
			float:left;
			clear:none;
		}
#image3{
			width:28%;
			float:right;
			clear: none;
			margin-left:"100px"
		}
#image1:hover{opacity: 0.6;}
#image2:hover{opacity: 0.6;}
#image3:hover{opacity: 0.6;}
#picture3:hover{opacity: 0.6;}
#image4{
			clear:none;
			float: left;
			width: 25%;

		}
#image5{	width:25%;
			float:left;
			clear:none;}

#words{		width:50%;
			float:right;
			clear: none;
			text-indent: 15px;
		font-family:Brush Script Std, cursive;
		font-size:20px;
		color:#19334d
		;}
#hello{
	background-image:url("advertise.jpg");
	height: 560px;
	margin-top:300px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;}

 .mySlides {display:none;width:98%; display: block;
  margin-left: auto;
  margin-right: auto;
float: left; clear: none;}

 #list {float: right;clear:none;color:white;width: 58%;}

 #words2{width:53%;
			float:left;
			clear: none;
			text-indent: 15px;
		font-family:Brush Script Std, cursive;
		font-size:15px;}
#picture3{
	float:right;
	clear:none;
	}
#pro{
	text-align:center;
	height: 300px;
	font-size: 20px;
	padding:40px;
	background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	font-family:Brush Script Std, cursive;
	color:#19334d;
	font-weight:bold;}	

	</style>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}
</script>

</head>
<body>
	<div class="header">
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
	<div class="parallax">
		<h1 style="color:white;font-style:oblique;text-align:center;
  font-family:Brush Script Std;font-size:30px;padding-top:70px">One step closer to your ideal residence </h1> <br><br>
		<a href="login.php"> <button class="button"> <span> LOG IN </span></button></a> <br>
			<hr>  
			<p id="para">Not a member? </p id="para">
		<a href="signup.php"> <button class="button"><span> REGISTER NOW!</span> </button></a><br> <br>
	</div class="parallax"> <br> <br>
	
	<div id=picture>
		<h1 style="color:black;font-style:oblique;text-align:center;
  font-family:Brush Script Std;font-size:38px;padding-top:60px">One step closer to your ideal residence </h1> <br> <br> <br>
	<a href="signup.php" style="color:#cc0000">
			<div id="image1">
			<img src="user_profile.jpg" alt=pic1 height="250px" width="98%"><figcaption style="text-align: center;font-size:24px;font-style: italic;font-weight: bold">Sign Up</figcaption>
		</div>
	</a>
	<a href="advertise.php" style="color:#cc0000">
		<div id="image2">
			<img src="12.jpg" alt="pic2" height="250px" width="188%">
			<figcaption style="margin-left:168px;font-size:24px;font-style: italic;font-weight: bold">View Ad.</figcaption>
		</div>
	</a>
	<a href="reportAdmin.php" style="color:#cc0000">
		<div id="image3">
			<img src="search2.jpg" alt="pic3" height="250px" width="105%"  margin-left="100px">
			<figcaption style="text-align: center;font-style: italic;font-size:24px;font-weight: bold;">Help-Contact Us</figcaption>
		</div>
	</a> 
	<br> <br>
	</div id="picture"> <br> 

	<div id="experience" style="padding-top:20px;height:300px;font-size:20px;margin-top:300px;"">
		
		<h2 style="color:#19334d;font-style:oblique;text-align:center;
  font-family:Brush Script Std;font-size:30px;padding-top:60px" >Experience FlatFinder </h2>
		<h3 style="color:#19334d;font-style:oblique;text-align:center;
  font-family:Brush Script Std;font-size:26px;margin-left:20px;">Blissful views, vintage style lofts, and good people </h3>
		<hr> <br><br>
		
		<div id="picture2">
			
		<div id="image4">
			<img src="search1.jpg" height="200px" width="90%" >
		</div id="image4">

		<div id="image5">
			<img src="search3.jpg" height="200px">
		</div id="image5">

		</div>
		<div id="words">

			<p>Flat Finder is a website that brings the facility of searching for the most suitable flat for both flat owners and tenants from the comfort of their home instead of going out looking for it day in and day out. We are trying to provide a systematic solution in the flat or apartment searching problem. ‘Flat Finding’ will store all the necessary information from the flat owner and give it to the appropriate tenant holder. </p>
				</div id="words"> <br> <br> <br>
	</div id="experience"> <br> 

	<div id="hello"> 
		<h2 style="color:white;font-style:oblique;text-align:center;
  font-family:Brush Script Std;font-size:38px;padding-top:60px">Enhanted Services for Accommodation Problem </h2>

   <div class="w3-content w3-section" style="max-width:500px">
    <br> 
      <img class="mySlides" src="search1.jpg" style="width:90%";>
      <img class="mySlides" src="service1.jpg" style="width:80%">
      <img class="mySlides" src="service2.jpeg" style="width:80%">
      <img class="mySlides" src="service3.jpg" style="width:90%">
    </div>

    <div id="list">
    	<h2 style="color: #80aaff;font-size:32px;">Tired of looking for flats?FlatFinder is here to do that for you. </h2>
		
			<ul>
  				<li style="font-size: 26px ">Connect property owners and tenants over internet.</li><br>
				
				<li style="font-size: 26px  ">Build a user friendly platform to sell or rent out their property.</li><br>
				
				<li style="font-size: 26px">Offer free tools and services for buyers and tenants.</li> <br>
			
			</ul> </div>

	</div id="hello"> <br> <br> <br> <br>

	<div id="ground" style="padding: 20px;">
		<div id="words2">
			<h2>EXPLORE THE GROUNDS.<h2>
				<p style="margin-top:50px">Get the chance to grab your preferred home just browsing our site.Get the opportunity to be connected with the people who is going to stay in your home over internet. </p> </div>

		<div id="picture3">
			<a href="advertise.php"> <img src="sweet.jpg" style="width: 480px"><figcaption style="text-align: center;font-style: italic;font-size:24px;font-weight: bold;text-decoration:none;color:#cc0000">Click here to find your Home!</figcaption> </a>
		</div>  <br> <br> <br> 
	
	</div id="ground"> <br> <br> <br><br>
	
		<div id="pro" style="background-image: url(pro.jpg);font-size:20px;margin-top:300px;">
		
			<h2>Services </h2>
  	
  	<p>Lots of landlords use an agent but not everyone wants to pay commission. For many landlords renting out properties is their job, so they'd rather put the work in and reap the rewards themselves. Similarly, not all tenants want to rent through an agent and pay the admin fees charged by most - they're happier to rent direct from the landlord. </p>
		<hr>
		<ul>
	  		<li style="margin-right: 50px "><a href="sendMessage.html">Contact </a> With Flat-Owner.</li>
	    	<li style="margin-right: 60px "><a href="sendMessage.html">Contact </a> with preferable Tenant .</li>
	    	<li style="margin-right: 50px "><a href="reportAdmin.html">Contact </a> With Flat-Finder.</li>
	    	<li style="margin-right: 50px "><a href="advertise.html">View </a> Other Post.</li>
		</ul> 
	</div id="pro">
	</div>

    <div class="fixed-footer">
        <div class="container">Copyright &copy; 2017 Flat Finder</div>        
    </div>


<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
</body>
</html>