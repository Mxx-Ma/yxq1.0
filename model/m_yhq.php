<?php
	class m_yhq{
		public function yhq_list(){
			require_once('include/yhq.class.php');
			require_once('include/mysql_set.php');

			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$query = "SELECT * FROM yhq_inf";
			mysqli_query($con,"SET NAMES UTF8");
			$data = mysqli_query($con,$query);

			GLOBAL $yhq_data;
			$yhq_data = array();

			while($row = mysqli_fetch_array($data)){
			$yhq_data[] = $row;
			}
			#var_dump($yhq_data);
			
			mysqli_close($con);
		}

		public function view_yhq(){
			require_once('include/yhq.class.php');
			require_once('include/mysql_set.php');
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$yhq_id = $_GET['yhq_id'];
			$query = "SELECT * FROM yhq_inf WHERE yhq_id = $yhq_id";
			mysqli_query($con,"SET NAMES UTF8");
			$data = mysqli_query($con,$query);

			GLOBAL $yhq_inf;
			$yhq_inf = mysqli_fetch_array($data);

			#var_dump($admin_data);

			mysqli_close($con);
		}

		public function state(){
			require_once('include/yhq.class.php');
			require_once('include/mysql_set.php');
			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$yhq_id = $_GET['yhq_id'];
			$yhq_state = $_GET['yhq_state'];
			$query = "UPDATE yhq_inf SET yhq_state = $yhq_state WHERE yhq_id = $yhq_id";
			mysqli_query($con,"SET NAMES UTF8");
			$data = mysqli_query($con,$query);

			mysqli_close($con);
		}
	}