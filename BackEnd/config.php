<?php 	
$localhost = "localhost:3306";
$username = "root";
$password = "";
$dbname = "webnew";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
   //echo "Successfully connected";
}

?>