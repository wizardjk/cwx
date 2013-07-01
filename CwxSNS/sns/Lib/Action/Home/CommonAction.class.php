<?php
	class CommonAction extends Action {
		//通用入口方法
		function _initialize(){
			//设置页面的编码方式
			header('Content-Type:text/html;charset=utf-8');
		}
	}
?>