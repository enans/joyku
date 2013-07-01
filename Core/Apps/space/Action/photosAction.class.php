<?php
/*
 * IKPHP爱客网 安装程序 @copyright (c) 2012-3000 IKPHP All Rights Reserved @author 小麦
 * @Email:160780470@qq.com
 */
class photosAction extends spacebaseAction {
	public function _initialize() {
		parent::_initialize ();
		// 访问者控制
		if (! $this->visitor->is_login && in_array ( ACTION_NAME, array (
				'create',
		) )) {
			$this->redirect ( 'public/user/login' );
		} else {
			$this->userid = $this->visitor->info ['userid'];
		}
		//应用所需 mod
		$this->user_mod = D('user');
		$this->album_mod = D('user_photo_album');
	}
	//相册首页
	public function index(){
		$userid = $this->_get('id','trim,intval');
		$userid > 0 && $username = $this->user_mod->field('username')->where(array('userid'=>$userid))->getField('username');
		if(!empty($username)){
			$title = $username.'的相册';
		}else{
			$this->error('呃...你想访问的页面不存在');
		}
		
		$this->_config_seo ( array (
				'title' => $title
		) );		
		$this->display();
	}
	//相册
	public function album(){
		$type = $this->_get ( 'd', 'trim' );
		switch ($type) {
			case "create" :
				$this->create();
				break;
			default:
				$this->error('呃...你想访问的页面不存在');
		}

	}
	//创建相册
	public function create(){
		if(IS_POST){
			$data['userid'] = $this->userid;
			$data['albumname'] = $this->_post('albumname','trim','');
			$data['albumdesc'] = $this->_post('albumdesc','trim','');
			$data['orderid'] = $this->_post('orderid','trim','');
			$data['privacy'] = $this->_post('privacy','intval','');
			$data['isreply'] = $this->_post('isreply','trim','1'); // 1表示允许回复
			//录入检查
			if( mb_strlen($data ['albumname'],'utf8')>20)
			{
				$this->error ('相册名太长啦，最多20个字...^_^！');
				
			}else if( mb_strlen($data ['albumdesc'],'utf8')>120){
				
				$this->error ('相册描述太多了，最多120个字...^_^！');
			}
			
			//开始创建
			if (false === $this->album_mod->create ($data)) {
				$this->error ( $this->album_mod->getError () );
			}
			// 保存当前数据对象
			$albumid = $this->album_mod->add ();
			if ($albumid !== false) { // 保存成功
				$this->redirect('space/photos/upload',array('from'=>$albumid));
			} else {
				// 失败提示
				$this->error ( '创建相册失败!' );
			}
			
		}else{
			$this->_config_seo ( array (
					'title' => '创建新相册'
			) );
			$this->display('create');
		}	
	}
	//上传照片
	public function upload(){
		$albumid = $this->_get('from','trim,intval');
		if(!empty($albumid)){
			
		}
	}
	
	
}