<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../index.php");
    
    exit;
}

// session_start();

// Assigning usernme of the logged in user into a variable for easy access.
$user = $_SESSION['username'];
?>


<?php   
$delete=false;

include '../backend/dbconnect.php';

if(isset($_GET['delete'])){
  $sno=$_GET['delete'];
  $delete=true;
  $sql = "DELETE FROM `user` WHERE `id` = $sno";
  $result = mysqli_query($conn, $sql);
}
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
        <link rel="stylesheet" href="css/adminuser.css">

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
                        <a class="menu-link" href="admindash.php"> 
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
                        <a class="menu-link" class="menu-link" href="adminuser.php">
                            <i class="fas fa-solid fa-user"></i>
                            <span class="menu-link-text">Manage Users</span>    
                        </a>
                    </li>
                    <li class="menu-item">                            
                        <a class="menu-link" href="adminpost.php">
                          <i class="fa-solid fa-desktop"></i>
                            <span class="menu-link-text">Manage Posts</span>    
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
                        <h3 class="user-name">Admin</h3>
                    </div>
                </div>
                <a class="logout-btn" href="../logout.php">
                    <i class="fas fa-sharp fa-regular fa-arrow-right-from-bracket"></i>
                </a>
            </div>
        </nav>

        <!--dashboard-->
        <main class="dashboard">
            <h1 class="title">Manage Users</h1>
            <table id="post">
              <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Enrolment Number</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Department Name</th>
                <th>Action</th>
              </tr>


              <?php
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn, $sql);
$sno=0;
while($row = mysqli_fetch_assoc($result)){
    $sno +=1;
    echo "<tr>
    <th scope='row'>".$sno."</th>
    
    <td>".$row['name']."</td>
    <td>".$row['en']."</td>
    <td>".$row['email']."</td>
    <td>".$row['mob']."</td>
    <td>".$row['dep']."</td>
    <td> <button class='delete btn btn-sm btn-primary' id=d".$row['id'].">Delete</button>  </td>
  </tr>";
}
?>


            
              
            </table>
            
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

        <script>

          deletes = document.getElementsByClassName('delete');
        Array.from(deletes).forEach((element) => {
            element.addEventListener("click", (e) => {
                console.log("delete",);
                sno = e.target.id.substr(1,);

                if (confirm("Are you sure")) {
                    console.log("yes");
                    window.location = `/L&F/panel/adminuser.php?delete=${sno}`;
                }
                else {
                    console.log("no");
                }
            })
        })
      </script>
    </body>
</html>