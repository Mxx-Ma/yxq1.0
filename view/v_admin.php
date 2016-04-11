<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$admin = new smarty();
	
	require_once('template/admin_login.tpl');
?>