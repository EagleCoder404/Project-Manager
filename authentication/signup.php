<?php

  include "../php_lib/databaseOps.php";

  var_dump($_POST);
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $type =$_POST["type"];
  if($type=='s')
  {
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];
  }
  if(rowExists($table[$type],$user_id))
    echo "reroute to index with error";
  else
  {
    if($type=="t")
      insertTeacher($user_id,$name,$email,$phone,$password);
    else if($type=="s")
      insertStudent($user_id,$name,$email,$phone,$password,$sem,$branch);
    else
      die("invalid type");

    $_SESSION["user_id"]=$user_id;
    $_SESSION['name']=$name;
    $_SESSION['type']=$type;
    if($type=='t')
      header("Location:../teacher");
    else
      header('Location:../student');
  }
 ?>
