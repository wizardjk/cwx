<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>登录</title>
</head>
<body>
	<form method="post" action="__APP__/Public/checkLogin">
		您的注册邮箱：<input type="text" name="email" /><br/>
		您的登录密码：<input type="password" name="pwd" /><br/>
		<input type="submit" value="Login" />
	</form>
</body>
</html>