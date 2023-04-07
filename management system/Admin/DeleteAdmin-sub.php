<?php 
include("connect.php");
include("functions.php");
include("session.php");
login_check();

$id_admin = mysqli_real_escape_string($conn , $_GET["id"]);
 

	$id1=  (int) $id_admin  ;
 
	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect("AddAdmin.php");
	}
 
	$sql = "DELETE FROM `users`   WHERE id= {$id1}";
	
	
	
	$result = mysqli_query($conn, $sql);
	if ($result && mysqli_affected_rows($conn)>0) {
		
		$_SESSION['msg']=success_delete_msg_admin();
       redirect ("AddAdmin.php");
 
	} else {
	 	 $_SESSION['msg']=fail_delete_msg_admin();
		redirect("AddAdmin.php");
		 }
 

 	 
 
  
 ?>
