<?php
   include "connectDatabase.php";
   $table = ["s"=>"student","t"=>"teacher"];

  function rowExists($table,$id)
  {
    $con = getCon();
    $sql = "select * from $table where teach_id='$id';";
    $res=$con->query($sql);
    if($res!=null)
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
  function insertStudent($user_id,$name,$email,$phone,$password,$sem,$branch)
  {
    $con = getCon();
    $pass_hash = password_hash($password,PASSWORD_DEFAULT);
    $sql = "insert into student values('$user_id','$name','$sem','$branch','$email','$phone','$pass_hash');";
    if($con->query($sql)===true)
       return True;
    else
        return $con->error;

  }

 ?>
