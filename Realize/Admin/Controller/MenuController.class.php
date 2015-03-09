<?php
namespace Admin\Controller;

class menuController extends CommonController {
	
	public function index(){
		
		$this->assign('bj',array(
				'xp' => 'use',
				'tb' => 'menu',
				'str' => '菜单设置',
				'url' => '/admin/menu'
		));
		
		$this->display();
	}
	
}