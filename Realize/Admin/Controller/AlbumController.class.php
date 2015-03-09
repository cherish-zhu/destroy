<?php
namespace Admin\Controller;
/**
 * 相册类
 * 包括控制台对相册管理的相关操作
 * 
 * @version 1.0
 * @author Cherish.Zhu
 */

class albumController extends CommonController {
    
    public $table = array(
        'type'  => 'category',
        'album' => 'album'
    );
    
    public $offset = 32;
	
	//相册管理首页
	public function index(){
		$type = M('category');
		$arr = $type->where("`parent_id`=2 and `status`<>'-1'")->order('sort desc')->select();
		
		foreach ($arr as $k=>$v){
			$arr[$k]['son'] = $type->where("`parent_id`={$v['id']} and `status`<>'-1'")->order('sort desc')->select();
		}
		$data['cid'] = $arr[0]['parent_id'];
		$aid = $type->where("`parent_id`={$data['cid']} and `status`<>'-1'")->order('ord desc')->select();
		$data['aid'] = $aid[0]['id'];

		!empty($_GET['ajax']) ? $this->assign('pic',$this->picture()) : $this->assign('pic',$this->picture('array'));
		$this->assign('option',$arr);
		$this->assign('str',$data);
		$this->assign('bj',array(
		   'xp'  => 'app',
		   'tb'  => 'alb',
		   'str' => '相册',
		   'url' => '/admin/album'
		));
		$this->display();
	}
	
	public function lib(){
		$cid = $_GET['cid'];
		$r = M($this->table['category']);
		$a = $r->where("`fid`={$cid} and `status`<>'-1'")->select();
		exit(json_encode($a));
	}
	
	public function picture($tye = 'json'){
	    $pic = M($this->table['album']);
		$album = intval($_GET['album']);
		$page  = intval($_GET['page'])-1;
		$sum = $this->offset * $page;
		
		$map = array();
		$map['status'] = 1;
		if(!empty($album)) $map['cate_id']  = $album;
		
		if($page < 0) $sum = 0;
		    
		$pic->limit($sum,$this->offset);
		
		
		$arr = $pic->where($map)->select();
		//if($arr==null) exit(json_encode(array('code'=>0)));
		
		if($tye == 'json') echo json_encode($arr);
		else return $arr;
	}
	
	public function set(){
	    $this->assign('bj',array(
	        'xp'  => 'app',
	        'tb'  => 'oth',
	        'str' => '相册',
	        'url' => '/admin/album/set'
	    ));
		$this->display();
	}
	
	public function edit(){
		$type = M($this->table['category']);
		$id = $_GET['id'];
		if($_POST){
			$data['name'] = trim($_POST['name']);
			$data['fid'] = intval($_POST['type']);
			$data['status'] = $_POST['auto'];
			$data['keyword'] = trim($_POST['keyword']);
			$data['description'] = trim($_POST['description']);
			$data['alias'] = trim($_POST['alias']);
			$s = $type->where(array('cid'=>$id))->save($data);
			$this->success('编辑成功', 'type');
			exit;
		}
		$arr = $type->where('cid='.$id)->select();		
		$this->assign('option',$type->where('fid=2 and status>=0')->select());
		$this->assign('val',$arr[0]);
		$this->assign('bj',array(
		   'xp' => 'app',
		   'tb' => 'alb'
		));
		$this->display();
	}
	
	public function edit_pic(){
		$type = M($this->table['album']);
		$clas = M($this->table['category']);
		$id = $_GET['id'];
		$fid = $_GET['fid'];
		if($_POST){
			$data['alb_name'] = trim($_POST['name']);
			$data['tid'] = intval($_POST['album']);
			$data['alb_keyword'] = trim($_POST['keyword']);
			$data['alb_description'] = trim($_POST['description']);
			$s = $type->where(array('aid'=>$id))->save($data);
			$this->success('编辑成功', 'index');
			exit;
		}
		$arr = $type->where('aid='.$id)->select();
		$this->assign('option',$clas->where("`fid`={$fid} and `status`>=0")->select());
		$this->assign('val',$arr[0]);
		$this->assign('bj',array(
		   'xp' => 'app',
		   'tb' => 'alb'
		));
		$this->display();
	}
	
	public function del_pic(){
		$type = M($this->table['album']);
		$id = $_GET['id'];
		$data['status'] = '-1';
		$s = $type->where(array('aid'=>$id))->save($data);
		if($s)
			exit(json_encode(array(
					'code' => 1,
					'msg'  => '删除成功'
			)));
		else
			exit(json_encode(array(
					'code' => 0,
					'msg'  => '删除失败'
			)));
	}
	
	public function del(){
		$type = M($this->table['type']);
		$id = $_GET['id'];
		$data['status'] = '-1';
		$s = $type->where(array('cid'=>$id))->save($data);
		if($s)
			exit(json_encode(array(
				'code' => 1,
			    'msg'  => '删除成功'
			)));
		else
			exit(json_encode(array(
					'code' => 0,
					'msg'  => '删除失败'
			)));
	}
	
	public function type(){
		$type = M($this->table['type']);
		$map = array();
		$map['parent_id'] = 2;
		$map['status']    = array('gt','-1');
		$arr = $type->where($map)->select();
// 		foreach ($arr as $k=>$v){
// 		   $arr[$k]['son'] = type_tree($arr[$k]['cid'],0);
// 		}

		$this->assign('option',$arr);
		$this->assign('bj',array(
		   'xp'  => 'app',
		   'tb'  => 'type',
		   'str' => '相册',
		   'url' => '/admin/album/type'
		));
		$this->display();
	}
	
	public function paixu(){
		$type = M($this->table['category']);
		$cid = (int)$_POST['cid'];
		$id = intval($_POST['id']);
		$ret = $type->where("`cid`={$id}")->select();
		if($_POST['type']=='+')
			$ord = $ret[0]['ord']+1;
		else 
			$ord = $ret[0]['ord']-1;
		$data['ord'] = $ord;
		$s = $type->where(array('cid'=>$cid))->save($data);
	}

	public function insert(){
		
		$type = M($this->table['category']);
		$data['name'] = trim($_POST['name']);
		$data['fid'] = intval($_POST['type']);
		$data['status'] = $_POST['auto'];
		$data['icon'] = $_POST['ico'];
		$data['keyword'] = trim($_POST['keyword']);
		$data['description'] = trim($_POST['description']);
		$data['alias'] = trim($_POST['alias']);
		$data['ord'] = 999;
		$s = $type->data($data)->add();
		if($s)
			$this->success('新增成功', 'type');
		else 
			$this->error('新增失败');
	}
}