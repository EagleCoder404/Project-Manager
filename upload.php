<?php

if(isset($_POST['submit'])){
	$file=$_FILES['file'];
	$filename=$_FILES['file']['name'];
	$filetmpname=$_FILES['file']['tmp_name'];
	$filesize=$_FILES['file']['size'];
	$fileerror=$_FILES['file']['error'];
	$filetype=$_FILES['file']['type'];
	
	$title=$_POST['title'];
	$cluster=$_POST['cluster'];
	$groupid=$_POST['groupid'];
	$code=$_POST['subcode'];
	$fileext=explode('.',$filename);
	$fileactext=strtolower(end($fileext));
	$allowed=array('jpg','jpeg','png','html','css','pdf','php');
	if(in_array($fileactext,$allowed)){
		if($fileerror===0){
			if($filesize<5000000){
				$filenamenew= uniqid('',true).".".$fileactext;
				$filedestination='images/'.$filenamenew;
				
				$con=mysqli_connect('localhost','root','','manager');
				if($con){
					echo 'everything fine';
				}else{
					echo ' database not connected';
				}
				
				$q="insert into `files`(`file`,`ext`,`title`,`cluster`,`groupid`,`subcode`) values('".$filedestination."','".$fileactext."','".$title."','".$cluster."','".$groupid."','".$code."')";
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