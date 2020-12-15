<?php 
    session_start();

    require 'dbcredent.php';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $fetch_from_db = $con->query("SELECT userId, password, email FROM users WHERE  email ='$email'");
            $f = $fetch_from_db->fetch_array();
            $_SESSION['userId'] = $f['userId'];
            // echo json_encode($f);
            if($f){
                $p = $f['password'];
                $verify = password_verify($pass, $p);
                if($verify){
                    echo "successful";
                    header("Location: dashboard.php");
                }else{
                    echo "fail";
                }

            }
        }
        else {
            echo "Your email or your password is incorrect";
        }
    ?>