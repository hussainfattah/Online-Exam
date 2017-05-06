<?php 
$b=$_GET['st_no'];
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('test',$con);
$sql="DELETE FROM status WHERE status_id='$b'";
$result=mysql_query($sql);
$sq="DELETE FROM comment WHERE status_no='$b'";
mysql_query($sq);
?>
