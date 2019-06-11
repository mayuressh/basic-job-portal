<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
	
	if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				@$mobileno=$_POST['mobileno'];
				
				if($password==$cpassword)
				{
					$query = "select * from info where Username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript"> alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into info values('$username','$password','$mobileno')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: ty.html");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<style>
input{
	
    width: 430px;
	margin: 0 auto;
    padding: 10px;
    border: 1px solid #ccc;
	border-radius:10px;
}

#main-wrapper{
	
	border-radius : 10px;
	background-color: #2ecc71;
	border: 3px solid #c0392b;
	width: 500px;
	margin: 0 auto;
}
.inner_container{
	border: 0;
	border-bottom: 1px solid teal;
	width:450px;
	margin:0 auto;
}

.back_btn{
	margin-top:10px;
	color: white;
	margin-bottom:15px;
    padding: 10px;
    background-color: #e67e22;
	border-radius:10px;
	}



.sign_up_btn {
	background-color: #d35400;
    color: white;
	padding:10px;
	margin-top:10px;
	margin-bottom:10px;
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
	border: 3px solid #d35400;
}


ul{
list-style-type=none;
 margin: 0;
    padding: 0;
}
li{
	display: block;
background-color= #ecf0f1;
}

.container {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.container a {
	
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

.container a:hover, .dropdown:hover .dropbtn {
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
<body background="money.jpg">
<div style="font-family:'Arial Black';background:white;color:black"><img src="logo.png" width=15% height=15% ></div>
	<div class="container">
	  <a href="http://localhost:8080/LoginPage/html/dropnev.html"><img src="home icon.jpg" height="20px" width="20px"></a>
	  
  
	  <div class="dropdown">
		<button class="dropbtn">Banking & Finance</button>
		<div class="dropdown-content">
		  <a href="bajaj.html">Bajaj Auto Finance</a>
		  <a href="muthoot.html">Muthoot Finance</a>
		  <a href="pnb.html">Punjab National Bank</a>
		  <a href="sbi.html"">State Bank of India</a>
	</div>
	  </div> 
	  
	  <div class="dropdown">
		<button class="dropbtn">Hotels</button>
		<div class="dropdown-content">
		  <a href="mmt.html">MakeMyTrip Ltd.</a>
		  <a href="jp.html">Jaypee Hotels</a>
		  <a href="woods.html">Woodsvilla Ltd.</a>
		</div>
	  </div> 
	  
	  <div class="dropdown">
		<button class="dropbtn">Engineering</button>
		<div class="dropdown-content">
		   <a href="infosys.html">Infosys</a>
		  <a href="polaris.html">Polaris</a>
		  <a href="bhel.html">BHEL</a>
		  <a href="lt.html">L&T Infotech</a>
		</div>
	  </div> 
	  
	  
	    <div class="dropdown">
			<button class="dropbtn">MBA</button>
			<div class="dropdown-content">
			  <a href="cognizant.html">Cognizant</a>
			  <a href="wipro.html">Wipro</a>
			  <a href="acc.html">Accenture</a>
			</div>
	  </div> 
	  
	
	</div>
<hr size=5 noshade></hr>
<br>
	<div id="main-wrapper" style="background-color: #34495e">
	<center><h2>Sign Up Form</h2></center>
		<form action="register.php" method="post" style="background-color: #34495e" onsubmit="chk_usrpass" >
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container" style="background-color: #34495e" >
			<font color="white">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required>
				<label><b>MobileNo</b></label>
				<input type="text" placeholder="MobileNo" name="mobileno" required>
				</font>
				
				<button name="register" style="background-color: #3498db" class="sign_up_btn" type="submit">Sign Up</button>
				
				<a href="index.php"><button type="button" class="back_btn" style="background-color: #f39c12"><< Back to Login</button></a>
			</div>
		</form>
		
		
		
			
		
	</div>
</body>
</html>