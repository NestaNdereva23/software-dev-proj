<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Design</title>

   <!-- swiper css link -->
   <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>




<!-- header section starts -->

    <section class="header">

    <a href="home.php" class="logo">Green Coach</a>

 <nav class="navbar">
    <a href="home.php">home</a> 
    <a href="routes.php">routes</a> 
    <a href="about.php">about</a> 
    <a href="book.php">book</a> 
 </nav>


    </section>
    


<!-- header section ends -->


<!-- home section starts -->

<section class="home">

     <div class="swiper home-slider">

      <div class="swiper-wrapper">


        <div class="swiper-slide slide" style="background:url(images/bus1.jpg) no-repeat">
          <div class="content">
          <div class="container jumbotron" style="width:20%;margin-top:90px;border-radius:10px;padding:0">
<form action="insert.php" method="post" class="form-horizontal" style="margin-right:0px;width:150%;">
	<div class="form-group">
    	<label for="Name" class="control-label col-sm-2">Name:</label>
        <div class="col-sm-10">
        <input type="text" name="name" class="form-control" id="Name" placeholder="Enter your name">
        </div>
    </div>

    <div class="form-group">
    	<label for="address" class="control-label col-sm-2">Address:</label>
        <div class="col-sm-10">
        <input type="text" name="addr" class="form-control" id="Address" placeholder="Enter your address">
        </div>
    </div>


    <div class="form-group">
    	<label for="email" class="control-label col-sm-2">Email:</label>
        <div class="col-sm-10">
        <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email address">
        </div>
    </div>

    <div class="form-group">
    	<label for="username" class="control-label col-sm-2">Username:</label>
        <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter a username for login">
        </div>
    </div>

    <div class="form-group">
    	<label for="password" class="control-label col-sm-2">Password:</label>
        <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter a password for login">
        </div>
    </div>

    <div class="form-group">
    	<label for="password_retype" class="control-label col-sm-2">Password (retype):</label>
        <div class="col-sm-10">
        <input type="password" name="password_retype"  class="form-control" id="password_retype" placeholder="Retype your address">
        </div>
    </div>

    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="submit" value="Sign Up" class="btn btn-success">
     &nbsp;&nbsp;&nbsp;
    <a href="home.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
    </div>
    
</form>
</div> 
               <span>Looking for comfortable rides?</span>
               <h3>Travel with us</h3>
               <a href="book.php"  class="btn">discover more</a>



 
          </div>
        </div>
      

        

      </div>

     </div>    

    
</section>
  
<!-- home section ends --> 

<!-- footer section starts -->

<section class="footer">

</section>



<!-- footer section ends -->








<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script


<!-- custom js file link -->

<script src="js/script.js"></script>





    
</body>
</html>