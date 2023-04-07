<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="almeer";



$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    die("Connetion failed:".mysqli_connect_error()."Error NO:".mysqli_connect_errno());
}else{
   // echo"Connected";
}   

?>