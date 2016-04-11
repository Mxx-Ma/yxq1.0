<!DOCTYPE html>
<html>
<head>
	<title>管理员登陆</title>
</head>
<body>
	<div>
		<form action='index.php' method="post">
			<input type = "hidden" name="controller" value = "c_admin"/>
			<input type = "hidden" name="action" value = "login"/>
  			<p id="User_email">请输入用户名&nbsp：<input type="text" name="name" /></p>
  			<p id="User_password">请输入密码&nbsp： <input type="password" name="password" /></p>
			<br>
			<input type="submit" value="马上登录" />
		</form>
	</div>
</body>
</html>