<?php
namespace Admin\Controller;
class viewController extends CommonController {
	  
    public function index(){
		$this->assign('bj',array(
		   'xp' => 'vie',
		   'tb' => 'myv',
		   'str' => '留言评论',
		   'url' => '/admin/view'
		));
    	$this->display();
    }
    
    public function shopView(){
		$this->assign('bj',array(
		   'xp' => 'vie',
		   'tb' => 'sho',
		   'str' => '留言评论',
		   'url' => '/admin/view/editView'
		));
    	$this->display();
    }
    
    public function editView(){
		$this->assign('bj',array(
		   'xp' => 'vie',
		   'tb' => 'edi',
		   'str' => '留言评论',
		   'url' => '/admin/view/editView'
		));
    	$this->display();
    }
}