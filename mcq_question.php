<!DOCTYPE HTML>
<html lang="en-US">
<head>
<style>
table {
    width: 40%;
    border-collapse: collapse;
}

table, td, th {
    border: 5px solid black;
	color:white;
	margin-left:90px;
	margin-top:100px;
    padding: 10px;
}
th {text-align: left;}
.footer{
margin-top:120px;
}
</style>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
$con=mysql_connect('localhost','root','');
mysql_select_db('question',$con);
echo "<table>
<tr>
<th>Question Set</th>
</tr>";
$sql="SELECT * FROM question_set";
$result=mysql_query($sql);
$b=1;
while($row=mysql_fetch_array($result))
{
	$a=$row['question_set_id'];
	if($a==$b)
	{
	?>
		
	<?php
		echo "<tr>";
		//echo "<td>Set no : <a style='color:white;text-decoration:none;' href='exam_process.php?value=".$a."'>" . $a . "</a></td>";
		echo "<td>Set no : <a style='color:white;text-decoration:none;' onclick='valid(".$a.")' >" . $a . "</a></td>";
		echo "</tr>";
		$b=$a;
		$b++;
	}	
}
echo "</table>";
?>

</body>
</html>