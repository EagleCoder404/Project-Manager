<html>
<head>
</head>
<body>
	<div id="form">
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<table>
		<tr><td><input type="text" placeholder="Title" name="title" required></tr></td>
		<tr><td><input type="text" placeholder="cluster" name="cluster" required></tr></td>
		<tr><td><input type="text" placeholder="Group_id" name="groupid"></tr></td>
		<tr><td><input type="text" placeholder="Submission code" name="subcode"></tr></td>
		<tr><td><input type="file" name="file"></tr></td>
		<tr><td><button type="submit" name="submit">Upload your file</button></tr></td>
	</table>
	</form>
	</div>
</body>
</html>