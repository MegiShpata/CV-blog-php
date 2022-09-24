<?php 

  $dbhost = "127.0.0.1:3306";
  $dbroot = "root";
  $dbpass = "";
  $db = "project";


  $conn = new mysqli( $dbhost, $dbroot, $dbpass, $db );
    
  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
  }
    // echo "Connected successfully";

?>