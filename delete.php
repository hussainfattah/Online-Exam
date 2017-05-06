<?php
	$con=mysql_connect('localhost','root','');
	mysql_select_db('question',$con);
	$question_set_id=$_POST['question_set_id'];
	$sql="DELETE FROM question_set WHERE question_set_id='$question_set_id'";
	$result=mysql_query($sql);
	if($result)
	{
		header("Location:MainPage.php?delete=yes");
	}
?>