<?php
session_start();
ob_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('test',$con);
$username=$_POST['username'];
$password=$_POST['pass'];
login($username,$password);

function login($user,$pass)
{
	$sql="SELECT * FROM people WHERE username='$user'";
	$result=mysql_query($sql);
	
	while($row=mysql_fetch_array($result))
	{
		if($row['password']==$pass)
		{
			$_SESSION['id']=$row['user_id'];
			$_SESSION['new_admin']=$row['admin_panel'];
			if($row['username']=='admin'){
				$_SESSION['admin']='yes';
			}
			if(isset($_POST['checkbox'])){
				setcookie("user", $_SESSION['id'], time()+1000);
			}
			header('Location:check.php?rrr=login');
			
			die();
		}
		else
		{
			header('Location:login.php?error=yes');
			die();
		}
	}
	header('Location:login.php?error=username');
}
?>