<?php
    require_once 'login.php';

    $uname = '';
    $pword = '';
    $epword = '';
    $dbserver = 'localhost';
    $dbuser = 'website';
    $dbpass = 'website';
    $dbname = 'pword_holder';
    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

    if(isset($_POST['uname'])){
        $uname = stripslashes($_POST['uname']);
    }
    if(isset($_POST['pword'])){
        $pword = stripslashes($_POST['pword']);
    }

    $sql = "SELECT uname FROM accounts WHERE uname='" . $uname . "';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    $sql_pword = "SELECT pword FROM accounts WHERE uname='" . $uname . "';";
    $pword_result = mysqli_query($conn, $sql_pword);
    $pword_row = mysqli_fetch_array($pword_result, MYSQLI_ASSOC);
    $epword = $pword_row['pword'];
    $login = password_verify($pword, $epword);

    if($row==0){
        echo 'Invalid Username';
    }
    if($login){
        header('location:acchome.php');
        session_start();
        $_SESSION['uname'] = $uname;
    }else{
        echo 'Invalid Password';
    }
