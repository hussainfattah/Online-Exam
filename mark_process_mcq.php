<?php
session_start();
ob_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('question',$con);

$id=$_SESSION['id'];
$set=$_SESSION['mcq'];
	$ans =array();
	$i=0;
	$sql="SELECT * FROM question_set WHERE question_set_id='$set'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		$ans[$i]=$row['answer'];
		$i++;
	}
	echo $ans[0].' '.$ans[1].' '.$ans[2].' '.$ans[3].'<br/>';
$a=$_GET['answer_1'];
echo $a.'<br/>';
$b=$_GET['answer_2'];
echo $b.'<br/>';
$c=$_GET['answer_3'];
echo $c.'<br/>';
$d=$_GET['answer_4'];
echo $d.'<br/>';
$mark=0;
if($ans[0]==$a)
$mark++;
if($ans[1]==$b)
$mark++;
if($ans[2]==$c)
$mark++;
if($ans[3]==$d)
$mark++;
echo 'Your mark is '.$mark.'<br/>';
$percent=($mark*100)/4;
echo $percent;
$con1=mysql_connect('localhost','root','');
$db=mysql_select_db('mark',$con1);
$sql1="INSERT INTO mcq(user_id,question_set,mark,percent)VALUES('$id','$set','$mark','$percent')";
$ab=mysql_query($sql1);
header("Location:MainPage.php?exam=yes");
?>