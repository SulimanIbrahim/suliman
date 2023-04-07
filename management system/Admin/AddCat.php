<?php
include("headerA.php");
login_check();
if(isset($_GET["menu"])){
    $menu_id_selected = $_GET["menu"];

}else{
    $menu_id_selected =null;

}
?>
  <title>
           Departments
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
    <div class="col-lg-8">
   
      <div class="right">
       

      <h1>الأقسام</h1> 
      <h2>معلومات الأقسام</h2>
  <p>معلومات الافسام بناءاً على قواعد البيانات:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>أسم القسم</th>
        <th>الحالة</th>
        <th>التاريخ</th>
      </tr>
    </thead>
    <tbody>

<?php 
$sql = "SELECT * FROM `cate` ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?> 

      <tr>
        <td><?php echo htmlentities($row["catName"]);  ?></td>
        <td><?php echo htmlentities($row["visible"]);  ?></td>
            <td><?php echo htmlentities($row["dateCat"]);  ?></td>
          <td><a href="EditCat.php?menu=<?php echo   mysqli_real_escape_string($conn,$row["id"]);  ?>" class="nav-link" aria-controls="messages" role="tab" data-toggle="tab"><i class="fas fa-edit edit"></i></a></td>
          <td> <a href="DeleteCat-sub.php?id=<?php echo   mysqli_real_escape_string($conn,$row["id"]);   ?> "><i class="fas fa-trash t1"></i></a></td>
       
      </tr> 
       <?php
    }
}
?>  
    </tbody>
  </table>


</div>
      </div>
      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
     
      <div class="col-lg-4 right">
          <h1>    إضافة قسم جديد </h1>
<form action="AddCat-sub.php" method="post" class="SingUp">
                  <div class="form-group">
                    <label for="Cname" >اسم القسم : </label>
                    <input type="text" class="form-control formL" name="CN" id="Cname" placeholder="Enter Name">
                    </div>
                      <div class="form-check">
                    <label for="text">مرئي :</label>
                    <label><input type="radio" name="optradio" value="1"> نعم </label>
                    <label><input type="radio" name="optradio" value="0"> لا </label>
    </div>

    
           <button type="submit" name="submit" class="btn btn-primary">تم </button>
</form>
     
    </div>
</div>
</div>

<?php
include("footerA.php");

?>