
<?php 
     include("includes/layout/header.php");
     //include_once("../includes/functions.php");
     include_once("includes/connect.php");


?>
   <head>
        <title>Add an Employee</title>
</head>
   
    <body>
        <div class="AddAdminP"> 
         <div class="container">
            <div class="row">
          <div class="col-lg-12">
              <div class="allFormAddadmin">
              <h1 class="h1Admin">إضافة موظف :-</h1>
              <div class="row">
                  
          <div class="col-lg-11 formAddadmin">
              
              <form class="" action="">
              
                  
                   <input class="form-control fieldAddadmin" type="text" placeholder="اسم الموظف رباعي" aria-label="default input example" value="" name=""> 
                  <input class="form-control fieldAddadmin" type="number" placeholder="العمر" aria-label="default input example" value="" name=""> 
                  <input class="form-control fieldAddadmin" type="number" placeholder="الراتب" aria-label="default input example" value="" name="">
                  
    <select class="selectAddadmin" aria-label="Default select example" >
  <option selected>نوع الوظيفة :-</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
        
              

             
              
              
             
                  
                  
                  
                  <button class="btn btn-primary btnFieldAddadmin" name="" > تم </button>
                  </form>
              
              
              </div>
                  
                  
              <div class="col-lg-12 formAdmin2">
               
              
            <table class="table table-secondary">
                  <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th> <th scope="col">Handle</th> 
                            </tr>
                  </thead>
              <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td><td>@twitter</td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td><td>@twitter</td>
                        </tr>
                  <tr>
                          <th scope="row">5</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td><td>@twitter</td>
                        </tr>
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
