<?php
require 'dbconfig.php';
$da_name = $_GET['da_name'];
//echo $da_name;
if($da_name != ""){
    $sql = "SELECT Id FROM Employee_info WHERE Name= '$da_name'";
    $result = $conn->query($sql);
    $phno;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $phno =  $row["Id"];
      
    }
    $sql1 = "UPDATE Employee_info SET Id= $phno WHERE Name ='Active'";
      $conn->query($sql1);
  } 
//  $myarr = array("Name"=>$phno);
//   echo json_encode($myarr);
//   $conn->close();
 

//  $Response[] = array("Message"=> "hello");
//  echo json_encode($Response);
}



?>