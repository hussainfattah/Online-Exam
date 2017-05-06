<?php 
ob_start();
session_start();
if(!isset($_SESSION['id']))
{
	session_destroy();
	header("Location:Home.php");
}
?>
<html>
	<head>
		<title>Welcome to this site!</title>
		<link rel="stylesheet" type="text/css" href="edit.css"/>
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
							<li><a href="">Help</a></li>
						<?php 
							}
						?>
							<li><a href="tutorial.php">Tutorial</a></li>
							<li><a href="Group/Home.php">Group</a></li>
						</ul>
					</nav>
				</div>
				<fieldset style="width:50%;margin:100px auto;"><legend>Delete Question</legend>
<table border="0">
<tr>
<form method="POST" action="delete.php">
<td style="color:white;">Name of Question set:</td><td> <input style="background:#081F2C;color:white;padding:10px 45px" type="text" name="question_set_id" placeholder="question set"/></td>
</tr>
<tr>
<td><input style="margin:10px;" id="button1" type="submit" name="submit" value="Delete"/></td>
</tr>
</form>
</table>
</fieldset>
<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
</div>
	</body>
</html>