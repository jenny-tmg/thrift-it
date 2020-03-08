<html>
  <head>
  	<title>CONTACT/HELP</title>
    <?php
    @include 'header.php';

    ?>
  </head>

  <body>
    <?php
      @include 'navBar.php';
    ?>
  		  
		  <div class="jumbotron" style="margin-top: 100px;">
		    <h1>CONTACT US</h1>
		    <p>THRIFT IT is very transaparent online website.You can give us your feedbacks and feel free to contact at any time .</p>
		  </div>
		  
		</div>
             
        <div class="w-50 m-auto">
	      <form action="usermessage.php" method="post">
			  <div class="form-group">
			    <label for="name">Your name:</label>
			    <input type="name" name ="name" class="form-control" id="nav-item">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Your email:</label>
			    <input type="email" name="email" class="form-control" id="email">
		      </div>
		       <label for="comment">Feedbacks:</label>
				  <textarea class="form-control" name="message" rows="5" id="comment"></textarea>
			
				
				  <button type="submit" style="margin-top: 20px;" class="btn btn-default btn-warning">Submit</button>
				</form>
				  

  		
 </div>
</body>
</html>