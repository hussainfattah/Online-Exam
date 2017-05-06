<?php 
session_start();
ob_start();
$con=mysql_connect('localhost','root','');
mysql_select_db('test',$con);
$id=$_SESSION['id'];
$sql="SELECT * FROM people WHERE user_id='$id'";
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
				<div class="btn">
					<a href='logout.php' class='button'>logout</a>
				</div>
			</div>
			<div class="fix maincontent">
				<div class="fix sidebar">
					<nav>
						<ul>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="#">Question</a>
								<ul>
									<li><a href="question.php">Set Question</a></li>
									<li><a href="update_question.php">Update Question</a></li>
									<li><a href="delete_question.php">Delete Question</a></li>
								</ul>
							</li>
							<li><a href="exam2.php">Exam</a></li>
							<li><a href="help.php">Help</a></li>
							<li><a href="Group/Home.php">Group</a></li>
						</ul>
					</nav>
				</div>
				<span class="p1"><p>Your Profile</p></span>
				<hr />
				<div class="table">
					<table>
						<tr>
							<td>UserName:</td>
							<td><?php echo $username ?></td>
						</tr>
						<tr>
							<td>User id:</td>
							<td ><?php echo $_SESSION['id'] ?></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td ><?php echo $age ?></td>
						</tr>
						<tr>
							<td>Email Address:</td>
							<td><?php echo $email ?></td>
						</tr>
					</table>
					Show Exam History:
					<button id="mcq" onclick="history('mcq')">MCQ</button>
					<button id="written" onclick="history('wtn')">Written</button>
					<div id='history'></div>
				</div>
				<form action="userForm.php">
					<span class="button"><input type="submit" name="click" class="b1" value="Edit"></span>
				</form>
				<div class="proPic"><img src="Images/profile.png" class="img1"></div>
			</div>
		</div>
		<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
	</body>
</html>