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
		<link rel="stylesheet" type="text/css" href="add_tutorial.css"/>
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
			</div>
			<div class="add_tutorial"> 
				<form action="add_tutorial_process.php" method="POST">
					<CENTER style="color:white;margin-top:50px;margin-bottom:30px;margin-left:-50px;">
					Select Categories:
					<SELECT name="categories" style="width:100px;height:22px;">
					<OPTION SELECTED>php
					<OPTION>asp
					<OPTION>javascript
					<OPTION>html&css
					<OPTION>ajax
					</SELECT><BR>
					</CENTER>
					<textarea name="link" id="" cols="100" rows="1" style="margin-left:100px;margin-bottom:20px;background:#081F2C;color:white" placeholder="Paste Youtube Video link" required></textarea>
					<textarea name="comment" id="" cols="100" rows="5" placeholder="Add Comment" style="margin-left:100px;margin-bottom:20px;background:#081F2C;color:white;" required ></textarea>
					<br />
					<input type="submit" value="submit" style="margin-left:100px;padding:8px 350px;margin-bottom:30px;" />
				</form>
			</div>
			<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
		</div>
	</body>
</html>