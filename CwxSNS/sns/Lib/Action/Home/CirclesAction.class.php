<?php
class CirclesAction extends CommonAction {
	function index() {
	}
	function add() {
		$this->display ();
	}
	function insert() {
		$circle = new CirclesModel ();
		if ($data = $circle->create ()) {
			if (! false == $circle->add ()) {
				$id = $circle->getLastInsID ();
				$mem = array ();
				$mem ['user_id'] = getCurrentUser ();
				$mem ['cir_id'] = $id;
				$mem ['join_time'] = getCurrentDate ();
				$relation = new Model ( 'Relations' );
				if (! false == $relation->add ( $mem )) {
					$this->assign ( 'jumpUrl', __APP__ . '/Index/index' );
					$this->success ( '添加圈子成功，快来邀请你的好友吧！' );
				}
			} else {
				$this->error ( '添加圈子失败！' );
			}
		} else {
			$this->error ( '添加圈子失败，数据验证出错！' );
		}
	}
	function search() {
		if (! empty ( $_GET ['keyword'] )) {
			$keyword = $_GET ['keyword'];
			$circle = new CirclesModel ();
			$list = $circle->where ( "name like '%" . $keyword . "%'" )->select ();
			$this->assign ( 'circles', $list );
		}
		$this->display ();
	}
	function map() {
		$cid=$_GET['cid'];
		$sql="select u.id,u.name,u.location,u.lng,u.lat,u.web_sit,u.avatar from sns_users u inner join sns_relations r on u.id=r.user_id where r.cir_id=$cid";
		$user=new Model("Users");
		$data=$user->query($sql);
		$this->assign('users',$data);
		$this->display ();
	}
	function apply() {
		if (! empty ( $_GET ['cid'] )) {
			$cid = $_GET ['cid'];
			$cir = new CirclesModel ();
			$data = $cir->field ( "id,name,join_question" )->getById ( $cid );
			$json = json_encode ( $data );
			echo $json;
		}
	}
	/**
	 * 接收参数：
	 * uid
	 * cid
	 * answer
	 */
	function verify() {
		if (! empty ( $_GET )) {
			$uid = $_GET ['uid'];
			$cid = $_GET ['cid'];
			$answer = $_GET ['answer'];
			$msg = array ();
			$cir = new CirclesModel ();
			$data = $cir->field ( 'join_answer' )->getById ( $cid );
			if ($data [0] == $answer) {
				$rela = new Model ( 'Relations' );
				$rs = array (
						'user_id' => $uid,
						'cir_id' => $cid,
						'join_time' => getCurrentDate () 
				);
				if (! false == $rela->add ( $rs )) {
					$msg = array (
							'msg' => "申请成功！",
							'code' => '1' 
					);
				} else {
					$msg = array (
							'msg' => "申请失败：您回答的问题不正确！",
							'code' => '0' 
					);
				}
				
			}else{
				$msg = array (
						'msg' => "申请失败：您回答的问题不正确！",
						'code' => '0'
				);
			}
			echo json_encode ( $msg );
		}
	}
	function invite() {
		if (! empty ( $_POST ['cid'] )) {
		}
	}
	
	/**
	 * 发送邮件通知
	 */
	private function sendEmail($mid) {
		$mail = new Model ( 'Mail' );
		$info = $mail->getById ( $mid );
		
		import ( 'ORG.Email' ); // 导入本类
		$data ['mailto'] = $info ['email']; // 收件人
		$data ['subject'] = '您在华北电力大学研究生院的留言已被处理'; // 邮件标题
		$data ['body'] = '问题：' . $info ['question'] . '<br/>' . '回复：' . $info ['reply'];
		$mail = new Email ();
		return $mail->send ( $data );
	}
}
?>