<?php
  require_once 'config.php';
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel='stylesheet' href='../style.css'>
  </head>
  <body>
    <div id='form-container'>
        <form method='POST' action='login-php.php'>
            <h3>Username:</h3>
            <input type='text' autocomplete='off' id='uname' name='uname'>
            <h3>Password:</h3>
            <input type='password' autocomplete='off' id='pword' name='pword'>
            <br>
            <div id='button-container'>
              <input type='submit' value='Login' action='login-php.php'>
            </div>
        </form>
    </div>
    <div id='link-container'>
      <a href='caccount.php'>Create Account</a>
    </div>
  </body>
</html>

