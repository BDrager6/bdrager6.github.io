<?php
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
        <div id='header'>
            <div class='header-item'>
                <p><a href='acchome.php'>Home</a></p>
            </div>
            <div class='header-item'>
                <p><a href='apword.php'>Add Password</a></p>
            </div>
            <div class='header-item'>
                <p><a href='pwords.php'>View Your Passwords</a></p>
            </div>
            <div class='header-item'>
                <form method='post'><input type='submit' id='signout' name='signout' value='Sign Out'></form>
                <?php
                    if(isset($_POST['signout'])){
                        echo 'testing';
                        $_SESSION['uname'] = '';
                        session_destroy();
                        header('location:../index.php');
                    }
                ?>
            </div>
        </div>
    </body>
</html>

