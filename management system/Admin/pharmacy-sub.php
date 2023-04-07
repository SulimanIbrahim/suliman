<?php session_start()
?>
<?php 
    include("includes/layout/header.php");
    include_once("includes/functions.php");
    include_once("includes/session.php");
    include_once("includes/connect.php");


if(isset($_POST['submit'])){
    
    $Income= $_POST["income"];   //id of full name  employee
	$discountPercent= $_POST["discount"];   //income value
    $Date= $_POST["date"];   //entry date
    
    
                      $IncomeNew = ($Income * ((100-$discountPercent)/100));
                      
                    
$sql="INSERT INTO `pharmacy-income`(`income-value`, `date`) VALUES ($IncomeNew ,'$Date')";
        
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=success_msg_AddEmp();
       redirect ("pharmacy.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_AddEmp();
		redirect("pharmacy.php");
		 }
                       
}else{
redirect("pharmacy.php");
}

                    
?>