<?php
	header('content-type:text/html;charset=UTF-8');
	require_once('controller/controller.php');

	$main_controller = new controller();
	$main_controller->invoke();
?>