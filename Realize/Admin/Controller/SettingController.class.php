<?php
namespace Admin\Controller;
class settingController extends CommonController {
	
	public $host_dir;
	public $p = array();
	
	public function _initialize(){
		
		$opt = M("option");
		$opt_arr = $opt->select();
		foreach($opt_arr as $k=>$v){
			$this->p[$v['key']] = $v['value'];
		}
		$this->host_dir = $this->p['host_dir'];
	}
	
    public function info(){    	
    	$data = array();
		if($_POST){
			$opt = M("option");
			foreach($_POST as $k => $v){
				$data['value']=$_POST[$k];
				$opt->where(array('key'=>'host_'.$k))->save($data);
			}
		}
		$this->assign('p',$this->p);
		$this->assign('bj',array(
		   'xp' => 'sys',
		   'tb' => 'info',
		   'str' => '基本设置',
		   'url' => '/admin/setting/info'
		));
	    $this->display();
    }
    
	public function set(){
		$data = array();
		if($_POST){
			$opt = M("option");
			foreach($_POST as $k=>$v){
				$data['value']=$_POST[$k];
				$opt->where(array('key'=>'host_'.$k))->save($data);
			}
		}
		$this->assign('host_dir',$this->host_dir);
		$this->assign('bj',array(
		   'xp' => 'sys',
		   'tb' => 'set',
		   'str' => '系统设置',
		   'url' => '/admin/setting/set'
		));
		$this->display();
	}
	
	public function other(){
	    $this->assign('bj',array(
	        'xp' => 'sys',
	        'tb' => 'other',
	        'str' => '基本设置',
	        'url' => '/admin/setting/other'
	    ));
	    $this->display();
	}
	
}