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

/*  $conn=mysql_connect("localhost", "root", "","ecommerce") or die("problem with connection...");
mysql_select_db("ecommerce"); 

// Database connection settings
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ecommerce';

//create Connection
//$conn = new mysqli($servername,$username,$password,$dbname);
$conn=mysql_connect($servername,$username,$password,$dbname) or die("problem with connection...");
//check Connection
 if ($conn->connect_error) {
		
  die("Connection failed: " .$conn->connect_error);
} */
?>