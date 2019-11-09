<!doctype html>
<html>
<head>
<title>::LOGIN::</title>
<link href="logingit.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<div class="logo">
<h2>GitHub</h2>
</div>
<div class="nav">
<ul>
<li><a>DEVELOPER</a></li>
<li><a>CONTACT US</a></li>
</ul>
</div>
<div class="right">
<img src="icon1.png" />
<div class="form">
<form  method="post" action="../authentication/login_auth.php">

<table>
<tr class="label"><center><strong><h1>LOGIN</h1></strong></center></tr>
<tr><td><input type="text" placeholder="Username or email address" name="userid" size="30" required></td></tr>
<tr><td><input type="password" placeholder="Password" name="password" size="30" required></td></tr>
<tr><td><p><a href="#">Forget password?</a></p></td></tr>
<tr>
	<td>
		<select class="" name="type">
			<option value="t">Teacher</option>
			<option value="s">Student	</option>
		</select>
	</td>
</tr>
<tr><td><button type="submit" name="submit" class="submit">LOGIN</button></td></tr>

</table>
</form>
</div>
<div class="account">
	<p>I'm new..</p>
	<button href="#" name="create" class="create">CREATE AN ACCOUNT</button>
</div>
</div>
</div>
</body>
</html>
