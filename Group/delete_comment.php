<?php 
$b=$_GET['st_no'];
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('test',$con);
$sql="DELETE FROM comment WHERE auto='$b'";
$result=mysql_query($sql);
?>
