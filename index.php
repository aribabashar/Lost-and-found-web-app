<?php

session_start();
?>

<?php
include 'backend/dbconnect.php';
?>


<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Lost & Found</title>
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  </head>
  
  <body>
  <?php include('navbar.php'); ?>
  <!-- Hero Section -->
  <header>
    <section class="hero">
      <div class="left">
        <h1>Lost & Found</h1>
        <p>Lost or Found Something?
            No Worries!<br>
            With our online lost & found, you can Track what you are looking for!</p>
        <a href="lost.php">Submit Lost Item</a>
        <a href="found.php">Submit Found Item</a>
      </div>
      <div class="right">
        <img src="https://www.sciencenews.org/wp-content/uploads/2019/06/062019_sg_wallet_feat.jpg" alt="">
      </div>
    </section>
  </header>
  <!-- Hero Section Ends -->

  <!-- About -->
  <section class="about">
    <div class="abt-heading">
      <h1>Online Lost & Found Platform</h1>
    </div>
    <div class="abt-content">
      <p>These days many of us lose our valuable items but no such proper platform is available for returning
        these lost items. So, it is mandatory to develop a system that can help to overcome these problems.</p><br>
      <p>Lost and found management system, manage and track the lost and found items. This website is
        developed for the students, faculty members and visitors of the university yet anyone is able to use
        it. Many times, we come across multiple incidents someone has lost his/her valuable item and
        someone has found a lost item. Usually, the people who find something submit it to the in-charge of
        the department and these items are placed in waiting for the person who lost it, but sometimes
        person who lost his item is not aware about this. The in-charge of the department wants to give back
        the items to their owners but due to unavailability of suitable platform, lost items are not returned.
        Due to this reason, the students, employees, as well as visitors face a lot of difficulties to find their
        missing items. For these kinds of issues, we have developed a web application of lost and found
        management system.</p>
    </div>
  </section>
  <section class="services">
    <div class="abt-services">
      <h1>Lost & Found Services</h1>
    </div>
    <div class="service-content">
      <ul>
        <li><i class="uil uil-check-circle"></i>We connect you to <a href="#">lost</a> and <a href="#">found</a> items that fit the criteria of the item you <a href="#">lost</a> or <a href="#">found</a>.</li>
        <li><i class="uil uil-check-circle"></i>Easily file your <a href="#">lost</a> or <a href="#">found</a> claim quickly and efficiently</li>
        <li><i class="uil uil-check-circle"></i><a href="#">Rely on us</a>, we effectively trace, track and follow <a href="#">lost</a> and <a href="#">found</a> items.</li>
        <li><i class="uil uil-check-circle"></i><a href="#">Personalized backend</a> to monitor items that you've submitted.</li>
      </ul>
    </div>
  </section>
  <!-- About ends -->

  <!-- recent post -->
  <section class="recent-post">
    <div class="post-heading">
      <h1>Recently Submitted items</h1>
      <!-- <div class = "line">
            <div></div>
            <div></div>
            <div></div>
          </div> -->
    </div>
    <div class="sub-heading">
      <h4>View recently posted items below</h4>
    </div>
    <div class="container">

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
      <button class="btn-post"><a href="post.php">View Posts</a></button>
  </section>
  <!-- recent post end -->

  <!-- Meeting Policy -->
  <section class="t-c">
    <div class="abt-t-c">
      <h1>Meeting Policy</h1>
    </div>
    <div class="t-c-content">
      <ul>
        <li><i class="uil uil-check-circle"></i>Meet in Public and Stay in Public.</li>
        <li><i class="uil uil-check-circle"></i>Never meet at your home, someone's home, or any other private location.</li>
        <li><i class="uil uil-check-circle"></i>If the person pressures you to go to a private location, just say NO, your safety is more important that a mere item.</li>
        <li><i class="uil uil-check-circle"></i>Tell Friends and Family About Your Plans.</li>
        <li><i class="uil uil-check-circle"></i>Be in Control of Your Transportation</li>
        <li><i class="uil uil-check-circle"></i>If You Feel Uncomfortable, Leave ASAP!</li>
      </ul>
    </div>
  </section>
  <!-- Meeting Policy ends -->

  <!-- T&C -->
  <section class="t-c">
    <div class="abt-t-c">
      <h1>Terms & Conditions</h1>
    </div>
    <div class="t-c-content">
      <p>By using the Service, you agree that you will not</p>
      <ul>
        <li><i class="uil uil-check-circle"></i>use the Service for any purpose that is illegal or prohibited by this Agreement.</li>
        <li><i class="uil uil-check-circle"></i>use the Service for any harmful or nefarious purpose</li>
        <li><i class="uil uil-check-circle"></i>use the Service in order to damage L&F</li>
        <li><i class="uil uil-check-circle"></i>spam, solicit money from or defraud anyone</li>
        <li><i class="uil uil-check-circle"></i>bully, "stalk", intimidate, assault, harass, mistreat or defame any person.</li>
        <li><i class="uil uil-check-circle"></i>post any Content that violates or infringes anyone's rights, including rights of publicity, privacy, copyright, trademark or other intellectual property or contract right.</li>
        <li><i class="uil uil-check-circle"></i>post any Content that is hate speech, threatening, sexually explicit or pornographic.</li>
        <li><i class="uil uil-check-circle"></i>post any Content that incites violence; or contains nudity or graphic or gratuitous violence</li>
        <li><i class="uil uil-check-circle"></i>post any Content that promotes racism, bigotry, hatred or physical harm of any kind against any group or individual.</li>
      </ul>
    </div>
  </section>
  <!-- T&C ends -->

  <?php include('footer.php'); ?>
</body>

</html>