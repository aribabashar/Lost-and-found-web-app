<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Lost & Found</title>
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  </head>
  
  <body>
    <?php include('navbar.php'); ?>

    <section class="get-in-touch">
   <h1 class="title">Get in Touch!</h1>
   <form class="contact-form row" action="mailto: aribaaa667@gmail.com" method="post" enctype="text/plain"> 
      <div class="form-field col x-50">
         <input id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Name</label>
      </div>
      <div class="form-field col x-50">
         <input id="email" class="input-text js-input" type="email" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col x-100">
         <input id="message" class="input-text js-input" type="text" required>
         <label class="label" for="message">Message</label>
      </div>
      <div class="form-field col x-100 align-center">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>

<script>
$( '.js-input' ).keyup(function() {
  if( $(this).val() ) {
     $(this).addClass('not-empty');
  } else {
     $(this).removeClass('not-empty');
  }
});
</script>

</body>
</html>