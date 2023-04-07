<?php 
include("../includes/connect.php");
include("../includes/layout/header.php");

?>

    <title>
            الإعلانات
        </title>
        <link rel="stylesheet" href="CSSpages.css">
        <link rel="stylesheet" href="css/h1.css">

<div class="container">
    <div class="row">
<div aria-disabled="true" class="col-sm-10">
    <?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
        </div>
    </div>
</div>
 




    <section class="allofads"><!-- start of Secion of all ads -->
        <div class="container"><!-- start of container of all ads -->
            <div class="row"><!-- start of row of all ads -->
     <div class="col-lg-9">
         <div class="cardP">
 <?php 
    if (isset($_POST["submit"])){
           
        $idCat= $_POST['idCat'];
        $purpos=$_POST['Purpos'];
        
        
            $query = "SELECT * FROM `adss` WHERE `cate_id`='$idCat' OR `purpos`='$purpos' ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
                     ?>
                                
       

               
                    
                    
                     
                         <div class="L">نتائج البحث : </div>
                
                                 <?php
                      while($row = mysqli_fetch_assoc($result)) {
                            
                          $Catname = $row['CatName'];
                          $por = $row['purpos'];
                          $loc = $row['location'];
                          $Rooms = $row['rooms'];
                          $baths = $row['baths'];
                          $Area = $row['area'];
                          $price = $row['prices'];
                          $id = $row['id-ads'];
                          $date = $row['Date'];
                       ?>
             <div class="slid">
                <div class="card">
                    
                       <?php
                           
            $query1 = "SELECT * FROM `images` WHERE `id_ads`=".$id;
            $result1 = mysqli_query($conn, $query1);
              if (!$result1){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result1) > 0){
                 if($row = mysqli_fetch_assoc($result1)) {

                          echo "<img src='images/avatar1/".$row['image']."' class='card-img-top' alt='...'>";
            }
                      }
  ?>
                          <div class="card-body">
                            <h5 class="card-title"><span id="Cname"><?php echo $Catname;  ?> - <?php echo $por;  ?></span></h5>
                                <i class="fas fa-location-arrow loc" id="loc"><?php echo $loc;  ?></i><br>
                            <p class="card-content">
                                 <?php
                                if($Catname=="شقق" or $Catname== "منازل" or $Catname=="فلل"){?>
                                <i class="fas fa-bath"> <?php echo $Rooms;  ?></i> -
                                <i class="fas fa-bed"> <?php echo $baths;  ?></i>
                                <?php }else{echo"<br>";}?>
                              </p><br>
                              <span class="area"><?php echo $Area;  ?><strong class="area">(متر مربع)</strong></span>
                              <br>
                              <span class="price"><?php echo $price;  ?><strong class="price">SD</strong></span><br>
                           <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
          <a type="button" name="show" href="ShowAds.php?Ads=<?php echo $id;?>" class="btn btn-primary">عـــــرض</a>
       </div>
<div class="card-footer">
                                          <small class="text-muted"><?php echo $date;  ?></small>  
                                        </div>
                                  </div>
                                        
                              </div>  
                                              <?php
  } }else{
                echo"<center><h1> لا تتوفر نتائج لبحثك !!!</h1></center>";
            }
  
mysqli_free_result($result);
}
  ?>
                                
                 </div>
                 
         </div>
    
    <div class="col-lg-3 ">
    <section class="sidebar">
                 <div class="card" style="width: 18rem;">
                    <img src="pic/fff.png" class="card-img-top" alt="...">
                     <div class="card-body">
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                </div>
        <div class="card" style="width: 18rem;">
                    <img src="pic/hospitality-economics-online-course.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                </div>
        <div class="card" style="width: 18rem;">
                    <img src="pic/shipping-Company.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                </div>
            
    </section>
</div><!-- end of col of sidebar -->
                

       <!--------------------Start ADS sidebar part----------------------  -->

    
    </div><!-- end of row of all ads -->
 </div><!-- end of container of all ads -->
</section> <!-- end of Secion of all ads -->
        
        
    
    
<?php 
include("../includes/layout/footer.php");

     
?>

</body>
</html>