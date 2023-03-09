<!doctype html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<style>body{
			background-image:url("image.jpg");
		}</style>
	</head>
<body><br><br><br><br><br>
	<h3><center><font color="yellow">Login Box</font></center></h3>
	<form method="post" action="">
	<table class="table" style="width:600px; margin-left:350px;">
		<tr>
			<td><h2><font color="red">Username</font></h2></td>
			<td><input type="text" name="uname" class="form-control" placeholder="Username"></td>
		</tr>
		<tr>
			<td><h2><font color="red">Password</font></h2></td>
			<td><input type="text" name="upass" class="form-control" Placeholder="Password"></td>
		</tr>	
		<tr>
			<td><img src="captcha.png"></td>
			<td><input type="text" class="form-control" name="ucap" placeholder="Enter Captcha"></td>
		</tr>	
		<tr>
			<td></td><td style="float:center;"><button type="submit" name="usub" class="btn btn-lg btn-success"><h3><font color="green">Login</font></h3></button></td>
		</tr>
	</table>
	</form>
</body>	
<?php
	if(isset($_POST["usub"])){
		if($_POST["ucap"]=="qGphJD"){
			if($_POST["uname"]=="gokul" && $_POST["upass"]=="gokul123"){
				header("Location:home.php");
			}
			else{
				echo"<script>alert('Incorrect Password...');</script>";
			}
		}
		else{
			echo"<script>alert('Captcha Wrong...');</script>";
		}
	}
?>
</html>
