<?php
//$s="SELECT * FROM comment WHERE (id=$value) ORDER BY comment_id DESC";
session_start();
ob_start();
include "database.php";
?>
<html>
<head> 
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="jquery-1.9.0.min.js">
</script>
<script type="text/javascript">
var c;
function Comment(str)
{
c=str;
document.getElementById("ajax").innerHTML=str;
}
function fun(st_no){
var d=st_no+c;
if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//document.getElementById("add_comment").innerHTML="Hi";
			window.location="http://localhost/project/Group/home.php";
		}
	}
	xmlhttp.open("GET","comment.php?st_no="+d,true);
	xmlhttp.send();
}

function del(st_no){
if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			//window.location="http://localhost/project/Group/home.php";
		}
	}
	xmlhttp.open("GET","delete_status.php?st_no="+st_no,true);
	xmlhttp.send();
}
function del_com(st_no){
if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			//window.location="http://localhost/project/Group/home.php";
		}
	}
	xmlhttp.open("GET","delete_comment.php?st_no="+st_no,true);
	xmlhttp.send();
}
</script>
</head>
<body>
		<div class="fix main">
			<div class="header_class fix">
				<div class="header fix">
					<h1>Online Exam</h1>
				</div>
				<?php 
					if($_SESSION['admin']=='yes' || $_SESSION['new_admin']=='yes')
					{
				?>
				<div class="panel">
					<a href='admin_panel.php' class='button'>Admin_panel</a>
				</div>
				<?php 
					}
				?>
				<div class="btn">
					<a href='../logout.php' class='button'>logout</a>
				</div>
			</div>
			<div class="fix maincontent">
				<div class="fix sidebar">
					<nav>
						<ul>
						<?php 
							if($_SESSION['admin']=='yes' || $_SESSION['new_admin']=='yes')
							{
						?>
							<li><a href="#">Admin</a>
								<ul id="sub">
									<li><a href="../add_tutorial.php">Add Tutorial</a></li>
									<li><a href="../question.php">Set Question</a></li>
									<li><a href="../update_question.php">Update Question</a></li>
									<li><a href="../delete_question.php">Delete Question</a></li>
								</ul>
							</li>
						<?php 
							}
							
						?>
							<li><a href="../profile.php">Profile</a></li>
							<li><a href="../exam.php">Exam</a></li>
						<?php 
							if($_SESSION['admin']!= 'yes' && $_SESSION['new_admin']!='yes')
							{
						?>
							<li style="padding:0 6px;"><a href="">Help</a></li>
						<?php 
							}
						?>
							<li><a href="../tutorial.php">Tutorial</a></li>
							<li><a href="Home.php">Group</a></li>
						</ul>
					</nav>
				</div>
			</div>

<form action="status_process.php" method="post">
	<br />
	<label style="margin-left:10px;font-size:27px;
	">
	Update status:</label>
	<br/>
	<br/>
	<textarea name="status" cols="126" rows="5" style="margin-left:10px;margin-bottom:60px;color:white;
	background:#081F2C " placeholder="Whta's on your mind?"></textarea>
	<input type="submit" value="Update status" style="
	position:absolute;
	top:525px;
	left:149px;
	background:white;
	color:black;
	padding: 10px 425px;
	"/>
</form>
<?php
	$sql="SELECT * FROM status ORDER BY status_id DESC";

	$result=mysql_query($sql);
?>
<div class="status">
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
<div class="footer" id="footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
</div>
<script type="text/javascript"> 
$(".delete_st").click(function(){
$(this).closest("div.single_status").hide(500,function(){
		$(this).closest("div.single_status").remove();
	});
});

$(".delete_com").click(function(){
$(this).closest("div.comm").hide(500,function(){
		$(this).closest("div.comm").remove();
	});
});

$(".comment_new").click(function(){
	var id=$(this).closest("div.single_status").attr("id");
	alert(id);
	//$("#"+id+">>.comm").append("appended");
	//$("#"+id+">>.parent").append("appended");
});
</script>
</body>
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
