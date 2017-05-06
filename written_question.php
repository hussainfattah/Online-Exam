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
    padding: 10px;
	margin-left:490px;
	margin-top:100px;
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
$sql="SELECT * FROM written";
$result=mysql_query($sql);
$b=1;
while($row=mysql_fetch_array($result))
{
	$a=$row['set_id'];
	echo "<tr>";
	//echo "<td>Set no  : <a style='color:white;text-decoration:none' href='exam_process_written.php?value=".$a."'>" . $a . "</a></td>";
	echo "<td>Set no : <a style='color:white;text-decoration:none;' onclick='valid_wtn(".$a.")' >" . $a . "</a></td>";
	echo "</tr>";
	$a++;	
}
echo "</table>";
?>

</body>
</html>