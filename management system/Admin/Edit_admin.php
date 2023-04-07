<?php session_start()
?>
<?php 
     
    
     include("../includes/layout/header.php");
    include_once("../includes/functions.php");
include_once("../includes/session.php");
     include_once("../includes/connect.php");


if (isset($_POST["submit"])) {
	
    $id=$_SESSION['id'];
    
	$first =  mysqli_real_escape_string($conn,checkEmptyPage(check_input($_POST["first"]) ))  ;
	$last =  mysqli_real_escape_string($conn,checkEmptyPage(check_input($_POST["last"]) ))  ;
	$username =  mysqli_real_escape_string($conn,checkEmptyPage(check_input_admin($_POST["username"]) ))  ;
	$email =  mysqli_real_escape_string($conn,checkEmptyPage(check_input($_POST["email"]) ))  ;

 

	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect('admins_manage.php');
	} 
}
   
   $sql= " UPDATE `admis` SET `username`='{$username}',`frist_name`='{$first}',`last_name`='{$last}',`Email`='{$email}'  WHERE `id`= {$id}";


                            if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
                                  $_SESSION['msg']=success_msg_menu();
                         reback("admins_manage.php");
                          } else {
	 	 $_SESSION['msg']=error_msg_menu();
		redirect("admins_manage.php");
		 }
                      
    
function reback($url){
header ("Location:".$url);
                              exit();}

   
   ?>