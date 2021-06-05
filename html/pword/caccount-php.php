<?php
    require_once 'caccount.php';
    session_start();

    $finame = '';
    $laname = '';
    $email = '';
    $uname = '';
    $pword = '';
    $hpword = '';
    $dbserver = 'localhost';
    $dbuser = 'website';
    $dbpass = 'website';
    $dbname = 'pword_holder';
    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

    if(isset($_POST['finame'])){
        $finame = $_POST['finame'];
        $finame = stripslashes($finame);
    }
    if(isset($_POST['laname'])){
        $laname = $_POST['laname'];
        $laname = stripslashes($laname);
    }
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $email = stripslashes($email);
    }
    if(isset($_POST['uname'])){
        $uname = $_POST['uname'];
        $uname = stripslashes($uname);
    }
    if(isset($_POST['pword'])){
        $pword = $_POST['pword'];
        $pword = stripslashes($pword);
        $hpword = password_hash($pword, PASSWORD_DEFAULT);
    }


    $sql = "INSERT INTO accounts (finame, laname, email, uname, pword) VALUES ('" . $finame . "', '" . $laname . "', '" . $email . "', '" . $uname . "','" . $hpword . "')";
    $sql_table = "CREATE TABLE " . $uname . "(wsite VARCHAR(20), uname VARCHAR(20), pword VARCHAR(128));";

    if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql_table)) {
        echo 'Succesfully Added Account';
    } else {
        echo 'Error ' . $sql . '<br>' . mysqli_error($conn);
    }
?>


