<?php session_start()
?>
<?php 
    include("includes/layout/header.php");
    include_once("includes/functions.php");
    include_once("includes/session.php");
    include_once("includes/connect.php");


if(isset($_POST['submit'])){
    
    $id_name= $_POST["name-id"];   //id of full name  employee
	$Income= $_POST["income"];   //income value
    $Date= $_POST["date"];   //entry date
    
    
    
    
                $query = "SELECT * FROM `employees`WHERE `id`=".$id_name;
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) >0) {
                    if($row = mysqli_fetch_assoc($result)) {
                            $Name = $row["full-name"];
                            $id_Emp = $row["id-Emp"];
                            $discount=$row["salary"];
                      $IncomeNew = ($Income * ((100-$discount)/100));
                      $incomeType= "ايراد الطبيب";
        $sql1="INSERT INTO `center-incomes`(`income-cate`, `income-full-value`, `income-value`, `date`) VALUES ('{$incomeType}',{$Income}, {$IncomeNew},'{$Date}')";

	if (mysqli_query($conn, $sql1) && mysqli_affected_rows($conn)>0) {
	
	 	 $IncomeNewest = $Income - $IncomeNew;
		
$sql="INSERT INTO `doctor-income`(`Employee-id`, `Employee-name`, `income-value`, `date`) VALUES ({$id_Emp},'{$Name}',{$IncomeNewest},'{$Date}')";
        
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=success_msg_AddEmp();
       redirect ("Doc-income.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_AddEmp();
		redirect("Doc-income.php");
		 }
        
         } $_SESSION['msg']=error_msg_AddEmp();
		redirect("Doc-income.php");
                        
                        
                        }
                    }
                       
}else{
redirect("Doc-income.php");
}

                    
?>