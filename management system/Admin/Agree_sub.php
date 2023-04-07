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


$agree=1;
	
 
$sql= "UPDATE `adss` SET visible = $agree WHERE `id-ads` = '$Ads_id_selected'";
        
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=update_success_msg_admin();
          redirect ("adminArea.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_menu();
		redirect("adminArea.php");
		 }



?>