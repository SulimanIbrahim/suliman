<?php session_start(); ?>
<?php 
include_once("../includes/layout/header.php");
include_once("../includes/functions.php");
include_once("../includes/session.php");
include_once("../includes/connect.php");



if(isset($_GET["menu"])){
    $menu_id_selected = $_GET["menu"];
    $page_id_selected =null;

}elseif(isset($_GET["page"])){
    $page_id_selected = $_GET["page"];
    $menu_id_selected =null;

}else{
    $page_id_selected =null;
    $menu_id_selected =null;

}

  
?>
 
 <title>
    Edit menu
</title>
         <!-- ********* Start of Accordion  ********* -->

  <div class="container">
  <div class="row">
    <div class="col-sm-10">
    <?php echo msg(); ?>
    
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-10">
    <?php echo $errors= err(); ?>
    <?php echo error_function($errors); ?>

    
</div>
</div>
</div>

<div class="panel">

welcom

</div>




  <div class="container">
  <div class="row">
      <div class="col-lg-2">



<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  
  
                                      <?php 
                                    $query = "SELECT * FROM `website_navbar`  ";
                                    $result = mysqli_query($conn, $query);
                                    if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_assoc($result)) {
                                    ?>
  
  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php   echo   mysqli_real_escape_string($conn,$row["id"]);   ?>"  aria-controls="collapseOne">
          <?php echo mysqli_real_escape_string($conn,$row["Item_name"])   . "  ". " ("  .  mysqli_real_escape_string($conn,$row["id"])  . ")"  ;  ?>
        </a>
      </h4>
    </div>
    <div id="collapseOne<?php echo   $row["id"];  ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">

<a href="Edit_menu.php?menu=<?php echo   mysqli_real_escape_string($conn,$row["id"]);   ?> "><h4><?php echo   mysqli_real_escape_string($conn,$row["Item_name"]) ;  ?></h4> </a>
 
                                     <?php 
                                    $query1 = "SELECT * FROM `pages`  WHERE   `Pages`.`item_name_id`= ".$row["id"];
                                    $result1 = mysqli_query($conn, $query1);
                                    if (mysqli_num_rows($result1) > 0) {
                                    while($row1 = mysqli_fetch_assoc($result1)) {
                                    ?>

<ul   >
<li><a href="Edit_menu.php?page=<?php echo   mysqli_real_escape_string($conn,$row1["id"]);  ?> "><h5><?php echo    mysqli_real_escape_string($conn,$row1["Page_name"]) ;  ?> </h5></a></li>
</ul>

<?php
 }  }
   ?>
 
</li>
      </div>
    </div>
  </div>
   <?php
  }  } 
  mysqli_free_result($result);
  ?>
   
</div>

</div>

    



      
 
<div class="col-lg-8">
   
<?php  
if ($menu_id_selected) {
	
	$_SESSION['id'] = $menu_id_selected;
	
	
	echo "  	  <div class='alert alert-danger'>";
	echo "  	<div class='panel-heading'>Edit Menu</div>";
	echo "  	<div class='panel-body'>";
	
	echo "    <form method='post' action='Editmenu_submit.php'>";
	
	$query = "SELECT * FROM `website_navbar`  WHERE id =  ".$menu_id_selected;
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
		 
  
 
 

	echo "     <div class='form-group'>     ";   
	echo  "     <label for='text'  >Menu name: " .  $row['Item_name']  .  "</label>  ";
	echo "       <div class='input-group'>   ";
 	echo "        <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>  ";
 	echo "        <input id='text' type='text' class='form-control' name='menu' placeholder='menu' value='".  $row['Item_name']   ."'>  ";
 	echo "      </div> ";
 	echo "      </div>  ";
  
 	echo "      <div class='form-group'>   ";
	echo "     <div class='radio'>   ";
 	echo "      <label for='text'>Visible : </label>   ";
 	
 	if ( $row['Visible'] ==1) {
 		
 		echo "      <label><input type='radio' name='optradio' value='1'    checked >Yes</label>   "; 
	    echo "       <label><input type='radio' name='optradio'  value='0'>No</label>   ";
 	}else {
 		echo "      <label><input type='radio' name='optradio' value='1'  >Yes</label>   ";
 		echo "       <label><input type='radio' name='optradio'  value='0'    checked >No</label>   ";
 	}
 	
	echo "     </div>   ";
  	echo "     </div>   ";
 
 	echo "      <div class='form-group'>   ";
 	echo "      <label for='sel1'>Rank :  ("   . $row['Rank'] . ") </label>   ";
 	echo "      <select class='form-control' id='sel1' name='rank'>     ";
 	
		}} ?>
 	
 	<?php 
 	
 	$query = "SELECT Rank FROM `website_navbar`  ";
 	$result = mysqli_query($conn, $query);
 	$row_cnt = mysqli_num_rows($result); 
 for ($i =1; $i <= $row_cnt+1 ; $i++) {
	

?>
   
<option  value="<?php  echo $i ; ?>">  <?php  echo $i ; ?>  </option>
 
 
 <?php    } ?>
 <?php  
 	echo "      </select>   ";
	echo "     </div>    ";
	echo "<button type='submit' class='btn btn-danger' name='submit' >Submit</button>";



	echo "      	</form>   ";
 
	echo "      	</div>   ";
	echo "      	</div>   ";
    echo "      </div>   ";
	

} ?>
 




<?php  
if ($page_id_selected) {
	
	$_SESSION['id'] = $page_id_selected;
	 

	$query = "SELECT * FROM `pages`  WHERE id =  ".$page_id_selected;
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
	
	
	
	echo "
 <div class='alert alert-danger'>
  <div class='panel-heading'>Edit Page</div>
  <div class='panel-body'>
	
  <form method='post' action='Edit_page_submit.php'>
  <div class='form-group'>
  <label for='text'>Page name:   {$row['Page_name']} </label>
  <div class='input-group'>
  
    <span class='input-group-addon'><i class='glyphicon glyphicon-user'></i></span>
    <input id='text' type='text' class='form-control' name='page' value='{$row['Page_name']}'>
  </div>
  </div>
	
  <div class='form-group'>
<div class='radio'>
  <label for='text'>Visible : </label>  ";
   	if ( $row['Visible'] ==1) {
 		
 		echo "      <label><input type='radio' name='optradio' value='1'    checked >Yes</label>   "; 
	    echo "       <label><input type='radio' name='optradio'  value='0'>No</label>   ";
 	}else {
 		echo "      <label><input type='radio' name='optradio' value='1'  >Yes</label>   ";
 		echo "       <label><input type='radio' name='optradio'  value='0'    checked >No</label>   ";
 	}
	echo " </div>";
	echo "   </div>
	
  <div class='form-group'>
<div class='radio'>
  <label for='text'>Status : </label>";
		 	if ( $row['State'] ==1) {
 		
 		echo "      <label><input type='radio' name='optradio1' value='1'    checked >Yes</label>   "; 
	    echo "       <label><input type='radio' name='optradio1'  value='0'>No</label>   ";
 	}else {
 		echo "      <label><input type='radio' name='optradio1' value='1'  >Yes</label>   ";
 		echo "       <label><input type='radio' name='optradio1'  value='0'    checked >No</label>   ";
 	}
	echo " </div>";
	echo "   </div>
	
	<div class='form-group'>
	<label for='comment'>Content:</label>
	<textarea class='form-control' rows='5' name='content'>". $row['Content']  ."</textarea>
	</div>
	
	
  <div class='form-group'>
  <label for='sel1'>Rank : ".$row['Rank']." </label>
  <select class='form-control' id='sel1' name='rank'>
";
		
	$query1 = "SELECT `rank` FROM `pages` WHERE `Item_name_id`   =".$row['Item_name_id'];
	$result1 = mysqli_query($conn, $query1);
	$row_cnt = mysqli_num_rows($result1);
	
	for ($i =1; $i <= $row_cnt ; $i++) {
	
	
	
		 
		echo "<option  value=" .   $i ." '>  ".  $i ."  </option>";
	
	
	}
	
	echo "
  </select>
</div>";
 
	echo"<div class='checkbox'>";
	$query2 = "SELECT `id`, `Item_name` FROM `website_navbar`  ";
	$result2 = mysqli_query($conn, $query2);
	if (mysqli_num_rows($result2) > 0) {
		while($row2 = mysqli_fetch_assoc($result2)) {
			
			
			if ( $row2['id'] ==$row['Item_name_id']) {
				echo "<label><input type='checkbox' name='checkbox' checked";
			
			}else{
				echo "<label><input type='checkbox' name='checkbox'  ";
			}
			
		echo "	value='{$row2['id']}'> {$row2['Item_name']} </label> &nbsp;&nbsp;";
		
	
		 
			

			}}
			
	}	}
	
	echo " 			</div> ";
	
	
	
	
	echo "       <button type='submit' class='btn btn-default' name='submit' data-toggle='modal' data-target='#myModal'>Submit</button>   ";
	
	
	echo "   </form>
	
	
	
	
  </div>
</div>
	 ";
	echo "      	</div>   ";
	
 




}


?>





  
</div>
 


</div>

</div>   
      
      
      
      
     


        
                            <!-- *********   END of Accordion  ********* -->

        
        
        





























        
  <?php

         include("../includes/layout/footer.php");
        
?>
	
	

	</body>
</html>