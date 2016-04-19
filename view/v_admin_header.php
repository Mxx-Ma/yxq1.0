<?php
	$index = new smarty();

	/*1.0代码
	GLOBAL $admin_data;
			
	$index->assign("hadmin_name",$admin_data['name']);
	$index->assign("hadmin_password",$admin_data['password']);
	$index->assign("hadmin_id",$admin_data['admin_id']);
	*/

	$index->assign("hadmin_name",$_SESSION['admin_name']);
	$index->assign("hadmin_password",$_SESSION['admin_password']);
	$index->assign("hadmin_id",$_SESSION['admin_id']);
	$index->assign("page_title",$page_title);
	$index->display("template/admin_header.tpl");	
?>
