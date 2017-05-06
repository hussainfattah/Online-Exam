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
		<link rel="stylesheet" type="text/css" href="mainpage.css"/>
		<link rel="stylesheet" type="text/css" href="themes/bar/bar.css"/>
		<link rel="stylesheet" type="text/css" href="themes/dark/dark.css"/>
		<link rel="stylesheet" type="text/css" href="themes/default/default.css"/>
		<link rel="stylesheet" type="text/css" href="themes/light/light.css"/>
		<link rel="stylesheet" type="text/css" href="themes/nivo-slider.css"/>
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
				
				<?php 
					if($_GET['aaa']=='login')
					{
				?>
				<div class="content">
					<p>You are successfully login.</p>
				<?php 
					}
					if($_GET['aaa']=='register')
					{
				?>
				<div/>
				<div class="content">
					<p>You are successfully registered.</p>
				</div>
				<?php 
					}
				?>
				<?php 
					if($_GET['update']=='yes')
					{
				?>
				<div class="fix content">
					<p>Your Question is updated Successfully.</p>
				</div>
				<?php 
					}
				?>
				<?php 
					if($_GET['delete']=='yes')
					{
				?>
				<div class="fix content">
					<p>Question Set is deleted Successfully.</p>
				</div>
				<?php 
					}
				?>
				<?php 
					if($_GET['exam']=='yes')
					{
				?>
				<div class="fix content">
					<p>You completed your Exam Successfully.</p>
				</div>
				<?php 
					}
				?>
				<?php 
					if($_GET['set']=='yes')
					{
				?>
				<div class="fix content">
					<p>You Set a question set Successfully.</p>
				</div>
				<?php 
					}
				?>
			</div>
			<div class="fix slider">
					<div class="slide-wrapper theme-default">
						<div class="nivoSlider" id="slider">
						<img src="images of kuet/u1.jpg" alt="" title="This site developed by Abdul Fattah"/>
						<img src="images of kuet/u4.jpg" alt=""/>
						<img src="images of kuet/3.jpg" alt=""/>
						<img src="images of kuet/u2.jpg" alt=""/>
					</div>
				</div>
			</div>
			<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
		</div>
		<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
			$('#slider').nivoSlider();
			});
		</script>
	</body>
</html>