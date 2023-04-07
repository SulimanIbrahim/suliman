<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");
?>
    
    <head>
        <title>Incomes</title>
</head>
   
    <body class="IncomesP">
       
            <div class="shadow">
         <div class="container">
            <div class="row">
          <div class="col-lg-12">
              <div class="allTableIncomes">
                  
                  <div class="fullincomelinks">
                  <a href="incomes-doc.php" class="fullincome">إيرادات الأطباء</a>
                      <a href="incomes-lab.php" class="fullincome">إيرادات المختبر</a>
                      <a href="incomes-phar.php" class="fullincome">إيرادات الصيدلية</a>
                  
                  </div>
                  
                   <button onclick="window.print()" class="btn btn-success incomeBtn bold">طباعة</button>
                  
                   <div class="print">
                <div class="tablesEmp">
                    
                    
                    
                <h1 class="h1DocTable"> إيرادات الأطباء:-</h1>
                <table class="table table-success">
                      <thead>
                                <tr>
                                  <th scope="col">#</th>
                                    <th scope="col">الطبيب</th>
                                  <th scope="col">الرقم الوظيفي</th>
                                  <th scope="col">مستحق الدخل اليومي</th>
                                  <th scope="col">التاريخ</th> 
                                </tr>
                      </thead>
                  <tbody>
                             <?php 
                      $i=1;
$sql = "SELECT * FROM `doctor-income`ORDER BY `id` DESC LIMIT 10  ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?>
                        <tr>
        
                          
                          <td><?php echo $i; 
        $i++; ?> </td>
                            <td><?php echo htmlentities($row["Employee-name"]);  ?></td>
                            <td><?php echo htmlentities($row["Employee-id"]);  ?></td>
                            <td><?php echo htmlentities($row["income-value"]);  ?></td>
                          <td><?php echo htmlentities($row["date"]);  ?></td>
                        </tr>
           <?php
    }
}
        ?>
                  </tbody>
            </table>

                    
                    
                     <h1 class="h1DocTable"> إيرادات المختبر:-</h1>
                    <table class="table table-primary">
                      <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">طبيب المختبر</th>
                                  <th scope="col">الرقم الوظيفي</th>
                                  <th scope="col">مستحق الدخل اليومي</th>
                                  <th scope="col">تقني المختبر</th>
                                  <th scope="col">الرقم الوظيفي</th>
                                  <th scope="col">مستحق الدخل اليومي</th>

                                    <th scope="col">التاريخ</th> 
                                </tr>
                      </thead>
                  <tbody>
                              <?php 
                      $i=1;
$sql = "SELECT * FROM `lab-income` ORDER BY `id` DESC LIMIT 10 ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?>
                        <tr>
                          <th scope="row"> <?php echo $i; 
        $i++; ?> </th>
        
                          <td><?php echo htmlentities($row["Emp-id1"]);  ?></td>
                          <td><?php echo htmlentities($row["Employee-name1"]);  ?></td>
                            <td class="bold"><?php echo htmlentities($row["income-value1"]);  ?></td>
                              <td><?php echo htmlentities($row["Emp-id2"]);  ?></td>
                          <td><?php echo htmlentities($row["Employee-name2"]);  ?></td>
                            <td class="bold"><?php echo htmlentities($row["income-value2"]);  ?></td>
                            
                          <td><?php echo htmlentities($row["date"]);  ?></td>
                        </tr>
           <?php
    }
}
        ?>
                  </tbody>
            </table>

                    
                    <h1 class="h1Doc">إيرادات الصيدلية:-</h1>
                     <table class="table table-info">
                      <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">مستحق الدخل اليومي</th>
                                 

                                    <th scope="col">التاريخ</th> 
                                </tr>
                      </thead>
                  <tbody>
                             <?php 
                      $i=1;
$sql = "SELECT * FROM `pharmacy-income` ORDER BY `id` DESC LIMIT 10 ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?>
                        <tr>
                         
        
                          <td> <?php echo $i; 
        $i++; ?></td>
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
