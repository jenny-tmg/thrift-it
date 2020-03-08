<html>
  <head>
  	<title>LOGIN/REGISTRATION </title>
    <?php
    @include 'header.php';

    ?>


 

  </head>

  <body>

    <?php
      @include 'navBar.php';
    ?>

    <div class="container" style="margin-top: 150px;">
    <div class="row">
     <div class="col-lg-6">
      <h2>LOGIN FORM</h2>
      <form action="validatopn.php" method="post">
                  <div class="form-group">
                      <label for="name">User Id:</label>
                      <input type="text" name="user" class="form-control" placeholder="Enter User Id" id="name">
                    </div>
                    
                     <div class="form-group ">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                      </div>

                    
                    <div class="form-group ">
                      <label for="pwd">Password:</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <div class="form-group form-check ">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">Remember password
                      </label>
                    </div>
                    <button type="submit" class="btn btn-warning">Login</button>
                   </form>
                 </div>
               
             
                  
                  <div class="col-lg-6">
                   <h2>REGISTRATION FORM</h2>
                   <form action="userregistration.php" method="post">
                  <div class="form-group">
                      <label for="name">First name:</label>
                      <input type="text" name="first" class="form-control" placeholder="Enter First name" id="name">
                    </div>
                    <div class="form-group">
                      <label for="name">Surname:</label>
                      <input type="text" name="surname" class="form-control" placeholder="Enter Surname name" id="name">
                    </div>
                    
                      <div class="form-group ">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                      </div>

                    
                    <div class="form-group ">
                      <label for="pwd">Create Password:</label>
                      <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <div class=form-group>
                      <label for="gender">Gender:</label> <br>
                      <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                    </div>
                    <div class="form-group form-check ">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> I agree all the terms and conditions
                      </label>
                    </div>
                    <button type="submit" class="btn btn-warning">Register</button>
        
      </form>
     </div>
    </div>
  </div>

</body>
</html>