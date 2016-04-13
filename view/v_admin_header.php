<?php
	$index = new smarty();

	GLOBAL $admin_data;
	$index->assign("hadmin_name",$admin_data['name']);
	$index->assign("hadmin_password",$admin_data['password']);
	$index->assign("hadmin_id",$admin_data['admin_id']);

	$index->assign("page_title",$page_title);
	$index->display("template/admin_header.tpl");	
?>