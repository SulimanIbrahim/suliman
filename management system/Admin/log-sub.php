<?php session_start();?>
<?php
include("../includes/connect.php");
include("../includes/session.php");
include("../includes/functions.php");
     

if (empty($errors)) {
    
if (isset($_POST["submit"])) {
 
$u=$_POST['username'];
$pwd=$_POST['pwd'];

$sql="select * from users where username='$u' and password='$pwd'";
$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if ($result && mysqli_affected_rows($conn)>0) {
        $a="Admin";
        $u="User";
        if($row['JopType']==$a){
$_SESSION['admin_id'] = $row['id'];
		$_SESSION['admin_username'] = $row['username'];          
		$_SESSION['msg']=login_success_msg();
		redirect ("Admin/adminArea.php");
            
            
            
	}elseif($row['JopType']==$u){
        $_SESSION['user_id'] = $row['id'];
		$_SESSION['user_username'] = $row['username'];
 	
		$_SESSION['msg']=login_success_msg();
		redirect ("SUD.php");
	 	
		 }
    }else{ 
        $_SESSION['msg']=login_fail_msg();
		redirect("log.php");}
       
 	} 
else {
	 	 $_SESSION['msg']=login_fail_msg();
		redirect("log.php");
		 }

}else{
redirect("log.php");
}


?>