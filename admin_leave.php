<?php 
$b=$_GET['id'];
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('test',$con);
$sql="UPDATE people SET admin_panel='no' WHERE user_id='$b'";
mysql_query($sql); 
$_SESSION['new_admin']='no';
?>
