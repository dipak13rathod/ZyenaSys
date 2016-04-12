<?php
include_once('session.php');
include_once('Connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
</head>

<body>
<div class="main" align="center">
	<div class="header">Developer Test
		<div align="right" style="padding-top:18px;">
			<font color="#CC6600" size="+1">Welcome <?php echo $_SESSION['uname'];?></font>
		</div>
	</div>
	<div class="menu"><?php include('menu.php');?></div>
	<div class="center">
		<div class="box" style="width:500px; margin-top:50px; margin-bottom:50px; border-radius:20px;">
		<font size="7" color="#339900">Welcome to Home</font>
		</div>
	</div>
	<div class="footer">Developer copyright &copy; 2016</div>
</div>
</body>
</html>