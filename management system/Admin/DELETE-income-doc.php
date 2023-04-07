<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");

if(isset($_GET["income"])){

    $income_id_selected = $_GET["income"];

}else{
    $income_id_selected =null;
   echo "ارجع و اختر ايراد لحدفه ";
    
}
 
	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect("incomes-doc.php");
	}
$sql = "DELETE FROM `doctor-income`  WHERE `id`= {$income_id_selected}";
    
$result = mysqli_query($conn, $sql);
	if ($result && mysqli_affected_rows($conn)>0) {
		
		$_SESSION['msg']=success_delete_msg_admin();
        redirect ("incomes-doc.php");
 
	} else {
	 	 $_SESSION['msg']=fail_delete_msg_admin();
        redirect ("incomes-doc.php");
    
		 }

	
 

 	 
 
  
 ?>