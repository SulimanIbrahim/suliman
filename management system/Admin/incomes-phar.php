<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");
if(isset($_GET["filter"])){
    $filter_selected = $_GET["filter"];

}else{
    $filter_selected =null;

}

?>
    <head>
        <title>Pharmacy incomes</title>
        
</head>


<body>
        <div class="incomesTable"> 
            <div class="shadow"> 
         <div class="container">
            <div class="row">
          <div class="col-lg-12">


   <h1 class="h1incomesTable"> إيرادات الصيدلية:-</h1>
              <div class="container">
<div class="row">
<div class="col-lg-8">
<?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
    
</div>
</div>
</div>
              <h3 class="bold">فرز :</h3>
              <form class="filter-form" method="post" action="filter-name.php">
                  
                   <input class="form-control filter" type="date" placeholder="حدد تاريخ الإيراد" aria-label="default input example" value="" name="date">
                  
                   
             
              
                     <button  class="btn btn-danger filterBtn bold" name="submit">فرز</button> 
                  
               </form>
              
               <span class="sum">
                   <?php
                  $qty= 0;
                  $sql = "SELECT `income-value` FROM `pharmacy-income` ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
        $qty += $row['income-value'];
                   
    }
}
                  ?>
            مجموع الإيرادات : <?php echo $qty; ?>
              </span>
                     <button onclick="window.print()" class="btn btn-success incomeBtn bold">طباعة</button> 
              <a href="Doc-income.php" class="btn btn-info incomeBtn bold">
              إضافة</a>

        <?php 
             if ($filter_selected==null){
                 
             ?>  
              
              <div class="print">
                <table class="table table-success tablesincomes">
                      <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  
                                  <th scope="col">متسحق الدخل اليومي</th>

                                    <th scope="col">التاريخ</th> 
                                </tr>
                      </thead>
                  <tbody>
                             <?php 
                 $i=1;
$sql = "SELECT * FROM `pharmacy-income` ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?>
                        <tr>
                          <th scope="row"><?php echo $i; $i++;  ?></th>
        
                          <td class="bold"><?php echo htmlentities($row["income-value"]);  ?></td>
                         
                          <td><?php echo htmlentities($row["date"]);  ?></td>
                             <td><a href="DELETE-income-phar.php?income=<?php echo   mysqli_real_escape_string($conn,$row["id"]);   ?>" ><i class="fas fa-trash icon-trash" ></i> </a></td>
                        </tr>
           <?php
    }
}
        ?>
                  </tbody>
            </table>
              </div>
        <?php } ?>      
              
              
        <?php 
             if ($filter_selected){
               ?>  
              <div class="print">
                  <table class="table table-success tablesincomes">
                      <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  
                                  <th scope="col">متسحق الدخل اليومي</th>

                                    <th scope="col">التاريخ</th> 
                                </tr>
                      </thead>
                  <tbody>
                             <?php 
$sql1 = "SELECT * FROM `pharmacy-income` WHERE `date`='$filter_selected'";
$result1 =mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1)>0) {
    while($row = mysqli_fetch_assoc($result1)) {
    	?>
                        <tr>
                          <th scope="row"><?php echo htmlentities($row["id"]);  ?></th>
        
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
              
        <?php } ?>   
              
              
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
