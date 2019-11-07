<?php
   include "connectDatabase.php";
   $table = ["s"=>"student","t"=>"teacher"];

  function rowExists($table,$id)
  {
    $con = getCon();
    $sql = "select * from $table where teach_id='$id';";
    $res=$con->query($sql);
    if($res->num_rows)
      return True;
    else
      return False;
    $con->close();
  }

  function insertTeacher($teach_id,$name,$email,$phone,$password)
  {
    $con = getCon();
    $pass_hash = password_hash($password,PASSWORD_DEFAULT);
    $sql = "insert into teacher values('$teach_id','$name','$email','$phone','$pass_hash');";
    if($con->query($sql)===true)
       return True;
    else
        return $con->error;

  }

 ?>
