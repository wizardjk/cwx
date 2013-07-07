<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
    	$user=new UsersModel();
    	$id=getCurrentUser();
    	$data=$user->getById($id);
    	$this->assign('user',$data);
    	
    	$uid=getCurrentUser();
    	$sql="select c.id,c.name,r.join_time from sns_circles c inner join sns_relations r on c.id=r.cir_id where user_id=$uid";
    	$cir=new Model('Circles');
    	$list=$cir->query($sql);
    	$this->assign('circles',$list);
    	
	   	$this->display();
    }
    
   
}