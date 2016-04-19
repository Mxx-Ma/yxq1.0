<!DOCTYPE html>
<html>
<head>
	<title>管理员登陆</title>
	<link rel="stylesheet" type="text/css" href="resource/css/admin_login.css">
</head>
<body>
	<div id='background'>
		<div id='head'>
			管理员登录
		</div>
		<div id='login'>
		<form action='index.php' method="post">
		    <input type = "hidden" name="controller" value = "c_admin"/>
		    <input type = "hidden" name="action" value = "login"/>
		    <p id="User_email">请输入用户名:<input type="text" name="name" /></p>
  			  <p id="User_password">请输入密码:<input type="password" name="password" /></p>
			  <br>
		<div id="submit">
		   	<input type="submit" value="登 陆" />
		</div>
		</form>
	  </div>
	</div>
</body>
</html>