<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="prac";

$con=mysqli_connect("localhost","root","","prac");
if($con){
  echo "db connected";
}
else{
  echo "db not connected";
}

 ?>
