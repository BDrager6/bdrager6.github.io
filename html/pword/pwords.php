<?php 
        require_once 'config.php';
        session_start();
        if($_SESSION['uname']==''){
        header('location: redirect.php');
    }
?>
<!DOCTYPE html>
<html>
        <head>
                <link rel='stylesheet' href='../style.css'>
        </head>
        <body>
                <?php
                require_once 'header.php';
        ?>
                <h1>Please Enter The Username For The Password</h1>
                <div id='form-container'>
                <form method='POST' action='vpword.php'>
                        <h3>Username:</h3>
                        <input type='text' autocomplete='off' id='uname' name='uname'>
                        <?php
                                if(isset($_POST['uname'])) {
                                        $uname = stripslashes($_POST['uname']);
                                }
                        ?>
                </for1` ,M.?
                m>
                </div>
                <div id='link-container'>
                                <a href='acchome.php'>Account Home</a>
                </div>
                <div id='link-container'>
                                <a href='apword.php'>Add Password</a>
                </div>
        </body>
</html>

