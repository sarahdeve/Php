<?php
$hostName = 'localhost';
$username = 'root';
$password = '';
$dbName = 'instagram';

$con = new mysqli($hostName, $username, $password, $dbName);
    if($con->connect_error) {
die('unable to connect'. $con->connect_error);
}else {
    $msg = "";
  
    // If upload button is clicked ...
    if (isset($_POST['upload'])) {
        $image = $_FILES['image']['name'];
        $image_text = mysqli_real_escape_string($db, $_POST['imageText']);
        $image_country = mysqli_real_escape_string($db, $_POST['imageCountry']);
        $target = "images/".basename($image);
        $sql = "INSERT INTO users (files, imageText, imageCountry) VALUES ('$image', '$image_text', '$image_country')";

        mysqli_query($db, $sql);
            $moved = move_uploaded_file($_FILES['image']['tmp_name'], $target);
        if ($moved) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    } else {
        echo "something went wrong";
    }
    // $result = mysqli_query($db, "SELECT * FROM images");
}
?>