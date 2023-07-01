<?php

// By default the variables for login and error are false that means the user is not logged in and there is no error
$login = false;
$showError = false;

// Check if the request method of the form is post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Includes the db connect file that contains the connectivity for the database.
    include "backend/dbconnect.php";

    // Taking input and assigning variables to it
    $username = $_POST["email"];
    $password = $_POST["pass"];

    // This is done to remove any unanted charachter that might break the code in the future. It removes all the special chars.
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);


    // The query that is to be executed.
    $sql = "SELECT * FROM user where email='$username' AND pass='$password'";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)) {
        $success = true;
    }
    if($success == true) {
        session_start();
        echo "<script>
        alert('Successfully logged in');
        </script>";
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: panel/dashboard.php");

    } 
    // else if (!$success = true) {
        else{
        echo "<script>
        window.location.href='Userlogin.php';
        alert('Incorrect Username or Password');
        </script>";
    }
    // $num = mysqli_num_rows($result);

    // Only if there is one entry with the given username only then check the password. This reduces the chance of sql injections. 
    // if ($num == 1) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         if ($password == $row['pass']) {
    //             $login = true;

    //             // Starting the session and storing the required variables in the associative array
    //             session_start();
    //             $_SESSION['loggedin'] = true;
    //             $_SESSION['username'] = $username;
                

                // Once logged in the user is redirected to the page given below
            //     header("location: panel/dashboard.php");
            // }

            // Show error if the password is incorrect.
//             else {
//                 $showError = "Invalid Credentils";
//             }
//         }
//     } else {
//         $showError = "Invalid Credentils";
//     }
 }

?>

