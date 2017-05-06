<?php
	ob_start();
	session_start();
	$username=$_POST['username'];
	$age=$_POST['age'];
	$pass=$_POST['pass'];
	$confirmPass=$_POST['pass2'];
	$email=$_POST['email'];
	$confirmemail=$_POST['email2'];
	$con=mysql_connect('localhost','root','');
	mysql_select_db('test',$con);
	insert_user($username,$age,$pass,$confirmPass,$email,$confirmemail);
	
	function insert_user($username,$age,$pass,$confirmPass,$email,$confirmemail)
	{
		$u1=mysql_real_escape_string($username);
		$a1=mysql_real_escape_string($age);
		$p1=mysql_real_escape_string($pass);
		$p2=mysql_real_escape_string($confirmPass);
		$e1=mysql_real_escape_string($email);
		$e2=mysql_real_escape_string($confirmemail);
		
		$add=mysql_query("INSERT INTO people(username,age,password,email,image,admin_panel)VALUES('$username','$age','$pass','$email','0','no')");
					
		$sss="SELECT * FROM people";
		$aaa=mysql_query($sss);
		while($rrr=mysql_fetch_array($aaa))
		{
			if($rrr['password']==$pass && $rrr['username']==$username)
			{
				$_SESSION['id']=$rrr['user_id'];
				header('Location:check.php?rrr=register');
			}
		}
	}
?>