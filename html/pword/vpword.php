<?php
    require_once 'pwords.php';
    session_start();
    if($_SESSION['uname']==''){
        header('location: redirect.php');
    }

    $dbserver = 'localhost';
    $dbuser = 'website';
    $dbpass = 'website';
    $dbname = 'pword_holder';

    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    $sql = "SELECT pword FROM " . $_SESSION['uname'] . " WHERE uname='" . $uname . "';";
    $result = mysqli_query($conn, $sql);
    $tab_row = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $pword = $row['pword'];
    $dpword = base64_decode($pword);
    $statement = '';

    if($tab_row==0){
        $statement = 'Invalid Username';
    } else {
        $statement = 'Your Password Is: ' . $dpword;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div id='dpword'>
            <h3><?php echo $statement;?></h3>
        </div>
    </body>
</html>
