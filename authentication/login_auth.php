<?php
  var_dump($_POST);

  if(!isset($_POST['username'] || !isset($_POST)))
    die("Username and password not set");

  $user = $_POST['username'];
  $pass = $_POST['password'];
  $pass = password_hash($pass,PASSWORD_DEFAULT);

  
?>
