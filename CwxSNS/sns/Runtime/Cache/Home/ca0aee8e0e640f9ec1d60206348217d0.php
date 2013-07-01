<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert title here</title>
</head>
<body>
<form method="post" action="__URL__/insertUser">
	您的姓名：<input type="text" name="name"/><br/>
	您的性别：<select name="gender" value="0">
				<option value="-1">--请选择--</option>
				<option value="0">男</option>
				<option value="1">女</option>
			 </select><br/>
	注册邮箱：<input type="text" name="email" /><br/>
	登录密码：<input type="password" name="pwd" /><br/>
	确认密码：<input type="password" name="confirm" /><br/>
	地理位置：<input type="text" name="location" size="60"/><br/>
	位置经度：<input type="text" name="lng"/><br/>
	位置纬度：<input type="text" name="lat"/><br/>
	个人站点：<input type="text" name="web_site"/><br/>
	<input type="submit" value="提交"/>
</form>
</body>
</html>