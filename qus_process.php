<?php
ob_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('question',$con);
	
$question_set=$_POST['set'];
$question_no=array('1','2','3','4');
$question = array();
$option_a=array();
$option_b=array();
$option_c=array();
$option_d=array();
$answer=array();

for($i = 0; $i <4; $i++){
	//array_push($question_no,$_POST['qus_no'.$i]);
	array_push($question,$_POST['qus'.$i]);
	array_push($option_a,$_POST[$i.'_opt_a']);
	array_push($option_b,$_POST[$i.'_opt_b']);
	array_push($option_c,$_POST[$i.'_opt_c']);
	array_push($option_d,$_POST[$i.'_opt_d']);
	array_push($answer,$_POST[$i.'_correct_ans']);
}

for($j=0 ; $j<4 ; $j++)
{
	$sql="INSERT INTO question_set(question_set_id,set_id,question,a,b,c,d,answer)VALUES('$question_set','$question_no[$j]','$question[$j]','$option_a[$j]','$option_b[$j]','$option_c[$j]','$option_d[$j]','$answer[$j]')";
	mysql_query($sql);
}
header("Location:MainPage.php?set=yes");
?>