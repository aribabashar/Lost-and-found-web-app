<?php

// By default the variables for login and error are false that means the user is not logged in and there is no error
$login = false;
$showError = false;

// Check if the request method of the form is post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Includes the db connect file that contains the connectivity for the database.
    include "backend/dbconnect.php";

    // Taking input and assigning variables to it
    $username = $_POST["user"];
    $password = $_POST["pass"];

    // This is done to remove any unanted charachter that might break the code in the future. It removes all the special chars.
    $username = mysqli_real_escape_string($conn, $username);

    // The query that is to be executed.
    $sql = "SELECT * FROM admin where user='$username'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    // Only if there is one entry with the given username only then check the password. This reduces the chance of sql injections. 
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($password == $row['pass']) {
                $login = true;

                // Starting the session and storing the required variables in the associative array
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['user']= 'admin';
                

                // Once logged in the user is redirected to the page given below
                header("location: panel/admindash.php");
            }

            // Show error if the password is incorrect.
            else {
                $showError = "Invalid Credentils";
            }
        }
    } else {
        $showError = "Invalid Credentils";
    }
}

?>
