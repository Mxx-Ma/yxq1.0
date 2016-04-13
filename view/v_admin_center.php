<?php
	require_once('../smarty/libs/Smarty.class.php');
	require_once('controller/c_yhq.php');
	header("Content-Type:text/html;charset=utf-8");
	$admin = new smarty();

	$c_yhq = new c_yhq();
	GLOBAL $action;
	$action = 'view_yhq';
	$c_yhq->invoke();
	GLOBAL $yhq_data;
	$admin->assign("yhq_data",$yhq_data);

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