<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!--swiper css link-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">



    <!--awsome font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!--custom css link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<section class="header">
    <a href="home2.php" class= "logo">T<span>ourMate</span>.</a>

    <nav class="navbar">
        <a href="home2.php">home</a>
        <a href="packages.php">packages</a>
        <a href="book.php">book</a>
        <a href="about2.php">about</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
    
</section>

<div class="heading" style="background:url(image/enjoy.jpg)no-repeat">
    <h1>book now</h1>
</div>

<section class="booking">
  <h1 class="heading-title">book your trip!</h1>
  <form action="book_form.php" method="post" class="book-form">
    <div class="flex">
      <div class="inputbox">
        <span>name: </span>
        <input type="text" placeholder="enter your name" name="name">
      </div>
      <div class="inputbox">
        <span>email: </span>
        <input type="email" placeholder="enter your email" name="email">
      </div>
      <div class="inputbox">
        <span>contuct no: </span>
        <input type="number" placeholder="enter your number" name="phone">
      </div>
      <div class="inputbox">
        <span>address: </span>
        <input type="text" placeholder="enter your address" name="address">
      </div>
      <div class="inputbox">
        <span>where to: </span>
        <input type="text" placeholder="place you want to visit" name="location">
      </div>
      <div class="inputbox">
        <span>how many: </span>
        <input type="number" placeholder="number of guests" name="guests">
      </div>
      <div class="inputbox">
        <span>arrivals: </span>
        <input type="date"  name="arrivals">
      </div>
      <div class="inputbox">
        <span>leaving: </span>
        <input type="date"  name="leaving">
      </div>
    </div>
    <input type="submit" value="submit" class="btn" name="send">
  </form>

</section>




















<section class="footer">

    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a href="home2.php"><i class="fas fa-angle-right"></i></i>home</a>
        <a href="packages.php"><i class="fas fa-angle-right"></i>packages</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        <a href="about2.php"><i class="fas fa-angle-right"></i>about</a>
      </div>  
      <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
      </div>
      <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
        <a href="#"><i class="fas fa-phone"></i> +111-214-412</a>
        <a href="#"><i class="fas fa-envelope"></i> tourmate@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> uttara,Dhaka-1230</a>
      </div>  
      <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>fa-linkedin</a>
      </div>
    </div>

    <div class="credit">created by <span>shanta islam </span>| all rights reserved!</div>

</section>

 <!-- swiper js link-->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <script src="js/script.js"></script>

 

  

</body>

</html>