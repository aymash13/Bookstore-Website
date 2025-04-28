<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'navbar.php'; ?>

<div class="heading">
   <h3>about us</h3>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about image.jpg" alt="">
      </div>

      <div class="content">
        <p>Welcome to Librarium — where every book finds its reader.</p>
        <p>At Librarium, we believe that stories have the power to inspire, educate, and transform lives. Our carefully curated collection spans across genres, from timeless classics and modern fiction to insightful non-fiction, academic resources, and hidden literary gems.</p>
        <p>Whether you're a passionate bibliophile, a casual reader, or a student on a quest for knowledge, Librarium is your trusted companion. We are committed to providing a warm, welcoming space — both online and offline — where readers can discover new worlds, spark their imaginations, and connect with a vibrant community of book lovers.</p>
        <p>Explore Librarium. Find your next favorite story.</p>
        <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/person1.jpg" alt="">
         <p>Librarium has become my favorite online bookstore! The variety is amazing and the delivery is always on time. Highly recommend it to all book lovers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Emma Stone</h3>
      </div>

      <div class="box">
         <img src="images/person2.jpg" alt="">
         <p>Beautifully curated collection and a very easy-to-use website. I found rare books here that I couldn't find elsewhere. Librarium truly understands readers!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Daniel Roberts</h3>
      </div>

      <div class="box">
         <img src="images/person3.jpg" alt="">
         <p>Excellent customer service and a wide range of books at great prices. Librarium is my go-to place whenever I need a new adventure to dive into!
         Highly recommend it to all book lovers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophia Williams</h3>
      </div>

      <div class="box">
         <img src="images/person4.jpg" alt="">
         <p>I love the personalized recommendations! Librarium helped me discover some of the best books I've ever read. A true paradise for readers!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Michael Johnson</h3>
      </div>

      <div class="box">
         <img src="images/person5.jpg" alt="">
         <p>The website design is clean and intuitive. Finding and ordering books is super easy. Plus, the packaging is so neat and thoughtful!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia Brown</h3>
      </div>

      <div class="box">
         <img src="images/person6.jpg" alt="">
         <p>Absolutely love Librarium! The book descriptions are detailed, and the customer feedback section really helps. Fast shipping and fantastic service.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Liam Davis</h3>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>