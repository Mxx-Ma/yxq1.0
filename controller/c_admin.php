<?php
	class c_admin{
		public function invoke(){
			GLOBAL $action;
			switch($action){
				case 'login':
				GLOBAL $admin_flag;
				$admin_flag = 0;
				require_once('model/m_admin.php');
				$this->m_admin = new m_admin();
				$this->m_admin->login();
				if($admin_flag == 1){	
					require_once('view/v_admin_center.php');
				}
				else{
					require_once('admin.php');
				}
				break;
				case 'logout':
				GLOBAL $admin_flag;
				$admin_flag = 0;
				$SESSION['admin_name'] = '';
				$_SESSION['admin_password'] = '';
				$_SESSION['admin_id'] = '';
				require_once('admin.php');
				break;
				default:
				break;
			}
		}
	} 
?>