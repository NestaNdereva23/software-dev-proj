<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

   <!-- swiper css link -->
   <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body bgcolor="#777">



<!-- booking header section starts -->

  <section class="header">
    <a href="home.php" class="logo">Marcopolo Travels</a>

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

  <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
          <span>firstname :</span>
          <input type="text" placeholder="enter your firstname" name="firstname">
      </div>
      <div class="inputBox">
          <span>lastname :</span>
          <input type="text" placeholder="enter your lastname" name="lastname">
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
          <span>from:</span>
          <input type="text" placeholder="select your starting point" name="from_location">
      </div>
      <div class="inputBox">
          <span>destination point :</span>
          <input type="text" placeholder="select your destination point" name="to_location">
      </div>
      <div class="inputBox">
          <span>how many :</span>
          <input type="number" placeholder="number of seats" name="seats">
      </div>
      <div class="inputBox">
          <span>departure :</span>
          <input type="date" name="departure">
      </div>
      <div class="inputBox">
          <span>mode of payment:</span>
         <select name="payment_mode"> 
          <h3><option>Mpesa</option>
        <option>Creditcard</option>
        <option>Airtelmoney</option></h3>
      </select>
      </div>
      

      <input type="submit" value="submit" class="btn" name="send">

  </div>

 </form>
   

</section>




<!-- booking section ends -->


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