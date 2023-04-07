<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");
?>
    <head>
        <title>Main Page</title>
</head>
   
    <body class="mainP">
      
        
        <div class="container">
            <div class="row depts">
                
          <div class="col-lg-5 dept1">
             
               <div class="row">
          <div class="col-lg-5">
                    <a href="Employees.php" class="btn" >
                        <div class="emp"><i class="fas fa-users" ><br>
                         <span> شؤون الموظفين </span>    
                            </i></div>
                      </a> 
               </div>
         
           
          <div class="col-lg-5">
                                  <a href="AddEmp.php" class="btn" >
                        <div class="emp Addemp"><i class="fas fa-user" ><br> 
                         <span > إضافة موظف </span>    
                            </i></div>
                      </a> 
               </div>
          
              
          <div class="col-lg-3">
                                  <a href="about.php"  class="btn" >
                        <div class="emp manageSite"><i class="fas fa-door-open" ><br>
                         <span >حول النظام </span>    
                            </i></div>
                      </a>
        
               </div>
          
              </div>
        
        
        </div>
              
          <div class="col-lg-4 dept2">
              
                <div class="row">
          
                
           
          <div class="col-lg-6">
                                  <a href="Doc-income.php"  class="btn" >
                        <div class="emp Dr"><i class="fas fa-file" ><br>
                         <span> إيراد الطبيب </span>    
                            </i></div>
                      </a> 
               </div>
          
              
          <div class="col-lg-6">
                                  <a href="pharmacy.php"  class="btn" >
                        <div class="emp Phar"><i class="fas fa-file" ><br>
                         <span> إيراد الصيدلية </span>    
                            </i></div>
                      </a>
        
               </div>
                    
                    <div class="col-lg-6">
                                  <a href="laboratory.php"  class="btn" >
                        <div class="emp lap"><i class="fas fa-file" ><br>
                         <span> إيراد المعمل </span>    
                            </i></div>
                      </a>
        
               </div> 
                    <div class="col-lg-6">
                                  <a href="incomes.php" class="btn" >
                        <div class="emp all"><i class="fas fa-folder" ><br>
                         <span> الإيرادات </span>    
                            </i></div>
                      </a>
        
               </div>
          
          
              </div>
                </div> 
                
         <div class="col-lg-3 dept3">
              
                <div class="row">
           
          <div class="col-lg-12">
                                  <a href="Reports.php"  class="btn" >
                        <div class="emp report"><i class="fas fa-file" >
                            <br>
                            
                         <span> التقارير </span>    
                            </i></div>
                      </a> 
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
