<?php
namespace Admin\Controller;
class recycleController extends CommonController {
	public function index(){
		$this->assign('bj',array(
		   'xp' => 'sys',
		   'tb' => 'rec',
		   'str' => '回收站',
		   'url' => '/admin/recycle'
		));
		$this->display();
	}
	public function window(){
		$this->display();
	}
	 
	public function user_main(){
		$this->display("userMain");
	}
}