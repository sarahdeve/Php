<?php
    session_start();
        require 'dbcredent.php';
        $hostName = 'localhost';
        $username = 'root';
        $password = '';
        $dbName = 'instagram';
    
        $con = new mysqli($hostName, $username, $password, $dbName);
            // print_r($con);
    
    if($con->connect_error) {
        die('unable to connect'. $con->connect_error);
    } else {
        if (isset($_POST["submit"]))  
            {
                $username = $_POST['userName'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                 $p = password_hash($password, PASSWORD_DEFAULT);

                $email = $_POST['email'];
                $checkDatabase = "SELECT * FROM users WHERE email = '$email'";
                $qDb = $con->query($checkDatabase);

                 if ($qDb->num_rows > 0) {
                       echo "email already exist";
                       header("Location: signup
                       .php");
                }
                else
                 {
                    $fileName = $_FILES['myfile']['name'];
                    $moved = move_uploaded_file($_FILES['myfile']['tmp_name'], 'images/'.$fileName);

                    if ($moved)
                     {
                        $insertIntoDb = "INSERT INTO users (username, password, email, files) VALUES ('$username',  '$p', '$email', '$fileName')";

                        $a = $con->query($insertIntoDb);
                        if ($a) {
                            header("Location: registration.php");
                            
                        }else {
                            echo "something went wrong";
                        }
                    }
                 }
             }
             else {
                 echo "Please fill in the form";
             }
    }
     ?>