<?php 
session_start();
$id=$_SESSION['id'];
$image_linkk="";
if($_FILES['image_link']['error'] > 0){
	echo 'error';
}else{
	$prefix= $_SESSION['id'].time();
	$link="upload/".$prefix.$_FILES["image_link"]["name"];
	move_uploaded_file($_FILES["image_link"]["tmp_name"],$link);
	$image_linkk="http://localhost/project/upload/".$prefix.$_FILES["image_link"]["name"];
}
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('test',$con);
$sql="UPDATE people SET image='$image_linkk' WHERE user_id='$id'";
mysql_query($sql);
header("Location:profile.php");
?>