<?php
  var_dump($_POST);

  if(isset($_POST['username']) || !isset($_POST))
    die("Username and password not set");

  $user = $_POST['userid'];
  $pass = $_POST['password'];
  $type = $_POST['type'];
  $pass = password_hash($pass,PASSWORD_DEFAULT);
  $con = new mysqli("localhost","root","","project_manager");

  if($con->connect_error)
    die($con->connect_error);

  if($type=="s")
    $sql = "select * from student where user_id=$user;";
  else if($type=="t")
    $sql = "select * from teacher where teach_id=$user;";
  else
    die("error with type");

  $res = $con->query($sql);
  if($res==false)
  die("user not found");
  else {
    if($res)
  }



?>
