
<?php
include "dbconnect.php";

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $filename = $_FILES["upload"]["name"];
    $tempname = $_FILES["upload"]["tmp_name"];


    // $User_id = $_SESSION['User_id'];
    $folder = "images/".$filename;
    move_uploaded_file($tempname, $folder);

    // $image = $_POST['image'];
    $Iname = $_POST['Iname'];
    $dnme = $_POST['dnme'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    



    $sql = "INSERT INTO `lost` ( `Image`, `Item_name`, `Description`, `Owner_Name`, `Email`, `Location`, `Date`, `Time`) 
    VALUES ('$folder', '$Iname', '$dnme', '$fname', '$email', '$location', '$date', '$time');";
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