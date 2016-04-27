<?php
	class c_user{
		public function invoke(){
			GLOBAL $action;
			switch($action){
				case'login';
				GLOBAL $flag;
				$flag = 0;
				require_once('model/m_user.php');
				$this->m_user = new m_user();
				$this->m_user->login();
				if($flag == 1){
					require_once('index.php');
				}else{
					require_once('store.php');
				}
				break;
				default:
				break;
			}
		}
	}