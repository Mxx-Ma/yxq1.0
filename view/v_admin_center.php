<?php
	require_once('../smarty/libs/Smarty.class.php');
	require_once('controller/c_yhq.php');
	header("Content-Type:text/html;charset=utf-8");
	$admin = new smarty();

	$c_yhq = new c_yhq();
	GLOBAL $action;
	$action = 'yhq_list';
	$c_yhq->invoke();
	GLOBAL $yhq_data;
	$admin->assign("yhq_data",$yhq_data);

	GLOBAL $page_title;
	$page_title="管理中心";

	require_once('view/v_admin_header.php');
	$admin->display("template/admin_center.tpl");
	require_once('view/v_footer.php');
?>