<?php
session_start();
ob_start();
$ii=$_SESSION['id'];
$pp=$_GET['st_no'];
$p=$pp[0].$pp[1];
//echo $p;
$l=strlen($pp);
$dd;
for($i=2;$i<$l;$i++)
{
	$dd.=$pp[$i];
}
$con1=mysql_connect('localhost','root','');
	mysql_select_db('test',$con1);
	$sql="SELECT * FROM status WHERE status_id=$p";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		$user=$row['user_id'];
	}
$con=mysql_connect('localhost','root','');
	mysql_select_db('test',$con);
$time=date("l jS \of F Y @ h:i:s A",time()+46800);
	$add=mysql_query("INSERT INTO comment(status_id,comment_id,status_no,comment,time)VALUES('$user','$ii','$p','$dd','$time')");
//echo $dd;
?>
<?php 
	$sql1="SELECT * FROM comment WHERE status_no=$p ORDER BY auto ASC";
	$result1=mysql_query($sql1);
?>
	<html>
		<div class="parent" id="parent_t">
			<?php 
				while($row1=mysql_fetch_array($result1))
				{
					$a=$row1['status_id'];
					$b=$row1['comment_id'];
					$c=$row1['status_no'];
					$d=$row1['comment'];
					$e=$row1['auto'];
					$f=$row1['time'];
			?>
		<div class="comm">
			<h4 style="margin-left:40px;margin-bottom:10px;"><a href="../profile.php?id=<?php echo $b?>" style="color:white" ><?php echo username_from_user_id($b);?></a></h4>
		<?php 
			if($_SESSION['admin']=='yes' || $_SESSION['new_admin']=='yes')
			{
		?>
			<a class="delete_com" onclick="del_com(<?php echo $e ?>)"><img src="deleteIcon.png" style="height:20px ;width:20px;margin-left:140px;margin-top:-30px;"/></a>
		<?php 
			}else if($_SESSION['id']==$a || $_SESSION['id']==$b){
		?>
			<a class="delete_com" onclick="del_com(<?php echo $e?>)"><img src="deleteIcon.png" style="height:20px ;width:20px;margin-left:140px;margin-top:-30px;"/></a>
		<?php 
			}
		?>
			<div id="co" style="color:white;
				margin-bottom:10px;
				margin-left:40px;
			">
				<?php 
				echo $d.'<br/>';
				echo $f.'<br/>';
				?>
			</div>
		</div>
			<?php
				}
			?>
        </div>	
	</html>
<?php

function username_from_user_id($id)
{
	$sql="SELECT username FROM people WHERE user_id='$id'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result))
	{
		$username=$row['username'];
		return $username;
	}
}

?>