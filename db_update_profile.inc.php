<?php
/* Database connection settings */
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecommerce';

//create Connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check Connection
if ($conn->connect_error) {
		
  die("Connection failed: " .$conn->connect_error);
}


/* mysql_connect("localhost", "root", "") or die("problem with connection...");
mysql_select_db("ecommerce"); */
?>