<?php
  function getCon()
  {
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $db = "project_manager";

    $con = new mysqli($hostname,$username,$password,$db);
    if($con->connect_error)
      die(connect_error);
    return $con;
  }
 ?>
