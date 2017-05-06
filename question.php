<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="qus_process.php" method="post">
		<input type="text" placeholder="qus set" name="set" /><br />
			<?php
				for($i = 0; $i < 4; $i++){ 
			?>
				<input type="text" name="qus_no<?php echo $i ?>" placeholder="<?php echo $i+1 ?>" />
				<input type="text" name="qus<?php echo $i ?>"  placeholder="qus<?php echo $i+1 ?>"  />
				<input type="text" name="<?php echo $i ?>_opt_a"  placeholder="opt a for qus <?php echo $i+1 ?>"  />
				<input type="text" name="<?php echo $i ?>_opt_b"  placeholder="opt b for qus <?php echo $i+1 ?>"  />
				<input type="text" name="<?php echo $i ?>_opt_c"  placeholder="opt c for qus <?php echo $i+1 ?>"  />
				<input type="text" name="<?php echo $i ?>_opt_d"  placeholder="opt d for qus <?php echo $i+1 ?>"  />
				<input type="text" name="<?php echo $i ?>_correct_ans"  placeholder="correct ans for qus <?php echo $i+1 ?>"  />	<br />	
			
			<?php 
				}
			?>
		<input type="submit" value="submit" />
	</form>
</body>
</html>