<?php
	class m_admin{
		public function login(){
			require_once('include/admin.class.php');
			require_once('include/mysql_set.php');

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$name		=	$_POST['name'];
			$password	=	$_POST['password'];
			$query = "SELECT * FROM yhq_admin WHERE name = '$name' AND password = '$password'";
			$data = mysqli_query($dbc,$query);

			GLOBAL $admin_data;
			GLOBAL $admin_flag;

			if(mysqli_num_rows($data)==1){
				$admin_data = mysqli_fetch_array($data);
				$admin_flag = 1;
			}
			mysqli_close($dbc);
		}
	}