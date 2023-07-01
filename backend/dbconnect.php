<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "lost";

$conn = mysqli_connect($server, $user, $password, $db);

if(!$conn){
    echo "Error in connection";
}


?>