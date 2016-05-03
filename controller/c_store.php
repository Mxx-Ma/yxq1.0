<?php
	class c_store{
		public function invoke(){
			GLOBAL $action;
			switch($action){
				case 'login':
					GLOBAL $s_flag;
					$s_flag = 0;
					require_once('model/m_store.php');
					$this->m_store = new m_store();
					$this->m_store->login();
					if($s_flag == 1){	
						require_once('view/v_store_center.php');
					}
					else{
						require_once('store.php');
					}
					break;
				case 'logout':
					GLOBAL $s_flag;
					$s_flag = 0;
					$SESSION['store_name'] = '';
					$_SESSION['store_password'] = '';
					$_SESSION['store_id'] = '';
					require_once('store.php');
					break;
				default:
					break;
			}
		}
	} 
?>