<?php 
include("connect.php");
include("functions.php");
include("session.php");
login_check();
if (isset($_POST["submit"])) {
	
	$id = $_SESSION['id'];
	$n = $_POST["CN"]  ;
	$optradio=   $_POST["optradio"]  ;   //visible
#
 
// 		echo    $id .    " id<br> ";
// 		echo    $page2 .    "page2<br>";
// 		echo    $optradio .    "optradio<br>";
// 		echo    $optradio1 .    "optradio1<br>";
// 		echo    $rank .    "rank<br>";
// 		echo    $content .    "content<br>";
// 		echo    $checkbox .    "checkbox<br>";
	
	
	
	
	

	if (!empty($errors)) {
		
		 $_SESSION['errors']=$errors  ; 
		 redirect('AddCat.php');
	}
 
	
	$sql = "UPDATE `cate` SET  `catName`='{$n}',`visible`={$optradio} WHERE id={$id} ";
 
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=success_msg_menu();
       redirect ("AddCat.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_menu();
		redirect("AddCat.php");
		 }

}else{
redirect("AddCat.php");
}
