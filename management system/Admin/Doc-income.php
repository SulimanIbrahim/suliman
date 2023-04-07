<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");
?>
    <head>
        <title>Doctor income</title>
</head>
   
    <body class="docP">
       
         <div class="container">
            <div class="row">
          <div class="col-lg-12">
              <div class="allForm">
              <h1 class="h1Doc"> إيراد الطبيب :-</h1>
              <div class="row">
                  
          <div class="col-lg-6 formEmp1">
              
              <form class="" method="post" action="Doc-income-sub.php">
              
                  
                
    <select class="selectemp" aria-label="Default select example" name="name-id" >
        <option selected>حدد اسم الطبيب :-</option>
          <?php 
$sql = "SELECT * FROM `employees` WHERE `jop-type`= 'doctor' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?>
  
  <option  value="<?php echo htmlentities($row["id"]);  ?>"><?php echo htmlentities($row["full-name"]);  ?></option>
  <?php
    }
}
?>  
</select>
        
               <input class="form-control field" type="number" placeholder="قيمة الإيراد" aria-label="default input example" value="" name="income">

              <input class="form-control field" type="date" placeholder="تاريخ الإيراد" aria-label="default input example" value="" name="date">
              
              
             
                  
                  
                  
                  <button class="btn btn-primary btnField" name="submit" > تم </button>
                  </form>
              
              
              </div>
                  
                  
              <div class="col-lg-6">
                <div class="formEmp2">
              
            <table class="table table-primary">
                  <thead>
                            <tr>
                              <th scope="col">الرقم الوظيفي</th>
                              <th scope="col">الإسم</th>
                              <th scope="col">قيمة الإيراد</th>
                              <th scope="col">التاريخ</th> 
                            </tr>
                  </thead>
              <tbody>
                   <?php 
$sql = "SELECT * FROM `doctor-income` ORDER BY `id` DESC LIMIT 5 ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    for ($x = 0; $x < 5; $x++){
    if ($row = mysqli_fetch_assoc($result)) {
    	?>
                        <tr>
                       
        
                          <td><?php echo htmlentities($row["Employee-id"]);  ?></td>
                          <td><?php echo htmlentities($row["Employee-name"]);  ?></td>
                            <td><?php echo htmlentities($row["income-value"]);  ?></td>
                          <td><?php echo htmlentities($row["date"]);  ?></td>
                        </tr>
           <?php
    }
        }
}
        ?>
              </tbody>
        </table>
        
           </div>
                  </div>
                  
                  </div>
              </div>
              
              
              </div>
             </div>
<div class="container">
<div class="row">
<div class="col-lg-8">
<?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
    
</div>
</div>
</div>
        </div>
        
       
     
        
        
   
  <?php

         include("includes/layout/footer.php");
        
?>
	
	</body>
</html>
