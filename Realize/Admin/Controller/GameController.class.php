<?php
namespace Admin\Controller;
class gameController extends CommonController {
	public function index(){
		$this->assign('bj',array(
		   'xp' => 'cmp',
		   'tb' => 'gam',
		   'str' => '我的游戏',
		   'url' => '/admin/Game'
		));
		$this->display();
	}
    
	public function myGame(){
		$this->assign('bj',array(
		   'xp' => 'cmp',
		   'tb' => 'game',
		   'str' => '游戏中心',
		   'url' => '/admin/Gage/myGame'
		));
		$this->display();
	}
}