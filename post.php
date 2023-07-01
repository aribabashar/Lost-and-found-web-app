<?php

session_start();
?>

<?php
include 'backend/dbconnect.php';
?>

<?php include('navbar.php'); ?>



<!DOCTYPE html>
<html lang='en'>

<head>
   <meta charset='UTF-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <title>Recent Posts - Lost & Found</title>
   <link rel='icon' type='image/x-icon' href='images/Logo.png'>
   <link rel='stylesheet' href='css/post.css'>
</head>

<body>

   <!-- post -->
   <div class='container'>

      <h1 class='heading'>Lost Items</h1>

      <div class='box-container'>

         <?php
         $sql = 'SELECT * FROM lost';
         $res = mysqli_query($conn, $sql);
         $num = mysqli_num_rows($res);
         $sno = 1;
         // $print = mysqli_fetch_array($res);
         while ($row = mysqli_fetch_array($res)) {
            echo "
         <div class='box'>
            <div class='image'>
               <img src='backend/".$row['Image']."' alt=''>
            </div>
            <div class='content'>
               <h3>Item lost:" . $row['Item_Name'] . "</h3>
               <p>" . $row['Description'] . "</p>
               <p>Location: <span>" . $row['Location'] . "</span></p>
               <p>Date: <span>" . $row['Date'] . "</span></p>
               <p>Time: <span>" . $row['Time'] . "</span></p>
               <p>Owner Name: <span>" . $row['Owner_Name'] . "</span></p>
               <a href='" . $row['Email'] . "' class='btn'>Alert Owner</a>
            </div>
         </div>
         ";
            $sno += 1;
         }

         ?>

      </div>

      <div id='load-more'> load more </div>

   </div>

   <!-- Found Post -->
   <div class='container'>

      <h1 class='heading'>Found Items</h1>

      <div class='box-container'>

         <?php
         $sql = 'SELECT * FROM found';
         $res = mysqli_query($conn, $sql);
         $num = mysqli_num_rows($res);
         $sno = 1;
         // $print = mysqli_fetch_array($res);
         while ($row = mysqli_fetch_array($res)) {
            echo "
         <div class='box'>
            <div class='image'>
               <img src='backend/".$row['Image']."' alt=''>
            </div>
            <div class='content'>
               <h3>Item found:" . $row['Item_Name'] . "</h3>
               <p>" . $row['Description'] . "</p>
               <p>Location: <span>" . $row['Location'] . "</span></p>
               <p>Date: <span>" . $row['Date'] . "</span></p>
               <p>Time: <span>" . $row['Time'] . "</span></p>
               <p>Finder Name: <span>" . $row['Founder_Name'] . "</span></p>
               <a href='" . $row['Email'] . "' class='btn'>Alert Finder</a>
            </div>
         </div>
         ";
            $sno += 1;
         }

         ?>

      </div>

      <div id='load-more'> load more </div>

   </div>

   <script>
      let loadMoreBtn = document.querySelector('#load-more');
      let currentItem = 3;

      loadMoreBtn.onclick = () => {
         let boxes = [...document.querySelectorAll('.container .box-container .box')];
         for (var i = currentItem; i < currentItem + 3; i++) {
            boxes[i].style.display = 'inline-block';
         }
         currentItem += 3;

         if (currentItem = boxes.length) {
            loadMoreBtn.style.display = 'none';
         }
      }
   </script>
   <?php include('footer.php'); ?>
</body>

</html>