<?php


$errors = array(); 

function redirect($url) {
	header("Location: ". $url);
	exit();
}

 

function login_check() {
	if (!isset($_SESSION['admin_id'])) {
		redirect('log.php');
	}}

function login_check_user() {
	if (!isset($_SESSION['user_id'])) {
		redirect('log.php');
	}}

?>
<?php
function success_msg_Ads() {
	//echo "New record created successfully";
	
 
		$smsg = "<div class='alert alert-success alert-dismissible'>  ";
		$smsg .=	"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> ";
		$smsg .=	"<strong>نجاح !</strong> تمت إضاقة الإعلان بنجاح - في إنتظار موافقة المسؤول. " ;
		$smsg .=	"</div> ";
    

return $smsg;}

function error_msg_Ads() {

    //		$emsg= "Error: " . $sql . "<br>" . mysqli_error($conn);
            $emsg  =  "	<div class='alert alert-danger alert-dismissible'>      " ;
            $emsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
            $emsg .=   "		<strong>فشل!</strong>  "  ;// . mysqli_error($conn). ".  " ;
            $emsg .=   "		</div>    " ;
            return $emsg;}
function error_msg_IMG() {

    //		$emsg= "Error: " . $sql . "<br>" . mysqli_error($conn);
            $emsg  =  "	<div class='alert alert-danger alert-dismissible'>      " ;
            $emsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
            $emsg .=   "		<strong>أضف صوراُ لعقارك!</strong>  "  ;// . mysqli_error($conn). ".  " ;
            $emsg .=   "		</div>    " ;
            return $emsg;}
function success_msg_AddEmp() {
	//echo "New record created successfully";
	
 
		$smsg = "<div class='alert alert-success alert-dismissible'>  ";
		$smsg .=	"<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> ";
		$smsg .=	"<strong>نجاح</strong> تمت إضافة الموظف . " ;
		$smsg .=	"</div> ";
    

return $smsg;}

 
function error_msg_AddEmp() {
	
//		$emsg= "Error: " . $sql . "<br>" . mysqli_error($conn);
		$emsg  =  "	<div class='alert alert-danger alert-dismissible'>      " ;
		$emsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
		$emsg .=   "		<strong>فشل!</strong>"; // . " " . //mysqli_error($conn). ".  " ;
		$emsg .=   "		</div>    " ;
		return $emsg;}
				
function Fail_msg_menu() {
	
//		$emsg= "Error: " . $sql . "<br>" . mysqli_error($conn);
		$emsg  =  "	<div class='alert alert-danger alert-dismissible'>      " ;
		$emsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
//		$emsg .=   "		<strong>Success!</strong>  "   . " " . mysqli_error($conn). ".  " ;
		$emsg .=   "		</div>    " ;
		return $emsg;}
				
function check_input_main($data)
		{
			$data = str_replace("_"," ",$data);
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			$data = ucfirst($data);
			return $data;
		}
function check_input($data)
		{
			$data = str_replace("_"," ",$data);
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			 
			return $data;
		}
function check_content($data)
		{
 
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
		 
			return $data;
		}
	
function check_length($data,$max,$min){
			global $errors;
			if (strlen($data) < $min)
			{
		
				$errors['too short'] ="Input is too short, minimum is 4 characters (12 max).";
			}
			elseif(strlen($data) > $max)
			{
				$errors['too long'] ="الوصف طويل جداً يجب ان يكون اقل من 100 حرف";
			}else {
				return $data;
			}
		}
function check_length_loc($data,$max,$min){
			global $errors;
			if (strlen($data) < $min)
			{
		
				$errors['too short'] ="Input is too short, minimum is 4 characters (12 max).";
			}
			elseif(strlen($data) > $max)
			{
				$errors['too long'] ="حقل الموقع طويل جداً يجب ان يكون اقل من 30 حرف";
			}else {
				return $data;
			}
		}
	
function checkEmpty($data) {
			global $errors;
		
			$data=trim($data);
		
			if(isset($data) === true && $data === '') {
		
				$errors['empty'] ="empty field ! .";
		
			}
			 
		}
function checkEmptyPage($data) {
			global $errors;
		
		//	$data = trim($data);
		
			if(isset($data) === true && $data === '') {
		
				$errors['empty'] ="empty field ! .";
			 
		
			}
			 return $data;
		}
				
function error_function( $errors = array()) {
 
		if (!empty($errors)) {
		 
		 
		
			foreach ($errors as $key => $value) {
				
			 
				
				echo "	<div class='alert alert-warning alert-dismissible'>      " ;
				echo     "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
				echo   "		<strong>Wrong !</strong>  => {$value} .  " ;
				echo   "		</div>    " ;
 
			 
 
		}
	 
			}
			 
		}
			
function success_update_msg_menu() {
			// echo "New record created successfully";
		
			$smsg= "	<div class='alert alert-success alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Success!</strong> Record updated successfully.  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}		
function fail_update_msg_menu() {
			// echo "New record created successfully";
		
			$smsg= "	<div class='alert alert-warning alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Sorry!</strong> Sorry record not updated .  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}		

function success_delete_msg_menu() {
			 
		
			$smsg= "	<div class='alert alert-success alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Success!</strong> Record deleted successfully.  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
function fail_delete_msg_menu() {
		 
		
			$smsg= "	<div class='alert alert-warning alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Sorry!</strong>  You can not delete menu contain pages .  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}

		
function success_msg_admin() {
			 
		
			$smsg= "	<div class='alert alert-success alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Success!</strong> Admin created successfully.  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
function fail_msg_admin() {
		 
		
			$smsg= "	<div class='alert alert-warning alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Sorry!</strong>  You can not create admin .  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}


		function success_delete_msg_admin() {
		
		
			$smsg= "	<div class='alert alert-success alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Success!</strong> Admin deleted successfully.  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
		function fail_delete_msg_admin() {
				
		
			$smsg= "	<div class='alert alert-warning alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Sorry!</strong>  You can not delete this admin .  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
		

		function update_success_msg_admin() {
		
		
			$smsg= "	<div class='alert alert-success alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Success!</strong> Admin updated successfully.  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
		function update_fail_msg_admin() {
				
		
			$smsg= "	<div class='alert alert-warning alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Sorry!</strong>  You can not update admin .  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
	
		
		

		function login_success_msg() {
		
		
			$smsg= "	<div class='alert alert-success alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Success!</strong> Welcome  " . $_SESSION['admin_username'].
                $_SESSION['user_username'] . "  !.  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
		function login_fail_msg() {
		
		
			$smsg= "	<div class='alert alert-warning alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>Sorry!</strong>  Check your username/password .  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
function SignUp_fail_msg() {
		
		
			$smsg= "	<div class='alert alert-warning alert-dismissible'>      " ;
			$smsg .=   "		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>   " ;
			$smsg .=   "		<strong>نعتذر!</strong>  تأكيد كلمة المرور غير متطابقة .  " ;
			$smsg .=   "		</div>    " ;
		
			return $smsg;
		
		
		}
		
?>