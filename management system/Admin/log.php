<?php session_start();?>
<?php 
include("../includes/connect.php");
include("../includes/layout/header.php");

     

?>
    
    <title>
            تسجيل الدخول
        </title>
    
    <body>
       <style>
           body{
                background-image: url(pic/real-estate-tech-1.jpg);
               background-repeat: no-repeat;
               background-size: cover;
           }
        </style> 

    
        
        
        <!--------------------Start login part ----------------------  -->
        <div class="container">
  <div class="row">
      <div class="col-lg-8">
<?php  echo   msg(); ?> 
<?php  $errors = err(); ?> 
<?php  error_function($errors); ?> 
    
      </div></div></div>
      <form class="login" method="post"  action="log-sub.php">
                  <strong class="log">تسجيل الدخول </strong>
      <br>
    <label for="name" >اسم المستخدم : </label>
    <input type="text" name="username" class="form-control formL" id="name" aria-describedby="emailHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text small1"> .لن نشارك بريدك الإلكتروني مع اي جهة اخرى </small>
 
    <label for="Password1">كلمة المرور :</label>
    <input type="password" name="pwd" class="form-control formL" id="Password1" placeholder="Password">
  
  <button type="submit" name="submit" class="btn btn-primary">دخول </button>

        </form>    
        
    
    
                <!--------------------end login part ----------------------  -->

         <!---------------------------------------------- Contact ------------------------------------->
        
        
 <!---------------------------------------------------end Contact -------------------------------------------------------->
        
        
 <!----------------------------------------------------- Footer ---------------------------------------------------------->
   
        
        <!-- Scripts -->
    
    <?php 
include("../includes/layout/footer.php");

     
?>
	</body>
</html>


<!-- #033e79  -->

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
            