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
				
		
		<fieldset style="width:50%;margin:100px auto;"><legend>Update Question</legend>
<table border="0">
<tr>
<form method="POST" action="update.php">
<td style="color:white" >Question set:</td><td> <input type="text" name="question_set_id" style="padding:10px 10px;background:#081F2C;color:white" placeholder="Question_set"/></td>
</tr>
<tr>
<td style="color:white">Question no:</td><td> <input type="text" name="set_id" style="padding:10px 45px;background:#081F2C;color:white" placeholder="Question_no"/></td>
</tr>
<tr>
<td style="color:white">Question:</td><td> <input type="text" name="question" style="padding:10px 45px;background:#081F2C;color:white" placeholder="Question"/></td>
</tr>
<tr>
<td style="color:white">Option a:</td><td> <input type="text" name="a" style="padding:10px 45px;background:#081F2C;color:white" placeholder="Option a"/></td>
</tr>
<tr>
<td style="color:white">Option b:</td><td> <input type="text" name="b" style="padding:10px 45px;background:#081F2C;color:white" placeholder="Option b"/></td>
</tr>
<tr>
<td style="color:white">Option c:</td><td> <input type="text" name="c" style="padding:10px 45px;background:#081F2C;color:white" placeholder="Option c"/></td>
</tr>
<tr>
<td style="color:white">Option d:</td><td> <input type="text" name="d" style="padding:10px 45px;background:#081F2C;color:white" placeholder="Option d"/></td>
</tr>
<tr>
<td style="color:white">Option answer:</td><td> <input type="text" name="answer" style="padding:10px 45px;background:#081F2C;color:white" placeholder="Answer"/></td>
</tr>
<tr>
<td ><input style="padding:4px 40px;margin-top:10px;margin-bottom:10px;margin-left:10px;" id="button" type="submit" name="submit" value="Update"/></td>
</tr>
</form>
</table>
</fieldset>
<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
</div>
	</body>
</html>
