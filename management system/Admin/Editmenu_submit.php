<?php session_start(); ?>
<?php 
include_once("../includes/layout/header.php");
include_once("../includes/functions.php");
include_once("../includes/session.php");
include_once("../includes/connect.php");




    
if (isset($_POST["submit"])) {
    
                $id=$_SESSION['id'];
                $id1=(int)$id;
                $menu =  checkEmpty(check_input($_POST["menu"]) ) ;
	            $menu =   check_length($_POST["menu"] , 12, 4)   ;
                $optradio= (int) $_POST["optradio"]  ;
                $Rank=  (int) $_POST["Rank"]  ;
                $menu2 =  mysqli_real_escape_string($conn , $menu) ;

    

                        $sql = " UPDATE `website_navbar` SET `Item_name`='{$menu2}',`Rank`='{$Rank}',`Visible`='{$optradio}' WHERE id={$id1} ";
                      if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
                                  $_SESSION['msg']=success_Update_msg_menu();
                         reback("Edit_menu.php");
                          } else {
	 	 $_SESSION['msg']=Fail_msg_menu();
		redirect("Edit_menu.php");
		 }
                      
    
    
}else {
    echo "no";
}
function reback($url){
header ("Location:".$url);
                              exit();}

?>

 