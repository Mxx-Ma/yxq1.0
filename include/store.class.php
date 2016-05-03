<?php
	class store{
		public 	$store_name,
				$password,
				$store_id,
				$phone_number,
				$address,
				$contact_method;

		public function __construct($store_name,$password,$store_id,$phone_number,$address,$contact_method){
			$this->store_name = $store_name;
			$this->password = $password;
			$this->store_id = $store_id;
			$this->phone_number = $phone_number;
			$this->address = $address;
			$this->contact_method = $contact_method;
		}		
	}