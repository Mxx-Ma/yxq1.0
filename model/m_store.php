<?php
	class m_store{
		public function login(){
			require_once('include/store.class.php');
			require_once('include/mysql_set.php');

			$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$phone_number		=	$_POST['phone_number'];
			$password	=	$_POST['password'];
			$query = "SELECT * FROM yhq_store WHERE phone_number = '$phone_number' AND password = '$password'";
			$data = mysqli_query($db,$query);

			GLOBAL $s_flag;

			if(mysqli_num_rows($data)==1){
				/*1.0代码
				$admin_data = mysqli_fetch_array($data);
				*/
				$row = mysqli_fetch_array($data);
				$_SESSION['store_id'] = $row['store_id'];
				$_SESSION['store_name'] = $row['store_name'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['contact_method'] = $row['contact_method'];
				$_SESSION['phone_number'] = $phone_number;
				$_SESSION['password'] = $password;
				
				$s_flag = 1;
			}
			mysqli_close($db);
		}
	}