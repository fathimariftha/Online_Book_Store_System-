<?php
include 'config.php';      //database connetion file

session_start();

$user_id = $_SESSION['user_id']; //assigns the value of the session variable 'user_id' to the $user_id

if(!isset($user_id)){      // $user_id variable is not set or is empty using the isset() function
   header('location:login.php'); //ID is not set redirects them to the 'login.php' page
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
   <link rel="icon" href="images\logo.png" type="image/x-icon">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css\stylefor.css">

</head>
<body>
   

<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">HOME</a> / ABOUT </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images\about.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p align="Justify">At ShelfMate, we pride ourselves on being a top choice for book lovers. 
            Our website offers a wide selection of books, including popular bestsellers and hard-to-find titles. 
            We believe in providing a personalized shopping experience and have implemented features such as
            book recommendations and search filters to make it easy for our customers to find the books they love.
            Our user-friendly interface and intuitive navigation also make shopping on our website a breeze.  </p>
        
         <a href="contact.php" class="btn">contact us</a>
         
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images\pic-1.jpg" alt="">
         <p>This Book Store itself is a very successful company. They are to which labor flees.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
        
      </div>

      <div class="box">
         <img src="images\pic-2.jpg" alt="">
         <p>This Book Store itself is a very successful company. They are to which labor flees.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         
      </div>

      <div class="box">
         <img src="images\pic-3.jpg" alt="">
         <p>This Book Store itself is a very successful company. They are to which labor flees.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         
      </div>

   </div>

</section>



<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
        
      </div>

      <div class="box">
         <img src="images\author-02.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
        
      </div>

      <div class="box">
         <img src="images/author-06.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         
      </div>

   </div>

</section>


     <!-- Footer section -->
     <?php include 'footer.php'; ?>


     <!-- custom js file link  -->
     <script src="js/script.js"></script>

</body>
</html>