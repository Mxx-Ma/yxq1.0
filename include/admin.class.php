<?php
	class admin{
		public 	$name,
				$password,
				$admin_id;

		public function __construct($name,$password,$admin_id){
			$this->name = $name;
			$this->pssword = $pasword;
			$this->admin_id = $admin_id;
		}		
	}