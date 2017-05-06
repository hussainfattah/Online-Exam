<?php
	include "database.php";
	session_start();
	$status= $_GET['status'];
	if($status=='')
		header("Location:home.php");
	$user_id=$_SESSION['id'];
	//$time=date("l jS \of F,Y @ h:i:s A",time()+7200);
	//13 hour slow
	$time=date("l jS \of F Y @ h:i:s A",time()+46800);
	//status_update($user_id,$status,$time);
	//header("Location:home.php");
	//function status_update($user_id,$status,$time)
	{
		$sql="INSERT INTO status(user_id,status,time)VALUES('$user_id','$status','$time')";
		mysql_query($sql);
	}
?>
	
	<?php
	
	$sql="SELECT * FROM status ORDER BY status_id DESC";

	$result=mysql_query($sql);
?>
<html>
<div class="status" style="margin:-10px;">
	<?php
		$i=1;
		while($row=mysql_fetch_array($result))
		{
			$user_id=$row['user_id'];
			$status_id=$row['status_id'];
			$status=$row['status'];
			$time=$row['time'];
	?>
		<div class="single_status" id="<?php echo $status_id ?>">
			<div class="rr">
			<h3 style="margin-bottom:15px;padding:8px 2px;"><a href="../profile.php?id=<?php echo $user_id?>" style="color:white;" ><?php echo username_from_user_id($user_id);?></a></h3>
			<?php 
				if($_SESSION['admin']=='yes' || $_SESSION['new_admin']=='yes')
				{
			?>
			<a class="delete_st" onclick="del(<?php echo $status_id;?>)"><img src="deleteIcon.png" style="height:30px ;width:30px;margin-left:800px;margin-top:-39px;"/></a>
			<?php 
				}else if($_SESSION['id']==$user_id){
			?>
			<a class="delete_st" onclick="del(<?php echo $status_id;?>)"><img src="deleteIcon.png" style="height:30px ;width:30px;margin-left:800px;margin-top:-39px;"/></a>
			<?php 
				}
			?>
			</div>
			<p>
				<?php echo $status;?>
			</p>
			
			<div class="time" style="margin-bottom:10px;margin-top:10px">
				<?php echo $time;?>
			</div>
			<?php 
				$con1=mysql_connect("localhost","root","");
				mysql_select_db('comment',$con1);
				$sql1="SELECT * FROM comment WHERE status_no=$status_id ORDER BY auto ASC";
				$result1=mysql_query($sql1);
				//$pp=1;
			?>
		<div class="parent">
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
			<div class="comment">
				<div id='aaa'>
				<textarea name="comment" id="bbb" value="" cols="120" rows="1" placeholder="comment" onkeyup="Comment(this.value)" style="background:#081F2C;color:white;margin-bottom:5px"></textarea>
				</div>
				<button class="comment_new" style="
				padding:6px 415px;
				" onclick="fun(<?php echo $status_id?>)">Comment</button>
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