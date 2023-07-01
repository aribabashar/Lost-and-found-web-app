<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../index.php");
    
    exit;
}

// session_start();

// Assigning usernme of the logged in user into a variable for easy access.
$usernm = $_SESSION['username'];
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
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/password.css">
        

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
        <main class="dashboard">
            <h1 class="title">Change Password</h1>
            <div class="change-password-modal">
	<!-- <h2 class="modal-header">Change Password</h2> -->
	<section class="modal-body">
		<form class="modal-form" action="password.php" method="post">
        <div class="modal-form-group">
				    <label for="email">Email </label>
    <input type="text" name="email" placeholder="Enter your Email" id="email" required>
			</div>
			<div class="modal-form-group">
				    <label for="password">New Password </label>
    <input type="text" name="pass" placeholder="Enter Password" id="pass">
			</div>
						<div class="modal-form-group">
				    <label for="confirm-password">Confirm Password </label>
    <input type="password" name="pass" placeholder="Confirm Your Password" id="pass">
			</div>
			<!-- <div class="modal-form-group">
				<span class="modal-hlp-txt">Yes, I want to recieve all future communications</span>
			</div> -->
            <div class="modal-footer">
		<!-- <button class="modal-btn primary-btn">Close</button> -->
		<button class="modal-btn secondary-btn">Save Changes</button>
	</div>
		</form>
        
		<!-- <div class="password-guidelines">
			<h3 class="guidelines-header">Password Guidelines</h3>
			<h4 class="guidelines-sub-header">Eg: MY@password123</h4>
			<div class="guidelines-description">
				<p>Must be 6 - 15 character</p>
<p>Must be 6 - 15 character</p>
				<p>Must be 6 - 15 character</p>
				<p>Must be 6 - 15 character</p>
				<p>Must be 6 - 15 character</p>
			</div>
		</div> -->
	</section>
	
</div>
        </main>
    </body>
</html>

<?php
include "../backend/dbconnect.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {



    $pass = $_POST['pass'];
    $email = $_POST['email'];


    $sql = "UPDATE user SET `pass`='$pass' WHERE `email`='$email'";
// var_dump($sql);

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('password changed');</script>";
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