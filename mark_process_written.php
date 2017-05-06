<?php
session_start();
ob_start();

$a=$_SESSION['id'];
$b=$_SESSION['wtn'];
$status=$_GET['status'];

$con1=mysql_connect('localhost','root','');
$db=mysql_select_db('mark',$con1);
$sql1="INSERT INTO written(user_id,question_set,answer)VALUES('$a','$b','$status')";
$ab=mysql_query($sql1);
if($ab)
header('Location:MainPage.php?exam=yes');
else{
echo $a.'<br/>';
echo $b.'<br/>';
echo $status.'<br/>';
die();
}
?>