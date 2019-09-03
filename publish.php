<!DOCTYPE html>
<html>
<head>
	<style>
		#example1{
			border: 2px solid black;
           box-sizing: content-box;  
           width: 300px;
           height: 300px;
           padding: 30px;  
           text-align: center;
		}
		.login-box
		{
			top: 50%;
			bottom: 50%;
			transform: translate(30%,-1%);
			top: 200px;
		}
	</style>

	
	<title>Publish </title>
</head>
<body>

	<?php
	include 'navbar.php';
	?>

	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6">
	
	<form method="POST" action="" enctype="multipart/form-data">
		<br><br>
		<div id="example1">
			<center><h1>Make a news</h1></center>
			<div class="from-group">
		<center><b>
		<label>Title</label>

		<input type="text" name="title"placeholder="Title" class="form-control" required /><br><br>
		
		<label>Image</label>
		<input type="file" name="image"><br><br>
        <label>Content</label>
		<textarea name="content" placeholder="Contents" class="form-control" required /></textarea><br><br>

		<label>link</label>

		<input type="url" name="link"placeholder="Link" class="form-control" required /><br><br>
		<div class="btn">
		<input type="submit" name="submit" value="Post"></div></b></center>
</div>
	</form>
	</div>
</div>	
</div>
</div>
</div>

	<?php


	include 'conn.php';
	
	if(isset ($_POST['submit'])){

		//$userid=$_SESSION['userid'];
		$title=addslashes($_POST['title']);
		$content=addslashes($_POST['content']);
		$link=$_POST['link'];
	    $datep= date('y-m-d');
	   
		
		$imagepath=$_FILES['image']['tmp_name'];
		 /*echo "title : ".$title;
		 echo "<br>";
		 echo "content : ".$content;
		 echo "<br>";
		 echo "datep : ".$datep;
		 echo "<br>";
		 echo "image : ".$imagepath;
		 echo "<br>";*/
		 if($imagepath){

		 	$binary =fread(fopen($imagepath, 'r'),filesize($imagepath));
		 	$picture =base64_encode($binary);

		 	
		 	
		 	$insert=mysqli_query($conn,"INSERT INTO neha_publish(title, image, content,link, datep) VALUES ('$title','$picture','$content','$link','$datep')");
		 	if($insert)
		 	{
		 		echo"good";
		 		echo "<script language='Javascript'>";
		 		echo "document.location.replace('./index.php')";
		 		echo "</script>";


		 	}
		 	else{
		 		echo ("error".mysqli_error($conn));
		 	}

		 
		 

}

	
}
	?>

</body>
</html>