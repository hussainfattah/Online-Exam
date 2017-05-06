<?php
ob_start();
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('class_7',$con);
$categories=$_POST['categories'];
$link=$_POST['link'];
$comment=$_POST['comment'];
echo $categories.'<br/>';
echo $link.'<br/>';
echo $comment.'<br/>';
status_update($categories,$link,$comment);
header('Location:tutorial.php');

function status_update($categories,$link,$comment){
	$sql="INSERT INTO video(status,video_link,categories)VALUES('$comment','$link','$categories')";
	mysql_query($sql);
}

?>