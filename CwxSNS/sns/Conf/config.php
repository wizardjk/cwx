<?php
return array(
	//'配置项'=>'配置值'
		'DB_TYPE'=>'mysql',
		'DB_HOST'=>'192.168.99.236',
		'DB_NAME'=>'sns_cwx',
		'DB_USER'=>'root',
		'DB_PWD'=>'881530',
		'DB_PREFIX'=>'sns_',
		'DB_CHARSET'=>'utf8',
		//URL重写
		//'URL_MODEL'=>'2',
		//URL访问不区分大小写
		//'URL_CASE_INSENSITIVE' =>true,
		
		//'URL_HTML_SUFFIX'=>'html',
		//'URL_PATHINFO_DEPR'	=>	'-',
		
		//邮件配置
		'SMTP_SERVER' =>'smtp.126.com',					//邮件服务器
		'SMTP_PORT' =>25,								//邮件服务器端口
		'SMTP_USER_EMAIL' =>'xindachao@126.com', 	//SMTP服务器的用户邮箱(一般发件人也得用这个邮箱)
		'SMTP_USER'=>'xindachao@126.com',			//SMTP服务器账户名
		'SMTP_PWD'=>'xindachao',							//SMTP服务器账户密码
		'SMTP_MAIL_TYPE'=>'HTML',						//发送邮件类型:HTML,TXT(注意都是大写)
		'SMTP_TIME_OUT'=>30,							//超时时间
		'SMTP_AUTH'=>true,								//邮箱验证(一般都要开启)
		
		
		//'配置项'=>'配置值'
		'APP_GROUP_LIST'=>'Home,Admin',
		'DEFAULT_GROUP'=>'Home',
);
?>