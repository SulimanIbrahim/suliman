<?php session_start()
?>
<?php 
    include("includes/layout/header.php");
    include_once("includes/functions.php");
    include_once("includes/session.php");
    include_once("includes/connect.php");


if(isset($_POST['submit'])){
    
    $id_name1= $_POST["name1"];//id of full name  
    $id_name2= $_POST["name2"];   //id of full name  employee
	$Income= $_POST["income"];   //income value
    $Date= $_POST["date"];   //entry date
    
    
    
    
                $query = "SELECT * FROM `employees`WHERE `id`=".$id_name1;
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) >0) {
                    if($row = mysqli_fetch_assoc($result)) {
                            $Name1 = $row["full-name"];
                            $id_Emp1 = $row["id-Emp"];
                            $discount1=$row["salary"];
                      $IncomeNew1 = ($Income * ((100-$discount1)/100));
                        $IncomeNewest1 = $Income - $IncomeNew1;
   
                        }else{
                    $_SESSION['msg']=error_msg_AddEmp();
		redirect("laboratory.php");}
                     }else{
    $_SESSION['msg']=error_msg_AddEmp();
		redirect("laboratory.php");}
    
    
    
    
    
    
    
    $query1 = "SELECT * FROM `employees`WHERE `id`=".$id_name2;
                $result1 = mysqli_query($conn, $query1);
                if (mysqli_num_rows($result) >0) {
                    if($row1 = mysqli_fetch_assoc($result1)) {
                            $Name2 = $row1["full-name"];
                            $id_Emp2 = $row1["id-Emp"];
                            $discount2=$row1["salary"];
                      $IncomeNew2 = ($Income * ((100-$discount2)/100));
                       $IncomeNewest2 = $Income - $IncomeNew2;
                        
                      $IncomeNew = $IncomeNewest2 + $IncomeNewest1;
                       $incomeType= "ايراد المختبر" ;
            $sql1="INSERT INTO `center-incomes`(`income-cate`, `income-full-value`, `income-value`, `date`) VALUES ('{$incomeType}',{$Income}, {$IncomeNew},'{$Date}')";

	if (mysqli_query($conn, $sql1) && mysqli_affected_rows($conn)>0) {
	
    
    $sql="INSERT INTO `lab-income`(`Emp-id1`, `Employee-name1`, `Emp-id2`, `Employee-name2`, `income-value1`, `income-value2`, `date`) VALUES ($id_Emp1,'$Name1',$id_Emp2,'$Name2',$IncomeNewest1,$IncomeNewest2,'$Date')";
        
	if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn)>0) {
		 $_SESSION['msg']=success_msg_AddEmp();
       redirect ("laboratory.php");
 
	} else {
	 	 $_SESSION['msg']=error_msg_AddEmp();
		redirect("laboratory.php");
		 }
                       
             
                        }else{
                                        $_SESSION['msg']=error_msg_AddEmp();
                            redirect("laboratory.php");
                        }
                                        }else{
                        $_SESSION['msg']=error_msg_AddEmp();
                            redirect("laboratory.php");
                                        }            
}
}else{
redirect("laboratory.php");
}

                    
?>