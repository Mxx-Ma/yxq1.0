<?php
	header('content-type:text/html;charset=UTF-8');
	require_once('controller/controller.php');

	session_start();

	$main_controller = new controller();
	$main_controller->invoke();
?>
