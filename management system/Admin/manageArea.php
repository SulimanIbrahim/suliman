<?php 
include("headerA.php");



if(isset($_POST['submit'])){
    

	$Catname= $_POST["CN"];   //category name
	$optradio= $_POST["optradio"];   //visible
   
         
$sql= "INSERT INTO `cate` (`catName` , `visible`) VALUES ('{$Catname}',{$optradio})";
        
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


?>