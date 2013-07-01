<?php
	class UsersModel extends Model{
		
		protected $_validate=array(
				array('email','require','该邮箱已经被使用！',1,'unique',3),
						
		);
		
		//自动填充
		protected $_auto=array(
				array('pwd','md5',1,'function'),
				array("reg_time",'getCurrentDate','1','function'),
				array('avatar','getDefaultAvatar','1','callback'),
		);
		
		function getDefaultAvatar(){
			if(!empty($_POST['gender'])){
				$gender=$_POST['gender'];
				if($gender=='0')
					return './Public/uploads/users/male.jpg';
				return './Public/uploads/users/female.jpg';
			}else{
				return  './Public/uploads/users/male.jpg';
			}
		}
		
		
	}
?>