<?php
	include_once('includes/config.php');
	include_once('includes/functions.php');
	//session_start();
	if(session_destroy())
	{
		header("location:index.php");
	}
?>