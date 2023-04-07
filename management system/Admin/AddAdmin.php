<?php
include("headerA.php");

login_check();
if(isset($_GET["admin"])){
    $admin_id_selected = $_GET["admin"];

}else{
    $admin_id_selected =null;

}
?>
  <title>
           Admin-Control
        </title>
         

<div class="container">
  <div class="row">
      <div class="col-lg-8">
<?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
    
</div>
    </div>
</div>

<div class="container">
  <div class="row">
      <div class="col-lg-8 right">
  <!-- Nav tabs -->
    <h1 class="adminsLabel">المسؤولين والمستخدمين :</h1>
    
    
  <!-- Tab panes -->
      <h2>معلومات المسؤولين و المستخدمين</h2>
  <p>بناءاً على قواعد البيانات:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>الرقم</th>
        <th>إسم مسؤول</th>
        <th>البريد الإلكتروني :</th>
        <th>كلمة المرور</th>
        <th>رقم الهاتف</th>
        <th>الوظيفة</th>
        <th>التاريخ</th>
      </tr>
    </thead>
    <tbody>

<?php 
$sql = "SELECT * FROM `users` ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?> 

      <tr>
        <td><?php echo htmlentities($row["id"]);  ?></td>
        <td><?php echo htmlentities($row["username"]);  ?></td>
        <td><?php echo htmlentities($row["E-mail"]);  ?></td>
        <td><?php echo htmlentities($row["password"]);  ?></td>
        <td><?php echo htmlentities($row["PhoneNUM"]);  ?></td>
        <td><?php echo htmlentities($row["JopType"]);  ?></td>
        <td><?php echo htmlentities($row["date"]);  ?></td>
          <td>
              <a href="EditAdmin.php?admin=<?php echo   mysqli_real_escape_string($conn,$row["id"]);  ?>" 
                 ><i class="fas fa-edit edit"></i>
              </a>
          </td>
          <td> <a href="DeleteAdmin-sub.php?id=<?php echo   mysqli_real_escape_string($conn,$row["id"]);   ?> "><i class="fas fa-trash t1"></i></a></td>
       
      </tr> 
       <?php
    }
}
?>  
    </tbody>
  </table>

</div>
      <hr>
    <div class="col-lg-4 right">
             <h1>    إضافة مسؤول جديد </h1>

<form action="AddAdmin-sub.php" method="post" class="SingUp">
                  <div class="form-group">
                    <label for="AN" >اسم المسؤول : </label>
                    <input type="text" class="form-control formL" name="AN" id="AN" placeholder="Enter Admin Name">
                    
                    <label for="Email" >البريد الإلكتروني : </label>
                    <input type="email" class="form-control formL" name="EmailA" id="email" placeholder="Enter Admin Email Address">
                      <label for="pass1" >كلمة المرور : </label>
                    <input type="password" class="form-control formL" name="pass1" id="pass1" placeholder="Enter password">
                      <label for="pass2" >تأكيد كلمة المرور : </label>
                    <input type="password" class="form-control formL" name="pass2" id="pass2" placeholder="">
                      <label for="PhoneNum" >رقم الهاتف : </label>
                    <input type="text" class="form-control formL" name="PhoneNum" id="PhoneNum" placeholder="Enter Admin Phone Number">
                    <input type="checkbox" hidden="hidden" class="form-control formL" name="TypeJob" id="TypeJob" value="Admin" checked>
                       
                    </div>
                     

    
           <button type="submit" name="submit" class="btn btn-primary">إضافة </button>
</form>
      </div>

    
       

    



    
</div>
</div>  
<?php
include("footerA.php");

?>