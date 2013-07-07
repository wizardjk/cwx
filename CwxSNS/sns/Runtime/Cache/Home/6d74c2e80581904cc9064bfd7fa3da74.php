<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h3>您的基本信息：</h3>
<ul>
	<li>姓名：<label><?php echo ($user['name']); ?></label></li>
	<li>性别：<label><?php echo ($user['gender']); ?></label></li>
	<li>邮箱：<label><?php echo ($user['email']); ?></label></li>
	<li>地址：<label><?php echo ($user['location']); ?></label></li>
	<li>经度：<label><?php echo ($user['lng']); ?></label></li>
	<li>纬度：<label><?php echo ($user['lat']); ?></label></li>
	<li>个人主页：<label><?php echo ($user['web_site']); ?></label></li>
	<li>注册时间：<label><?php echo ($user['reg_time']); ?></label></li>
</ul>
<h3>您的圈子：</h3>
<a href="__APP__/Circles/search">查找圈子</a>
<a href="__APP__/Circles/add">创建圈子</a>
<table>
	<?php if(is_array($circles)): $i = 0; $__LIST__ = $circles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($row['name']); ?></td><td><?php echo ($row['join_time']); ?></td><td><a href="__APP__/Circles/map">详情</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
	
</table>
</body>
</html>