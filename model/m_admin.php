<?php
	class m_admin{
		public function login(){
			require_once('include/admin.class.php');
			require_once('include/mysql_set.php');

			$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$name		=	$_POST['name'];
			$password	=	$_POST['password'];
			$query = "SELECT * FROM yhq_admin WHERE name = '$name'";
			$data = mysqli_query($dbc,$query);

			if(mysqli_num_rows($data)==1){
				$row = mysqli_fetch_array($data);

				$name = $row['name'];
				$password = $row['password'];
				$admin_id = $row['admin_id'];
				$admin_flag = 1;
			}
			mysqli_close($dbc);
		}
	}