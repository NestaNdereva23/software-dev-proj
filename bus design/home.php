<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking Design</title>

   <!-- swiper css link -->
   <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">
   <!-- custom css file link -->
   <link rel="stylesheet" href="css/home.css">
</head>
<body>




<!-- header section starts -->

      <section class="header">
            <a href="home.php" class="logo">Marcopolo Travels</a>

      <nav class="navbar">
            <a href="home.php">home</a> 
            <a href="routes.php">routes</a> 
            <a href="about.php">about</a> 
            <a href="book.php">book</a> 
      </nav>

</section>
    


<!-- header section ends -->


<!-- home section starts -->

<div class="bg-img">

<div class="content">
      <h3><br>Looking for a comfortable ride?</br>Book your ticket with us!</h3>
</div>

<form action="/action_page.php"
      class="container">
            <h1>SignUp</h1>

      <label for="firstname">
            <b>firstname</b>
      </label>
      <input type="text"
            placeholder="Enter firstname"
            name="firstname" required>

      <label for="lastname">
            <b>lastname</b>
      </label>
      <input type="text"
            placeholder="Enter lastname"
            name="lastname" required>

      <label for="email">
            <b>Email</b>
      </label>
      <input type="text"
            placeholder="Enter Email"
            name="email" required>

      <label for="psw">
            <b>Password</b>
      </label>
      <input type="password"
            placeholder="Enter Password"
            name="psw" required>

      <button type="submit"
            class="btn">Login
      </button>

</form>









</div>





<!-- home section ends -->

<!-- routes section starts -->

<section class="routes">

 <h1 class="heading-title">top marcopolo routes</h1> 

 <div class="box-container">
   
   <div class="box">
        <div class="image">
            <img src="images/mombasa.jpg" alt="">
        </div>
        <div class="content">
            <h3>nairobi to mombasa</h3>
            <p>Book your trip now for only <br><h3>ksh.1500</h3></br></p>
            <a href="book.php" class="btn">book now</a>
        </div>

  </div>

  <div class="box">
        <div class="image">
            <img src="images/nai.jpg" alt="">
        </div>
        <div class="content">
            <h3>mombasa to nairobi</h3>
            <p>Book your trip now for only <br><h3>ksh.1300</h3><br></p>
            <a href="book.php" class="btn">book now</a>
        </div>

  </div>

   <div class="box">
        <div class="image">
            <img src="images/image3.jpg" alt="">
        </div>
        <div class="content">
            <h3>nairobi to naivasha</h3>
            <p>Book your trip now for only <br><h3>ksh.800</h3></br></p>
            <a href="book.php" class="btn">book now</a>
        </div>

  </div>
  <div class="box">
        <div class="image">
            <img src="images/nai.jpg" alt="">
        </div>
        <div class="content">
            <h3>naivasha to nairobi</h3>
            <p>Book your trip now for only <br><h3>ksh.800</h3></br></p>
            <a href="book.php" class="btn">book now</a>
        </div>

  </div>


 

 </div>



</section>


<!-- routes section ends -->


<!-- footer section starts -->

<section class="footer">
    
  <div class="box-container">

    <div class="box">
      <h3>quick links</h3>
      <a href="home.php"> <i class="fas fa-angle-right"></i> home</a> 
      <a href="routes.php"> <i class="fas fa-angle-right"></i>routes</a> 
      <a href="about.php"> <i class="fas fa-angle-right"></i>about</a> 
      <a href="book.php"> <i class="fas fa-angle-right"></i>book</a> 
     
    </div>

    <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
      <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
      <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a> 
    </div>
    
    <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +254-700-000-00</a>
      <a href="#"> <i class="fas fa-envelope"></i>marcopolotravels@gmail.com</a>
      <a href="#"> <i class="fas fa-map"></i> nairobi, kenya - 6780</a>
    </div>

    
    </div>

  </div>

</section>

<!-- footer section ends -->







<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script


<!-- custom js file link -->

<script src="js/script.js"></script>





    
</body>
</html>