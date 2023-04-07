<?php       include("functions.php");
            include("session.php");
            include("connect.php");

?>
<!DOCTYPE html>
<html>
    <head>
        
            <meta charset="utf-8">
        <!-- frist mobile meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.css">
                <link rel="stylesheet" href="../css/h1.css">

        <link rel="stylesheet" href="../swiper.css">
         <link rel="stylesheet" href="../icon/fontawesome-free-5.13.0-web/css/all.css">
        <!-- ربط الموقع بالداتابيز -->
      
    </head>
    <body>
        
        <!--بداية القائمة العلوية-------------------------------------  -->
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
    <a href="../SUD.php"><img src="../images/sudar.png"  class="logo"> </a>
         <a href="../ADDads.php" class="btn add"> <i class="fas fa-plus"> <br> أضف إعلانك </i> </a>
    <a href="../signUp.php" class="btn new"> <i class="fas fa-user-plus"> <br> حساب جديد </i></a>
            <?php if(isset($_SESSION['admin_id'])||($_SESSION['user_id'])){
    echo " </a>
    <a href='../logout.php' class='btn sign'> <i class='fas fa-sign-out-alt'> <br> تسجيل خروج  </i></a>
    ";
         }else{   
   $_SESSION['user_id']= null;
    $_SESSION['admin_id'] = null;
echo " </a>
    <a href='log.php' class='btn sign'> <i class='fas fa-sign-in-alt'> <br> تسجيل دخول  </i></a>
        ";
}
            if(isset($_SESSION['admin_id'])){
               echo"<a href='adminArea.php' class='btn sign'> <i class='fas fa-wrench'> <br> إدارة  </i></a>
    "; 
            }
             elseif(isset($_SESSION['user_id'])){
               echo"<a href='manageUser.php' class='btn sign'> <i class='fas fa-wrench'> <br>  إدارة حسابي  </i></a>
    ";} 
       ?>
                
            
               <!--***************** كود php لجلب فئات الإعلانات **********************  -->
           
<div class="dept"  >
  <label >
الأقسام : </label>
 
              

    <?php 
           
            $query = "SELECT * FROM `cate` WHERE visible=1";
            $result = mysqli_query($conn, $query);
              if (!$result){
                  echo ("error".mysqli_error($conn));
              }
            if (mysqli_num_rows($result) > 0){

                      while($row = mysqli_fetch_assoc($result)) {
                       ?>

            <a href="../Ads.php?cate=<?php echo   mysqli_real_escape_string($conn,$row["id"]);  ?> "><?php echo   $row['catName'];  ?> </a>

                <?php
          }
          }
  mysqli_free_result($result);
          
          ?>
         </div>
                <!--***************** كود php لجلب فئات الإعلانات **********************  -->

</div>
        </div>
    </div>
        </div>
            <!--نهاية القائمة العلوية--------------------------  -->
    
    
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 