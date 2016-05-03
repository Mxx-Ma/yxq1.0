<!DOCTYPE html>
<html>
<head>
	<title>商家登陆</title>
	<link rel="stylesheet" type="text/css" href="resource/css/admin_login.css">
</head>
<body>
	<div id='background'>
		<div id='head'>
			商家登陆
		</div>
		<div id='login'>
		<form action='index.php' method="post">
		    <input type = "hidden" name="controller" value = "c_store"/>
		    <input type = "hidden" name="action" value = "login"/>
		    <p id="Store_number">请输入手机号:<input type="text" name="phone_number" /></p>
  			  <p id="Store_password">请输入密码:<input type="password" name="password" /></p>
			  <br>
		<div id="submit">
		   	<input type="submit" value="登 陆" />
		</div>
		</form>
	  </div>
	</div>
</body>
</html>