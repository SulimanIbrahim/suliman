<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");

if(isset($_GET["id"])){

    $employee_id_selected = $_GET["id"];

}else{
    $employee_id_selected =null;
   $_SESSION['msg']=fail_delete_msg_admin();
        redirect ("Employees.php");
    
}
 
	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect("Employees.php");
	}
$sql = "DELETE FROM `employees`  WHERE `id`= {$employee_id_selected}";
    
$result = mysqli_query($conn, $sql);
	if ($result && mysqli_affected_rows($conn)>0) {
		
		$_SESSION['msg']=success_delete_msg_admin();
        redirect ("Employees.php");
 
	} else {
	 	 $_SESSION['msg']=fail_delete_msg_admin();
        redirect ("Employees.php");
    
		 }

	
 

 	 
 
  
 ?>