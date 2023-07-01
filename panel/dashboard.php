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
                        <h3 class="user-name"><?=$usernm?>  </h3>
                    </div>
                </div>
                <a class="logout-btn" href="../logout.php">
                    <i class="fas fa-sharp fa-regular fa-arrow-right-from-bracket"></i>
                </a>
            </div>
        </nav>

        <!--dashboard-->
        <main class="dashboard">
            <h1 class="title">Welcome <?=$usernm?></h1>
            <div class="cards">

	<article class="information [ card ]">
		<h2 class="title">Manage your posts</h2>
		<p class="info">View or Delete your posts</p>
		<button class="button">
        <a href="posts.php"><span>Click Here!</span></a>
			<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
				<path d="M0 0h24v24H0V0z" fill="none" />
				<path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
			</svg>
		</button>
	</article>

    <article class="information [ card ]">
		<h2 class="title">Add Lost Item</h2>
		<p class="info">Submit a lost property</p>
		<button class="button">
        <a href="../lost.php"><span>Click Here!</span></a>
			<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
				<path d="M0 0h24v24H0V0z" fill="none" />
				<path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
			</svg>
		</button>
	</article>

    <article class="information [ card ]">
		<h2 class="title">Add Found Item</h2>
		<p class="info">Submit a found property</p>
		<button class="button">
        <a href="../found.php"><span>Click Here!</span></a>
			<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
				<path d="M0 0h24v24H0V0z" fill="none" />
				<path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
			</svg>
		</button>
	</article>

    <article class="information [ card ]">
		<h2 class="title">Personal Profile</h2>
		<p class="info">Edit or Update your profile!</p>
		<button class="button">
			<a href="profile.php"><span>Click Here!</span></a>
			<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
				<path d="M0 0h24v24H0V0z" fill="none" />
				<path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
			</svg>
		</button>
	</article>


</div>
        </main>
    </body>
</html>