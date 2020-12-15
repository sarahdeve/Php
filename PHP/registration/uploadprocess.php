<?php
    session_start();
    require "dbcredent.php";
    //print_r($_POST);
    //print_r($_FILES);

    $msg = "";
    $msg_class = "";
    // $con = mysqli_connect("localhost", "root", "", "instagram");
    if(isset($_POST['submit'])) {
        $id = $_SESSION['userId'];
        $file = $_FILES['pic']['name'];
        $country = $_POST['post_country'];
        $title = $_POST['post_title'];

        $post_text = stripslashes($_POST['post_text']);


        $target_dir = "images/";
        $target_file = $target_dir. basename($file);
        // print_r($target_file);

        if ($_FILES['pic']['size'] > 900000) {
            $msg = "Image size should not be greater than 200kb";
            $msg_class = "alert-danger";
        }
         if (file_exists($target_file)) {
             $msg = "File already exists";
             $msg_class = "alert-danger";
         }

         if (empty($error))
          {
             $a = move_uploaded_file($_FILES["pic"]["tmp_name"],$target_file);
             if($a) {
                 $sql =$con->query( "INSERT INTO post (postText, postcountry, userId, postTitle, post) VALUES ('$post_text','$country', '$id','$title','$file')");
                 if($sql) {
                     $msg = "Image uploaded and saved in the Database";
                     $msg_class = "alert-success";
                 } else {
                     $msg = "There was an error in the database";
                     $msg_class = "alert-danger";
                 }
             }else {
                 $error = "There was an error uploading the file";
                 $msg = "alert-danger";
                 echo "Upload successful";
                 header ("Location: dashboard.php");
             }
         }
    } else {
        echo "Something is wrong somewhere";
        header ("Location: dashboard.php");
    }
?> 
