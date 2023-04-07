<?php session_start()
?>
<?php 
     
    include("includes/layout/header.php");
    include_once("includes/functions.php");
    include_once("includes/session.php");
    include_once("includes/connect.php");


if(isset($_POST['submit'])){
    $name= $_POST["name-emp"];   //full name of employee
	$birth= $_POST["birthday"];   //birthday
    $salary= $_POST["salary"];   //Salary or employee rate 
	$PhoneNum= $_POST["Phone-num"];   //phone number
    $Address= $_POST["address"];   // location
	$jopType= $_POST["jop-type"];   //jop
    $idEmp= $_POST["Emp-id"];   //id not primary key of employee
	
   
         
$sql= "INSERT INTO `employees`(`full-name`, `birthday`, `salary`, `Phone-num`, `address`, `jop-type`, `id-Emp`) VALUES ('$name','$birth','$salary','$PhoneNum','$Address','$jopType',$idEmp)";
        
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=success_msg_AddEmp();
       redirect ("AddEmp.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_AddEmp();
		redirect("AddEmp.php");
		 }

}else{
redirect("AddEmp.php");
}


?>