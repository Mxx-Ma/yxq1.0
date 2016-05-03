<?php
	class m_yhq{
		public function yhq_list(){
			require_once('include/yhq.class.php');
			require_once('include/mysql_set.php');

			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			if(isset($_GET['reorder'])){
				$reorder = $_GET['reorder'];
				GLOBAL $id_flag,$dl_flag,$st_flag,$rd_flag,$co_flag;

				if(isset($_GET['id_flag'])){
					$id_flag = $_GET['id_flag'];
					$flag = $id_flag;
					$st_flag = $dl_flag = $rd_flag = $co_flag = 0;
				}

				if(isset($_GET['dl_flag'])){
					$dl_flag = $_GET['dl_flag'];
					$flag = $dl_flag;
					$st_flag = $id_flag = $rd_flag = $co_flag = 0;
				}

				if(isset($_GET['st_flag'])){
					$st_flag = $_GET['st_flag'];
					$flag = $st_flag;
					$id_flag = $dl_flag = $rd_flag = $co_flag = 0;
				}

				if(isset($_GET['rd_flag'])){
					$rd_flag = $_GET['rd_flag'];
					$flag = $rd_flag;
					$st_flag = $id_flag = $dl_flag = $co_flag = 0;
				}

				if(isset($_GET['co_flag'])){
					GLOBAL $co_flag;
					$co_flag = $_GET['co_flag'];
					$flag = $co_flag;
					$st_flag = $id_flag = $dl_flag = $rd_flag = 0;
				}

				if($flag == 0){
					$query = "SELECT * FROM yhq_inf order by $reorder";
				}
				else if($flag == 1){
					$query = "SELECT * FROM yhq_inf order by $reorder desc";
				}

			}else{
				$query = "SELECT * FROM yhq_inf";
			}
			mysqli_query($con,"SET NAMES UTF8");
			$data = mysqli_query($con,$query);

			GLOBAL $yhq_data;
			$yhq_data = array();

			while($row = mysqli_fetch_array($data)){
			$yhq_data[] = $row;
			}

			#var_dump($yhq_data);

			#echo $yhq_count;
			
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

		public function sel_yhq(){
			require_once('include/yhq.class.php');
			require_once('include/mysql_set.php');

			$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			or die('连接数据库失败！');

			$id = $_SESSION['store_id'];

			if(isset($_GET['reorder'])){
				$reorder = $_GET['reorder'];
				GLOBAL $id_flag,$dl_flag,$st_flag,$rd_flag,$co_flag;

				if(isset($_GET['id_flag'])){
					$id_flag = $_GET['id_flag'];
					$flag = $id_flag;
					$st_flag = $dl_flag = $rd_flag = $co_flag = 0;
				}

				if(isset($_GET['dl_flag'])){
					$dl_flag = $_GET['dl_flag'];
					$flag = $dl_flag;
					$st_flag = $id_flag = $rd_flag = $co_flag = 0;
				}

				if(isset($_GET['rd_flag'])){
					$rd_flag = $_GET['rd_flag'];
					$flag = $rd_flag;
					$st_flag = $id_flag = $dl_flag = $co_flag = 0;
				}

				if(isset($_GET['co_flag'])){
					GLOBAL $co_flag;
					$co_flag = $_GET['co_flag'];
					$flag = $co_flag;
					$st_flag = $id_flag = $dl_flag = $rd_flag = 0;
				}

				if($flag == 0){
					$query = "SELECT * FROM yhq_inf where store_id = '$id' order by $reorder";
				}
				else if($flag == 1){
					$query = "SELECT * FROM yhq_inf where store_id = '$id' order by $reorder desc";
				}

			}else{
				$query = "SELECT * FROM yhq_inf where store_id = '$id'";
			}
			mysqli_query($con,"SET NAMES UTF8");
			$data = mysqli_query($con,$query);

			GLOBAL $yhq_data;
			$yhq_data = array();

			while($row = mysqli_fetch_array($data)){
			$yhq_data[] = $row;
			}

			#var_dump($yhq_data);

			#echo $yhq_count;
			
			mysqli_close($con);
		}
	}