<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");
?>
    <head>
        <title>Pharmacy income</title>
</head>
   
    <body class="docP">
      
         <div class="container">
            <div class="row">
          <div class="col-lg-12">
              <div class="allForm">
              <h1 class="h1Doc"> إيراد الصيدلية :-</h1>
              <div class="row">
                  
          <div class="col-lg-6 formEmp1">
              
              <form class="" method="post" action="pharmacy-sub.php">
   
        
              <input class="form-control field" type="number" placeholder="قيمة الإيراد" aria-label="default input example" value="" name="income">
                  <input class="form-control field" type="number" placeholder="قيمة الخصم" aria-label="default input example" value="" name="discount">
           
              <input class="form-control field" type="date" placeholder="تاريخ الإيراد" aria-label="default input example" value="" name="date">
              
              
                  
                  
                  
                  <button class="btn btn-primary btnField" name="submit" > تم </button>
                  </form>
              
              
              </div>
                  
                  
              <div class="col-lg-6">
                <div class="formEmp2">
              
            <table class="table table-primary">
                  <thead>
                            <tr>
                              
                              <th scope="col">قيمة الإيراد</th>
                              <th scope="col">التاريخ</th>
                            
                            </tr>
                  </thead>
              <tbody>
                  <?php 
$sql = "SELECT * FROM `pharmacy-income`ORDER BY `id` DESC LIMIT 5  ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?>
                        <tr>
                         
        
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
        </div>
        
       
     
        
        
   
  <?php

         include("includes/layout/footer.php");
        
?>
	
	</body>
</html>
