<?php 
    session_start();
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
        <h1>Welcome</h1>
        <div id='link-container'>
            <a href='apword.php'>Add Password</a>
        </div>
        <div id='link-container'>
            <a href='pwords.php'>View Your Passwords</a>
        </div>
     </body>
</html>

