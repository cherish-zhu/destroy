<?php
namespace Admin\Controller;
class ToolsController extends CommonController {
	public function index(){
		$this->assign('bj',array(
		   'xp' => 'cmp',
		   'tb' => 'too',
		   'str' => '工具中心',
		   'url' => '/admin/Tools'
		));
		$this->display();
	}
	
	public function myTools(){
		$this->assign('bj',array(
		   'xp' => 'cmp',
		   'tb' => 'too',
		   'str' => '我的工具',
		   'url' => '/admin/Tools/myTools'
		));
		$this->display();
	}

}