<?php
//Define your database name here.
$HostName = "sql212.epizy.com";
 
//Define your database name here.
$DatabaseName = "epiz_32431871_Stepahead";
 
//Define your database username here.
$HostUser = "epiz_32431871";
 
//Define your database password here.
$HostPass = "zilJDrlSjGPL";

$conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
else{
    echo "Connected";
}


?>
