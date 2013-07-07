<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<form method="get" action="__URL__/search"> 
<div>请输入您查询的关键字：<input type="text" name="keyword" /><input type="submit" value="查找" /></div>
</form>
<table>
	<?php if(is_array($circles)): $i = 0; $__LIST__ = $circles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($row['id']); ?></td><td><?php echo ($row['name']); ?></td><td><?php echo ($row['creator']); ?></td><td><?php echo ($row['create_time']); ?></td><td><a href="__URL__/apply/id/<?php echo ($row['id']); ?>">申请加入</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>