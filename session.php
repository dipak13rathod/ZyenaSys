<?php
session_start();

	if(!isset($_SESSION['uname']))
	{
	?>
	<script>
		window.onload=function()
		{
			window.location="index.php";
		}
	</script>
	<?php
	}
?>