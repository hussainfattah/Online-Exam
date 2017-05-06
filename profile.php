<?php
ob_start();
session_start();
if(!isset($_SESSION['id']))
{
	session_destroy();
	header("Location:Home.php");
}
?>
<?php 
$id_g=$_GET['id'];
session_start();
$id=$_SESSION['id'];
ob_start();
$show_id;
$con=mysql_connect('localhost','root','');
mysql_select_db('test',$con);
if($id_g){
if($id_g != $id)
{
$sql="SELECT * FROM people WHERE user_id='$id_g'";
$show_id=$id_g;
}
else
{
//$id=$_SESSION['id'];
$sql="SELECT * FROM people WHERE user_id='$id'";
$show_id=$id;
}
}else
{
$sql="SELECT * FROM people WHERE user_id='$id'";
$show_id=$id;
}

$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
	$username=$row['username'];
	$age=$row['age'];
	$email=$row['email'];
}
?>
<html>
	<head>
		<title>Welcome to this site!</title>
		<link rel="stylesheet" type="text/css" href="profile.css"/>
<script type="text/javascript">
	function history(str){
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("history").innerHTML=xmlhttp.responseText;
		}
	}
	if(str=='mcq')
	{
		xmlhttp.open("GET","history_mcq.php",true);
	}
	else if(str=='wtn')
	{
		xmlhttp.open("GET","history_wtn.php",true);
	}
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
					<a href='logout.php' class='button'>logout</a>
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
									<li><a href="add_tutorial.php">Add Tutorial</a></li>
									<li><a href="question.php">Set Question</a></li>
									<li><a href="update_question.php">Update Question</a></li>
									<li><a href="delete_question.php">Delete Question</a></li>
								</ul>
							</li>
						<?php 
							}
							
						?>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="exam.php">Exam</a></li>
						<?php 
							if($_SESSION['admin']!= 'yes' && $_SESSION['new_admin']!='yes')
							{
						?>
							<li style="padding:0 6px;"><a href="">Help</a></li>
						<?php 
							}
						?>
							<li><a href="tutorial.php">Tutorial</a></li>
							<li><a href="Group/Home.php">Group</a></li>
						</ul>
					</nav>
				</div>
				<?php
				if($id_g){
				if($id != $id_g)
				{
				?>
				<span class="p1"><p>His Profile</p></span>
				<?php 
				}else{
				?>
				<span class="p1"><p>Your Profile</p></span>
				<?php 
				}
				}else{
				?>
				<span class="p1"><p>Your Profile</p></span>
				<?php 
				}
				?>
				<hr />
				<div class="table">
					Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: &nbsp;&nbsp;
					<label id="username"><?php echo $username ?></label>
					<br />
					User_Id  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:&nbsp;&nbsp
					<label id="user_id"><?php echo $show_id ?></label>
					<br />
					Age &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp:&nbsp;&nbsp
					<label id="age"><?php echo $age ?></label>
					<br />
					Email Adress &nbsp:&nbsp;&nbsp
					<label id="email"><?php echo $email ?></label>
					<br />
					<br />
					<?php
			if($_SESSION['admin']!='yes'){
				if($id_g){
					if($id != $id_g){}
					else
					{
					?>
					Show Exam History:
					<button id="mcq" onclick="history('mcq')">MCQ</button>
					<button id="written" onclick="history('wtn')">Written</button>
					<?php 
					}
				}else{
					?>
					Show Exam History:
					<button id="mcq" onclick="history('mcq')">MCQ</button>
					<button id="written" onclick="history('wtn')">Written</button>
					<?php
				}
			}
					?>
					<br />
					<br />
					<div id='history'></div>
				</div>
			<?php 
			if($id_g){
				if($id != $id_g){}
				else{
			?>
				<form action="userForm.php" method="post" enctype="multipart/form-data">
					<input type="file" name="image_link" style="
					position:absolute;
					top:610px;
					left:845px;
					"/>
					<span class="button"><input type="submit" name="click" class="b1" value="Change"></span>
				</form>
			<?php 
				}
			}
			else{
			?>
				<form action="userForm.php" method="post" enctype="multipart/form-data">
					<input type="file" name="image_link" style="
					position:absolute;
					top:610px;
					left:845px;
					"/>
					<span class="button"><input type="submit" name="click" class="b1" value="Change"></span>
				</form>
			<?php
			}
			?>
				<?php 
			if($id_g){
				if($id != $id_g){
					$con2=mysql_connect('localhost','root','');
					$db2=mysql_select_db('test',$con2);
					//$idd=$_SESSION['id'];
					$i1="SELECT * FROM people WHERE user_id='$id_g'";
					$r=mysql_query($i1);
					while($row=mysql_fetch_array($r))
					{
						$pic=$row['image'];
						if($pic){
						?>
						<div class="proPic"><img src="<?php echo $row['image']?>" class="img1" style="
						height:200px;
						width:200px;
						"/></div>
					<?php
					}else{
					?>
					<div class="proPic"><img src="Images/profile.png" class="img1"></div>
					<?php
						}
					}
				}else{
					$con1=mysql_connect('localhost','root','');
					$db1=mysql_select_db('test',$con1);
					$idd=$_SESSION['id'];
					$i1="SELECT * FROM people WHERE user_id='$idd'";
					$r=mysql_query($i1);
					while($row=mysql_fetch_array($r))
					{
						$pic=$row['image'];
						if($pic){
						?>
						<div class="proPic"><img src="<?php echo $row['image']?>" class="img1" style="
						height:200px;
						width:200px;
						"/></div>
					<?php
					}else{
					?>
					<div class="proPic"><img src="Images/profile.png" class="img1"></div>
					<?php
						}
					}
				}
			}else{
					$con1=mysql_connect('localhost','root','');
					$db1=mysql_select_db('test',$con1);
					$idd=$_SESSION['id'];
					$i1="SELECT * FROM people WHERE user_id='$idd'";
					$r=mysql_query($i1);
					while($row=mysql_fetch_array($r))
					{
						$pic=$row['image'];
						if($pic){
						?>
						<div class="proPic"><img src="<?php echo $row['image']?>" class="img1" style="
						height:200px;
						width:200px;
						"/></div>
					<?php
					}else{
					?>
					<div class="proPic"><img src="Images/profile.png" class="img1"></div>
					<?php
						}
					}
			}
				?>
			</div>
		</div>
		<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
	</body>
</html>