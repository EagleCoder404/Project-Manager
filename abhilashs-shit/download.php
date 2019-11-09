<?php
$con=mysqli_connect('localhost','root','','manager');
$q="select * from `files`";
$r=mysqli_query($con,$q);
if($r){
	while($row=mysqli_fetch_assoc($r)){
		?>
		<div style="border:1px, padding:5px, margin:10px"><br/>
		<strong><?php echo $row['cluster'];?></strong><br/><a href="<?php echo $row['file'];?>"><?php echo $row['file'];?></a>
		<hr/>
		</div>
		<?php
	}
}
?>