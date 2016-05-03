<?php
	$index = new smarty();

	$index->assign("page_title",$page_title);
	$index->assign("store_id",$_SESSION['store_id']);
	$index->display("template/header.tpl");	
?>