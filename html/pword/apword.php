<?php
  require_once 'config.php';
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
    <h1>Please Enter The Information</h1>
    <div id='form-container'>
      <form method='POST' action='submit.php'>
          <h3>Website:</h3>
          <input type='text' autocomplete='off' id='wsite' name='wsite'>
          <h3>Username:</h3>
	  <input type='text' autocomplete='off' id='uname' name='uname'>
          <h3>Password:</h3>
          <input type='password' autocomplete='off' id='pword' name='pword'>
          <br>
          <div id='button-container'>
            <input id='buton' type='submit' value='Submit' action='submit.php'>
          </div>
      </form>
      <?php
        $wsite = '';
        $uname = '';
        if(isset($_POST['wsite'])){
          $wsite = $_POST['wsite'];
          $wsite = stripslashes($wsite);
        }
        if(isset($_POST['uname'])){
          $uname = $_POST['uname'];
          $uname = stripslashes($uname);
        }
        include 'vars.php';
      ?>
    </div>
    <div id='link-container'>
      <a href='acchome.php'>Account Home</a>
    </div>
    <div id='link-container'>
      <a href='pwords.php'>View Your Passwords</a>
    </div>
  </body>
</html>

