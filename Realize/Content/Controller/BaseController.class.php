<?php
namespace Content\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function __construct(){
        parent::__construct();
		if(is_file(MODULE_PATH . 'Data/install.lock')){
			$this->error('请安装Destroy!', U('Install/Index/index'));
		}

	}
}