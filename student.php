<!doctype html>
<html>
<head>
<link rel="stylesheet" href="student.css" type="text/css">
</head>
<body>
	<div class="nav">
	</div>
	<div class="container">
	<button type="submit" id="some1">INSERT FILE</button>
	<button type="submit" id="some2">MANAGE PREVIOUS PROJECT</button>
	<button type="submit" id="some3">VIEW ACTIVITY</button>
	<div class="show" id="show">

	</div>
	<div class="side_nav">
	<div class="button1" id="button1">
	<fieldset>
	<legend><h2>UPLOAD FILE</h2></legend>
	<form method="post" id="form1"  enctype="multipart/form-data">
	<table>
	<tr>
	<td>ENTER SUBMISSION CODE</td>
	<td><input type="text" placeholder="" name="subcode" id="subcode" size="30"></td>
	</tr>
	<tr>
	<td>PROJECT IDENTIFICATION</td>
	<td><input type="text" placeholder="" name="idcode" id="idcode" size="30"></td>
	</tr>
	<tr>
	<td>INSERT YOUR FILE HERE</td>
	<td><input type="file" name="file" id="file"></td>
	</tr>
	</table>

	</fieldset>
	<fieldset>
	<legend><h2>MULTIPLE FILES</h2></legend>
	<input type="radio" name="check"  value="yes" id="check">YES,I have more files with same submission code.<br/>
	<input type="radio" name="check"  value="no" id="check">No, I am done.
	</fieldset>
	<button type="submit" name="upload" id="upload" class="upload">UPLOAD</button>
		<div id="result">
		</div>
	</form>
	</div>
	<div class="button2" id="button2">
	<p>supp </p>
	</div>
	<div class="button3" id="button3">
	<p>man</p>
	</div>
	</div>
	</div>
</body>
</html>

<script src="jquery.js"></script>
<script>
$( document ).ready(function() {
	$("#button2").hide();
	$("#button3").hide();
	$("#button1").hide();
	$("#result").hide();
    $("#some1").click(function(){
		$("#button2").hide();
		$("#button3").hide();
		$("#button1").show();
	});

	 $("#some2").click(function(){
		$("#button2").show();
		$("#button3").hide();
		$("#button1").hide();
	});

	 $("#some3").click(function(){
		$("#button2").hide();
		$("#button3").show();
		$("#button1").hide();
	});

	$("#upload").click(function(e){
		e.preventDefault();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			processData:false,
			success:function(response){
				$("#result").show();
				$("#result").html(response);
			},
			error:function(x,y,z){
				console.log(x+" "+y+" "+z)
			}
		});
	});


});

</script>
