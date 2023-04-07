<?php session_start();?>
<?php 
     include("includes/layout/header.php");
     include_once("includes/functions.php");
     include_once("includes/connect.php");
     include_once("includes/session.php");
?>
    <head>
        <title>Add an Employee</title>
</head>
   
    <body>
        <div class="AddEmpP"> 
         <div class="container">
            <div class="row">
          <div class="col-lg-12">
              <div class="allFormAddEmp">
              <h1 class="h1Emp">إضافة موظف :-</h1>
              <div class="row">
          <div class="col-lg-12 formAddEmp">
             
     
              <form class="" method="post" action="Addemp-sub.php">
<div class="row">
 <div class="col-lg-6 form-right">
                  <span>اسم الموظف :</span>
                   <input class="form-control fieldAddEmp" type="text" placeholder="اسم الموظف رباعي" aria-label="default input example" value="" name="name-emp">
                  <span>تاريخ الميلاد :</span>
                  <input class="form-control fieldAddEmp" type="date" placeholder="العمر" aria-label="default input example" value="" name="birthday">
                      <span>حدد قيمة الراتب او الخصم :</span>
                  <input class="form-control fieldAddEmp" type="text" placeholder="الراتب" aria-label="default input example" value="" name="salary">
                  <span>رقم الهاتف :</span>
                  <input class="form-control fieldAddEmp" type="text" placeholder="رقم الهاتف" aria-label="default input example" value="" name="Phone-num">
                       
                  </div>
 <div class="col-lg-6 form-left">
                  <span>عنوان السكن :</span>
                  <input class="form-control fieldAddEmp" type="text" placeholder="عنوان السكن الحالي" aria-label="default input example" value="" name="address">
    <select class="selectAddemp" aria-label="Default select example" name="jop-type">
  <option selected>نوع الوظيفة :-</option>
  <option value="Doctor">طبيب</option>
  <option value="lab doctor">طبيب مختبر </option>
  <option value="lab technician">تقني مختبر</option>
  <option value="pharmacist">صيدلي</option> 
  <option value="Center Supervisor">مشرف مركز</option>
  <option value="Receptionist">موظف استقبال</option>
  <option value="Nurse">ممرض</option>
  <option value="Chef">طباخ</option>
</select>
        
               <span>الرقم الوظيفي :</span>
                  <input class="form-control fieldAddEmp" type="number" placeholder="الرقم الوظيفي" aria-label="default input example" value="" name="Emp-id">
                  
                  
     <button class="btn btn-primary btnFieldAddEmp" name="submit" > تم </button>
                  </div>
                  </div>
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
