<?php
	class CirclesModel extends Model{
		
		protected $_auto=array(
			array('create_time','getCurrentDate','1','function'),	
			array('creator','getCurrentUser','1','function')
		);
		
	}
?>