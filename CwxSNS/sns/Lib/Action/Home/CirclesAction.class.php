<?php
class CirclesAction extends CommonAction{
	
	function add(){
		$this->display();
	}
	
	function insert(){
		$circle=new CirclesAction();
		if($data=$circle->create()){
			if(!false==$circle->add()){
				$this->assign('jumpUrl','Index/index');
				$this->success('添加圈子成功，快来邀请你的好友吧！');
			}else{
				$this->error('添加圈子失败！');
			}
		}else{
			$this->error('添加圈子失败，数据验证出错！');
		}
	}
}
?>