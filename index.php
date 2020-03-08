<html>
  <head>
  	<title> Home </title>
    <?php
    @include 'header.php';

    ?>


 

  </head>


  <body>
    <?php
    @include 'navBar.php';
    ?>
  	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active mb-5">
      <img src="pin.jpg" alt=" Welcome To Our Site!" width="1100" height="500">
      <div class="carousel-caption container text-center text-white hearderset">
  			<h2> Welcome To Our Site!</h2>
  			<h1>HAVE A GREAT DAY AHEAD</h1>
       </div>
    </div>

    <div class="carousel-item mb-5">
      <img src="pin2.jpg" alt=" Welcome To Our Site!" width="1100" height="500">
      <div class="carousel-caption container text-center text-white hearderset">
  			<h2> Welcome To Our Site!</h2>
  			<h1>HAVE A GREAT DAY AHEAD</h1>
       </div>
    </div>
    <div class="carousel-item mb-5 ">
      <img src="pin3.jpg" alt=" Welcome To Our Site!" width="1100" height="500">
      <div class="carousel-caption container text-center text-white hearderset">
  			<h2> Welcome To Our Site!</h2>
  			<h1>HAVE A GREAT DAY AHEAD</h1>
       </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!--login/Register-->
    <section id="login" class="bg-warning ">
  	<article class="py-5 " >
  		<div >
  		    <h3 class="display-4 text-center" >Want to join ?</h3> 
  		   <p class="text-center">You can now easily buy second-hand products online</p>
  		    <!-- Button to Open the Modal -->
          <div class=" text-center">
					 <a href="login+register.php"><button type="button " class="btn btn-danger ">REGISTER</button></a>
          </div>
        </div>
  	</article>
  </section>



<!--Itemsssssssss--------->
<section id="items" class="container-fluid ouritems text-center">
  <h1>ITEMS</h1>
  <p>We have following items </p>
 <div class="row row-setting ">
 	<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
 			<div class="imgsetting d-block m-auto bg-warning">
 		      <i class="fa fa-motorcycle fa-3x text-white"></i>
 		   </div>
 		   <h2>Sports & Fitness</h2>
 		   <p>Sports for</p>
 		</div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
 			<div class="imgsetting d-block m-auto bg-warning">
 				<i class="fa fa-music fa-3x text-white"></i>
 		   </div>
 		     <h2>Musical Instrument</h2>
 		   <p>Sports for</p>
 		</div>

 		   <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
 		   <div class="imgsetting d-block m-auto bg-warning">
 			<i class="fa fa-phone fa-3x text-white"></i>
 		   </div>
 		     <h2>Phone & Appliance</h2>
 		   <p>Sports for</p>
 		</div>
 </div>


  <div class="row row-setting">
 	<div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
 			<div class="imgsetting d-block m-auto bg-warning">
 		      <i class="fa fa-database fa-3x text-white"></i>
 		   </div>
 		   <h2>Funiture & Appliances</h2>
 		   <p>Sports for</p>
 		</div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
 			<div class="imgsetting d-block m-auto bg-warning">
 				<i class="fa fa-headphones fa-3x text-white"></i>
 		   </div>
 		     <h2>Electronics & Appliances</h2>
 		   <p>spoj</p>
 		</div>

 		   <div class=" col-lg-4 col-md-4 col-sm-4 col-10 d-block m-auto">
 		   <div class="imgsetting d-block m-auto bg-warning">
 			<i class="fa fa-star-o fa-3x text-white"></i>
 		   </div>
 		     <h2>Fashion</h2>
 		   <p>Sports for</p>
 		</div>
 </div>

  <div class="row row-setting mb-5">
 	
            <div class="col-sm-6  d-block m-auto">
 			<div class="imgsetting d-block m-auto bg-warning">
 				<i class="fa fa-book fa-3x text-white"></i>
 		   </div>
 		     <h2>Education</h2>
 		   <p>Sports for</p>
 		</div>

 		   <div class="col-sm-6   d-block m-auto">
 		   <div class="imgsetting d-block m-auto bg-warning">
 			<i class="fa fa-search-plus fa-3x text-white"></i>
 		   </div>
 		     <h2>Extras</h2>
 		   <p>Sports for</p>
 		</div>
 </div>


  <section id="contact-help" class="bg-warning" >
  	<article class="py-5 text-center" >
  		<div >
  		   <h3 class="display-4" >+977 9765432135</h3>
  		   <p> If you want best service call us now.</p>
          <a href="contact+help.php">
            <button class="btn btn-danger" >Contact now</button>            
          </a>
  	    </div>
  	</article>
  </section>
  
 </section>
 
  <script type="text/javascript" src="./animatedScroll.js"></script>
   </body>
</html>