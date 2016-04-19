<?php
require_once('../smarty/libs/Smarty.class.php');
	$admin_yhq_inf = new smarty();

	GLOBAL $page_title;
	$page_title="优惠券详情";

	GLOBAL $yhq_inf;
	$admin_yhq_inf->assign("yhq_img",$yhq_inf['yhq_img']);
	$admin_yhq_inf->assign("yhq_name",$yhq_inf['name']);
	$admin_yhq_inf->assign("yhq_id",$yhq_inf['yhq_id']);
	$admin_yhq_inf->assign("store_id",$yhq_inf['store_id']);
	$admin_yhq_inf->assign("deadline",$yhq_inf['deadline']);
	$admin_yhq_inf->assign("read",$yhq_inf['read']);
	$admin_yhq_inf->assign("collected",$yhq_inf['collected']);
	$admin_yhq_inf->assign("yhq_state",$yhq_inf['yhq_state']);

	require_once('view/v_admin_header.php');
	$admin_yhq_inf->display("template/admin_yhq_inf.tpl");
	require_once('view/v_footer.php');
?>