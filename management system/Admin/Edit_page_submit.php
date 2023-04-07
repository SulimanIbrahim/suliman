<?php session_start(); ?>
<?php 
include_once("../includes/layout/header.php");
include_once("../includes/functions.php");
include_once("../includes/session.php");
include_once("../includes/connect.php");





if (isset($_POST["submit"])) {
	
	$id = $_SESSION['id'];
	$page =  checkEmptyPage(check_input($_POST["Page"]) ) ;
	$optradio=  (int) $_POST["optradio"]  ;   //visible
	$optradio1=  (int) $_POST["optradio1"]  ;    //status
	$checkbox=  (int) $_POST["checkbox"]  ;    //item_menu_id
	$rank=  (int) $_POST["Rank"]  ;
	$content =   check_content($_POST["Content"])   ;
	$page2 =  mysqli_real_escape_string($conn , $page) ;
	$content =  mysqli_real_escape_string($conn , $content) ;
 
// 		echo    $id .    " id<br> ";
// 		echo    $page2 .    "page2<br>";
// 		echo    $optradio .    "optradio<br>";
// 		echo    $optradio1 .    "optradio1<br>";
// 		echo    $rank .    "rank<br>";
// 		echo    $content .    "content<br>";
// 		echo    $checkbox .    "checkbox<br>";
	
	
	
	
	

	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect('Edit_menu.php');
	}
 
	
	$sql = "UPDATE `pages` SET  `Item_name_id`={$checkbox},`Page_name`='{$page2}',
		 		`Content`='{$content}',`Rank`={$rank},`Visible`={$optradio},`State`={$optradio1}   WHERE id={$id} ";
 
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=success_msg_menu();
       redirect ("manage.content.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_menu();
		redirect("Edit_menu.php");
		 }

}else{
redirect("Edit_menu.php");
}



 