<?php 
include("connect.php");
include("functions.php");
include("session.php");
login_check();

if (isset($_POST["submit"])) {
	
    ////////////////////////////
// var name
    //AN
//EmailA
//pass1
//PhoneNum
    ///////////////////////
    
    
	$AdminN= $_POST["AN"];   // 
	$emailA= $_POST["EmailA"];   //
	$pass1= $_POST["pass1"];   //
	$pass2= $_POST["pass2"];   //
	$JopType= $_POST["TypeJob"];   //
	$NumP= $_POST["PhoneNum"];   //
   
    
    
    /////////////////////////
    // database name
   // username
//E-mail
//password
//PhoneNUM
//JopType
       /////////////////////////  update_success_msg_admin()
 
$sql= "INSERT INTO `users` (`username` , `E-mail`, `password`, `PhoneNUM`,`JopType`) VALUES ('{$AdminN}','{$emailA}','{$pass1}','{$NumP}','{$JopType}')";
        
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=success_msg_admin();
       redirect ("AddAdmin.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_menu();
		redirect("AddAdmin.php");
		 }

}else{
redirect("AddAdmin.php");
}


?>