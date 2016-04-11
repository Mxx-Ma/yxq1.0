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
					case 'c_user':
						break;
					case 'c_item':
						break;
				}
			}elseif ( isset($_GET['static']) ){
				require_once('view/v_'.$_GET['static'].'.php');
			}else{
				require_once('view/v_main.php');
			}

	}
}