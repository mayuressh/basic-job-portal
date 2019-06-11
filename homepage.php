<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<style>
#main-wrapper{
	border-radius : 10px;
	background-color: aqua;
	border: 3px solid #c0392b;
	width: 600px;
	
	
}
.inner_container{
	width:450px;
	margin:0 auto;
}
.login_button {
    background-color: #4CAF50;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 100%;
	font-size:18px;
	font-weight: bold;
}
.register_btn{
	background-color: #3498db;
    color: white;
	margin-top:10px;
	margin-bottom:15px;
	padding:10px;
    width: 100%;
	font-size:16px;
	font-weight: bold;
	
}
.back_btn{
	margin-top:10px;
	color: white;
	margin-bottom:15px;
    padding: 10px;
    background-color: #e67e22;
}
.logout_button{
	background-color: #c0392b;
    color: white;
	margin-top:10px;
    padding:10px;
    width: 100%;
	font-size:18px;
	font-weight: bold;
}

.sign_up_btn {
	background-color: #3498db;
    color: white;
	 padding:10px;
	margin-top:10px;
	margin-bottom:10px;
    width: 100%;
	font-size:16px;	font-weight: bold;
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

</style>
</head>
<body bgcolor="teal">
	<div id="main-wrapper">
		
		<center><h1>Welcome <?php echo $_SESSION['username']; ?></h1></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<center><div>
			<p style="color:grey;font-family:cooper;font-size:15px;">
			<h3>Jobs List</h3>
			By clicking the “Jobs” item in the top navigation menu you will be 
			presented with a list of jobs.Normal users will see only their own jobs,
			while administrators can see everyones jobs.	
			An icon in the first column indicates the state of the job
			(queued, running, failed, success).
			The second column gives the job name.
			
			<h3>View</h3>

			When you start a job you are automatically redirected to the job view page. 
			You can also access this page through the “Jobs” menu item in the navigation
			bar at the top of the page.
			The job view page shows you the state of the job,
			job details like which script it runs and when it was started,
			the execution log as well as access to a detailed log.
			
			<h3>Account settings</h3>

			In the account settings you can change your name,
			email and password.</p></div>
			
	
			<div class="inner_container">
				<a href="http://localhost:8080/LoginPage/index.php" target="_top"><button class="logout_button" type="submit" >Log Out</button></a>	
			</div>
		</form>
	</div>
	<div style=" position:absolute;left:750px;top:10px; border:5px solid ;height:740px"></div>
	<div style="position:absolute;left:900px;top:20px;">
	<h2>Notification</h2>
<h3 >Applied Companies</h3>
<img src="mahindra.jpg" width="30%" height="30%"><h3>MAHINDRA</h3><br><br>
<img src="ubisoft.jpg" width="30%" height="30%"><h3>UBISOFT</h3><br><br>
<img src="ongc.JPG" width="30%" height="30%"><h3>ONGC</h3><br><br></div>
</body>
</html>