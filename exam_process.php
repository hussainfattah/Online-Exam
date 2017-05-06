<?php 
$b=$_GET['value'];
session_start();
$_SESSION['mcq']=$b;
$con=mysql_connect('localhost','root','');
mysql_select_db('question',$con);
$sql="SELECT * FROM question_set WHERE question_set_id='$b'";
	$result=mysql_query($sql);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
#clock {
position:absolute;
font-family: Arial, Helvetica, sans-serif; 
font-size: 1.5em; 
color: black; 
background-color: white; 
border: 2px solid purple; 
padding: 10px 411px;
}
</style>
	<link rel="stylesheet" type="text/css" href="exam_process.css"/>
	<script src="auto_submit.js"></script>
	<script type="text/javascript">
	
	</script>
</head>
<body>
<div id="exam_form">
<span id="clock"></span>
<br />
<br />
<button onclick="start()" id='button' name="button">Start Exam</button>
<form id="form" action="mark_process_mcq.php" method="GET">
<br />
<span id="dialog" name='dialog_box'>Form will automatically submit in <b id="timer">20</b> <b>seconds</b>, When you Click Start.</span>
<br/>
<div id="question">
<?php
	$set_id=1;
	while($row=mysql_fetch_array($result))
	{
	?>
	<br />
	<div id="new">
	<?php
		//$_SESSION['id']=$row['user_id'];
		echo $set_id.'. '.$row['question'].'</br>';
	?>
	<input type="radio" value="a" name="answer_<?php echo $set_id?>"/>
	<?php
		echo $row['a'].'</br>';
	?>
	<input type="radio" value="b" name="answer_<?php echo $set_id?>"/>
	<?php
		echo $row['b'].'</br>';
	?>
	<input type="radio" value="c" name="answer_<?php echo $set_id?>"/>
	<?php
		echo $row['c'].'</br>';
	?>
	<input type="radio" value="d" name="answer_<?php echo $set_id?>"/>
	<?php
		echo $row['d'].'</br>';
		$set_id++;
	?>
	</div>
	<?php 
	}
?>
</div>
<span id="submit">
<input type="submit" name="submit_it" value="Submit" style="padding:10px 417px"/>
</span>
</form>
<div class="footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
</div>

</body>
</html>
