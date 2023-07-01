<?php

session_start();
include '../backend/dbconnect.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../index.php");
    
    exit;
}

// session_start();

// Assigning usernme of the logged in user into a variable for easy access.
$usernm = $_SESSION['username'];
// echo $usernm;
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sidebar</title>

        <!--fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">

        
        <!--css-->
        <link rel="stylesheet" href="css/profile.css">

        <!--js-->
        <script src="js/dashboard.js" defer></script>
    
    <!--fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
  </head>
    <body>
        
        <!--aside bar-->
        <nav class="navbar">            
            <div class="navbar-container">
                <!--logo div-->
                <div class="navbar-logo-div">
                    <a class="navbar-logo-link" href="#">
                       L & F
                    </a>
                    <button class="navbar-toggler"><i class='fas fa-solid fa-bars'></i></button>
                </div>

                <!--search input-->
                <!-- <input type="search" name="search" placeholder="Search..."
                 class="navbar-search" id="search">
              
                <i id='icon-search' class="fas fa-regular fa-magnifying-glass"></i> -->

                <!--item list-->
                <ul class="menu-list">   
                    <li class="menu-item">                        
                        <a class="menu-link" href="dashboard.php"> 
                            <i class="fas fa-solid fa-table"></i>
                            <span class="menu-link-text">Dashboard</span>                            
                        </a>
                    </li>
                    <!-- <li class="menu-item">                        
                        <a class="menu-link" href="#">
                            <i class="fas fa-solid fa-paw"></i>
                            <span class="menu-link-text">Pets</span>    
                        </a>
                    </li> -->
                    <li class="menu-item">                        
                        <a class="menu-link" class="menu-link" href="profile.php">
                            <i class="fas fa-solid fa-user"></i>
                            <span class="menu-link-text">Profile</span>    
                        </a>
                    </li>
                    <li class="menu-item">                            
                        <a class="menu-link" href="posts.php">
                          <i class="fa-solid fa-desktop"></i>
                            <span class="menu-link-text">Manage Posts</span>    
                        </a>
                    </li>
                    <li class="menu-item">                            
                        <a class="menu-link" href="password.php">
                          <i class="fa-solid fa-key"></i>
                            <span class="menu-link-text">Change Password</span>    
                        </a>
                    </li>
                    <li class="menu-item">                        
                        <a class="menu-link" href="../index.php">
                          <i class="fa-solid fa-rotate-left"></i>
                            <span class="menu-link-text">Back to Homepage</span>    
                        </a>
                    </li>
                </ul>
            </div>

            <!--div user info-->
            <div class="user-container">
                <div class="user-info">
                  <i class="fas fa-solid fa-user"></i>
                    <div class="user-details">
                        <h3 class="user-name"><?=$usernm?></h3>
                    </div>
                </div>
                <a class="logout-btn" href="../logout.php">
                    <i class="fas fa-sharp fa-regular fa-arrow-right-from-bracket"></i>
                </a>
            </div>
        </nav>

        <!--dashboard-->

        <?php
 //getting id from url
//  $id = $_GET['id'];

 //selecting data associated with this particular id
 $sql = "SELECT * FROM user where email='$usernm';";
 $result = mysqli_query($conn,$sql);

  while($res = mysqli_fetch_array($result))
 {
  $n = $res['name'];
  $e = $res['enroll'];
  $em = $res['email'];
  }
  ?>

        <main class="dashboard">
            <h1 class="title">User Profile</h1>
            <div class="container">
            <form action="profile.php" method="post" action = "profile.php">
                

                <div class="grid">
                    <div class="form-group a">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" required value="<?php echo $n; ?>">
                    </div>
            
                    <div class="form-group b">
                        <label for="Eno ">Enrolment Number</label>
                        <input id="Eno" name="en" type="text" required value="<?php echo $e; ?>">
                    </div>
            
                    <div class="form-group email-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" required value="<?php echo $em; ?>">
                    </div>
            
                    <div class="form-group phone-group">
                        <label for="phone">Mobile No.</label>
                        <input id="phone" name="mob" type="text" required>
                    </div>
            
                    <!-- <div class="form-group">
                        <label for="Fno">Faculty Roll No.</label>
                        <input id="Fno" type="text" name="fac" required>
                    </div> -->
            
                    <!-- <div class="form-group">
                        <label for="course">Course Name</label>
                        <input id="course" type="text" name="course" required>
                    </div> -->
            
                    <div class="form-group">
                        <label for="dname">Department Name</label>
                        <input id="city" type="text" name="dep" required>
                    </div>
            
                    <!-- <div class="form-group">
                        <label for="hname">Hall Name</label>
                        <input id="hname" type="text" name="hall" required>
                    </div> -->
                </div>
            
                <!-- <div class="checkboxes">
            
                    <div class="checkbox-group">
                        <input id="newsletter" type="checkbox">
                        <label for="newsletter">Je souhaite recevoir la newsletter</label>
                    </div>
                    
                    <div class="checkbox-group">
                        <input id="newsletter-partners" type="checkbox">
                        <label for="newsletter-partners">Je souhaite recevoir la newsletter des partenaires</label>
                    </div>
            
                </div> -->
                
                <div class="button-container">
                    <button class="button">Save Info</button>
                </div>
            </form>
            </div>
        </main>
    </body>
</html>


<?php
include "../backend/dbconnect.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {


    // $image = $_POST['image'];
    $name = $_POST['name'];
    $en = $_POST['en'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $fac = $_POST['fac'];
    $course = $_POST['course'];
    $dep = $_POST['dep'];
    $hall = $_POST['hall'];
    
    



    $sql = "UPDATE user SET `name`='$name', `enroll`='$en', `mob`='$mob', `faculty_no`='$fac', `course`='$course', `dept`='$dep', `hall`='$hall' WHERE `email`='$email'";
// var_dump($sql);

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Data inserted');</script>";
        ?>
        <meta http-equiv="refresh" content = "0; url = ../lost.php"/>
        <?php
    } else {
        echo "<script>alert('Error while uploading');</script>";
    ?>
    <meta http-equiv="refresh" content = "0; url = ../lost.php"/>
    <?php
    }
}
?>