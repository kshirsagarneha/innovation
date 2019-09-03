<!DOCTYPE html>
<html>
<head>
	<title> News </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/gallery.css">
<link rel="stylesheet" href="css/pagination.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.gallery{
		display: grid;
		grid-template-columns: 1fr 2fr;
	}
</style>
<body>
<?php
	include 'conn.php';

		$result=mysqli_query($conn,"SELECT * FROM neha_publish");
		$rows=mysqli_num_rows($result);
	if($rows)
	{
		$i=0;
		while ($news=mysqli_fetch_assoc($result)) {
			$id=$news['id'];
			$title=$news['title'];
			$image=$news['image'];
			$content=$news['content'];
			$content = substr($content,0,30).'...';
			$link=$news['link'];

			echo' <div class="gallery">';
			echo' <div class="gallery-con1">';
   			echo "<img src= data:image/jpg;base64,$image width='50%' height='40%'>";
   			echo '</div>';
   			echo' <div class="gallery-con2">';
   			echo' <div class="desc"><h3>'.$title.'</h3></div>';
 			echo' <div class="desc">'.$content.'</div>';
 			echo"<br>";
 			echo'<div class="desc"><h3><a href='.$link.'>More Details</a></h3></div>';
			echo '</div>';
			echo '</div>';
		}
		
		}else{
              echo "<center>";
              echo "<font color = 'red'>";
              echo "NO POST YET !";
              echo "</font>";
              echo "</center>";
          }
	

?>

</body>
</html>