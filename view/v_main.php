<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$main = new smarty();

	GLOBAL $page_title;
	$page_title="优惠券";

	require_once('view/v_header.php');
	$main->display("template/main.tpl");
	require_once('view/v_footer.php');
?>