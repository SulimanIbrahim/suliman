<?php session_start()
?>
<?php 
    include("includes/layout/header.php");
    include_once("includes/functions.php");
    include_once("includes/session.php");
    include_once("includes/connect.php");


if(isset($_POST['submit'])){
    
    $id_name= $_POST["name-id"];   //id of full name  employee
	$date= $_POST["date"];
    
    
    
    echo $date;
    
    
        
    $query = "SELECT * FROM `doctor-income` WHERE `date`='$date'";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) >0) {
                     
                    if($row = mysqli_fetch_assoc($result)) {
                       
                            $date1 = $row["date"];
                        if (mysqli_query($conn, $query) && mysqli_affected_rows($conn)>0) {
                            
                       redirect ("incomes-doc.php?filter=$date1");
                           
                        }else{
                         $_SESSION['msg']=error_msg_AddEmp();
                        redirect("incomes-doc.php");
                         }

                    }
                }
                        
                        
                        
                        
                        
                
                $query1 = "SELECT * FROM `employees` WHERE `id`=".$id_name;
                $result1 = mysqli_query($conn, $query1);
                if (mysqli_num_rows($result1) >0) {
                    if($row = mysqli_fetch_assoc($result1)) {
                            $id_Emp = $row["id-Emp"];
                        if (mysqli_query($conn, $query1) && mysqli_affected_rows($conn)>0) {
                       redirect ("incomes-doc.php?filter=$id_Emp");

                    } else {
                         $_SESSION['msg']=error_msg_AddEmp();
                        redirect("incomes-doc.php");
                         }
                        }
                    }else{
redirect("incomes-doc.php");
}

	
                       
}else{
redirect("incomes-doc.php");
}

                    
?>