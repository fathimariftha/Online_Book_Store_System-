<?php

include 'config.php';

session_start();  //starts or resumes a session

$admin_id = $_SESSION['admin_id'];  // assigns the value of the session variable 'admin_id' 

if(!isset($admin_id)){     //$admin_id variable is not set or is empty using the isset() function
   header('location:login.php'); //redirects them to the 'login.php' page using the header() function
};

if(isset($_GET['delete'])){   //'delete' parameter is present in the URL 
   $delete_id = $_GET['delete']; //retrieves its value using $_GET['delete'] and assigns it to the $delete_id variable
   mysqli_query($conn, "DELETE FROM `message` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_contacts.php'); //redirects the user to the 'admin_contacts.php' page 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>
   <link rel="icon" href="images\logo.png" type="image/x-icon">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_stylefor.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title"> messages </h1>

   <div class="box-container">
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');  
      if(mysqli_num_rows($select_message) > 0){  //checks at least one row returned from the query result 
         while($fetch_message = mysqli_fetch_assoc($select_message)){
            //while loop iterates over each row returned from the query result using the mysqli_fetch_assoc() function
            
  
  ?>

    <div class="box">
      
      <p> user id : <span><?php echo $fetch_message['user_id']; ?></span> </p> 
      <p> name : <span><?php echo $fetch_message['name']; ?></span> </p>
      <p> number : <span><?php echo $fetch_message['number']; ?></span> </p>
      <p> email : <span><?php echo $fetch_message['email']; ?></span> </p>
      <p> message : <span><?php echo $fetch_message['message']; ?></span> </p>
      <a href="admin_contacts.php?delete=<?php echo $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete message</a>
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">you have no messages!</p>';
   }
   ?>
   </div>

</section>



<!-- custom admin js file link  -->
<script src="js/script.js"></script>

</body>
</html>