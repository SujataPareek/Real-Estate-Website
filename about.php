<?php  

include 'components/connect.php';



if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Header section -->
<header class="header">
   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fas fa-house"></i>MyHome</a>
         <ul>
            <li><a href="#">Post Property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div class="menu">
            <ul>
               <li><a href="#">Buy<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">House</a></li>
                     <li><a href="#">Flat</a></li>
                     <li><a href="#">Shop</a></li>
                     <li><a href="#">Ready to Move</a></li>
                     <li><a href="#">Furnished</a></li>
                  </ul>
               </li>
               <li><a href="#">Sell<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">Post Property</a></li>
                     <li><a href="#">Dashboard</a></li>
                  </ul>
               </li>
               <li><a href="#">Rent</a>
                  <ul>
                     <li><a href="#">House</a></li>
                     <li><a href="#">Flat</a></li>
                     <li><a href="#">Shop</a></li>
                  </ul>
               </li>
               <li><a href="#">Help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.php">About Us</a></li>
                     <li><a href="contact.php">Contact Us</a></li>
                     <li><a href="contact.php#faq">FAQ</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <ul>
            <li><a href="#">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="register.php">Register</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>
</header>

<!-- About section -->
<section class="about">
   <div class="row">
      <div class="image">
         <img src="https://www.shutterstock.com/image-photo/business-success-real-estate-agents-600nw-2001133727.jpg" alt="">
      </div>
      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Find your dream property effortlessly—whether buying or renting, we connect you to the best deals, trusted listings, and personalized support to make your property journey smooth and hassle-free.</p>
         <a href="contact.php" class="inline-btn">Contact Us</a>
      </div>
   </div>
</section>

<!-- Steps section -->
<section class="steps">
   <h1 class="heading">3 Simple Steps</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Search Property</h3>
         <p>Best properties for you at just one click.</p>
      </div>
      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Contact Agents</h3>
         <p>Trusted agents for property buying, selling & rentals.</p>
      </div>
      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Property</h3>
         <p>Get the best deals as per your requirements.</p>
      </div>
   </div>
</section>

<!-- Reviews section -->
<section class="reviews">
   <h1 class="heading">Client's Reviews</h1>
   <div class="box-container">
      <div class="box">
         <div class="user">
            <img src="https://restaurantindia.s3.ap-south-1.amazonaws.com/s3fs-public/content9670.jpg" alt="">
            <div>
               <h3>Rajat Sharma</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>I found my dream home within days of using this website. Highly recommend!</p>
      </div>
      <div class="box">
         <div class="user">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/037/752/128/small/ai-generated-beautiful-indian-woman-in-saree-smiling-at-camera-at-home-free-photo.jpg" alt="">
            <div>
               <h3>Riddhi Panday</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I had a tight deadline to move, and this website saved the day. Within hours, I had multiple options to choose from. Super efficient!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>John </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>As a first-time buyer, I was nervous about the whole process, but this website made it so easy. The guides, tools, and agent recommendations were a huge help!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="https://i.pinimg.com/736x/f6/8b/07/f68b07afcf0acea994b7681e9caaff35.jpg" alt="">
            <div>
               <h3>KK Rao</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>This site made renting a property so easy. The filters were spot on, and I could quickly find a home that matched my preferences and budget. Five stars!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="https://www.kcl.ac.uk/ImportedImages/Schools/Business/people/Kamini-Gupta.x9f045c24.jpg?w=780&h=519&crop=780,440,0,40" alt="">
            <div>
               <h3>Aashi Goyal</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>I was amazed at the variety of properties available here. Whether you're looking to rent or buy, there’s something for everyone. I found my ideal apartment in no time</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="https://media.gettyimages.com/id/1502236988/photo/portrait-of-senior-indian-woman-at-home.jpg?s=612x612&w=gi&k=20&c=nq-eKkkFcbVxPkIbj47_D0rnBj-HBgqfsYgPxD-Kd50=" alt="">
            <div>
               <h3>Dishita Gupta</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>This is hands down the best real estate platform I’ve used. The features, accuracy of information, and overall experience are unmatched. I’ll definitely use it again.</p>
      </div>

   </div>

</section>

<!-- review section ends -->






   </div>
</section>

<!-- Footer section -->
<footer class="footer">
   <section class="flex">
      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>123456789</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>1112223333</span></a>
         <a href="mailto:binalsetia2255@gmail.com"><i class="fas fa-envelope"></i><span>binalsetia2255@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>Noida, India-201309</span></a>
      </div>
      <div class="box">
         <a href="home.php"><span>Home</span></a>
         <a href="about.php"><span>About</span></a>
         <a href="contact.php"><span>Contact</span></a>
         <a href="listings.php"><span>All Listings</span></a>
         <a href="#"><span>Saved Properties</span></a>
      </div>
      <div class="box">
         <a href="#"><span>Facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>Twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>LinkedIn</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>Instagram</span><i class="fab fa-instagram"></i></a>
      </div>
   </section>
   <div class="credit">&copy; Copyright @ 2024 | All Rights Reserved!</div>
</footer>

<!-- Custom JS file link -->
<script src="js/script.js"></script>

</body>
</html>