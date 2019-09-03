<html>
   <head>
   	  <title>home page</title>
   	  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   	 <style>
   	  	 	.div1{
   	  	  		background-color:white;
   	  	  		color:black;
   	  	  		margin-top: 12px;
   	  	  		text-align: center;
   	  	  		top: 50%;
			    bottom: 50%;
			    transform: translate(30%,-1%);
			    top: 200px;

   	  	  	}
             form{
             border-style: solid;
            width: 40%;
            height:70%;
            margin-left:3%;
            background-image: linear-gradient(LightBlue);
            margin-top:5%;
         }
         input[type="text"],input[type="password"],input[type="file"],input[type="textarea"]{
            width:120%;
            border-bottom:1px solid white;
            margin-left: 20%;
         }
         textarea{
             border-bottom:1px solid white;
            margin-left: 20%;
         }
         input[type="submit"]{
            width:120%;
            height: 45px;
            background-color: lime;
            margin-right:10%;
           }
         label{
            padding-left: 30%;
         }
         ul{
          list-style-type: none;
          font-size: 20px;
         }
         button{
          width: 30%;
         }
          li{
            float: left;
            padding: 20px 20px;
            border:1px solid black;
            background-color: plum;
            text-align: center;
             color:white;
             width: 25%;
             height: 10%;
            }

         
   	  </style>
   </head>
   <body>
   		<ul>
            <li><a href="home.php">HOME</a></li>
        <li><a href="publish.php">PUBLISH</a></li>
        <li><a href="publication1.php">MANAGE PUBLICATION</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
         <br>

<?php
         session_start();
         if(isset($_SESSION['newid']));
         {
         	require 'conn.php';
          $pid=$_SESSION['newid'];
          echo $pid;
          $accept=mysqli_query($conn,"SELECT * FROM neha_publish WHERE id='$pid'");
          $number=mysqli_num_rows($accept);
           if($number)
           {
             	 while($row=mysqli_fetch_assoc($accept))
             	 {
                //$pid1=$row['pid'];
             	 	$title=$row['title'];
             	 	$comment=$row['content'];
             	 	$datep=$row['datep'];
             	 	$weblink=$row['link'];
             	 	$image=$row['image'];


             	 	

?>

 <div class="div1">
                  <form action="" method="POST" enctype="multipart/form-data">
                 <br>
                 <h1 style="text-align:center;">Make a post</h1>
                 <input type="hidden" name="id" value="<?php echo $pid;?>"><br>
                 <div class="row">
                 <div class="row">
                    <div class="col-md-2">
                       <label>Comment</label>
                    </div>
                    <div class="col-md-7">
                      <?php
                       //echo"<input type='textarea' name='comment' height='20%' value='$comment'>";
                      echo "<textarea name='comment' value='$comment'>".$comment."</textarea>";
                       ?>
                    </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-md-2">
                       <label>image</label>
                    </div>
                    <div class="col-md-7">
                      <input type='file' name='image'>
                    </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-md-2">
                       <label>Website link</label>
                    </div>
                    <div class="col-md-7">
                      <?php
                       echo"<input type='text' name='weblink' value='$weblink'>";
                       ?>
                    </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-md-2">
                       <label>email</label>
                    </div>
                    <div class="col-md-7">
                     <?php
                      echo"<input type='date' name='datep' value='$datep'>";
                       ?>
                    </div>
                 </div>
                 <br> 
                 <div class="row"> 
                   <div class="col-md-1">    
                  
                  </div>  
                  <div class="col-md-4">        
                     <input type="submit" name="update" value="update">
                  </div>
                   <div class="col-md-1">        
                     
                  </div>  
                  <div class="col-md-4">
                     <input type="submit" name="delete" value="delete">
                  </div>    
                 </div>        
              </form>
            </div>
            
              <?php

              if(isset($_POST['update']))
                {
                  echo "hellow";
                  $id=$_POST['id'];
                  $title1=$_POST['title'];
                  $comment1=$_POST['comment'];
                  $weblink1=$_POST['weblink'];
                  $datep=$_POST['datep'];

                  $image1=$_FILES['image']['tmp_name'];
                  if($image1){
                    $binary1=fread(fopen($image1,"r"),filesize($image1));
                    $picture1=base64_encode($binary1);
                  
                   echo $picture1;

                    $update=mysqli_query($conn,"UPDATE neha_publish SET title='$title1',content='$comment1',image='$picture1',link='$weblink1',datep='$datep' WHERE id='$id'");
                    if($update)
                    {
                      echo"<script>";
                      echo"document.location.replace('./index.php')";
                      echo"</script>";
                    }
                    else
                    {
                      echo $conn->error;
                    }
                  }
                }//isset update
                if(isset($_POST['delete']))
                {
                  $id=$_POST['id'];
                  $delete=mysqli_query($conn,"DELETE FROM neha_publish WHERE id='$id'");
                      if($delete)
                      {
                        echo"<script>";
                        echo"document.location.replace('./index.php')";
                        echo"</script>";
                      }
                      else
                      {
                        echo $conn->error;
                      }
                }
              
              
           	 }//while
           }//if
        
           else
           {
           	 echo "not post id like this";
           }
          }

   		?>
      
   </body>
</html>
pid1.php
Displaying pid1.php.