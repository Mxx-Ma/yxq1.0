<?php
	class c_yhq{
		public function invoke(){
			GLOBAL $action;
			switch($action){
				case 'yhq_list':
				require_once('model/m_yhq.php');
				$this->m_yhq = new m_yhq();
				$this->m_yhq->yhq_list();
				break;
				case 'view_yhq':
				require_once('model/m_yhq.php');
				$this->m_yhq = new m_yhq();
				$this->m_yhq->view_yhq();
				if(isset($_GET['url'])){
					$url = $_GET['url'];
					require_once('view/'.$url);
				}else{
					
				}
				break;
				case'change_state':
				require_once('model/m_yhq.php');
				$this->m_yhq = new m_yhq();
				$this->m_yhq->state();
				$this->m_yhq->view_yhq();
				if(isset($_GET['url'])){
					$url = $_GET['url'];
					require_once('view/'.$url);
				}else{
					
				}
				break;
				default:
				break;
			}
		}
	}
?> 