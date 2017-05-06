<?php
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('class_7',$con);
$sql="SELECT * FROM video WHERE categories='javascript'";
	$res=mysql_query($sql);
	$i=1;
echo '<h2 style="margin-top:20px;color:white">JavaScript Tutorial Gallery </h2><hr /><br />';
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
echo 'Description of tutorial_'.$i.' :'.'<br/>'.'<br/>';
$i++;
echo '<p>'.$row['status'].'</p>';
}
echo 'See more on: <a style="color:yellow" href="http://www.w3schools.com">JavaScript_w3schools.com</a>';
?>