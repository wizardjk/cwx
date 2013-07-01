<?php
	class UserModel extends Model{
		
		
		//自动填充
		protected $_auto=array(
				array('pwd','md5',1,'function'),
				array("reg_time",'getCurrentDate','1','callback')
				);
		
	}
?>