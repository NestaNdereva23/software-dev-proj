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



<!-- booking header section starts -->

    <section class="header">

    <a href="home.php" class="logo">Green Coach</a>

 <nav class="navbar">
    <a href="home.php">home</a> 
    <a href="routes.php">routes</a> 
    <a href="about.php">about</a> 
    <a href="book.php">book</a> 
 </nav>

 </section>
    


<!-- booking header section ends -->


<!-- booking section starts -->

<section class="booking">
   
  <h1 class="heading-title">book your ticket</h1>

  <form action="book_form.php" methot="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
          <span>name :</span>
          <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputBox">
          <span>email :</span>
          <input type="email" placeholder="enter your email" name="email">
      </div>
      <div class="inputBox">
          <span>phone :</span>
          <input type="number" placeholder="enter your number" name="phone">
      </div>
      <div class="inputBox">
          <span>address :</span>
          <input type="text" placeholder="enter your address" name="address">
      </div>
      <div class="inputBox">
          <span>destination point :</span>
          <input type="text" placeholder="select your destination point" name="location">
      </div>
      <div class="inputBox">
          <span>how many :</span>
          <input type="number" placeholder="number of seats" name="seats">
      </div>
      <div class="inputBox">
          <span>departure :</span>
          <input type="date" name="departure">
      </div>

      <input type="submit" value="submit" class="btn" name="send">

  </div>

 </form>
   

</section>




<!-- booking section ends -->











<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script


<!-- custom js file link -->

<script src="js/script.js"></script>





    
</body>

</html>