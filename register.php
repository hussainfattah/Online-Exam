<?php 
ob_start();
session_start();
if(isset($_SESSION['id']))
{
	session_destroy();
	header("Location:register.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sign-Up</title>
<link rel="stylesheet" type="text/css" href="register.css">
<script type="text/javascript">
function checkForm(thisform){
var name = document.forms["my_form"]["username"].value;
var passs = document.forms["my_form"]["pass"].value;
var repass = document.forms["my_form"]["pass2"].value;
var email = document.forms["my_form"]["email"].value;
var reemail = document.forms["my_form"]["email2"].value;
if(name=='admin')
{
	document.getElementById("chk_name").innerHTML="username can't be admin";
}
if( passs != repass ){
	//alert("Your password doesn't match.");
	document.getElementById("chk_pass").innerHTML="Correct password.";
	document.forms["my_form"]["pass2"].focus();
	document.forms["my_form"]["pass2"].value="";
	return false;
}
if(1)
{
	with (thisform)
	{
		if (validate_email(email,"Not a valid e-mail address!")==false)
		{
			document.forms["my_form"]["email"].focus();
			return false;
		}
	}
}
if(email != reemail)
{
	document.getElementById("chk_email").innerHTML="Correct confirm Email.";
	document.getElementById("chk_pass").innerHTML="";
	document.getElementById("valid").innerHTML="";
	document.forms["my_form"]["email2"].focus();
	//document.forms["my_form"]["pass"].value="";
	document.forms["my_form"]["email2"].value="";
	return false;
}
}
function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {
		//alert(alerttxt);
		document.getElementById("valid").innerHTML="not_valid. Try again!";
		document.getElementById("chk_pass").innerHTML="";
		return false;
	}
  else {return true;}
  }
}
</script>
</head>
<body id="body-color">
<div class="fix main">
<div id="Sign-Up">
<fieldset style="width:50%;margin:100px auto;"><legend>Registration Form</legend>
<table border="0">
<tr>
<form id="frm1" method="POST" action="register_process.php" name="my_form" onsubmit="return checkForm(this);" >
<td>UserName*:</td><td> <input type="text" value="" name="username" style="padding:10px 45px" onchange="myFucntion()" id="ff" required="" /><font color="#FF0000" size="2"><label id="chk_name"></label></td>
</tr>
<tr>
<td>Age:</td><td> <input type="text" value="" name="age" style="padding:10px 45px" /></td>
</tr>
<tr>
<td>Password*:</td><td> <input type="password" name="pass" style="padding:10px 45px" required="" /></td>
</tr>
<tr>
<td>Confirm Password*:</td><td> <input type="password" name="pass2" style="padding:10px 45px" required="" /><font color="#FF0000" size="2"><label id="chk_pass"></label></td>
</tr>
<tr>
<td>Email*:</td><td><input type="text" name="email" style="padding:10px 45px" required="" /><font color="#FF0000" size="2"><label id="valid"></label></td>
</tr>
<tr>
<td>Confirm Email*:</td><td><input type="text" name="email2" style="padding:10px 45px" required="" /><font color="#FF0000" size="2"><label id="chk_email"></label></td>
</tr>
<tr>
<td><input id="button" type="submit" name="submit" value="Sign-Up"/></td>
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
