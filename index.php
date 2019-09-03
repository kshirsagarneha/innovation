<!DOCTYPE html>

<html>
<head>
	<style>
		.container{
		background-color:  #808080; 

		}
	</style>
	<title>First Page</title>
	
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="s.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<img src="./logoanc.jpg" class="pic" width="60%" height="60%">
			</div>
			<div class="col-sm-3">
				<p class="slogan"> "Invent."</i></p> 
			</div>
			<div class="col-sm-4">
				<p class="email">Email:Innonews@gmail.com</p> 
			</div> 
			<div class="col-sm-3">
			    <p class="tel">Telephone: 7709734184.</p>
		    </div>
		</div>
	</div><br><br>

	<!--img src="images/m2.jpg" height="400px;" width="1299px" -->
<div class="slide">
	<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="./img/s2.jpg" height="400px;" width="1299px">
  <img class="mySlides" src="./img/s3.jpg" height="400px;" width="1299px">
  <img class="mySlides" src="./img/s4.jpg" height="400px;" width="1299px">
  <img class="mySlides" src="./img/s5.jpg" height="400px;" width="1299px">
  <img class="mySlides" src="./img/s5.jpg" height="400px;" width="1299px">
  
  
</div>
</div>
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
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>


	 <center><h1> News Of Innovation...</h1></center>
    <div class = "container">
     <div class="log">

<?php
	include 'conn.php';
	include 'home.php';

	$select=mysqli_query($conn,"SELECT * FROM neha_publish");
	$rows = mysqli_num_rows($select);

	if($rows){
		$i=0;

		while($news=mysqli_fetch_assoc($select))
		{

		}

	}
?>

</body>
</html>