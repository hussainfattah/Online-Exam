<?php
session_start();
ob_start();
//echo $_SESSION['id'];

if($_SESSION['id'])
{
	if($_GET['rrr']=='login')
		header('Location:MainPage.php?aaa=login');
	else if($_GET['rrr']=='register')
		header('Location:MainPage.php?aaa=register');
}
else{
	header('Location:Home.php?logout=yes');
}
?>