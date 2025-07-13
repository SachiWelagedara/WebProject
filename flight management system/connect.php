<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db";
$port = "3307";

$conn = new mysqli($host,$user,$pass,$db,$port);

if ($conn->connect_error) {

 echo "failed to connect".$conn->connect_error;
}
//else {
    //echo "connection successful";
//}



?>