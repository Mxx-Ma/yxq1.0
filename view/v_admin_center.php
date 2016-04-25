<?php
	require_once('../smarty/libs/Smarty.class.php');
	require_once('controller/c_yhq.php');
	header("Content-Type:text/html;charset=utf-8");
	$admin = new smarty();
	
	$c_yhq = new c_yhq();
	GLOBAL $action;
	$action = 'yhq_list';
	$c_yhq->invoke();
	
	GLOBAL $yhq_data,$id_flag,$st_flag,$dl_flag,$rd_flag,$co_flag;
	$admin->assign("yhq_data",$yhq_data);
	$admin->assign("id_flag",$id_flag);
	$admin->assign("st_flag",$st_flag);
	$admin->assign("dl_flag",$dl_flag);
	$admin->assign("rd_flag",$rd_flag);
	$admin->assign("co_flag",$co_flag);

	GLOBAL $page_title;
	$page_title="管理中心";

	require_once('view/v_admin_header.php');
	$admin->display("template/admin_center.tpl");
	require_once('view/v_footer.php');
?>