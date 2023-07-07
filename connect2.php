<?php

function OpenCon()
 {
    $conn = new mysqli('localhost','root','','website2');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed  : ". $conn->connect_error);
    }
 $db = "website2";

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>