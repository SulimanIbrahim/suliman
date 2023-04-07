<?php 
include("connect.php");
include("functions.php");
include("session.php");
login_check();

if (isset($_POST["submit"])) {
	
	$id = $_SESSION['id'];
    ////////////////////////////
// var name
    //AN
//EmailA
//pass1
//PhoneNum
    ///////////////////////
    
    
	$AdminN= $_POST["AN"];   //category name
	$emailA= $_POST["EmailA"];   //visible
	$pass1= $_POST["pass1"];   //visible
	$pass2= $_POST["pass2"];   //visible
	$NumP= $_POST["PhoneNum"];   //visible
   
    
    
    /////////////////////////
    // database name
   // username
//E-mail
//password
//PhoneNUM
//JopType
       /////////////////////////  update_success_msg_admin()
 
$sql= "UPDATE `users` SET  `username`='{$AdminN}',`E-mail`='{$emailA}' ,`password`='{$pass1}',`PhoneNUM`={$NumP} WHERE id={$id} ";
        
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=update_success_msg_admin();
       redirect ("AddAdmin.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_menu();
		redirect("AddAdmin.php");
		 }

}else{
redirect("AddAdmin.php");
}


?>