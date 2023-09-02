
<!-- custom css file link  -->
<link rel="stylesheet" href="css\admin_stylefor.css">

<?php
if (isset($_SESSION['message'])) {  //variable is set, indicating that there are messages to display
   $messages = $_SESSION['message'];   //assigns the value of $message

   foreach ($messages as $msg) { //foreach loop iterates over each message in the $messages array
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }

   // Clear the session variable after displaying the messages
   $_SESSION['message'] = array(); //assigning an empty array
}
?>



<header class="header">
   <div class="header-2">
   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">HOME</a>
         <a href="admin_products.php">PRODUCTS</a>
         <a href="admin_orders.php">ORDERS</a>
         <a href="admin_users.php">USERS</a>
         <a href="admin_contacts.php">MESSAGES</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="user-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
         
      </div>

   </div>
<div>
</header>