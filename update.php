<?php
	$con=mysql_connect('localhost','root','');
	mysql_select_db('question',$con);
	$question_set_id=$_POST['question_set_id'];
	$set_id=$_POST['set_id'];
	$question=$_POST['question'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$answer=$_POST['answer'];
	$sql="UPDATE question_set SET question='$question',a='$a' ,b='$b', c='$c', d='$d', answer='$answer' WHERE question_set_id='$question_set_id' AND set_id='$set_id'"; 
	mysql_query($sql);
	header("Location:MainPage.php?update=yes");
?>