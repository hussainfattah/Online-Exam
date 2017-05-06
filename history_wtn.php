<?php 
session_start();
ob_start();
$a=$_SESSION['id'];
$con=mysql_connect('localhost','root','');
mysql_select_db('mark',$con);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<style>
table{
    width: 60%;
    border-collapse: collapse;
}

table, td, th {
    border: 5px solid black;
	color:white;
}

th {text-align: left;}
.main{
height:1050px;
}
</style>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
echo "<table>
<tr>
<th>Question Set</th>
<th>&nbsp;&nbsp;Answer</th>
</tr>";
$sql="SELECT * FROM written WHERE user_id='$a'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
	$a=$row['question_set'];
	$b=$row['answer'];
		echo "<tr>";
		echo "<td>" . $a . "</td>";
		echo "<td>" . $b . "</td>";
		echo "</tr>";
}
echo "</table>";
?>

</body>
</html>