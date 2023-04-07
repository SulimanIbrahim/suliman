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
           Admin-addCates
        </title>
                    <link rel="stylesheet" href="../Public/bootstrap-4.4.1-dist/css/bootstrap.css">
                    <link rel="stylesheet" href="../Public/css/h1.css">
                    <link rel="stylesheet" href="../Public/icon/fontawesome-free-5.13.0-web/css/all.css">
 <div class="col-sm-10">
      <div class="col-lg-8">
<?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
    
</div>
<?php 
 
if ($menu_id_selected) {

	$_SESSION['id'] = $menu_id_selected;

$sql = "SELECT * FROM `cate`  WHERE id = ".$menu_id_selected;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    	?> 
<div class="container-fluid mypad">
 <form method='post'  action='EditCatT-sub.php'>
  <div class="form-group">
    <label  >أسم القسم</label>
    <input type="text" class="form-control" name="CN"  value='<?php echo htmlentities($row["catName"]);  ?>'>
  </div>
  <div class="form-group">
    <label  >الحالة :</label>
    <label >
        <?php 
        if ($row["visible"]==1) { echo "مرئي ";}else{ echo "غير مرئي ";}
        
                                                            ?>
      </label>
          <label  >الحالة الجديدة :</label>

       <input type="radio" class="form-control" name="optradio"  value="1">
             <input type="radio" class="form-control" name="optradio"  value="0">

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

