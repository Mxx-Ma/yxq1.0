<?php
	class controller{

		public function invoke(){

			GLOBAL $controller,
					$action;

			if(isset($_GET['controller'])){
				$controller = $_GET['controller'];
				$action 	= $_GET['action'];
			}elseif ( isset($_POST['controller']) ) {
				$controller	=	$_POST['controller'];
				$action		= 	$_POST['action'];
			}

		 	if ( isset($controller) ){
				switch ($controller) {
					case 'c_admin':
						require_once('controller/c_admin.php');
						$c_admin = new c_admin();
						$c_admin->invoke();
						break;
					case 'c_yhq':
						require_once('controller/c_yhq.php');
						$c_yhq = new c_yhq();
						$c_yhq->invoke();
						break;
					default:
						break;
				}
			}elseif ( isset($_GET['static']) ){
				#echo $_GET['static'];
				require_once('view/v_'.$_GET['static'].'.php');
			}else{
				require_once('view/v_main.php');
			}
		}
	}