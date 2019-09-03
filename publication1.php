<html>
	<head>
		<title>pid</title>
	</head>
	<body>
		<form action="" method="POST" enctype="">
			<input type="text" name="pid"><br>
			<input type="submit" name="submit" value="submit">
		</form>
      <?php
		   
			if(isset($_POST['submit']))
			{
				$pid=$_POST['pid'];
				session_start();
				$_SESSION['newid']=$pid;
				echo "<script>";
				echo "document.location.replace('./new.php')";
				echo "</script>";
			}
		?>
		</body>
</html>