<?php 
ob_start();
session_start();
if(isset($_SESSION['id']))
{
	session_destroy();
	header("Location:login.php");
}
if(isset($_COOKIE['user'])){
	$_SESSION['id']=$_COOKIE['user'];
	header("Location:MainPage.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body id="body-color">
<div class="fix main">
<div id="Sign-Up">
<fieldset style="width:50%;margin:100px auto;"><legend>Login Form</legend>
<table border="0">
<tr>
<form method="POST" action="login_process.php">
<td>UserName*:</td><td> <input type="text" name="username" style="padding:10px 45px;margin-top:15px;size='2'" required=""/>
<label id="label" style="color:red">
<?php
		if($_GET['error']=='username')
		{
	?>
	*Your UserName is incorrect.
	<?php
		}
	?>
</label>
</td>
</tr>
<tr>
<tr>
<td>Password*:</td><td> <input type="password" name="pass" style="padding:10px 45px" required="" />
<label id="label2" style="color:red">
<?php
		if($_GET['error']=='yes')
		{
	?>
	*Your Password is incorrect.
	<?php
		}
	?>
</label>
</td>
</tr>
<tr>
<td>
<input type="checkbox" name="checkbox"/>Remember
</td>
<td><input id="button" type="submit" name="submit" value="Login"/></td>
<td><div class="back"><a href="home.php">Back</a></div></td>
</tr>
</form>
</table>
</fieldset>
</div>
<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
</div>
</body>
</html>