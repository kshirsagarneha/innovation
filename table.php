<?php
$servername = "localhost";
$username = "ladiesin_dab2";
$password = "dab2@2019";
$dbname = "ladiesin_batch2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql1 = "CREATE TABLE neha_admin(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(255),
email VARCHAR(255),
password VARCHAR(255),
image LONGBLOB,
datev date
)";

$sql2 = "CREATE TABLE neha_publish(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(255),
image VARCHAR(255),
password VARCHAR(255),
image LONGBLOB,
content text 
link VARCHAR(255),
datep date
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>