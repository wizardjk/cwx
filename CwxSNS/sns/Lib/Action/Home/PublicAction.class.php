<?php
class PublicAction extends Action{
	public function register(){
		$this->display();
	}
	
	public function insertUser(){
		
	}
	
	/* function upFile(){
		$this->upload();
		$this->assign('jumpUrl',__URL__.'/index');
		$this->success('上传成功！');
	}
	
	function upload(){
		if(!empty($_FILES)){
			$names=$this->diverse_files($_FILES);
			$fileInfo=$this->_upload();
			$doc=new Model('Document');
			$docList=array();
			$i=0;//计数器
			foreach($fileInfo as $file){
				$parts=explode('/',$file['savename']);
				$data['name']=$names[$i++];//$parts[1];
				$data['save_path']=$file['savepath'].$file['savename'];
				$data['down_count']=0;
				$data['up_date']=getCurDate();
				$data['mark']=$_POST['mark'];
				if(!false==$doc->add($data)){
					$data['id']=$doc->getLastInsID();
					$docList[]=$data;
				}
			}
			$json=json_encode($docList);
			echo $json;
		}
	}
	
	protected function _upload(){
		import('ORG.Net.UploadFile');
		$upload=new UploadFile();
		$upload->maxSize=31457280;
		//$upload->allowExts=array('doc','xls','docx','xlsx','pdf','txt','jpg','png','ppt','pptx');
		$upload->savePath='./Public/uploads/';
		$upload->autoSub=true;
		$upload->subType='date';
		$upload->dateFormat='Y';
	
		if(!$upload->upload()){
			$this->error($upload->getErrorMsg());
		}else{
			$info=$upload->getUploadFileInfo();
		}
		return $info;
	}
	
	function diverse_files($vector) {
		$result = array();
		foreach($vector as $key)
			$result[]=$key['name'];
		return $result;
	} */
}
?>