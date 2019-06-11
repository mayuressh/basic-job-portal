<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
	if(isset($_POST['login']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				$query = "select * from info where Username='$username' and Password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
					
					header( "Location: homepage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
			}
			else
			{
			}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<style>
input{
    width: 230px;
	margin: 0 auto;
    padding: 10px;
    border: 1px solid #ccc;
	border-radius:10px;
}

#main-wrapper{
	position:absolute;
            right:100px;
            top:200px;
	border-radius : 10px;
	border: 3px solid #f1f1f1;
	width: 300px;
	margin: 0 auto;
}

.inner_container{
	
	width:250px;
	margin:0 auto;
}

.login_button {
    background-color: teal;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 100%;
	font-size:18px;
	font-weight: bold;
	border-radius:10px;
}

.register_btn{
	background-color: magenta;
    color: white;
	margin-top:10px;
	margin-bottom:15px;
	padding:10px;
    width: 100%;
	font-size:16px;
	font-weight: bold;
	border-radius:10px;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 30%;
    border-radius: 50%;
}

.container {
    margin: 16px;
	width:100%;
}
#locator{
	  position:absolute;
	  visibility:visible;
	  left:20px;
	  top:350px;
	  height:100px;
	  width:500px;
	  z-index:200;
	  }
	  
.dcontainer {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.dcontainer a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.dcontainer a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
		
</style>
</head>
<body background="web1.jpg">
	<div style="font-family:'Arial Black';background:white;color:black"><img src="logo.png" width=15% height=15% ></div>
	<div class="dcontainer">
	  <a href="http://localhost:8080/LoginPage/html/dropnev.html"><img src="home icon.jpg" height="20px" width="20px"></a>
	  
  
	  <div class="dropdown">
		<button class="dropbtn">Banking & Finance</button>
		<div class="dropdown-content">
		  <a href="http://localhost:8080/LoginPage/html/bajaj.html">Bajaj Auto Finance</a>
		  <a href="http://localhost:8080/LoginPage/html/muthoot.html">Muthoot Finance</a>
		  <a href="http://localhost:8080/LoginPage/html/pnb.html">Punjab National Bank</a>
		  <a href="http://localhost:8080/LoginPage/html/sbi.html"">State Bank of India</a>
	</div>
	  </div> 
	  
	  <div class="dropdown">
		<button class="dropbtn">Hotels</button>
		<div class="dropdown-content">
		  <a href="http://localhost:8080/LoginPage/html/mmt.html">MakeMyTrip Ltd.</a>
		  <a href="http://localhost:8080/LoginPage/html/jp.html">Jaypee Hotels</a>
		  <a href="http://localhost:8080/LoginPage/html/woods.html">Woodsvilla Ltd.</a>
		</div>
	  </div> 
	  
	  <div class="dropdown">
		<button class="dropbtn">Engineering</button>
		<div class="dropdown-content">
		   <a href="http://localhost:8080/LoginPage/html/infosys.html">Infosys</a>
		  <a href="http://localhost:8080/LoginPage/html/polaris.html">Polaris</a>
		  <a href="http://localhost:8080/LoginPage/html/bhel.html">BHEL</a>
		  <a href="http://localhost:8080/LoginPage/html/lt.html">L&T Infotech</a>
		</div>
	  </div> 
	  
	  
	    <div class="dropdown">
			<button class="dropbtn">MBA</button>
			<div class="dropdown-content">
			  <a href="http://localhost:8080/LoginPage/html/cognizant.html">Cognizant</a>
			  <a href="http://localhost:8080/LoginPage/html/wipro.html">Wipro</a>
			  <a href="http://localhost:8080/LoginPage/html/acc.html">Accenture</a>
			</div>
	  </div> 
	  
	
	</div>
	<hr size=5 noshade></hr>
	<div id="locator">
	<marquee height="300%" scrollamount="3" width="100%" direction="up" ><p><font style="font-family:'Arial Black';color:aqua"><b><i><u>Get.com</u></i> has an in-depth understanding of the Indian consumer internet domain.<br>
With years of experience in the domain, strong cash flow generation and a diversified business portfolio,<br> it one of the very few profitable pure play internet companies in the country.<br>
The company was incorporated on May 1, 1995 under the Companies Act,<br> 1956 as Get.com (India) Private Limited and became a public limited company on April 27, 2006.<br>
Starting with a classified recruitment online business, getJob.com,<br>
Info Edge has grown and diversified rapidly, setting benchmarks as a pioneer for others to follow.<br>
Driven by innovation, creativity, an experienced and talented leadership team and a strong culture of<br>
entrepreneurship, today,it is India’s premier online classifieds company in<br> 
recruitment, matrimony, real estate, education and related services.</font></b><br></marquee>
<div><h2 align="right"><font color="aqua">Address for Consultancy:</font></h2><address align=right><font color="red">St.John College Of Engginering<br>Palghar</font></address></div>
</div>
	<div id="main-wrapper" style="background-color:#3498db">
	<h2 align="center">Login Form</h2>
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
		<form action="index.php" method="post" >
		
			<div class="inner_container" style="background-color:#3498db" >
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button" name="login" type="submit" style="background-color:#2ecc71">Login</button>
				<a href="register.php"><button type="button" class="register_btn" style="background-color:#2ecc71">Register</button></a>
			</div>
		</form>
	
		
	</div>
	
</body>
</html>