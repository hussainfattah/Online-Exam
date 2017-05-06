<?php
session_start();
?>
<html>
	<head>
		<title>Welcome to this site!</title>
		<link rel="stylesheet" type="text/css" href="tutorial.css"/>
	<script type="text/javascript">
	function func(str){
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("eee").innerHTML=xmlhttp.responseText;
			//document.getElementById("written").innerHTML="";
		}
	}
	if(str=='php')
	{
		xmlhttp.open("GET","tutorial_php.php",true);
	}
	else if(str=='js')
	{
		xmlhttp.open("GET","tutorial_js.php",true);
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
			</div>
			
			<div class="tutorial">
			<div class="sidebar2">
				<ul>
					<li><a onclick="func('php')">PHP</a></li>
					<li><a onclick="func('js')">Java Script</a></li>
					<li><a href="#">Ajax</a></li>
					<li><a href="#">HTML and CSS</a></li>
					<li><a href="#">ASP</a></li>
					<li><a onclick="func('js')">Java Script</a></li>
					<li><a href="#">Ajax</a></li>
					<li><a href="#">HTML and CSS</a></li>
				</ul>
			</div>
			<div class="ee" id="eee">
			<?php
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('class_7',$con);
$sql="SELECT * FROM video";
	$res=mysql_query($sql);
	$i=1;
	while($row=mysql_fetch_array($res)){
	$url=$row['video_link'];
preg_match(
        '/[\\?\\&]v=([^\\?\\&]+)/',
        $url,
        $matches
    );
$id = $matches[1];
$width = '728';
$height = '350';
echo '<object class="video" width="' . $width . '" height="' . $height . '"><param name="movie" value="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' . $id . '&amp;hl=en_US&amp;fs=1?rel=0" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="' . $width . '" height="' . $height . '"></embed></object>'; 
}
?>
</div>
</div>
			<div class="footer" id="footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
		</div>
	</body>
</html>