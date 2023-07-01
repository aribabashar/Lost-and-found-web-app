<?php
$showAlert = false;
$showError = false;
$_SESSION['loggedin'] = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "backend/dbconnect.php";
    
    
    $name = $_POST['name'];
    $en = $_POST['en'];
    $email = $_POST['email'];
    $password = $_POST["pass"];
    
    $existSql = "SELECT * FROM `user` WHERE email= '$email' or enroll= '$en'";
    $res = mysqli_query($conn, $existSql);
    
    // $numExistRows = mysqli_num_rows($result);
    
    if (mysqli_num_rows($res) > 0) {
        
        $row = mysqli_fetch_assoc($res);
        if($email==isset($row['email']))
        {
            echo "<script>
            window.location.href='Userlogin.php';
            alert('Email already exist');
            </script>";
        }
		// else if($en==isset($row['en']))
		// {
		// 	echo "<script>
        //     window.location.href='Userlogin.php';
        //     alert('Enrolment Number already exist');
        //     </script>";
		// }
		} else {
           
                // $hash=password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user (name, enroll, email, pass) VALUES ('$name', '$en', '$email', '$password')";

                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $_SESSION['username'] = $username;
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user']= 'normal';
                    session_start();
                    header("location: panel/profile.php");
                    $showAlert = true;
                }
            
        }
    }

?>
