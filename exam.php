<?php
session_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('question',$con);
?>
<html>
	<head>
		<title>Welcome to this site!</title>
		<link rel="stylesheet" type="text/css" href="exam.css"/>
<script>
	function exam(str) {
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			if(str=='mcq'){
				document.getElementById("written").innerHTML=xmlhttp.responseText;
				//document.getElementById("written").innerHTML="";
			}
			if(str=='wtn'){
				document.getElementById("mcq").innerHTML=xmlhttp.responseText;
				//document.getElementById("written").innerHTML="";
			}
		}
	}
	if(str=='mcq')
	{
		xmlhttp.open("GET","mcq_question.php",true);
	}
	else if(str=='wtn')
	{
		xmlhttp.open("GET","written_question.php",true);
	}
	xmlhttp.send();
}
function valid(str){
	var ccc=1;
	<?php
	$c=mysql_connect('localhost','root','');
	$d=mysql_select_db('mark',$c);
	$idd=$_SESSION['id'];
	$s="SELECT * FROM mcq WHERE user_id='$idd'";
	$r=mysql_query($s);
	while($row=mysql_fetch_array($r)){
	?>
		if(str==<?php echo $row['question_set'] ?>){
			ccc=0;
			<?php $pp=$row['question_set'];
			//break;
			?>
		}
	<?php
	}
	?>
	if(ccc == 0){
		document.getElementById('vv').innerHTML='You already give that exam once.Try another set..!';
		document.getElementById('vv').style='position:absolute;top:442px;left:200px;margin-left:30px;background:black;width:373px;height:30px;color:red;padding:5px;';
	}
	if(ccc == 1){
		document.location="exam_process.php?value="+str;
	}
}
function valid_wtn(str){
	var ccc=1;
	<?php
	$c=mysql_connect('localhost','root','');
	$d=mysql_select_db('mark',$c);
	$idd=$_SESSION['id'];
	$s="SELECT * FROM written WHERE user_id='$idd'";
	$r=mysql_query($s);
	while($row=mysql_fetch_array($r)){
	?>
		if(str==<?php echo $row['question_set'] ?>){
			ccc=0;
			<?php $pp=$row['question_set'];
			//break;
			?>
		}
	<?php
	}
	?>
	if(ccc == 0){
		document.getElementById('vv').innerHTML='You already give that exam once.Try another set..!';
		document.getElementById('vv').style='position:absolute;top:442px;left:600px;margin-left:30px;background:black;width:373px;height:30px;color:red;padding:5px;';
	}
	if(ccc == 1){
		document.location="exam_process_written.php?value="+str;
	}
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
				<p>Select your Exam Type:</p>
				<div id='vv'></div>
				<div class="mcq" id='mcq'><a onclick="exam('mcq')"><img src="Images/mcq.png" class="mcq1"></a></div>
				<div class="written" id="written"><a onclick="exam('wtn')"><img src="Images/exam4.png" class="wtn1"></a></div>
			</div>
			<div class="footer" id="footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
		</div>
	</body>
</html>