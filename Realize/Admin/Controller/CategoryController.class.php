<?php
namespace Admin\Controller;

class CategoryController extends CommonController {
	
	protected $table = 'category';
	
	public function __construct(){
		parent::__construct();
		
	}
	
	public function edit(){
		
		$model = M($this->table);
		$map = array();
		$map['id'] = $_GET['id'];
		$app = $_GET['app'];
		$arr = $model->where($map)->find();
		$this->assign('options',option_tree($app, 0,NULL,$_GET['id']));
		$this->assign('x',$arr);
		$this->display('tog:type');
		
	}
	
	public function form(){

		//$model = M($this->table);
		$app = $_GET['app'];
		$this->assign('options',option_tree($app, 0));
	//	echo option_tree(1, 0);
		$this->display('tog:form');
	
	}
	
	public function insert(){
		
		if(IS_POST){
			$data = array();
			$data['name'] = $_POST['name'];
			$data['alias'] = $_POST['alias'];
			$data['keyword'] = $_POST['keyword'];
			$data['parent_id'] = $_POST['category'];
			$data['create_time'] = time();
			$data['icon'] = $_POST['icon'];
			$data['status'] = $_POST['status'];
			$data['description'] = $_POST['description'];
			$model = M($this->table);
			if(!empty($_GET['id'])) $ret = $model->where(array('id'=>$_GET['id']))->save($data);
			else $ret = $model->add($data);
			
		}
		
		if($ret)  $this->success("操作成功");
		
	}
	
	public function del(){
		
		$model = M($this->table);
		$id    = $_GET['id'];
		$map   = array();
		$data  = array();
		$data['status'] = -1;
		$map['id'] = $id;
		$ret  = $model->where($map)->save($data);
		return $ret;
		
	}
	
}