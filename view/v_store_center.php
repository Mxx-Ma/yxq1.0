<?php
	require_once('../Smarty/libs/Smarty.class.php');
	require_once('controller/c_yhq.php');
	header("Content-Type:text/html;charset=utf-8");
	$store = new smarty();

	$c_yhq = new c_yhq();
	GLOBAL $action;
	$action = 'sel_yhq';
	$c_yhq->invoke();

	GLOBAL $yhq_data,$id_flag,$dl_flag,$rd_flag,$co_flag;
	$store->assign("yhq_data",$yhq_data);
	$store->assign("id_flag",$id_flag);
	$store->assign("dl_flag",$dl_flag);
	$store->assign("rd_flag",$rd_flag);
	$store->assign("co_flag",$co_flag);

	GLOBAL $page_title;
	$page_title="商户中心";

	require_once('view/v_header.php');
	$store->display('template/store_center.tpl');
	require_once('view/v_footer.php');
?>