<?php
    include "dbcredent.php";

    if(isset($_POST['submit'])) {
        $yourName = $_POST['your_name'];
        $yourEmail = $_POST['your_email'];
        $yourPhone = $_POST['your_phone'];
        $comments = $_POST['comments'];      
          $sql= $con->query("INSERT INTO profile (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')");
        if(!$result = $conn->query($sql)){
            die('There was an error running the query [' . $conn->error . ']');
        }
        else
        {
        echo "Thank you! We will contact you soon";
        } 
    }
    else
    {
    echo "Please fill Name and Email";
    }

?>