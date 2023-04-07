<?php session_start()
?>
<?php 
    include("includes/layout/header.php");
    include_once("includes/functions.php");
    include_once("includes/session.php");
    include_once("includes/connect.php");



?>
    <head>
        <title>laboratory income</title>
</head>
   
    <body class="docP">
      
         <div class="container">
            <div class="row">
          <div class="col-lg-12">
              <div class="allForm">
              <h1 class="h1Doc"> إيراد المختبر :-</h1>
              <div class="row">
                  
          <div class="col-lg-6 formEmp1">
              
              <form class="" method="post" action="lap-sub.php">
              
    <select name="name1" class="selectemp" aria-label="Default select example" >
        
  <option selected>اختر اسم الطبيب :-</option>
        <?php
        $type="doctor";
 $sql = "SELECT * FROM `employees`   WHERE `jop-type`= 'lab doctor'";
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
    <select  name="name2" class="selectemp" aria-label="Default select example" >
  <option selected>اختر اسم التقني :-</option>
    <?php
 $sql1 = "SELECT * FROM `employees`   WHERE `jop-type`= 'lab technician'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) >0) {
    while($row = mysqli_fetch_assoc($result1)) {
    	?>
  
  <option  value="<?php echo htmlentities($row["id"]);  ?>"><?php echo htmlentities($row["full-name"]);  ?></option>
  <?php
    }
}
?>  
</select>
        
               <input class="form-control field" type="number" placeholder="قيمة الإيراد" aria-label="default input example"  name="income">
           
              <input class="form-control field" type="date" placeholder="تاريخ الإيراد" aria-label="default input example" name="date">
              
              
             
                  
                  
                  
                  <button class="btn btn-primary btnField" name="submit" > تم </button>
                  </form>
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
$sql = "SELECT * FROM `doctor-income`ORDER BY `id` DESC LIMIT 5  ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
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
        ?>
              </tbody>
        </table>
        
           </div>
                  </div>
                  
                  </div>
              </div>
              
              
              </div>
             </div>
        </div>
        
        

   
  <?php

         include("includes/layout/footer.php");
        
?>
	
	</body>
</html>
