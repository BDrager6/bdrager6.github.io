<?php
    $dbserver = 'localhost';
    $dbuser = 'website';
    $dbpass = 'website';
    $dbname = 'pword_holder';

    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

    if(!$conn){
        die('Connection Failed: ' . mysqli_connect_error());
    }
 ?>

