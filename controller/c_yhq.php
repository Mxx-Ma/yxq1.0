<?php
	class c_yhq{
		public function invoke(){
			GLOBAL $action;
			switch($action){
				case 'view_yhq';
				require_once('model/m_yhq.php');
				$m_yhq = new m_yhq();
				$m_yhq->view_yhq();
				break;
				default:
				break;
			}
		}
	}
?> 