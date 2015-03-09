<?php
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define ( 'APP_DEBUG', true );
define ( 'APP_PATH', './Realize/' );
define ( 'RUNTIME_PATH', './Cache/' );
$ex = explode('/', $_GET['s']);
if(!is_file('./Realize/Install/Data/install.lock') and $ex[0] != 'install'){
	header('Location: /install/index');
}
require './Core/Start.php';