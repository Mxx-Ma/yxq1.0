<?php
	class controller{

		public function invoke(){

			GLOBAL $controller,
					$action;

			if(isset($_GET['controller'])){
				$controller = $_GET['controller'];
				$action 	= $_GET['action'];
			}

		 

	}