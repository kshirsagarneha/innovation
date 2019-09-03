<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

		body
		{
			margin: 0;
			background: url(./);
			background-size: cover;

		}
		.nav{
				width: 100%;
					background-color: maroon;
					height: 60px;
					margin-top: 10px;
					opacity: 0.6;
					padding-top: 3px;
					padding-bottom: 3px;


		}
		ul
		{
			list-style: none;
			padding: 0;
			margin: 0;
			position: absolute;

		}

		li
		{
			float: left;
			margin-top: 10px;
			display: inline-block; 	 
		}

		a
		{
			color: #fff;
			width: 150px;
			display: block;
			text-decoration: none;
			font-size: 19px;
			text-align: center;
			padding: 5px;
			border-radius: 10px;
			font-family: century Gothic;
			font-weight: bold;

		}
		a:hover
		{
			background: #aaa;
			transition: 0.8s;

		}
		.right-dis img{
			width: 70px;
			height: 70px;
			border-radius: 200px;
			margin-left: 450px;
			margin-top: -14px;
		}


	</style>
</head>
<body>
<?php
	//Check if there a session created
	session_start();
	if(isset($_SESSION['userid'])){
		
		$userid=$_SESSION['userid'];
		echo $userid;
		include'conn.php';
//if session created get user name and profile image
	/*$select=mysqli_query($conn,"SELECT * FROM admin WHERE userid='$userid'");
		$number=mysqli_num_rows($select);
		$userinfo=$select->fetch_assoc($select);
		$username=$userinfo['username'];
		$image=$userinfo['image'];
		
		/*echo "<img src= data:image/jpg;base64,$image width='25%' height='25%'>";
		echo "<br>";
		echo "<center><h3>Hello ".$username."</h3></center>";*/


	}
	else{
		//if no session created
		echo "<script language='Javascript'>";
		 		//echo "document.location.replace('./login.php')";
		 		echo "</script>";
	}
	?>
<div class="nav">
	<ul>
<li><a href="publish.php">Publish</a></li> | <li> <a href="manage.php">Manage Publication</a></li> | <li> <a href="logout.php">Logout</a></li> <li class="right-dis">
</ul>
</div>
</body>
</html>