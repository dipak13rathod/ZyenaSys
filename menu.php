<?php
session_start();
?>

<ul>
	<li><a href="Home.php">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li><a href="#">Category</a></li>
	<li><a href="#">Feedback</a></li>
	<li><a href="#">Contact Us</a></li>

<?php
	if(isset($_SESSION['email']))
	{
?>
	<li><a href="Profile.php">Profile</a></li>
	<li><a href="SignOut.php">Sign out</a></li>
</ul>
<?php
	}
?>