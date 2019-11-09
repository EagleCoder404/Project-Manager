<?php

if(isset($_POST['upload'])){
	$file=$_FILES['file'];
	$filename=$_FILES['file']['name'];
	$filetmpname=$_FILES['file']['tmp_name'];
	$filesize=$_FILES['file']['size'];
	$fileerror=$_FILES['file']['error'];
	$filetype=$_FILES['file']['type'];
	$groupid=$_POST['idcode'];
	$code=$_POST['subcode'];
	$fileext=explode('.',$filename);
	$fileactext=strtolower(end($fileext));
	$allowed=array('jpg','jpeg','png','html','css','pdf','php');
	if(in_array($fileactext,$allowed)){
		if($fileerror===0){
			if($filesize<5000000){
				$filenamenew= uniqid('',true).".".$fileactext;
				$filedestination='images/'.$filenamenew;
				
				$con=mysqli_connect('localhost','root','','filemanager');
				if($con){
					echo 'everything fine';
				}else{
					echo ' database not connected';
				}
				
				$q="insert into `file`(`type`,`path`,`project_id`,`submission_code`) values('".$fileactext."','".$filedestination."','".$groupid."','".$code."')";
				$r=mysqli_query($con,$q);
				if($r){
					echo 'file uploaded successfully';
					move_uploaded_file($filetmpname,$filedestination);
				}else{
					echo 'error in uploading';
				}
				
			}else{
				echo 'file too big!!';
			}
		}else{
			echo 'error!!';
		}
	}else{
		echo 'file type not aloowed!!';
	}
}

?>