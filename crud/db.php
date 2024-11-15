<?php

$servername="localhost:3377";
$username="root";
$password="";
$dbname="responsiveform";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
   // echo ".";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>
