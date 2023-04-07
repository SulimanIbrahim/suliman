<?php
include("headerA.php");


?>
  <title>
           Admin
        </title>
       <body>
<div class="container">
    <div class="row">
<div aria-disabled="true" class="col-sm-10">
    <?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
        </div>
    </div>
</div>
           <hr>
        <h1 class="right">الإدارة </h1>

<div class="container right">
    <div class="row">
        <div class="col-lg-12">
         <a type="button" href="AddAdmin.php" class="btn btn-primary"> إدارة المسؤوليين </a>
         <a type="button" href="AddCat.php" class="btn btn-primary"> إدارة الأقسام </a>

        </div>
    </div>
           </div>
        <hr>
        <h1 class="right">الإعلانات المعلقة </h1>
           <div class="container right">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
    <div class="row">
        
              <?php 
            $query = "SELECT * FROM `adss` WHERE `visible` = 0 ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){

                      while($row = mysqli_fetch_assoc($result)) {
                          $Catname = $row['CatName'];
                          $por = $row['purpos'];
                          $loc = $row['location'];
                          $Rooms = $row['rooms'];
                          $baths = $row['baths'];
                          $Area = $row['area'];
                          $price = $row['prices'];
                          $id = $row['id-ads'];
                          $DATE=$row['Date'];
                       ?>
                                                  
                             
          <div class="col-lg-3">
              <center>
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

                          echo "<img src='../images/avatar1/".$row['image']."' class='card-img-top' alt='...'>";
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
          <a type="button" name="show" href="../ShowAds.php?Ads=<?php echo $id;?>" class="btn btn-primary">عـــــرض</a>
       
<a type="button" href="Agree_sub.php?Ads=<?php echo $id;?>" class="btn btn-primary">موافقة</a>
                              <a type="button" href="DeleteAds-sub.php?Ads=<?php echo $id;?>" class="btn btn-danger">رفض</a>
                                  </div>
                         
                                <!-- end of swiper-slide -->
                     
       
                                       
                                        
                                </div>
                  </div>
                  </center>
    </div>
  
          <?php
  }
            }else{
                              echo"لا يوجد إعلانات";
                          echo"<a href='../ADDads.php'>إنقر هنا</a> لإضافة إعلان";
                      }
  
mysqli_free_result($result);
           
  ?> 
    
     </div>
</div>
            
            </div>
        </div>
    </div>

<?php
include("footerA.php");
?>
</body>
</html>