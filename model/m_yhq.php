<?php
	class m_yhq{
		public function view_yhq(){
			#require_once('include/yhq.class.php');
			require_once('include/mysql_set.php');

			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$query = "SELECT * FROM yhq_inf";
			$data = mysqli_query($con,$query);

			GLOBAL $yhq_data;
			$yhq_data = array();

			$row = mysqli_fetch_array($data);
			$yhq_data[] = $row;
			
			mysqli_close($con);
		}
	}