<?php 
include("connect.php");
include("functions.php");
include("session.php");
login_check();

if(isset($_GET["Ads"])){

    $Ads_id_selected = $_GET["Ads"];

}else{
    $Ads_id_selected =null;
   echo "ارجع و اختر اعلان لعرضه";
    
}
 
	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect("adminArea.php");
	}
$sql = "DELETE FROM `images`  WHERE `id_ads`= {$Ads_id_selected}";
    
$result = mysqli_query($conn, $sql);
	if ($result && mysqli_affected_rows($conn)>0) {
		
		$_SESSION['msg']=success_delete_msg_admin();
 
	} else {
	 	 $_SESSION['msg']=fail_delete_msg_admin();
		 }

	$sql1 = "DELETE FROM `adss`  WHERE `id-ads`= {$Ads_id_selected}";
	

	
	
	$result1 = mysqli_query($conn, $sql1);
	if ($result1 && mysqli_affected_rows($conn)>0) {
		
		$_SESSION['msg']=success_delete_msg_admin();
       redirect ("adminArea.php");
 
	} else {
	 	 $_SESSION['msg']=fail_delete_msg_admin();
		redirect("adminArea.php");
		 }
 

 	 
 
  
 ?>