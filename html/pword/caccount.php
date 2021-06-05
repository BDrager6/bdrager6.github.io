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
    <h1>Create Account</h1>
    <div id='form-container'>
      <form method='POST' action='caccount-php.php'>
          <h3>First Name:</h3>
          <input type='text' autocomplete='off' id='finame' name='finame'>
          <h3>Last Name:</h3>
          <input type='text' autocomplete='off' id='laname' name='laname'>
          <h3>Email:</h3>
          <input type='email' autocomplete='off' id='email' name='email'>
          <h3>Username</h3>
          <input type='text' autocomplete='off' id='uname' name='uname'>
          <h3>Password:</h3>
          <input type='password' autocomplete='off' id='pword' name='pword'>
          <br>
          <div id='button-container'>
            <input type='submit' value='Create Account' action='caccount-php.php'>
          </div>
      </form>
        </div>
    <div id='link-container'>
        <a href='login.php'>Login</a>
    </div>
  </body>
</html>

