<?php
namespace Admin\Controller;
class CompController extends CommonController {
    public function index(){
		$this->assign('bj',array(
		   'xp' => 'cmp',
		   'tb' => 'cmp',
		   'str' => '插件中心',
           'url' => '/admin/comp'
		));
	    $this->display();
    }
    
    public function myComp(){
    	$this->assign('bj',array(
		   'xp' => 'cmp',
		   'tb' => 'cmp',
    	   'str' => '我的插件',
           'url' => '/admin/mycomp'
		));
    }
    
}