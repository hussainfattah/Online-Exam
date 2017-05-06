<?php
ob_start();
session_start();
if(isset($_SESSION['id']))
{
	session_destroy();
	header("Location:Home.php");
}
?>
<html>
	<head>
		<title>Welcome to this site!</title>
		<link rel="stylesheet" type="text/css" href="home.css"/>
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
				<div class="btn">
					<a href='register.php' class='button'>Register</a>
					<a href='login.php' class='button'>login</a>
				</div>
			</div>
			<div class="fix maincontent">
				<div class="fix sidebar">
					<ul>
						<a href="Home.php"><li>Home</li></a>
						<a href=""><li>About</li></a>
						<a href=""><li>Help</li></a>
						<a href=""><li>Photo</li></a>
					</ul>
				</div>
				<?php
					if($_GET['logout']=='yes')
					{
				?>
				<div class="logout">
					<p>You are Successfully logout.</p>
				</div>
				<?php
					}
				?>
				<div class="fix slider">
					<div class="slide-wrapper theme-default">
						<div class="nivoSlider" id="slider">
							<img src="images of kuet/1.jpg" alt="" title="This site developed by Abdul Fattah"/>
							<img src="images of kuet/3.jpg" alt=""/>
							<img src="images of kuet/5.jpg" alt=""/>
							<img src="images of kuet/6.jpg" alt=""/>
						</div>
					</div>
				</div>
				<div class="fix content">
					<h2><font>Home</font></h2>
					
					<hr/><hr/>
					<p><br/>Welcome to this site. If you are not a member then join now and improve your skill by giving exam. If you are already a member then click login to go to the main page. <br/><br/>Thank you for visiting this site.</p>
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