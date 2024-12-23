<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>

  <!--swiper css link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>



  <!--awsome font link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <!--custom css link -->
  <link rel="stylesheet" href="style.css">
  

</head>

<body>

  <section class="header">
    <a href="home.html" class="logo">T<span>ourMate</span>.</a>
    <nav class="navbar">
      <a href="home2.php">home</a>
      <a href="packages.php">packages</a>
      <a href="book.php">book</a>
      <a href="about2.php">about</a>

           
            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='change.php?Id=$res_id' >Change Profile</a>";
            ?>
    

            <a href="php/logout.php" style="font-size: small;"> <button class="btn">Log Out</button> </a>


    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>

  </section>

  <section class="home">

    <div class=" swiper home-slider">

      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:url(image/slide1.jpg)no-repeat">
          <div class="content">
            <span>explore , discover, travel</span>
            <h3>let's travel as you want</h3>
            <a href="packages.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(image/slide2.jpg)no-repeat">
          <div class="content">
            <span>explore , discover, travel</span>
            <h3>discover the new places</h3>
            <a href="packages.php" class="btn">discover more</a>
          </div>
        </div>

        <div class="swiper-slide" style="background:url(image/slide3.jpg)no-repeat">
          <div class="content">
            <span>explore , discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="packages.php" class="btn">discover more</a>
          </div>
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>





  </section>



  <section class="services">
    <h1 class="heading-title">our services</h1>

    <div class="box-container">
      <div class="box">
        <img src="icons/adventure.png" alt="">
        <h3>adventure</h3>
      </div>


      <div class="box">
        <img src="icons/location.png" alt="">
        <h3>tour guide</h3>
      </div>

      <div class="box">
        <img src="icons/hiking.png" alt="">
        <h3>hiking</h3>
      </div>

      <div class="box">
        <img src="icons/fire.png" alt="">
        <h3>camp fire</h3>
      </div>

      <div class="box">
        <img src="icons/adventures.png" alt="">
        <h3>off road</h3>
      </div>

    </div>
  </section>

  <section class="home-about">
    <div class="image">
      <img src="image/travel.jpg" alt="">
    </div>

    <div class="content">
      <h3>about us</h3>
      <p>Welcome to TourMate, your friend in amazing travel adventures! At TourMate, we make your travel dreams come
        true with our top-notch travel management services. Whether you're traveling for work or fun, we create travel
        plans just for you. Our goal is to make travel planning easy and stress-free. We handle everything from booking
        flights and hotels to arranging rides and making special itineraries. Our friendly team of travel experts is
        here to help you 24/7, ensuring your trip is smooth and enjoyable. With the latest technology and a promise of
        excellent service, TourMate is your trusted partner in exploring the world with ease and confidence. Start your
        next adventure with TourMate, where every journey is planned perfectly.</p>
        <a href="about2.php" class="btn">read more</a>
      </div>


  </section>


  <section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="image/vanice.jpg" alt="">
        </div>
        <div class="content">
          <h3>Venice,Italy</h3>
          <p>choose from best choices</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="image/jeju.jpg" alt="">
        </div>
        <div class="content">
          <h3>Jeju Island, South Korea</h3>
          <p>choose from best choices</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="image/burjkhalifa.jpg" alt="">
        </div>
        <div class="content">
          <h3>Burj Khalifa, Dubai</h3>
          <p>choose from best choices</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

    </div>

    <div class="load-more"><a href="packages.html" class="btn">load more</a></div>




  </section>

  <section class="home-offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>pick your worthwhile tour with attractive deals and offer!!!!!!!!!!!</p>

      <a href="book.php" class="btn">book now</a>
    </div>
  </section>




























  <!--foooter section start-->
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