<?php

  include "../php_lib/databaseOps.php";

  var_dump($_POST);
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $type =$_POST["type"];

  if(rowExists($table[$type],$user_id))
    echo "reroute to index with error";
  else
  {
    if($type=="t")
    {
      insertTeacher($user_id,$name,$email,$phone,$password);
      session_start();
      $_SESSION["user_id"]=$user_id;
      $_SESSION["name"]=$name;
      $_SESSION["type"]=$type;
      header("Location:../teacher");
      die();

    }
  }
 ?>
