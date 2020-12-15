<?php 
    $hostName = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'instagram';

    $con = new mysqli($hostName, $username, $password, $dbName);
        // print_r($con);

if($con->connect_error) {
    die('unable to connect'. $con->connect_error);
}
?>