<?php
namespace Admin\Controller;
class IndexController extends CommonController {
    public function index(){
        C ( 'SHOW_RUN_TIME', false );
        C ( 'SHOW_PAGE_TRACE', false );
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP引擎'=>php_sapi_name(),
            '系统版本'=>'V0.1.0 [ <a href="#" target="_blank">查看最新版本</a> ]',
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
        );
        $this->assign('info',$info);
		$this->assign('bj',array(
		   'xp' => 'sys',
		   'tb' => 'wel',
		   'str' => '控制台',
		   'url' => '/admin'
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