<?php
//echo $_GET['code'];
if($_GET['code'] != null)
{
	setcookie("stravaCode", $_GET['code']);
	}
?>
