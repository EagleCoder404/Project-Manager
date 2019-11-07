<?php

function newLine()
{
  echo "<br>";
}
function runSql($sql,$entity)
{
  global $con;
  if($con->query($sql)===true)
      echo "<br>$entity---operation succesful";
  else
      echo "<br>$entity---".$con->error;
}

  $user = "root";
  $pass = "";
  $host = "localhost";
  $db = "project_manager";

  $con = new mysqli($host,$user,$pass);

  if($con->connect_error)
    die("Connection-error:".$con->connect_error);
  else
    echo "Connected to dbms";


  $sql="create  database $db;";
  runSql($sql,"$db database creation");


  $sql="use $db;";
  runSql($sql,"$db  connection");



  $sql =<<<EOD
  create table student(user_id varchar(10) primary key,
  name varchar(30),
  sem integer,
  branch varchar(3),
  email varchar(100),
  password text);
EOD;
  runSql($sql,"student table creation");



  $sql=<<<EOD
  create table teacher(teach_id varchar(10) primary key,
  name varchar(30),
  email varchar(100),
  phone varchar(10),
  password text);
EOD;
  runSql($sql,"Teacher table creation:");

  $sql=<<<EOD
  create table phase(submission_code varchar(10),
  description varchar(50),
  teach_id varchar(10),
  constraint phase_fk foreign key(teach_id) references teacher(teach_id));
EOD;
  runSql($sql,"phase table creation");

$sql=<<<EOD
  create table project(project_id varchar(5) primary key,
  name varchar(50),
  submission_code varchar(10),
  teach_id varchar(10),
  leader_id varchar(10),
  constraint foreign key(submission_code) references phase(submission_code),
  constraint foreign key(teach_id) references teacher(teach_id),
  constraint foreign key(leader_id) references student(user_id)
);
EOD;
runSql($sql,"project table creation");

$sql=<<<EOD
  create table file(file_id integer auto_increment primary key,
  type varchar(4),
  path varchar(100),
  project_id varchar(5),
  constraint foreign key(project_id) references projecct(project_id));
EOD;
runSql($sql,"file table creation");

$sql=<<<EOD
  create table project_members(user_id varchar(10),
  project_id varchar(5),
  constraint p_mem_fk1 foreign key(user_id) references student(user_id),
  constraint p_mem_fk2 foreign key(project_id) references project(project_id));
EOD;
runSql($sql,"project_members table creation");
 ?>
