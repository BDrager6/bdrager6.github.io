<?php
  $pword = '';
  $epword = '';
  if(isset($_POST['pword'])){
    $pword = $_POST['pword'];
    $pword = stripslashes($pword);
    $epword = base64_encode($pword);
  }
?>

