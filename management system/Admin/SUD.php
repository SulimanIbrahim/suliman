<?php 
include("../includes/connect.php");
include("../includes/layout/header.php");

     
?>

    <title>
            side menu
        </title>
    <style>
    
        .main{
    background-color: black;
    text-align: right;
    padding-bottom: 0px;
    padding-top: 0px;
    background-color: #000000b8;
    border-bottom: 2px solid;
    border-color: #eec5bd;
</style>
      <!-----------------------start navbar and welcome------------------------------  -->
     
 <div class="container">
  <div class="row">
      <div class="col-lg-8">
<?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
    
      </div></div></div>
<a class="plus" href="ADDads.php"><i class="fas fa-plus"></i></a>
        <div class="underhead">
    <div class="container">
                    <div class="row">
                        
    <table class="table tableNav col-lg-2">
      <thead>
        <tr>
          <th scope="col"><a href="#" class="btn bhtable"> الرئيسية </a></th>
            <th scope="col">
             <a href="Ads.php?views=40" class="btn btable"> الأعلى مشاهدة </a>   
                
            </th>
            
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td ><a href="#info" class="btn btable"> معلومات اكثر </a></td>
          <td><a href="#contact" class="btn btable"> تواصل معنا </a></td>

    </tr>
    
  </tbody>
    
</table>
                        
 
                        
                    <div class="col-lg-6">
                        <div class="welcome" >
                        <h1 >  مرحباَ بك <i class="fas fa-coffee"> </i></h1>
                    <p> نحن نقدم اليك افضل خدمة لعرض و شراء و بيع عقارات في السودان .. اختر عقارك المناسب و تواصل مع المعلن او سجل دخولك و اعلن عن عقارك هنا مجاناَ او لتواكب لجديد من الإعلانات و انتظر زبائنك في افضل موقع لعرض العقارات .. نتمنى لك زيارة مفيدة . </p></div></div>
                    
                    <div class="col-lg-3 ">
                    <img class="hpic" src="pic/%D8%AA%D9%86%D8%B2%D9%8A%D9%84.jpg" alt="pic">
                    </div>
        </div></div></div>
        <div class="container">
                 <div class="sch">
                     <div class="row">
                         <div class="col-md-12">
                <form method="post" action="searchAds.php" class="schform">
                         <div class="row">
                             <div class="col-lg-3">
                    <label for="inputPurpos"> الغرض :</label>
                        
  <select name="Purpos" class="form-control" id="inputPurpos">
 
      <option  value="بيع">
                بيع 
      </option>
    <option  value="إيجار">
        ايجار
      </option>
      
          
                                 </select></div>
                                 <div class="col-lg-3">
  <label for="sel1">القسم :</label>
                 <select name="idCat"  class="form-control" id="sel1">
           <?php 
           
            $query = "SELECT * FROM `cate` WHERE visible=1";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
?>
                     <option>...</option>
                    <?php
                      while($row = mysqli_fetch_assoc($result)) {
                       ?>
    

              <option value="<?php  echo $row["id"]?>" >
                            
                <?php   echo $row['catName']; ?> 
                     </option>

      <?php
          }
          }
  mysqli_free_result($result);
          
          ?>
?>
        <!-- <label for="BathRNUM" >عدد الحمامات : </label>
    <input type="number" class="form-control formL" id="bathRNUM" placeholder=""> -->
                                     </select></div>
                     
                        <div class="col-lg-3">
                        
                            <button type="submit" class="btn btn-primary schbtn" name="submit">بحث</button>
                                 </div>
                        </div>
                     </form>
                     </div>
                </div>
            </div>
</div>
      <!----------------------end navbar and welcome------------------------------  -->
              

        <!--------------------Stat ADs part ----------------------  -->
            <div class="container">
                <div class="row">
               <div class="col-lg-12">
       
                                   </div>
                            </div>
                    </div>
    <!-- Testimonials -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <section class="allofads">
                                                                         <style>  .allofads {
                                                                            background-image:;
                                                                            background-color: transparent;
                                                                            border-top: 8px solid;
                                                                            margin-top: 0rem;
                                                                            border-top-color: transparent;
                                                                        }
                                                                        </style>
        <div class="container">
            <div class="row">
       
                 <!--   <i class="fas fa-edit"> 3</i>
                        <i class="fas fa-thumbtack"> 3</i>
                        <i class="fas fa-wrench"> 3</i>
                        <i class="fas fa-location-arrow"> 3</i>
                        <i class="fas fa-images"> 3</i>
                        <i class="fas fa-eye"> 3</i>
                        <i class="fas fa-sign-in-alt"> 3</i>
                        <i class="fas fa-user-plus"> 3</i>
                        <i class="fas fa-user-plus"> 3</i>
                        <i class="fas fa-trash"> 3</i> -->
                
                
                
                
                  <?php 
            $query = "SELECT * FROM `adss` WHERE `visible`=1 ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
                
?>
                
                <div class="col-lg-9">
    <div class="slider-1">
        <h1  class="lead ads text-right"> كل الإعلانات  :</h1>
        <a href="Ads.php" class="more"> المزيد <i class="fa fa-angle-double-left"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
            
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                           
                         
                                  
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
                       ?>
                                
                         <div class="swiper-slide">
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
                                          <small class="text-muted"><?php echo $row['Date'];  ?></small>  
                                          
                                        </div>
                         
                                </div>
                                </div><!-- end of swiper-slide -->
                                              <?php
  }
  }
mysqli_free_result($result);

  ?>
                                <!-- end of slide -->
                           
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->
                    
                    
                    
    <?php 
           
            $query = "SELECT * FROM `adss`  WHERE `cate_id`=1 AND `visible`=1 ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
            
?>
 <div class="slider-1">
        <h1 class="lead ads text-right"> شقق  :</h1>
        <a href="Ads.php?Cate=1" class="more"> المزيد <i class="fa fa-angle-double-left"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
            
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                   
                                  
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
                                
                         <div class="swiper-slide">
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
                                </div><!-- end of swiper-slide -->
                                              <?php
  }
  }
mysqli_free_result($result);

  ?>
                                <!-- end of slide -->
                           
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 -->
    <!-- end of testimonials -->
                    
                    
                    
                    <!-- Testimonials -->
     <?php 
           
            $query = "SELECT * FROM `adss`  WHERE `cate_id`=2  AND `visible`=1 ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
?>
 <div class="slider-1">
        <h1 class="lead ads text-right"> منازل  :</h1>
        <a href="Ads.php?Cate=2" class="more"> المزيد <i class="fa fa-angle-double-left"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
            
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                   
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
                       ?>
                                
                         <div class="swiper-slide">
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
                                          <small class="text-muted"><?php echo $row['Date'];  ?></small>  
                                          
                                        </div>
                         
                                </div>
                                </div><!-- end of swiper-slide -->
                                              <?php
  }
  }
mysqli_free_result($result);

  ?>
                                <!-- end of slide -->
                           
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 --><!-- end of slider-1 -->
    <!-- end of testimonials -->
                    
                    
                    <!-- Testimonials -->
     <?php 
           
            $query = "SELECT * FROM `adss`  WHERE `cate_id`=3 AND `visible`=1 ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
?>
 <div class="slider-1">
        <h1 class="lead ads text-right"> فلل  :</h1>
        <a href="Ads.php?Cate=3" class="more"> المزيد <i class="fa fa-angle-double-left"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
            
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                   
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
                       ?>
                                
                         <div class="swiper-slide">
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
                                          <small class="text-muted"><?php echo $row['Date'];  ?></small>  
                                          
                                        </div>
                         
                                </div>
                                </div><!-- end of swiper-slide -->
                                              <?php
  }
  }
mysqli_free_result($result);

  ?>
                                <!-- end of slide -->
                           
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 --><!-- end of slider-1 -->
    <!-- end of testimonials -->
                    
                    
                    
                    <!-- Testimonials -->
    <?php 
           
            $query = "SELECT * FROM `adss`  WHERE `cate_id`=4 AND `visible`=1 ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
?>
 <div class="slider-1">
        <h1 class="lead ads text-right"> أراضي سكنية/زراعية  :</h1>
        <a href="Ads.php?Cate=4" class="more"> المزيد <i class="fa fa-angle-double-left"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
            
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                   
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
                       ?>
                                
                         <div class="swiper-slide">
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
                                          <small class="text-muted"><?php echo $row['Date'];  ?></small>  
                                          
                                        </div>
                         
                                </div>
                                </div><!-- end of swiper-slide -->
                                              <?php
  }
  }
mysqli_free_result($result);

  ?>
                                <!-- end of slide -->
                           
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 --><!-- end of slider-1 -->
    <!-- end of testimonials -->
                    
                    
                    
                    <!-- Testimonials -->
     <?php 
           
            $query = "SELECT * FROM `adss`  WHERE `cate_id`=5 AND `visible`=1 ";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){
?>
 <div class="slider-1">
        <h1 class="lead ads text-right"> محلات تجارية  :</h1>
        <a href="Ads.php?Cate=5" class="more"> المزيد <i class="fa fa-angle-double-left"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
            
                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                   
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
                       ?>
                                
                         <div class="swiper-slide">
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
                                          <small class="text-muted"><?php echo $row['Date'];  ?></small>  
                                          
                                        </div>
                         
                                </div>
                                </div><!-- end of swiper-slide -->
                                              <?php
  }
  }
mysqli_free_result($result);

  ?>
                                <!-- end of slide -->
                           
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-1 --><!-- end of slider-1 --><!-- end of slider-1 -->
    <!-- end of testimonials -->
        
        <!--------------------End ADs part----------------------  -->

                    
    <!-------------------------------------------------- start Screenshots ------------------------------------------------------------->
    
                    
                    
                    
    <!-------------------------------------------------- start Screenshots ------------------------------------------------------------->

</div><!-- end of col of all ads-->
                    <!--------------------Start ADS sidebar part----------------------  -->

                 <div class="col-lg-3 ">
    <section class="sidebar">
                 <div class="card" style="width: 16rem;">
                    <img src="pic/fff.png" class="card-img-top" alt="...">
                     <div class="card-body">
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                </div>
        <div class="card" style="width: 16rem;">
                    <img src="pic/hospitality-economics-online-course.jpg" class="card-img-top" alt="...">
                     <div class="card-body">
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     </div>
                </div>
        <div class="card" style="width: 16rem;">
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
        
        
                </div>
            </div>
        </div>
         <!---------------------------------------------- Contact ------------------------------------->
        
        
        <div id="contact" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="contactus">تواصل معنا</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address"> لا تبخل بالتواصل معنا او فقط قم بالإرسال عبر الإيميل في المكان المخصص أدناه  </li> 
                        <li><i class="fas fa-map-marker-alt"></i>  كافوري , الخرطوم, مربع 9, SD </li>
                        <li><i class="fas fa-phone"></i><a class="blue" href="tel:003024630820"> +249912300009 </a></li>
                        <li><i class="fas fa-envelope"></i><a class="blue" href="mailto:office@leno.com"> office@sudar.com </a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of contact -->
        
 <!---------------------------------------------------end Contact -------------------------------------------------------->
        
        
 <!----------------------------------------------------- Footer ---------------------------------------------------------->
    <div class="footer text-right " id="info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col">
                        <h4 class="h-footer">  حول SuDar :-</h4>
                        <p> نحن نقوم بتوفير أفضل خدمة للإعلان عن عقارك بصورة سلسة و مجانية لتسهيل عملية البيع والشراء و الإيجار .</p>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col middle">
                        <h4 class="h-footer">روابط مهمة :-</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">  شركائنا  <a class="turquoise" href="#your-link">startupguide.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">أقرأ  <a class="turquoise" href="terms-conditions.html">  الشروط  </a>, <a class="turquoise" href="privacy-policy.html">سياسة الخصوصية </a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4 class="h-footer">مواقع التواصل :- </h4>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-google-plus-g fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Inovatik</a> - جميع الحقوق محفوظة </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

<?php
include("../includes/layout/footer.php");
?>

 
        </body>
</html>
      


<!-- #033e79 

         <div class="Show1">
                                                  <div id="MyModal" id="showModal" class="modal fade" role="dialog">
                                                      <div class="modal-dailog">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                              <i class="fas fa-home"> </i><button aria-label="close" data-dismiss="modal" class="close">X</button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <div class="row">
                                                                       <div class="col-lg-9 infoADs">
                                                                  <h3><span id="Cname"></span>اسم الإعلان</h3>
                                                                  <h3><span id="loc"></span>نوع الاعلان</h3>
                                                                        <span>المحتويات :</span> 
                                                                           <i class="fas fa-phone"> 2 </i>
                                                                           <i class="fas fa-car"> 5 </i>
                                                                           <i class="fas fa-home"> 3 </i><br> 
                                                                  <span>الوصف :</span>
                                                                  <p>hello evrybody I'm suliman im gonna burn this damn area im da king here i made dis shit and im the one who can burn it down or make it up  </p>
                                                                  <span>السعر : <strong>5</strong></span> <strong>SD</strong>
                                                                  <span class="locate">الموقع : </span> بحري / كافوري / مربع 9 <i class="fam fa-flag"></i> 
                                                              </div>
                                                              
                                                                      <div class="col-lg-3">
                                                                  <div id="carouselExampleControls" class="carousel slide Show2" data-ride="carousel">
                                                                  <div class="carousel-inner">
                                                                    <div class="carousel-item active">
                                                                      <img class="d-block w-100 imgs" src="images/screenshot-6.png" alt="First slide">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                      <img class="d-block w-100 imgs" src="images/testimonial-3.jpg" alt="Second slide">
                                                                    </div>
                                                                    <div class="carousel-item">
                                                                      <img class="d-block w-100 imgs" src="images/testimonial-4.jpg" alt="Third slide">
                                                                    </div>
                                                                  </div>
                                                                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                  </a>
                                                                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                  </a>
                                                                </div>
                                                              </div>
                                                             
                                                                      </div>
                                                              </div>
                                                              <div class="modal-footer">    
                                                              </div>
                                                          </div>                                                             
                                                      </div>
                                                  </div>  
                                            </div>
<div class="modal-body">
  <h5>Popover in a modal</h5>
  <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
  <hr>
  <h5>Tooltips in a modal</h5>
  <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
</div> -->
<!-- <label>الاسم الأول :</label>
	   <input type="text" name="name1" ><br>
	<label>الاسم الثاني :</label>	
	   <input type="text" name="name2" > <br>	
	<label>العمر  :</label>	
	   <input type="number" name="AGE" > <br>
	<label>رقم الجوال :</label>	
	   <input type="number" name="numberPhone" ><br> 
	<label>الدرجة العلمية :</label>	<br>
		 شهادة ثانوية
	   <input type="checkbox" name="degree" value="High school dibloma" > 	 
		 دبلوم
		 <input type="checkbox" name="degree" value="High Debloma">
		 بكلاريوس
		 <input type="checkbox" name="degree" value="without>">
		 <button class="btn_send">تقديم</button> -->

<!--
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                
                    <div class="col-lg-3">
                   
                        <img class="img-fluid" src="pic/unnamed.png" alt="pic"/>
                        
                    </div>
                    <div class="col-lg-9">
                    <h1>this is a good pic</h1>
                                <p class="lead">yhgbniknu,jgbm yjghbiukhnjik,b kuhniolhkbjhmbk .khbjnku.jhnoilhknkj  khnoil.hknil.k,hniol.khnkj,hm .k,hjnoil.khniol.k,hnilkjniol.kjnli.k,hnmlk,mn ilk.</p>
                    </div>
                    
                </div>
            </div>
            
            
<div class="col-lg-3 col-md-6 " >
            <div class="os">

        

     </div> </div>  
            <div class="col-lg-3 col-md-6 " >
            <div class="os">

        <div class="card" style="width: 18rem;">
  <img src="pic/dark.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
     </div> </div>  
            <div class="col-lg-3 col-md-6 " >
            <div class="os">

        <div class="card" style="width: 18rem;">
  <img src="pic/dark.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
     </div> </div>  
             <div class="col-lg-3 col-md-6 " >
            <div class="os">

        <div class="card" style="width: 18rem;">
  <img src="pic/dark.jpg" class="card-img-top" alt="...">
<div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
     </div> </div>  
          <div class="col-lg-3 col-md-6 " >
            <div class="os">

        <div class="card" style="width: 18rem;">
  <img src="pic/dark.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
     </div> </div>  
            <div class="col-lg-3 col-md-6 " >
            <div class="os">

        <div class="card" style="width: 18rem;">
  <img src="pic/dark.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
                </div> </div>    </div> </div> -- >


 <!--  <div class="col-lg-3 col-md-6 ">
            <div class="os">
            this is boxs
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="os">
            this is box
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="os">
            this is box
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
            <div class="os">
            this is box
                </div>
            </div> 


        
                  <!--------------------start carousel----------------------
    
    
    <div class="container">
       
        <div id="myslide" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#myslide" data-slide-to="0" class="active"></li>
                <li data-target="#myslide" data-slide-to="1"></li>
                <li data-target="#myslide" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="pic/kk.jpg" class="d-block w-100" alt="pic">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="pic/ko.jpg" class="d-block w-100" alt="pic">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="pic/kooa.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#myslide" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myslide" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
       </a>
</div>
           
      </div>
    
     --------------------End carousel---------------------- 
     
        

-->
            