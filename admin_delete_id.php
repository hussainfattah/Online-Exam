<?php 
$b=$_GET['id'];
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('test',$con);
$sql="DELETE FROM people WHERE user_id='$b'";
$result=mysql_query($sql);
?>
