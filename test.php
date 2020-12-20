<!DOCTYPE html>
<html>
<head>
	<title>open test.php</title>
	<style>
		body{
			font-size: 25px;
		}
	</style>
</head>

<body>
	<h2>贾耀涵</h2>
	<?php
		echo "Hello World <br/><br/>";
		date_default_timezone_set('PRC');
		$h = date('G');
		// echo '当前时间为'.$h.'点'.'<br/>';
		if ($h < 12)
		{
			echo "早上好";
		}
		else if ($h < 13)
		{
			echo "中午好";
		}
		else if ($h < 19)
		{
			echo "下午好";
		}
		else if ($h < 1) 
		{
			echo "晚上好";
		}
	?>
</body>

</html>
