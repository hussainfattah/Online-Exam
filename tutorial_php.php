<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
	
	</style>
</head>
<body>
	
</body>
</html>
<?php
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('class_7',$con);
$sql="SELECT * FROM video WHERE categories='php'";
	$res=mysql_query($sql);
	$i=1;
echo '<h2 style="margin-top:20px;color:white">PHP Tutorial Gallery </h2><hr /><br />';
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
echo '<br/>';
echo 'Description of totorial_'.$i.' :';
$i++;
echo '<p style="margin-left:0px;margin-top:15px;margin-bottom:15px;margin-right:20px;">'.$row['status'].'</p>';
}
echo 'See more on: <a style="color:yellow" href="http://www.w3schools.com">PHP_w3schools.com</a>';
?>