<?php
	class c_admin{
		public function invoke(){
			GLOBAL $action;
			switch($action){
				case 'login';
				GLOBAL $admin_flag;
				$admin_flag = 0;
				require_once('model/m_admin.php');
				$m_admin = new m_admin();
				$m_admin->login();
				if($admin_flag == 1){
					require_once('view/v_admin_center.php');
				}
				else{
					require_once('admin.php');
				}
				break;
				default:
				break;
			}
		}
	} 
?>