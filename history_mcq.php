<?php
session_start();
$id=$_SESSION['id'];
$con=mysql_connect('localhost','root','');
mysql_select_db('mark',$con);
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<style>
table {
    width: 70%;
    border-collapse: collapse;
}

table, td, th {
    border: 5px solid black;
	color:white;
}

th {text-align: left;}
.main{
height:900px;
}
</style>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?php
echo "<table>
<tr>
<th>User_id</th>
<th>Question_set</th>
<th>Mark</th>
<th>Percent</th>
</tr>";
$sql="SELECT * FROM mcq WHERE user_id='$id'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
	$s=$row['question_set'];
	$m=$row['mark'];
	$p=$row['percent'];
	echo "<tr>";
	echo "<td>" . $id . "</td>";
	echo "<td>" . $s . "</td>";
	echo "<td>" . $m . "</td>";
	echo "<td>" . $p . "%</td>";
	echo "</tr>";
}

echo "</table>";
?>

</body>
</html>