<?php
require 'dbconfig.php';
date_default_timezone_set("Asia/Kolkata");
$cur_date = date("m/d/Y");
$cur_date = substr($cur_date,1);

$hour = (date("H"));
$hour = substr($hour,1);

$SL ;
if(($hour >= 6) && ($hour < 18)){
    $sql_M = "SELECT MorningSL FROM Roster WHERE Date='$cur_date'";
    $result = $conn->query($sql_M);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $SL = $row["MorningSL"];
       echo $SL;
    }
     }
     else{
        echo "No results";
    }  }


//Night
elseif ((($hour >= 18) && ($hour <= 24)) || (($hour >= 0) && ($hour <= 5))) {
    $sql_N = "SELECT LateSL FROM Roster WHERE Date='$cur_date'";
    $result = $conn->query($sql_N);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $SL = $row["LateSL"];
      echo $SL;
    }
     }
     else{
        echo "No results";
    }    
}
$SL_phno='';
$sql_fetch_SL_ph = "SELECT Id FROM Employee_info WHERE Name = '$SL'";
$result_SL_ph = $conn->query($sql_fetch_SL_ph);
if ($result_SL_ph->num_rows > 0) {
    // output data of each row
    while($row = $result_SL_ph->fetch_assoc()) {
      $SL_phno = $row["Id"];
      
    }
}
//echo $SL_phno;
//Update SL parameeter with latest
//-----------------LOCK----------------
// $sql_Update_SL_phno = "UPDATE Employee_info SET Id = '$SL_phno' WHERE Name='Active'";
// $conn->query($sql_Update_SL_phno);

