<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$admin = new smarty();

	GLOBAL $page_title;
	$page_title="管理中心";

	require_once('view/v_admin_header.php');
	$admin->display("template/admin_center.tpl");
	require_once('view/v_footer.php');
?>