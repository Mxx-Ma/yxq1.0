<?php
	require_once('../smarty/libs/Smarty.class.php');
	header("Content-Type:text/html;charset=utf-8");
	$admin = new smarty();

	GLOBAL $page_title;
	$page_title="管理中心";
	GLOBAL $admin_data;
	$admin->assign("admin_name",$admin_data['name']);
	$admin->assign("admin_password",$admin_data['password']);
	$admin->assign("admin_id",$admin_data['admin_id']);

	require_once('view/v_admin_header.php');
	$admin->display("template/admin_center.tpl");
	require_once('view/v_footer.php');
?>