<?php
$conn=new mysqli('localhost','root','','news');
if ($conn->connect_errno) {
	die("Sorry,Unable to connect.");
}

?>