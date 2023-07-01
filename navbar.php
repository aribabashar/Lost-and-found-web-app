<?php
include 'backend/dbconnect.php';
?>

<?php
// session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}
// echo $_SESSION['user'];


// $current_user = $_SESSION['id']

// $usernm = $_SESSION['username'];
// var_dump($loggedin);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="/images/Logo.png">
  <link rel="stylesheet" href="css/navbar.css">
</head>

<body>
  <nav class="nav">
    <div class="nav-main">
      <div class="logo">L & F</div>
      <ul class="nav-links">
        <li class="nav-link"><a href="index.php">Home</a></li>
        <li class="nav-link"><a href="post.php">View Recent Posts</a></li>
        <li class="nav-link"><a href="lost.php">Submit Lost Item</a></li>
        <li class="nav-link"><a href="found.php">Submit Found Item</a></li>
        <li class="nav-link"><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>

    <?php

//         if($loggedin){
          
// echo"
//     <div class='cta'>
//       <button class='btn btn-secondary'><a href='panel/admindash.php'>Admin Dashboard</a></button>
//       <button class='btn btn-primary'><a href='logout.php'>logout</a></button>
//     </div>";}
  if($loggedin){
echo"
    <div class='cta'>
      <button class='btn btn-secondary'><a href='panel/dashboard.php'>Dashboard</a></button>
      <button class='btn btn-primary'><a href='logout.php'>logout</a></button>
    </div>";}
    ?>
    
<?php
    if(!$loggedin){
      echo "
      <div class='cta'>
      <button class='btn btn-secondary'><a href='login.php'>Admin Login</a></button>
      <button class='btn btn-primary'><a href='Userlogin.php'>User Login</a></button>
    </div>
    ";}
    ?>

    <div class="menu">
      <button class="btn btn-primary menu"><i class="bi-list"></i></button>
      <ul class="nav-mobile">
        <li class="nav-link"><a href="index.php">Home</a></li>
        <li class="nav-link"><a href="post.php">View Recent Posts</a></li>
        <li class="nav-link"><a href="lost.php">Submit Lost Item</a></li>
        <li class="nav-link"><a href="found.php">Submit Found Item</a></li>
        <li class="nav-link"><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </nav>
</body>

</html>