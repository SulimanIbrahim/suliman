<?php 
include("connect.php");
include("functions.php");
include("session.php");
login_check();

$id_menu = mysqli_real_escape_string($conn , $_GET["id"]);
 

	$id1=  (int) $id_menu  ;
 
	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect("AddCat.php");
	}
 
	$sql = "DELETE FROM `cate`   WHERE id= {$id1}";
	
	
	
	$result = mysqli_query($conn, $sql);
	if ($result && mysqli_affected_rows($conn)>0) {
		
		$_SESSION['msg']=success_delete_msg_admin();
       redirect ("AddCat.php");
 
	} else {
	 	 $_SESSION['msg']=fail_delete_msg_admin();
		redirect("AddCat.php");
		 }
 

 	 
 
  
 ?>
