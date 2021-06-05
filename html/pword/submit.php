<?php
    require_once 'apword.php';
    $dbserver = 'localhost';
    $dbuser = 'website';
    $dbpass = 'website';
    $dbname = 'pword_holder';
    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    session_start();

    if(!$conn){
        die('Connection Failed: ' . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO " . $_SESSION['uname'] . " (wsite, uname, pword) VALUES ('" . $wsite . "', '" . $uname . "', '" . $epword . "');";
    
    if(mysqli_query($conn, $sql)){
        echo "New Info Added To Table";
    } else {
        echo 'Error ' . $sql . '<br>' . mysqli_error($conn);
    }
 ?>

