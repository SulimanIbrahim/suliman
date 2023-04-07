
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
           Admin-AddAdmin
        </title>
                    <link rel="stylesheet" href="../Public/bootstrap-4.4.1-dist/css/bootstrap.css">
                    <link rel="stylesheet" href="../Public/css/h1.css">
                    <link rel="stylesheet" href="../Public/icon/fontawesome-free-5.13.0-web/css/all.css">
 
<div class="container">
    <div class="row">
<div aria-disabled="true" class="col-sm-10">
    <?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
        </div>
<?php 
 
if ($admin_id_selected) {

	$_SESSION['id'] = $admin_id_selected;

$sql = "SELECT * FROM `users`  WHERE id = ".$admin_id_selected;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?> 
<div class="container-fluid mypad">
 <form method='post'  action='EditAdmin-sub.php'>
  <div class="form-group">
    <label  >أسم المسؤول</label>
    <input type="text" class="form-control" name="AN"  value='<?php echo htmlentities($row["username"]);  ?>'>
  
    <label  >البريد الإلكتروني :</label>
     <input type="email" class="form-control formL" name="EmailA" id="email" placeholder="Enter Admin Email Address" value='<?php echo htmlentities($row["E-mail"]);  ?>'>
      <label  >كلمة المرور :</label>
    <input type="password" class="form-control formL" name="pass1" id="pass1" placeholder="Enter password" value='<?php echo htmlentities($row["password"]);  ?>'>
      <label  >تأكيد كلمة المرور :</label>
    <input type="text" class="form-control formL" name="pass2" id="pass2" placeholder="" value='<?php echo htmlentities($row["password"]);  ?>'>
      <label  >رثم الهاتف :</label>
    <input type="number" class="form-control formL" name="PhoneNum" id="PhoneNum" placeholder="Enter Admin Phone Number" value='<?php echo htmlentities($row["PhoneNUM"]);  ?>'>

  </div>
  
 
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form>
</div>
<br><br>
<?php
    }
}}
?> 
    
</div>
</div>



