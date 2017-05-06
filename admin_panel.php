<?php 
ob_start();
session_start();
if(!isset($_SESSION['id']))
{
	session_destroy();
	header("Location:Home.php");
}
$con1=mysql_connect("localhost","root","");
mysql_select_db('test',$con1);
$sql1="SELECT * FROM people";
$result1=mysql_query($sql1);
?>
<html>
	<head>
		<title>Welcome to this site!</title>
		<link rel="stylesheet" type="text/css" href="admin_panel.css"/>
	<script type="text/javascript" src="jquery-1.9.0.min.js">
	</script>
	<script type="text/javascript">
		function delete_id(id){
			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					//document.getElementById("written").innerHTML="";
				}
			}
			xmlhttp.open("GET","admin_delete_id.php?id="+id,true);
			xmlhttp.send();
		}
		function make_admin(id){
			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("make_"+id).innerHTML="He is a admin now";
				}
			}
			xmlhttp.open("GET","admin_make_admin.php?id="+id,true);
			xmlhttp.send();
		}
		function delete_admin(id){
			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("delete_"+id).innerHTML="No longer admin";
				}
			}
			xmlhttp.open("GET","admin_delete_admin.php?id="+id,true);
			xmlhttp.send();
		}
		function leave(id){
			if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					//document.getElementById("admin_n").innerHTML="You are No longer admin";
					window.location="http://localhost/project/MainPage.php";
				}
			}
			xmlhttp.open("GET","admin_leave.php?id="+id,true);
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
			<div class="admin" id='admin_n'>
			<br style="margin-top:-20px;"/>
		<?php 
		if($_SESSION['admin']=='yes'){
			while($row1=mysql_fetch_array($result1))
			{
		?> 
			<div class="admin_div">
		<?php
				$a=$row1['user_id'];
				$b=$row1['username'];
				$c=$row1['admin_panel'];
			?>
				<a href="profile.php?id=<?php echo $a?>"><?php echo $b ?></a>
				<br />
				<p>User_id: <?php echo $a ?></p>
			<?php
				if($b=='admin'){
				echo 'You are Main Admin'.'<br/>';
			?>
				
			<?php 
				}else if($c=='yes'){
			?>
				<div id="delete_<?php echo $a ?>" class="btn1">
					<button onclick='delete_admin(<?php echo $a ?>)'>Delete_Admin</button>
				</div>
				<div class="btn2">
					<button onclick='delete_id(<?php echo $a ?>)' class='button2'>Delete_id</button>
				</div>
			<?php
				}else{
			?>
				<div id='make_<?php echo $a?>' class="btn1">
					<button onclick='make_admin(<?php echo $a ?>)' >Make_Admin</button>
				</div>
				<div class="btn2">
					<button onclick='delete_id(<?php echo $a ?>)' class='button2'>Delete_Id</button>
				</div>
			<?php	
				}
			?>
			</div>
			<?php 
			}
		}else if($_SESSION['new_admin']=='yes'){
			while($row1=mysql_fetch_array($result1))
			{
		?>
			<div class="admin_div">
		<?php
				$a=$row1['user_id'];
				$b=$row1['username'];
				$c=$row1['admin_panel'];
			?>
				<a href="profile.php?id=<?php echo $a?>"><?php echo $b ?></a>
				<br />
				<p>User_id: <?php echo $a ?></p>
			<?php
				if($b=='admin'){
				echo 'Main Admin'.'<br/>';
			?>
				
			<?php 
				}else if($c=='yes' && $_SESSION['id']==$a){
				echo 'This is you'.'<br/>';
			?>
				<div >
					<button onclick='leave(<?php echo $a?>)'>Leave</button>
				</div>
			<?php
				}else if($c=='yes'){
					echo 'He is also a admin'.'<br/>';
				}else{
			?>
				<div id='make_<?php echo $a?>' class="btn1">
					<button onclick='make_admin(<?php echo $a ?>)' >Make_Admin</button>
				</div>
				<div class="btn2">
					<button onclick='delete_id(<?php echo $a ?>)' class='button2' >Delete_Id</button>
				</div>
			<?php	
				}
		?>
			</div>
		<?php 
			}
		}
			?>
			<br style="margin-bottom:-30px;" />
			</div>
			<div class="fix footer">&copy; H M Abdul Fattah, All Rights Reserved</div>
		</div>
		<script type="text/javascript"> 
			$(".button2").click(function(){
				$(this).closest("div.admin_div").hide(500,function(){
					$(this).closest("div.admin_div").remove();
				});
			});
		</script>
	</body>
</html>