<?php
session_start();
include_once("userlogin.php");


	if(isset($_POST['submit']))
	{
		$uname=trim($_POST['txtUsername']);
		$pass=trim($_POST['txtPassword']);
		
		$x= new UserLogin();
		$x->LogIn($uname,$pass);
		
		$_SESSION['uname']=$uname;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dashboard</title>
</head>

<body>
<div class="main">
	<div class="header">Developer Test</div>
	<div class="menu"><?php include('menu.php');?></div>
	<div class="center" align="center">
			<form id="LoginFrm" method="post" name="LoginFrm">
			<div class="box" style="width:400px; margin-top:100px; margin-bottom:50px; border-radius:20px;">
				<div id="Heading" align="center" style="height:60px; width:400px; margin:auto; padding:4px;"><font color="#CC9900" size="+3">Sign In</font></div>
				<div id="uname" style="height:30px; width:380px; margin:4px; padding:4px;">
					<div id="Username" style="float:left;width:120px;"><font color="#0000FF" size="+2">Username :</font></div>
					<div id="txtUsername" style="float:left; margin-top:2px;"><input type="text" name="txtUsername" style="width:240px;" required/></div>
				</div>
				<div id="pass" style="height:30px; width:380px; margin:4px; padding:4px;">
					<div id="Password" style="float:left;width:120px;"><font color="#0000FF" size="+2">Password :</font></div>
					<div id="txtPassword" style="float:left; margin-top:2px;"><input type="password" name="txtPassword" style="width:240px;" required/></div>
				</div>
				<div id="buttons" style="height:30px; width:380px; margin:4px; padding:4px;">
					<div id="blanks" style="float:left;width:120px; height:30px;"></div>
					<div id="SignIn" style="float:left;width:240px;"><input type="submit" name="submit" value="Sign In" style="background-color:#CC3300; height:30px; width:240px;"/></div>
				</div>
				<div id="ForgotPass" style="height:30px; width:380px; margin:4px; padding:4px;"><a href="#"><font color="#FF0000" style="text-align:center; font-size:18px; text-decoration:underline;">Forgot your password?</font></a></div>
				<div id="newRegistration" style="height:30px; width:380px; margin:4px; padding:4px;"><a href="Registration.php"><font color="#FF0000" style="text-align:center; font-size:18px; text-decoration:underline;">Click here for registration...</font></a></div>
			</div>
			</form>
	</div>
	<div class="footer">Developer copyright &copy;</div>
</div>
</body>
</html>