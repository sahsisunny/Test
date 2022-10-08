<?php
/*
Author: 	Sunny Sahsi
Date: 	2022-10-07
Purpose: 	Database connection
Path: 	common\db_connect.php
*/

if (isset($_POST['name'])) {
     $server = "localhost";
     $username = "root";
     $password = "";

     $conn = mysqli_connect($server, $username, $password);

     if (!$conn) {
          die("Connection Failed" . mysqli_connect_error());
     }
  
}
