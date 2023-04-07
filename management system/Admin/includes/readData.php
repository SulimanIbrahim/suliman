<?php
$hostname="localhost";
$username="Suliman";
$password="admin";
$dbname="cms";



$conn = mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn){
    die("Connetion failed:".mysqli_connect_error()."Error NO:".mysqli_connect_errno());
}else{
    //echo"Connected";
}



$query = "SELECT *FROM 'cms' WHERE 1";

$result = mysqli_query($conn,$query);


if (mysqli_num_rows($result)>0){
    
echo "<h1>"."E"




 {
    echo"id:".$row["id"]."- Name:".$row["name"]." "."-department:".$row["department"]." "."salary:".$row["salary"]."<br>";
    
}
}

?>